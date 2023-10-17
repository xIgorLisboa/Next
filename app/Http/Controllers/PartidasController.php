<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Partida;

class PartidasController extends Controller
{
    public function create()
    {
        return view('partidas.create');
    }

    public function Partidas(Request $request)
    {
        Partida::create([
            'data' => $request->date('data'),
            'horario_inicio' => $request->horario_inicio,
            'horario_termino'=> $request->horario_termino, 
            'time_casa'=> $request->time_casa, 
            'time_visitante'=> $request->time_visitante,
            'gols_time_casa'=> $request->gols_time_casa, 
            'gols_time_visitante'=> $request->gols_time_visitante,
        ]);

        return "Partida cadastrada com sucesso!";
    }

    public function show($id)
    {
        $Partida = Partida::findOrFail($id);
        return view ('partidas.show', ['partidas' => $Partida]);
    }

    public function edit($id)
    {
        $Partida = Partida::findOrFail($id);
        return view ('partidas.edit', ['partidas' => $Partida]);
    }

    public function update(Request $request, $id)
    {

        $Partida = Partida::findOrFail($id);

        $Partida->update([

            'data' => $request->input('data'),
            'horario_inicio' => $request->horario_inicio,
            'horario_termino'=> $request->horario_termino, 
            'time_casa'=> $request->time_casa, 
            'time_visitante'=> $request->time_visitante,
            'gols_time_casa'=> $request->gols_time_casa, 
            'gols_time_visitante'=> $request->gols_time_visitante,
        ]);

        return "Partida atualizada com sucesso!";
    } 

    public function delete($id){
        $Partida = Partida::findOrFail($id);
        return view('Partidas.delete', ['Partida' => $Partida]);
    }

    public function destroy($id){
        $Partida = Partida::findOrFail($id);
        $Partida->delete();

        return "Partida excluído com sucesso!";
    }
}
