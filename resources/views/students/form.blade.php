<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input type="text" name="name" value="{{ old('name', isset($student) ? $student->name : '') }}"
        class="form-control">
</div>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Cognome</label>
    <input type="text" name="surname" value="{{ old('surname', isset($student) ? $student->surname : '') }}"
        class="form-control">
</div>
@error('surname')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Età</label>
    <input type="text" value="{{ old('age', isset($student) ? $student->age : '') }}" name="age"
        class="form-control">
</div>
@error('age')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

<div class="my-3">
  <label for="exampleInputPassword1" class="form-label">Corsi</label>
  <select class="form-select" name="course_id" aria-label="Default select example">
      @foreach ($courses as $course)
          <option value="{{ old('course_id', isset($student) ? $student->course_id : '' )  }}" @selected(isset($student) ? $student->course_id == $course->id : '')>{{ $course->name }}</option>
      @endforeach
  </select>
</div>
@error('course')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror

