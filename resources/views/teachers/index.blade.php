@extends('home')

@section('title', 'Lista professori')

@section('content')
<div class="row">
    <div class="col-12">
        <h2>Lista Professori</h2>
    </div>
</div>
<div class="col-12">
    <table class="table shadow">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">--</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($teachers as $teacher)
                <tr>
                    <td>{{ $teacher->name }}</td>
                    <td>{{ $teacher->surname }}</td>
                    <td class="d-flex">
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Non ci sono professori</td>
                </tr>
            @endforelse

        </tbody>
    </table>
</div>
@endsection