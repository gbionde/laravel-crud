<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Error') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p class="mb-4">Hello, <strong>{{ Auth::user()->name }}</strong></p>

                    <div class="text-center bg-red-500 text-white p-4 rounded">
                        <p class="mb-4"><strong>Access Denied - 403 Error</strong></p>
                        <p>
                            Sorry, but you don't have permission to access this page.<br/>
                            If you believe you should have access, please contact the site administrator.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
