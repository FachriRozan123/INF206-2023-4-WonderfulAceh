<x-guest-layout>
    <x-slot name="logo">
    </x-slot>

    <x-validation-errors class="mb-4" />

    <form method="POST" action="{{ route('register') }}">
        @csrf

 
        <div class="flex items-center justify-center" style="height: 40px; background-color: #f5f5f5; border-radius: 5px;">
    <p class="block mt-1 w-full" style="background-color:#FFFFFF;color:#2148C0; text-align:center; border: 2px solid #FFFFFF; ">Isi data dengan valid</p>
</div>


        <div class="mt-4">
            <div class="relative">
                <x-input id="name" class="block mt-1 w-full pl-8" type="text" name="name" :value="old('name')" placeholder="{{ __('Nama') }}" required autofocus autocomplete="name" />
            </div>
        </div>

        <div class="mt-4">
            <div class="relative">
                <x-input id="email" class="block mt-1 w-full pl-8" type="email" name="email" :value="old('email')" placeholder="{{ __('Email') }}" required autocomplete="username" />
              </div>
        </div>

        <div class="mt-4">
            <div class="relative">
                <x-input id="password" class="block mt-1 w-full pl-8" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('Kata sandi') }}" />
             </div>
        </div>

        <div class="mt-4">
            <div class="relative">
                <x-input id="password_confirmation" class="block mt-1 w-full pl-8" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Konfirmasi Kata sandi') }}" />
            </div>
        </div>

        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
            <div class="mt-4">
                <x-label for="terms">
                    <div class="flex items-center">
                        <x-checkbox name="terms" id="terms" required />

                        <div class="ml-2">
                            {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                            ]) !!}
                        </div>
                    </div>
                </x-label>
            </div>
        @endif
            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-white hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Sudah memiliki akun?') }}
                </a>
                </div>
                <div class="flex items-center justify-center mt-4">
            <x-button style="background-color:#FFFFFF;color:#2148C0">
                    {{ __('Daftar') }}
                </x-button>
                </div>
            </form>
    </x-guest-layout>