<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\FuncionarioRequest;


class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function getIndex()
    {



        //$produtos = Produto::all();
        $produtos = DB::table('produtos')->paginate(8);

        return view('produto.index',['produtos'=>$produtos]);
       
    }

    public function getNovo()
    {//lista no select a descricao e poe o valor com o id
        //$funcoes = \App\Funcao::lists('descricao','id');
        return view('produto.novo');
        //return view('funcionario.novo');
    }

    public function postCriar(Request $request)
    {
       
       \App\Produto::create([
        'codigo' => $request['codigo'],
        'descricao' => $request['descricao'],
        'valor' => $request['valor']
        ]);

       return $this->getIndex();
       //return view('funcionario.index');
    }

    public function postCriarFuncao(Request $request)
    {

        \App\Funcao::create([
            'descricao' => $request['descricao']
        ]);

        return $this->getNovo();
        //return view('funcionario.index');
    }

    public function remover($id)
    {
       $this->model->find($id)->delete();

       return view('produto.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        return 'Teste';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
