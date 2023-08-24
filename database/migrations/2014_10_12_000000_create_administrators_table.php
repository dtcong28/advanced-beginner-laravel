<?php

use Illuminate\Database\Migrations\Migration;
use Core\Providers\Facades\Schema\CustomBlueprint as Blueprint;
use Core\Providers\Facades\Schema\CustomSchema as Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('administrators', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name', 128);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('auth_code', 40)->nullable();
            $table->dateTime('auth_code_expire')->nullable();
            $table->char('lock_flag', 1)->nullable();
            $table->smallInteger('error_count')->nullable();
            $table->dateTime('error_datetime')->nullable();
            $table->dateTime('last_login_datetime');
            $table->char('status', 1);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('administrators');
    }
};
