@extends('layouts.app')

@section('titulo', 'Editar disciplina')
@section('content')
        <div class="container">
            <h2>Editar disciplina</h2>
            <form action="{{ route('auth.disciplina.atualizar', $registro->id) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">
                @include('auth.disciplinas._form')
                <div class="input-btn">
                    <button class="btn">Editar</button>
                </div>
            </form>
        </div>
@endsection