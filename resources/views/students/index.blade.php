@extends('home')

@section('title', 'Lista studenti')

@section('content')
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-between my-4">
            <h2>Lista Studenti</h2>
            <a class="btn btn-outline-primary" href="{{ route('students.create') }}"><i class="fa-solid fa-plus me-2"></i>
                Aggiungi nuovo studente</a>
        </div>
        <div class="col-12">
            <table class="table shadow">
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

                            <td>
                              {{ $student->course->name }}
                            </td>


                            <td class="d-flex">
                                <a class="btn btn-sm btn-primary text-light"
                                    href="{{ route('students.show', $student->id) }}"><i class="fa-solid fa-eye"></i></a>
                                <a class="btn btn-sm btn-secondary mx-2"
                                    href="{{ route('students.edit', $student->id) }}"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                                <form action="{{ route('students.destroy', $student) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i
                                            class="fa-solid fa-trash"></i></button>
                                </form>
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
