<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PessoaJuridica;

class PessoaJuridicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoaJuridica = PessoaJuridica::all();

        return view("juridica.index", compact("pessoaJuridica"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("juridica.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        try {
            $pessoaJuridica = PessoaJuridica::create([
                "nome" => $data["nome"],
                "nome_fantasia" => $data["nome_fantasia"],
                "cnpj" => $data["cnpj"],
            ]);

            echo "<script>alert('Pessoa jurídica cadastrada com sucesso');</script>";

            return view("juridica.create");
        } catch (\Throwable $th) {
            dd("Erro");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pessoaJuridica = PessoaJuridica::find($id);

        $pessoaJuridica->delete();

        return redirect()->route("pessoa_juridica.index");
    }
}
