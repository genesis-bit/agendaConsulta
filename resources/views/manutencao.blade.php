<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Manutenção') }}
        </h2>
    
    </x-slot>


    <div class="py-12 ">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3  bg-blue-100">
                       <x-card titulo="Especialidade" btn1="Nova Especialidade" btn2="{{$especialidade->count()}} Cadastrado" modal1="m1_especialidade" modal2="m2_especialidade">
                            <x-slot name="data_modal1">
                                <h1>@include('especialidade.add-especialidade')</h1>
                            </x-slot>
                            <x-slot name="data_modal2">@include('especialidade.lista-especialidade',[$especialidade])</x-slot>
                         </x-card>

                         <x-card titulo="Tipo de Consulta" btn1="Nova Tipo de Consulta" btn2="{{$tipoConsulta->count()}} Cadastrados" modal1="m1_tipoconsulta" modal2="m2_tipoconsulta">
                            <x-slot name="data_modal1">
                                <h1>@include('tipoConsulta.add-tipoConsulta')</h1>
                            </x-slot>
                            <x-slot name="data_modal2"> @include('tipoConsulta.lista-tipoConsulta',[$tipoConsulta])</x-slot>
                         </x-card>

                         <x-card titulo="Sintomas" btn1="Novo Sintoma" btn2="{{$sintomas->count()}} Cadastrados" modal1="m1_sintoma" modal2="m2_sintoma">
                            <x-slot name="data_modal1">
                                <h1>@include('sintoma.add-sintoma')</h1>
                            </x-slot>
                            <x-slot name="data_modal2"> @include('sintoma.lista-sintoma',[$sintomas])</x-slot>
                         </x-card>
                </div>
            </div>
        </div>
        @if (session()->has('statuss'))
            <div class="absolute bottom-10 right-10 " x-data="{ show: true }"
                x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)">
                <button class="btn btn-primary rounded-md h-16 bg-green-800" >{{session('statuss')}}</button>            
            </div>
        @endif
    </div>

    

</x-app-layout>
  