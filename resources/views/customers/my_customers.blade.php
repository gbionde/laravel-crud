<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-3">Hello, <strong>{{ Auth::user()->name }}</strong></p>

                    <div class="p-6 text-gray-900">
                        <table class="table-auto w-full">
                            <thead class="bg-gray-100 text-left">
                                <tr>
                                    <th class="p-2">Name</th>
                                    <th>E-mail</th>
                                    <th>Telephone</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($customers as $customer)
                                    <tr class="hover:bg-gray-100">
                                        <td class="p-2">{{ $customer->name }}</td>
                                        <td>{{ $customer->email }}</td>
                                        <td>{{ $customer->telephone }}</td>
                                        <td>
                                            <a href="{{ route('customer.show', $customer->id) }}">Details</a>
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
