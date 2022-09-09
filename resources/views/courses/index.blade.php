@extends('home')

@section('title', 'Lista corsi')

@section('content')
    <div class="row">
        <div class="col-12 d-flex align-items-center justify-content-between my-4">
            <h2>Lista Corsi</h2>
        </div>
        <div class="col-12">
            @include('flash_message')
        </div>
        <div class="col-12">
            <table class="table shadow">
                <thead>
                    <tr>
                        <th scope="col">Corso di</th>
                        <th scope="col">Città</th>
                        <th scope="col">Professori</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($courses as $course)
                        <tr>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->city }}</td>
                            <td>{{ $course->teacher->name }} {{ $course->teacher->surname }}</td>
                            <td><a class="btn btn-primary" href="{{ route('courses.show', $course) }}"><i class="fa-solid fa-eye"></i></a></td>
                        </tr>
                    @empty
                        <tr>
                            <td>Non ci sono corsi</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
