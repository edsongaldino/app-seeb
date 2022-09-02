<?php

namespace App\Http\Controllers;

use App\Pessoa;
use App\TipoPessoa;
use Illuminate\Http\Request;
use App\Helpers\Helper;

class PessoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function assistidos()
    {
        $assistidos = Pessoa::all();
        return view('assistidos.index')->with(compact('assistidos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_pessoa = TipoPessoa::all();
        return view('assistidos.adicionar', compact('tipos_pessoa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $Pessoa = new Pessoa();
        $Pessoa->tipo_pessoa_id = $request->tipo_pessoa_id;
        $Pessoa->nome = $request->nome;
        $Pessoa->email = $request->email;
        $Pessoa->data_nascimento = Helper::data_mysql($request->data_nascimento);
        $Pessoa->telefone = Helper::limpa_campo($request->telefone);
        $Pessoa->cpf = Helper::limpa_campo($request->cpf);

        if($request->hasFile('foto_perfil')){
            // Get filename with the extension
            $filenameWithExt = $request->file('foto_perfil')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('foto_perfil')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $fileNameBD = $request->file('foto_perfil')->storeAs('public/arquivos/foto', $fileNameToStore);
    
        } else {
            $fileNameBD = $request->foto_old;
        }
        $Pessoa->foto_perfil = $fileNameBD;
        $Pessoa->save();

        

        return redirect()->route('assistidos')->with('success', 'Dados Cadastrados!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $assistido = Pessoa::find($id);
        $tipos_pessoa = TipoPessoa::all();
        return view('assistidos.editar', compact('assistido', 'tipos_pessoa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Pessoa = Pessoa::findOrFail($request->id);

        $Pessoa->tipo_pessoa_id = $request->tipo_pessoa_id;
        $Pessoa->nome = $request->nome;
        $Pessoa->email = $request->email;
        $Pessoa->data_nascimento = Helper::data_mysql($request->data_nascimento);
        $Pessoa->telefone = Helper::limpa_campo($request->telefone);
        $Pessoa->cpf = Helper::limpa_campo($request->cpf);


        $Pessoa->save();

        return redirect()->route('assistidos')->with('success', 'Dados atualizados!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pessoa  $pessoa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $pessoa = Pessoa::findOrFail($request->id);
        if($pessoa->delete()):
            return true;
        endif;
    }
}
