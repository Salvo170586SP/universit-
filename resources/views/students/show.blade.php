@extends('home')

@section('title', 'Dettaglio studente')

@section('content')
    <div class="row">
        <div class="col-12">
            <h2>Dettaglio Studente</h2>
        </div>
        <div class="col-12 d-flex justify-content-center align-items-center">   
            <div class="card" style="width: 18rem;">
                <div class="card-header">
                 Studente:  {{ $student->name }} {{ $student->surname }}
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">Età: {{ $student->age }} anni</li>
                  <li class="list-group-item">Corso di laurea: {{ $student->course }}</li>
                </ul>
              </div>
        </div>
    </div>
@endsection
