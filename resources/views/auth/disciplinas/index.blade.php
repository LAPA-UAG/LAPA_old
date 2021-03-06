@extends('layouts.app')

@section('titulo', 'Gerenciar disciplinas')
@section('content')
        <div class="container">
            <h2>Gerenciar disciplinas</h2>
            <a href="{{ route('auth.disciplina.adicionar') }}" class="btn mb-2">Adicionar</a>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Professor</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registros as $registro)
                    <tr>
                        <td>{{ $registro->nome }}</td>
                        <td>{{ isset($registro->user) ? $registro->user->name : 'Nenhum professor' }}</td>
                        <td>
                            <a href="{{ route('auth.disciplina.editar', $registro->id) }}" class="btn">Editar</a>
                            <a href="{{ route('auth.disciplina.deletar', $registro->id) }}" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja deletar a disciplina?');">Deletar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
@endsection