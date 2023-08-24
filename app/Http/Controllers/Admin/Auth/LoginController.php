<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Admin\BackendController;
use App\Mail\AuthCodeMail;
use App\Models\Enums\AdministratorLockFlagEnum;
use App\Models\Enums\AdministratorStatusEnum;
use App\Repositories\AdministratorRepository;
use App\Validators\AdministratorValidator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\MessageBag;

class LoginController extends BackendController
{
    protected AdministratorValidator $administratorValidator;

    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest')->except('logout');
        $this->setTitle(__('messages.page_title.admin.login'));
        $this->administratorValidator = app(AdministratorValidator::class);
        $this->repository = app(AdministratorRepository::class);
    }

    public function showLoginForm()
    {
        return $this->render('auth.login');
    }

    public function login()
    {
        try {
            session()->forget('email_login');
            if (!$this->administratorValidator->validateLogin(request()->all())) {
                return redirect()->back()
                    ->withErrors($this->administratorValidator->errorsBag())
                    ->withInput(request()->except('password'));
            }

            $adminstrator = $this->repository->where([
                'email' => request()->get('email'),
                'status' => AdministratorStatusEnum::STATUS_ACTIVE,
            ])->first();
            $isLogin = Hash::check(request()->get('password'), data_get($adminstrator, 'password'));

            if ($isLogin) {
                if ($adminstrator->lock_flag != AdministratorLockFlagEnum::LOCK->value) {
                    if (getConfig('disable_two_factor')) {
                        getGuard()->login($adminstrator);
                        return redirect(getRoute('home'));
                    }

                    $this->sendAuthCode($adminstrator);
                    session()->put('email_login', request()->get('email'));
                    return redirect(getRoute('loginTwoFactor'));
                }

                $message = __('auth.locked');
            } else {
                $message = __('messages.email_password_valid');
            }

        } catch (\Exception $exception) {
            logError($exception->getMessage() . PHP_EOL . $exception->getTraceAsString());
            $message = __('messages.email_password_valid');
        }

        $errors = new MessageBag(['email' => [$message]]);
        return redirect()->back()
            ->withErrors($errors)
            ->withInput(request()->except('password'));
    }

    public function sendAuthCode($administrator){
        try {
            $administrator->auth_code = randomString(8, false, false);
            $administrator->auth_code_expire = Carbon::now()->addMinutes(10);
            $administrator->save();

            Mail::to(data_get($administrator, 'email'))->send(new AuthCodeMail($administrator));
        } catch (\Exception $exception) {
            logError($exception->getMessage() . PHP_EOL . $exception->getTraceAsString());
        }

    }

    public function logout()
    {
        getGuard()->logout();
        return redirect(getRoute('login'));
    }
}
