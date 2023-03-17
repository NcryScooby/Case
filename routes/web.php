<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PessoaFisicaController;
use App\Http\Controllers\PessoaJuridicaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get("/", function () {
    return view("welcome");
});

Route::get("/fisica/criar", [PessoaFisicaController::class, "create"])->name(
    "pessoa_fisica.create"
);

Route::post("/fisica/store", [PessoaFisicaController::class, "store"])->name(
    "pessoa_fisica.store"
);

Route::get("/juridica/criar", [
    PessoaJuridicaController::class,
    "create",
])->name("pessoa_juridica.create");

Route::post("/juridica/store", [
    PessoaJuridicaController::class,
    "store",
])->name("pessoa_juridica.store");

Route::get("/fisica/listar", [PessoaFisicaController::class, "index"])->name(
    "pessoa_fisica.index"
);

Route::get("/juridica/listar", [
    PessoaJuridicaController::class,
    "index",
])->name("pessoa_juridica.index");

Route::get("/fisica/xml", function () {
    $pessoas = App\Models\PessoaFisica::all();
    return response()->xml(["pessoas" => $pessoas->toArray()]);
});

Route::get("/juridica/xml", function () {
    $pessoas = App\Models\PessoaJuridica::all();
    return response()->xml(["pessoas" => $pessoas->toArray()]);
});
