@if(session()->has('action_failed'))
    <div class="bg-danger mb-4 p-2"><b>{{ session()->get('action_failed') }}</b></div>
@endif

@if(session()->has('action_success'))
    <div class="bg-success mb-4 p-2"><b>{{ session()->get('action_success') }}</b></div>
@endif

@if(session()->has('message'))
    <div class="bg-danger mb-4 p-2"><b>{{ session()->get('message') }}</b></div>
@endif
