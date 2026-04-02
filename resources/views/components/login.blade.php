<?php
 
use Livewire\Component;

use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;

new  #[Layout('layouts::frontend')]  class extends Component {
 
    public string $tenantName = '';

    public function mount()
    { 
        $this->tenantName = tenant('tenancy_db_name');
    }

    public string $email = '';
    public string $password = '';
    public bool $remember = false;

    protected function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:6'],
            'remember' => ['boolean'],
        ];
    }

    public function login()
    {
        $this->validate();

        if (!Auth::attempt([
            'email' => $this->email,
            'password' => $this->password,
        ], $this->remember)) {
            $this->addError('email', __('Invalid credentials.'));
            return;
        }

        session()->regenerate();

        return redirect()->intended(route('dashboard'));
    }
};
?>
<div class="mx-auto max-w-lg p-6 space-y-6">
    <h2 class="text-3xl font-semibold text-center text-[#1B1B18] dark:text-[#EDEDEC]">Login to {{ $this->tenantName }}</h2>

    <div class="rounded-2xl border border-gray-200 bg-white p-6 shadow-sm dark:border-gray-700 dark:bg-gray-900">
  

        <form wire:submit.prevent="login" class="space-y-5">
            @csrf

            <div>
                <flux:input
                    name="email"
                    :label="__('Email address')"
                    type="email"
                    wire:model="email"
                    required
                    autofocus
                    autocomplete="email"
                    placeholder="email@example.com"
                /> 
            </div>

            <div class="relative">
                <flux:input
                    name="password"
                    :label="__('Password')"
                    type="password"
                    wire:model="password"
                    required
                    autocomplete="current-password"
                    :placeholder="__('Password')"
                    viewable
                />
               

             
            </div>

            <div class="flex items-center">
                <flux:checkbox name="remember" :label="__('Remember me')" wire:model="remember" />
            </div>
            @error('remember')
                <p class="mt-1 text-sm text-red-600 dark:text-red-400">{{ $message }}</p>
            @enderror

            <flux:button variant="primary" type="submit" class="w-full" data-test="login-button">
                {{ __('Log in') }}
            </flux:button>
        </form>
    </div>
</div>