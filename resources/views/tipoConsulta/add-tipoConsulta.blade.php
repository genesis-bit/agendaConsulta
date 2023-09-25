<section>
    <header class="h-14 text-center text-lg bg-transparent font-bold">
        <h2 class="text-sky-800">
            Adicionar Tipo de Consultas
        </h2>
    </header>

    <form method="POST" action="{{ route('tipoConsulta.store') }}" class="px-3 py-2">
        @csrf

        <!-- Name -->
        <div>
            <x-text-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')" required autofocus autocomplete="descricao" placeholder="Descrição" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Adicionar') }}
            </x-primary-button>
        </div>
    </form>
</section>