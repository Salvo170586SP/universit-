@extends('home')

@section('title', 'Modifica studente')

@section('content')
    <div class="row">
        <div class="col-12 my-3">
            <h2>Modifica studente</h2>
        </div>
        <div class="col-12">
            <form action="{{ route('students.update', $student->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('students.form')

                <button type="submit" class="btn btn-primary">Crea</button>
            </form>
        </div>
    </div>
@endsection
