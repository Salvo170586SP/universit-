<div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Nome</label>
    <input type="text" name="name" value="{{ old('name', isset($student) ? $student->name : '') }}" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Cognome</label>
    <input type="text" name="surname" value="{{ old('surname', isset($student) ? $student->surname : '' ) }}" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Età</label>
    <input type="text" value="{{ old('age', isset($student) ? $student->age : '' )  }}" name="age" class="form-control">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1"  class="form-label">Corso</label>
    <input type="text" value="{{ old('course', isset($student) ? $student->course : '' )  }}" name="course" class="form-control">
  </div>