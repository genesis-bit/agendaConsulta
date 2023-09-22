<section class="">
    <header class="h-15 text-center text-lg bg-transparent font-bold">
        <h2 class="text-lg font-medium text-gray-900">
            {{ __('Terminar Processo de Cadastramento') }}
        </h2>
    </header>

    <form method="post" action="{{ route('medico.store') }}" class="mt-6 space-y-6 justify-center">
        @csrf 
        <hr>
        <div class="col-lg-6">
            <label for="password" class="block font-medium text-sm text-gray-700 dark:text-gray-300" >New Password</label>
            <input type="password" class="h-12 border-gray-300  focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" name="password" required>
        </div> 
        <div class="col-lg-6">
            <label for="password_confirmation" class="block font-medium text-sm text-gray-700 dark:text-gray-300" >Confirm Password</label>
            <input type="password" class="h-12 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" name="password_confirmation" required>
        </div> 
        <hr>

        <div class="col-lg-6">
            <label for="form-control" class="block font-medium text-sm text-gray-700 dark:text-gray-300" >Especialidade</label>
            <select name="especialidade_id" id="curso" class="h-12 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" aria-label="default-select">
                <option selected></option>
                <option type="text" value="1">Dermatologista</option>
                <option type="text" value="2">Genicologista</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label for="Identificacao" class="block font-medium text-sm text-gray-700 dark:text-gray-300" >Identificacao</label>
            <input type="text" class="border-gray-300 h-12 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" name="Identificacao" placeholder="" required>
        </div> 
        <div class="col-lg-6">
            <label for="Ano" class="block font-medium text-sm text-gray-700 dark:text-gray-300" >Ano de Nascimento</label>
            <input type="number" min="1950" max="2023" class="h-12 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" name="Ano" placeholder="" required>
        </div>
        <div class="col-lg-6">
            <label for="form-control" class="block font-medium text-sm text-gray-700 dark:text-gray-300" >Genero</label>
            <select name="genero_id" id="curso" class="h-12 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" aria-label="default-select">
                <option selected></option>
                <option type="text" value="1">Masculino</option>
                <option type="text" value="2">Femenino</option>
            </select>
        </div>
        <div class="col-lg-6">
            <label for="Telefone" class="block font-medium text-sm text-gray-700 dark:text-gray-300" >Telefone</label>
            <input type="text" class="h-12 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" name="Telefone" placeholder="" required>
        </div>  

        <div class="flex items-center gap-4">
            <x-primary-button>{{ __('Save') }}</x-primary-button>

            @if (session('status') === 'password-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-gray-600 dark:text-gray-400"
                >{{ __('Saved.') }}</p>
            @endif
        </div>
    </form>
</section>