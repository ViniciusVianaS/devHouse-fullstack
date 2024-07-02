<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function store(Request $request) {
        
        $house = new House;
        $house->nome = $request->nome;
        $house->valor = $request->valor;
        $house->cidade = $request->cidade;
        $house->descricao = $request->descricao;
        

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $requestImage->move(public_path('img/houses'), $imageName);

            $house->image = $imageName;
        }

        // $user = auth()->user();
        // $house->user_id = $user->id;

        $house->save();

        return redirect('/');
    }

    public function index () {
        $houses = House::all();

        return view('welcome', ['houses' => $houses]);
        // return response()->json($houses);
    }
}
