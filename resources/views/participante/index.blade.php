@extends('layout')
@section('content')
    <h2>Participantes</h2>
    {!! Alert::render() !!}
    <table class="table">
        <thead>
        <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Autor</th>
            <th>Acción</th>
        </tr>
        </thead>
        @foreach($parts as $part)
        <tbody>
            <tr>
                <td>{{ $part->nombres }}</td>
                <td>{{ $part->apellidos }}</td>
                <td>{{ $part->user->name }}</td>
                <td>
                    @can('update', $part)
                        <a href="{{ url('edit-post', [$part->id]) }}">Editar</a>
                    @endcan
                </td>
            </tr>
            </tbody>
        @endforeach
    </table>
    {!! $parts->render() !!}
@endsection