<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Disciplina;

class DisciplinaController extends Controller
{
    public function index() 
    {
        $registros = Disciplina::all();
        return view('admin.disciplina.index', compact('registros'));
    }

    public function adicionar() 
    {
        return view('admin.disciplina.adicionar');
    }

    public function salvar(Request $request) 
    {
        $dados = $request->all();
        Disciplina::create($dados);

        return redirect()->route('admin.disciplinas');
    }

    public function editar($id) 
    {
        $registro = Disciplina::find($id);
        return view('admin.disciplina.editar', compact('registro'));        
    }

    public function atualizar(Request $request, $id)
    {
        $dados = $request->all();
        Disciplina::find($id)->update($dados);

        return redirect()->route('admin.disciplinas');
    }

    public function deletar($id)
    {
        Disciplina::find($id)->delete();
        return redirect()->route('admin.disciplinas');
    }
}
