<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Time;

class TimesController extends Controller
{
    public function create()
    {
        return view('Times.create');
    }

    public function Times(Request $request)
    {
        Time::create([
            'nome' => $request->nome,
        ]);

        return "Time cadastrado com sucesso!";
    }

    public function show($id)
    {
        $time = Time::findOrFail($id);
        return view ('Times.show', ['time' => $time ]);
    }

    public function edit($id)
    {
        $time = Time::findOrFail($id);
        return view ('Times.edit', ['time' => $time ]);
    }

    public function update(Request $request, $id)
    {
        $time = Time::findOrFail($id); 

        $time->update([
            'nome' => $request->nome,
        ]);

        return "Time atualizado com sucesso!";
    }

    public function delete($id){
        $time = Time::findOrFail($id);
        return view('Times.delete', ['time' => $time]);
    }

    public function destroy($id){
        $time = Time::findOrFail($id);
        $time->delete();

        return "Time excluído com sucesso!";
    }

    
}
 