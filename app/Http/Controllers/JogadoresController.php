<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jogador;

class JogadoresController extends Controller
{
    public function create()
    {
        return view('jogador.create');
    }

    public function Jogadores(Request $request)
    {
        Jogador::create([
            'nome' => $request->nome,
            'numero_camiseta' => $request->numero_camiseta,
        ]);

        return "Jogador cadastrado com sucesso!";
    }

    public function show($id)
    {
        $jogador = Jogador::findOrFail($id);
        return view ('jogador.show', ['jogador' => $jogador]);
    }

    public function edit($id)
    {
        $jogador = Jogador::findOrFail($id);
        return view ('jogador.edit', ['jogador' => $jogador]);
    }

    public function update(Request $request, $id)
    {
        $jogador = Jogador::findOrFail($id); 

        $jogador->update([
            'nome' => $request->nome,
        ]);

        return "Jogador atualizado com sucesso!";
    }

    public function delete($id){
        $jogador = Jogador::findOrFail($id);
        return view('Jogador.delete', ['jogador' => $jogador]);
    }

    public function destroy($id){
        $jogador = Jogador::findOrFail($id);
        $jogador->delete();

        return "Jogador excluído com sucesso!";
    }
}
