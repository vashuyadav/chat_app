<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User List') }}
        </h2>
    </x-slot>

    <div class="py-5">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-1900 text-center">
                    <img src="{{ url('img/welcome1.jpg') }}" style="display: inline-block;">
                    <p class="text-xl" style="font-size: 50px; font-weight: 600; color: gray;">TO CHAT APP</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
