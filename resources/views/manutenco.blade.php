<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manutenção') }}
        </h2>
    </x-slot>


    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 grid grid-cols-3 gap-3">
                    <div class="p-4 sm:p-8 bg-white  shadow sm:rounded-lg ">
                       <div class="">
                         1
                        </div>
                    </div>   
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="">
                          2
                         </div>
                     </div>    
                     <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                        <div class="">
                          3
                         </div>
                     </div>                   
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
  