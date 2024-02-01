<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p> Hello, <strong>{{ Auth::user()->name }}</strong> </p>
                </div>

                <div class="p-6 text-gray-900">
                    <div class="bg-gray-100 rounded p-2 mb-4">
                        {{ $customers->links() }}
                    </div>

                    <table class="table-auto w-full">
                        <thead class="bg-gray-100 text-left">
                            <tr>
                                <th>Name</th>
                                <th>E-mail</th>
                                <th>Telephone</th>
                                <th>Responsable User</th>
                            </tr>
                        </thead>

                        <tbody>

                            @foreach ($customers as $customer)
                                <tr class="hover:bg-gray-100">
                                    <td class="p-2">{{ $customer->name }}</td>
                                    <td class="p-2">{{ $customer->email }}</td>
                                    <td class="p-2">{{ $customer->telephone }}</td>
                                    <td class="p-2">{{ $customer->user->name }}</td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
