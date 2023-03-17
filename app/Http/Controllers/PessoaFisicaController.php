<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PessoaFisica;

class PessoaFisicaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pessoaFisica = PessoaFisica::all();

        return view("fisica.index", compact("pessoaFisica"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("fisica.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        try {
            $pessoaFisica = PessoaFisica::create([
                "nome" => $data["nome"],
                "sobrenome" => $data["sobrenome"],
                "cpf" => $data["cpf"],
                "data_nascimento" => $data["data_nascimento"],
            ]);

            echo "<script>alert('Pessoa física cadastrada com sucesso');</script>";

            return view("fisica.create");
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
        //
    }
}
