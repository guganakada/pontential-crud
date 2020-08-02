<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Desenvolvedor;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\DB;

class DesenvolvedorController extends Controller
{
    public function index()
    {
        return Response()->json(Desenvolvedor::orderBy('id', 'desc')->get(), 200);
    }

    public function getDeveloper($id)
    {
        $desenvolvedor = DB::table('desenvolvedores')->where('id', $id)->get();

        if ($desenvolvedor) {
            return Response()->json($desenvolvedor, 200);
        } else {
            return Response("0", 404);
        };
    }

    public function searchDevelopers($search)
    {
        $desenvolvedores = DB::table('desenvolvedores')
            ->where('nome', 'like', '%' . $search . '%')
            ->orWhere('sexo', 'like', '%' . $search . '%')
            ->orWhere('idade', 'like', '%' . $search . '%')
            ->orWhere('hobby', 'like', '%' . $search . '%')
            ->orWhere('datanascimento', 'like', '%' . $search . '%')
            ->paginate(10);

        if ($desenvolvedores) {
            return Response()->json($desenvolvedores, 200);
        } else {
            return Response("0", 404);
        };
    }

    public function store(Request $request)
    {
        $desenvolvedor = new Desenvolvedor();
        $desenvolvedor->nome = $request->input('nome');
        $desenvolvedor->sexo = $request->input('sexo');
        $desenvolvedor->idade = $request->input('idade');
        $desenvolvedor->hobby = $request->input('hobby');
        $desenvolvedor->datanascimento = $request->input('datanascimento');

        if($desenvolvedor->save()){
            return Response("1", 201);
        } else {
            return Response("0",400);
        };
    }

    public function update($id, Request $request)
    {
        $desenvolvedor = Desenvolvedor::find($id);
        $desenvolvedor->nome = $request->input('nome');
        $desenvolvedor->sexo = $request->input('sexo');
        $desenvolvedor->idade = $request->input('idade');
        $desenvolvedor->hobby = $request->input('hobby');
        $desenvolvedor->datanascimento = $request->input('datanascimento');

        if ($desenvolvedor->save()) {
            return Response()->json($desenvolvedor, 200);
        } else {
            return Response("0", 400);
        };
    }

    public function destroy($id)
    {
        $desenvolvedor = Desenvolvedor::find($id);

        if ($desenvolvedor->delete()) {
            return Response("1", 204);
        } else {
            return Response("0", 400);
        };
    }
}
