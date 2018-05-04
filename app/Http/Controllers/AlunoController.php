<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlunoController extends Controller
{

	public function index()
    {
        $aluno = Aluno::orderBy('created_at', 'desc')->paginate(10);
        return view('aluno.index',['aluno' => $aluno]);
    }
  
    public function create()
    {
        return view('aluno.create');
    }
  
    public function store(AlunoRequest $request)
    {
        $Aluno = new Aluno;

        $Aluno->nomecompleto = $request->nomecompleto;
        $Aluno->nascimento = $request->nascimento;
        $Aluno->foto = $request->foto;
        $Aluno->pai = $request->pai;
        $Aluno->mae = $request->mae;
        $Aluno->logradouro = $request->logradouro;
        $Aluno->numero = $request->numero;
        $Aluno->complemento = $request->complemento;
        $Aluno->bairro=$request->bairro;
        $Aluno->cidade = $request->cidade;
        $Aluno->estado = $request->estado;
        $Aluno->pais = $request->pais;
        $Aluno->cep = $request->cep;
        $Aluno->inicio = $request->inicio;
        $Aluno->telefone = $request->telefone;

        $Aluno->save();
        return redirect()->route('aluno.index')->with('message', 'Aluno created successfully!');
    }
  
    public function show($id)
    {
        //
    }

    
  
    public function edit($id)
    {
        $Aluno = Aluno::findOrFail($id);
        return view('aluno.edit',compact('Aluno'));
    }
  
    public function update(AlunoRequest $request, $id)
    {
        $Aluno = Aluno::findOrFail($id);

        $Aluno->nomecompleto = $request->nomecompleto;
        $Aluno->nascimento = $request->nascimento;
        $Aluno->foto = $request->foto;
        $Aluno->pai = $request->pai;
        $Aluno->mae = $request->mae;
        $Aluno->logradouro = $request->logradouro;
        $Aluno->numero = $request->numero;
        $Aluno->complemento = $request->complemento;
        $Aluno->bairro=$request->bairro;
        $Aluno->cidade = $request->cidade;
        $Aluno->estado = $request->estado;
        $Aluno->pais = $request->pais;
        $Aluno->cep = $request->cep;
        $Aluno->inicio = $request->inicio;
        $Aluno->telefone = $request->telefone;


       /* $Aluno->name        = $request->name;
        $Aluno->description = $request->description;
        $Aluno->quantity    = $request->quantity;
        $Aluno->price       = $request->price;*/
        $Aluno->save();
        return redirect()->route('aluno.index')->with('message', 'Aluno updated successfully!');
    }
  
    public function destroy($id)
    {
        $Aluno = Aluno::findOrFail($id);
        $Aluno->delete();
        return redirect()->route('aluno.index')->with('alert-success','Aluno hasbeen deleted!');
    }

}
