@extends('home')

@section('title','Lista studenti')

@section('content')
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-between my-4">
            <h2>Lista Studenti</h2>
            <a class="btn btn-outline-primary" href="{{ route('students.create') }}">Aggiungi nuovo studente</a>
        </div>
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Età</th>
                        <th scope="col">Corso</th>
                        <th scope="col">--</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $student)
                        <tr>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->surname }}</td>
                            <td>{{ $student->age }}</td>
                            <td>{{ $student->course }}</td>
                            <td>
                                <a class="btn btn-sm btn-primary" href="{{ route('students.show', $student->id ) }}">Dettaglio</a>
                                <a class="btn btn-sm btn-secondary" href="">Modifica</a>
                            </td>
                        </tr>
                    @empty
                    <tr>
                        <td>Non ci sono studenti</td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
@endsection