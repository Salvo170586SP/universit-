@extends('home')

@section('title','Crea studenti')

@section('content')
<div class="row">
    <div class="col-12 my-3">
       <h2>Crea studente</h2> 
    </div>
    <div class="col-12">
        <form action="{{ route('students.store') }}" method="POST">
            @csrf
            @include('students.form')

            <button type="submit" class="btn btn-primary">Crea</button>
          </form>
    </div>
</div>
@endsection