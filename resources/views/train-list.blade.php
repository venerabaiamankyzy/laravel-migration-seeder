@extends('layouts.app')

@section('title', 'Train list')
  

@section('content')
  <section>
    <div class="container">
      <div class="row mt-3">
        @forelse ($trains as $train)
          <div class="col-4 g-3">
            {{-- @include('partials.train-card') --}}
            
            @if (@isset($train))
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title mb-3">{{ $train->azienda }}</h3>
                  <h5 class="mb-2">Da: {{ $train->stazione_di_partenza }}</h5>
                  <h5 class="card-text">A: {{ $train->stazione_di_arrivo }}</h5>
                  <p class="card-text mb-0 mt-3">Orario di partenza: {{ $train->orario_di_partenza }}</p>
                  <p class="card-text">Orario di arrivo: {{ $train->orario_di_arrivo }}</p>  
                  <small>Codice di treno: {{ $train->codice_treno }}</small> <br>  
                  <small class="mb-0">N: di carozza: {{ $train->numero_carrozze }}</small>
                </div>
              </div>
                @else 
                  <div class="card h-100">
                    <div class="card-body">
                      <h5 class="card-title">Movie not found</h5>
                    </div>
                  </div>
                @endif

          </div>
        @empty
          <div class="col-12">
            <h2>Nessun libro nella lista</h2>
          </div>
        @endforelse
    </div>
  </div>
  </section>
@endsection



