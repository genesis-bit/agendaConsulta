<section>
    <header class="h-14 text-center text-lg bg-transparent font-bold">
        <h2 class="text-sky-800">
            Adicionar Tempo Disponivel
        </h2>
    </header>

    <form method="POST" action="{{ route('agendaa.store') }}" class="px-3 py-2">
        @csrf

        <!-- Name -->
        <div>
            <x-text-input id="data" class="block mt-1 w-full" type="date" name="data"  required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        <div>
            <x-text-input id="consultorio_id" class="block mt-1 w-full" type="number" name="consultorio_id" required autofocus placeholder="Consultorio" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Adicionar') }}
            </x-primary-button>
        </div>
    </form>
</section>