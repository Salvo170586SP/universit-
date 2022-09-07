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

            <div class="mb-3">
              <label for="exampleInputEmail1"  class="form-label">Nome</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1"  class="form-label">Cognome</label>
              <input type="text" name="surname" class="form-control">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1"  class="form-label">Età</label>
              <input type="text" name="age" class="form-control">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1"  class="form-label">Corso</label>
              <input type="text" name="course" class="form-control">
            </div>
            
            <button type="submit" class="btn btn-primary">Crea</button>
          </form>
    </div>
</div>
@endsection