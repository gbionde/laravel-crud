<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-3">Hello, <strong>{{ Auth::user()->name }}</strong></p>

                    <p class="bg-gray-100 p-4 rounded overflow-hidden mb-3">
                        @can('level')
                        <a href="{{ route('customer.index') }}" class="bg-blue-500 text-white rounded p-2 mr-1">
                            See Customer List
                        </a>
                        @endcan

                        <a href="{{ route('my.customers', Auth::user()->id) }}" class="bg-orange-500 text-white rounded p-2">
                            My Customers
                        </a>
                    </p>


                    @if (session('msg'))
                        <p class="bg-blue-500 rounded text-center text-white p-2 mb-4">{{ session('msg') }}</p>
                    @endif

                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf

                        <fieldset class="border-2 rounded p-6">
                            <legend>Fill in all fields</legend>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-3">
                                <label for="name" class="font-semibold">Name</label>
                                <input type="text" name="name" id="name" class="w-full rounded" required autofocus />
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-3">
                                <label for="email" class="font-semibold">E-mail</label>
                                <input type="email" name="email" id="email" class="w-full rounded" required autofocus />
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-3">
                                <label for="company" class="font-semibold">Company</label>
                                <input type="text" name="company" id="company" class="w-full rounded" required autofocus />
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-3">
                                <label for="telephone" class="font-semibold">Telephone</label>
                                <input type="tel" name="telephone" id="telephone" class="w-full rounded" required autofocus />
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-3">
                                <label for="tel_commercial" class="font-semibold">Commercial Contact</label>
                                <input type="tel" name="tel_commercial" id="tel_commercial" class="w-full rounded" required autofocus />
                            </div>

                            <div class="bg-gray-100 p-4 rounded overflow-hidden mb-3">
                                <input type="reset" value="Clean" class="bg-red-500 text-white rounded p-2">
                                <input type="submit" value="Register" class="bg-blue-500 text-white rounded p-2">
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
