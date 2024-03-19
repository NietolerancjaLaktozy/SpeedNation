<link rel="stylesheet" href="{{ asset('css/Style_oferta.css') }}"> <!--unikatowy css -->
<x-app-layout>
    <div class="c-blue">

        <div class="row" style="text-align:center;">
            <h1>Oferta</h1>
        </div>

        <div class="row bg-lgrey container">

        @if(!(empty($cars)))

            @foreach($cars as $car)
            <div class="bg-grey window">

                <img src="/img/{{$car->picture}}" class="img" >
                
                <div class="txt">
                    <h1>{{$car->name}}</h1>

                    <p>{{$car->desc}}</p>

                    <div>Cena: {{$car->price}} zł za dzień</div>
                    
                    <a href="/form">Wypożycz</a>
                </div>

            </div>
            @endforeach

        @else
            <div style="text-align:center;">Brak samochodów</div>
        @endif

        </div>

    </div>
    
</x-app-layout>
