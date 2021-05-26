<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registros = DB::table('usuarios')->get();
        return view('usuario.listar', ['usuarios' => $registros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.novo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nome'  => 'required|min:3',
            'email' => 'required|email',
            'login' => 'required|max:16',
            'senha' => 'required|max:16'
        ]);

        $user = [
            'nome' => $request->input('nome'),
            'email' => $request->input('email'),
            'login' => $request->input('login'),
            'senha' => $request->input('senha')
        ];

        if (DB::table('usuarios')->insert($user)) {
            return redirect('usuario')->with('mensagem', 'Cadastrado com sucesso!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registro = DB::table('usuarios')->where('id', $id)->first();
        return view('usuario.exibir', ['usuario' => $registro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuario = DB::table('usuarios')->where('id', $id)->first();

        return view('usuario.editar', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nome'  => 'required|min:3',
            'email' => 'required|email',
            'senha' => 'max:16'
        ]);

        $user = [
            'nome' => $request->input('nome'),
            'email' => $request->input('email')
        ];

        if ($request->input('senha')) {
            $user['senha'] = $request->input('senha');
        }

        if (DB::table('usuarios')->where('id', $id)->update($user)) {
            return redirect('usuario')->with('mensagem', 'Alterado com sucesso!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (DB::table('usuarios')->where('id', $id)->delete()) {
            return redirect('usuario')->with('mensagem', 'Excluído com sucesso!');
        }
    }
}
