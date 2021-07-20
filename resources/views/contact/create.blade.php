<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('contact.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="emeail" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>


            <div class="mt-4">
                <x-label for="message" :value="__('Message')" />
                
                <x-textarea class="w-full" name="message" cols="30" rows="6" :value="old('message')" required />
            </div>

            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-4">
                    {{ __('Send') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
