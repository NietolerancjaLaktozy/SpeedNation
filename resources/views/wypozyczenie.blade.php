<link rel="stylesheet" href="{{ asset('css/Style_form.css') }}"> <!--unikatowy css -->
<x-app-layout>

    <div class="container">
        samochod

        <form method="POST" action="">
            @csrf

            <div>
                <x-input-label for="start_date" :value="__('Data rozpoczęcia')" />
                <x-text-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" />
                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
            </div>


            <div>
                <x-input-label for="end_date" :value="__('Data zakonczenia')" />
                <x-text-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" />
                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
            </div>
            
            <button class="btn">Wypożycz</button>
        </form>

    </div>
    
</x-app-layout>
