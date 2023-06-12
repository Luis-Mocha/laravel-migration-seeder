@extends('layout.app')

@section ('pagetitle-content')
Esercizio migration/seeder | Treni
@endsection

@section ('main-content')

    <div>
        <h1 class="text-center py-2">Pagina treni</h1>
    </div>

    <div class="container">
    @foreach($trains as $elem)

        <div class="ticket d-flex  border mb-3 rounded py-3 px-2">

            <div class="d-flex flex-column w-25 border-end px-1">
                <span class="fst-italic fw-light">Compagnia: {{$elem['nome_azienda']}}</span>
                <span>Codice Treno: {{$elem['codice_treno']}}</span>
                <span>Numero Carrozze: {{$elem['numero_carrozze']}}</span>
            </div>

            <div class="text-center w-50">
                <div>Stazione di partenza: <span class="fs-5 fw-semibold">{{$elem['stazione_partenza']}}</span> </div>

                <div >Orario partenza: <span class="fs-5 fw-semibold">{{$elem['orario_partenza']}}</span> </div>
            </div>

            <div class="text-center w-25 border-start px-1">
                <div>Stazione di arrivo: <span class="fw-semibold">{{$elem['stazione_partenza']}}</span> </div>

                <div >Orario arrivo: <span class="fw-semibold">{{$elem['orario_partenza']}}</span> </div>
            </div>

        </div>

    @endforeach

    </div>

@endsection