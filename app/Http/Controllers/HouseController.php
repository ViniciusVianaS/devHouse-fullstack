<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\House;
use App\Models\User;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function store(Request $request)
    {

        $house = new House;
        $house->nome = $request->nome;
        $house->valor = $request->valor;
        $house->cidade = $request->cidade;
        $house->descricao = $request->descricao;


        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $requestImage->move(public_path('img/houses'), $imageName);

            $house->image = $imageName;
        }

        $user = auth()->user();
        $house->user_id = $user->id;

        $house->save();

        return redirect('/');
    }

    public function index()
    {
        $houses = House::all();

        return view('welcome', ['houses' => $houses]);
    }

    public function show($id)
    {
        $house = House::findOrFail($id);

        $houseOwner = User::where('id', $house->user_id)->first()->toArray();

        return view('readHouse', ['house' => $house, 'houseOwner' => $houseOwner]);
    }

    public function edit($id)
    {
        $house = House::findOrFail($id);

        return view('edit', ['house' => $house]);
    }

    public function update(Request $request)
    {
        $data = $request->all();

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $requestImage = $request->image;
            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime('now')) . '.' . $extension;

            $requestImage->move(public_path('img/houses'), $imageName);

            $data['image'] = $imageName;
        }

        House::findOrFail($request->id)->update($data);

        return redirect('/')->with('msg','Evento editado com sucesso!');
    }

    public function destroy($id)
    {
        House::findOrFail($id)->delete();

        return redirect('/')->with('msg', 'Evento excluido com sucesso!');

    }

    public function dashboard() {
        $user = auth()->user();
        
        $houses = $user->houses;

        return view('dashboard', ['houses' => $houses]);
    }
}


