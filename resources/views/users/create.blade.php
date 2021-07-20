<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('users.store') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-2">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>


            <div class="mt-2">
                <x-label for="active" :value="__('Status')" />
                <select class="border border-gray-300 rounded w-full" name="active" value="{{ old('active') }}">
                    <option value="1">active</option>`
                    <option value="0">inactive</option>
                </select>
            </div>
            <div class="mt-2">
                <x-label for="company" :value="__('Company')" />
                <select class="border border-gray-300 rounded w-full" name="company_id" value="{{ old('company') }}">
                    <option value="">choose a company</option>
                    @foreach ($companies as $company)
                        <option value="{{ $company->id }}">
                            {{ $company->name }}
                        </option>
                    @endforeach
                </select>

            </div>


            <!-- Password -->
            <div class="mt-2">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-2">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-2">
                <x-button class="ml-4">
                    {{ __('Save') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
