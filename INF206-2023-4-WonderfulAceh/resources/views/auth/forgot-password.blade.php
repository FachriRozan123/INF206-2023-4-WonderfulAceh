<x-guest-layout>
    <div class="p-3 max-w-sm">
        <div class="mb-4 text-sm text-white">
            {{ __('Lupa kata sandi? Tidak masalah. Beri tahu kami alamat email Anda, dan kami akan mengirimkan tautan reset kata sandi melalui email yang memungkinkan Anda memilih kata sandi baru.') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mt-4">
            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="{{ __('Email') }}" autocomplete="username" />
         </div>

            <div class="flex items-center justify-center mt-6 ">
                <x-button style="background-color:#FFFFFF;color:#2148C0">
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </div>
</x-guest-layout>