<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Medico') }}
        </h2>
    </x-slot>
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 bg-white">
                    <div class="p-4 sm:p-8 shadow bg-white sm:rounded-lg max-w">                       
                            @include('medico.add2-medico')                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
