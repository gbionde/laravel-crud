<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p><strong>{{ $user->name }}</strong></p>
                    <!-- <p class="mb-3">Actual Level is: <strong>{{ $user->level }}</strong></p> -->
                </div>

                <div class="p-6 text-gray-900">
                    <form action="{{ route('user.update', $user->id) }}" method="post">
                        @csrf
                        @method('PUT')

                        <label for="level">Select a Level:</label> <br/>

                        <select name="level" class="py-1 px-8 rounded">
                            <option value="" selected disabled>Select a level</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                        </select>

                        <button type="submit" class="bg-blue-500 text-white rounded py-1 px-3">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
