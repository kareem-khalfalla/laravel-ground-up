<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Users') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    {{-- <div class="flex justify-end">
                        <a href="{{ route('users.create') }}">
                            <x-button>
                                {{ __('Create') }}
                            </x-button>
                        </a>
                    </div> --}}
                    <div class="max-w-sm mx-auto p-6 bg-white flex flex-col rounded-lg shadow-xl">
                            @if ($user->image)
                                <div class="w-full">
                                    <img src="{{ asset('storage/'.$user->image) }}" alt="{{ $user->name }}" class="w-12 h-12">
                                </div>
                            @endif
                            <small>#{{ $user->id }}</small>
                            <span class="text-gray-900">{{ $user->name }}</span>
                            <span class="text-base text-gray-600">{{ $user->company->name }}</span>
                            <span>{{ $user->email }}</span>
                            <span>{{ $user->name }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
