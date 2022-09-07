@extends('home')

@section('title', 'Dettaglio corso')

@section('content')
<div class="row">
    <div class="col-12">
       <h2>Dettaglio corso</h2> 
    </div>
    <div class="col-12 d-flex justify-content-center align-items-center">   
        <div class="card" style="width: 18rem;">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Corso di laure: {{ $course->name }}</li>
              <li class="list-group-item">Città: {{ $course->city }} </li>
            </ul>
          </div>
    </div>
    <div class="col-12 my-3">
        <table class="table  shadow">
            <thead>
                <tr>
                    <th scope="col">Studente</th>
                    <th scope="col">Età</th>
                    <th scope="col">--</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($students as $student)
                <tr>
                    <td>{{ $student->name }} {{ $student->surname }}</td>
                    <td>{{ $student->age }}</td>
                </tr>                           
                @empty
                    <td>Non ci sono studenti</td>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection

