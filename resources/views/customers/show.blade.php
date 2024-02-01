<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="">Hello, <strong>{{ Auth::user()->name }}</strong>!</p>
                    <p class="mb-6 text-gray-500">Displaying customer info from "{{ $customer->name }}".</p>

                    <p>
                        <a href="{{ route('my.customers', Auth::user()->id) }}" class="bg-blue-500 text-white rounded p-2">Return</a>
                        <a href="{{ route('customer.edit', $customer->id) }}" class="bg-orange-500 text-white rounded p-2">Edit</a>
                        <a href="{{ route('customer.destroy', $customer->id) }}" class="bg-red-500 text-white rounded p-2">Delete</a>
                    </p>
                </div>

                <div class="p-6 text-gray-900">
                    <p><strong>Name:</strong> {{ $customer->name}} </p>
                    <p><strong>E-mail:</strong> {{ $customer->email}}</p>
                    <p><strong>Tel.:</strong> {{ $customer->telephone }}</p>
                    <p><strong>Company:</strong> {{ $customer->company}} </p>
                    <p><strong>Tel. Commercial:</strong> {{ $customer->tel_commercial}} </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
