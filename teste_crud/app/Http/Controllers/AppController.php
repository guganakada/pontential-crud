<?php

namespace App\Http\Controllers;

use App\Models\Desenvolvedor;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index()
    {
        $desenvolvedores = Desenvolvedor::orderBy('id', 'desc')->paginate(10);

        return view('desenvolvedores',array('desenvolvedores' => $desenvolvedores));
    }

    public function store(Request $request)
    {
        $desenvolvedor = new Desenvolvedor();
        $desenvolvedor->nome = $request->input('nome');
        $desenvolvedor->sexo = $request->input('sexo');
        $desenvolvedor->idade = $request->input('idade');
        $desenvolvedor->hobby = $request->input('hobby');
        $desenvolvedor->datanascimento = $request->input('datanascimento');

        if ($desenvolvedor->save()) {
            return redirect()->route('dev.index')->with('message', 'Desenvolvedor incluido com sucesso.');
        } else {
            return redirect()->back()->with(['errors' => 'Falha ao editar categoria.']);
        }
    }
}
