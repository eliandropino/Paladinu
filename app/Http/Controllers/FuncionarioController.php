<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
Use Illuminate\Support\Facades\Session;
Use Illuminate\Support\Facades\Redirect;
use App\Funcionario;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\FuncionarioRequest;


class FuncionarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $funcionarios = DB::table('funcionarios')
            ->join('funcoes', 'funcionarios.funcaoid', '=', 'funcoes.id')
            ->select('funcionarios.*', 'funcoes.descricao')
            ->paginate(3);


        //$funcionarios = Funcionario::all();
        //$funcionarios = DB::table('funcionarios')->paginate(3);

        return view('funcionario.index', ['funcionarios' => $funcionarios]);

    }

    public function novo()
    {//lista no select a descricao e poe o valor com o id
        $funcoes = \App\Funcao::lists('descricao', 'id');
        return view('funcionario.novo', ['funcoes' => $funcoes]);
        //return view('funcionario.novo');
    }

    public function remover($id)
    {
        $this->model->find($id)->delete();

        return view('funcionario.index');
    }

    public function editar($codigo)
    {
        //first() quiser buscar pelo codigo primeiro que encontrar, metodo get traz array e nao mostra os dados
        $funcionario = Funcionario::where('codigo', '=', $codigo)->first();
       // $funcionario = Funcionario::find($codigo);
        $funcoes = \App\Funcao::lists('descricao', 'id');
        //var_dump($funcionario);
        return view('funcionario.editar', ['funcionario' => $funcionario,'funcoes'=>$funcoes]);
    }


    //POST
    public function criar(FuncionarioRequest $request){

        Funcionario::create([
            'nome' => $request['nome'],
            'rg' => $request['rg'],
            'sexo' => $request['sexo'],
            'email' => $request['email'],
            'codigo' => $request['codigo'],
            'funcaoid' => $request['funcao'],
            'chapa' => $request['chapa']
        ]);
        User::create([
            'name' => $request['nome'],
            'funcionarioid' => $request['codigo'],
            'password' => bcrypt($request['senha'])

        ]);

        return $this->index();
        //return view('funcionario.index');
    }

    public function criarFuncao(Request $request)
    {

        \App\Funcao::create([
            'descricao' => $request['descricao']
        ]);

        return $this->novo();
        //return view('funcionario.index');
    }




    public function update(Request $request, $id)
    {
       $funcionario = Funcionario::find($id);
       $funcionario->fill($request->all());
       $funcionario->save();

        Session::flash('mensagem','Usuario Atualizado com Sucesso');
        return Redirect::to('/funcionario');
    }
}

