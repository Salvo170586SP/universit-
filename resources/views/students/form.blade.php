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
            <option
                @if (isset($student)) value="{{ old('role_id', $course->id) }}" 
                @selected($student->course_id == $course->id)
                @else
                value="{{ $course->id }}" @endif>
                {{ $course->name }}
            </option>
        @endforeach

    </select>
</div>
@error('course_id')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror


<div class="form-check mt-4">
    <input class="form-check-input" type="radio" name="gender" value="0"
        @if (isset($student)) @checked(!old('gender', $student->gender )) @endif {{-- {{ old('gender', $student->gender == 0) ? 'checked' : '' }} --}}
        id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
        Maschio
    </label>
</div>
<div class="form-check mb-4">
    <input class="form-check-input" type="radio" value="1"
        @if (isset($student)) @checked(old('gender', $student->gender)) @endif {{-- {{ old('gender', $student->gender == 1) ? 'checked' : '' }} --}}
        name="gender" id="flexRadioDefault2">
    <label class="form-check-label" for="flexRadioDefault2">
        Femmina
    </label>
</div>
