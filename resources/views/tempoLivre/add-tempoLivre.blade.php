<section>
    <header class="h-14 text-center text-lg bg-transparent font-bold">
        <h2 class="text-sky-800">
            Adicionar Tempo Disponivel
        </h2>
    </header>

    <form method="POST" action="{{ route('agenda.store') }}" class="px-3 py-2">
        @csrf

        <!-- Name -->
        <div>
            <x-text-input id="data" class="block mt-1 w-full" type="date" name="data"  required autofocus />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
        
        <div>
            <select name="consultorio_id" id="curso" class="h-14 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm mt-1 block w-full" aria-label="default-select">
                @foreach($consultorio as $cons)
                    <option value="{{$cons->id}}">{{$cons->descricao}}</option>
                @endforeach
            </select>
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="ml-4">
                {{ __('Adicionar') }}
            </x-primary-button>
        </div>
    </form>
</section>