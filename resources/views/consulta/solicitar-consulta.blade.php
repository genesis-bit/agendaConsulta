<section>
        <header class="h-14 text-center text-lg bg-transparent font-bold">
            <h2 class="text-sky-800">
                Solicitar Consulta
            </h2>
        </header>
    
        <form method="post"  class="mt-6 space-y-6 px-4 pb-3">
            @csrf    
      
            <select class="form-select px-4 py-3 rounded-full">
                <option >Seleciona o tipo de Consulta</option>
                <option value="">Consulta 1</option>
                <option value="">Consulta 2</option>
            </select>

            <input type="date" class="form-input px-4 py-3 rounded-full w-full" placeholder="Seleciona a Data">

            <div class="flex items-center gap-4">
                <x-primary-button>{{ __('Solicitar') }}</x-primary-button>

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