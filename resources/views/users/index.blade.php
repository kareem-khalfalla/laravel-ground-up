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

                    <div class="text-center w-3/4 mx-auto">
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th class="p-2">#</th>
                                    <th>user name</th>
                                    <th>company name</th>
                                    <th>email</th>
                                    <th>active</th>
                                </tr>
                            </thead>
                            <tbody class="border-t text-gray-600">
                                @foreach ($users as $user)

                                    <tr>
                                        <td class="p-2">
                                            {{ $user->id }}
                                        </td>
                                        <td>
                                            {{ $user->name }}
                                        </td>
                                        <td>
                                            {{ $user->company->name }}
                                        </td>
                                        <td>
                                            {{ $user->email }}
                                        </td>
                                        <td>
                                            {{ $user->active }}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
