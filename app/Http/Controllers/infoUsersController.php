<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infoUsersController extends Controller
{
    public function index(){
        $infoUser = Cliente::get();

        return view('info_users.lista', ['info_users' => $infoUser]);
    }
    public function novo(){
        return view('clientes_.formulario');
    }
    public function salvar(Request $request){
        $cliente = new Cliente();

        $cliente = $cliente->create($request->all());

        \Session::flash('mensagem_sucesso', 'Cliente cadastrado com sucesso');

        return Redirect::to('clientes/novo');
    }
    public function editar($id){
        $cliente = Cliente::findOrFail($id);
        return view('clientes.formulario', ['cliente'=>$cliente]);
    }

    public function atualizar($id, Request $request){
        $cliente = Cliente::findOrFail($id);
        $cliente->update($request->all());

        \Session::flash('mensagem_sucesso', 'Cliente Atualizado com sucesso');

        return Redirect::to('clientes/'.$cliente->id.'/editar');
    }
    public function deletar($id){
        $cliente = Cliente::findOrFail($id);
        $cliente->delete();
        \Session::flash('mensagem_sucesso', 'Cliente Atualizado com sucesso');
        return Redirect::to('clientes');
    }
}
