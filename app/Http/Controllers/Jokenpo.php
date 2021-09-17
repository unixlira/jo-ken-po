<?php

namespace App\Http\Controllers;

use App\Helpers\Judge;
use App\Models\JokenpoModel;
use Illuminate\Http\Request;


class Jokenpo extends Controller
{

    public function index(Request $request)
    {
        $result = null;

        if( $request->result != 0){
            $result = $request->result;
        }

        return view('jokenpo',compact('result'));
    }

    public function play(Request $request)
    {
        $result = null;
        $judge = new Judge;
        $winner = $judge->decide($request->arma);

        if(!empty($winner) && !empty($request)){
            $round = new JokenpoModel;
            $round->user = $winner['user'];
            $round->weaponPlayer = $winner['weaponPlayer'];
            $round->result = $winner['result'];
            $round->weaponBot= $winner['weaponBot'];
            
            $round->save();

            return redirect('jokenpo?result='.$winner['result']);
        }

        return view('jokenpo',compact('result'));

    }

    public function round($id)
    {
        $message = "";
        $round = JokenpoModel::find($id);

        return view('list-round', compact('round'));
    }

    public function rounds()
    {
        
        $rounds = JokenpoModel::get();

        return view('list', compact('rounds'));
    }

    public function update(Request $request)
    {

        if($request){

            $round = JokenpoModel::find($request->id);
            $round->user = ucfirst($request['user']);
            $round->weaponPlayer = strtolower($request['weaponPlayer']);
            $round->result = (int)$request['result'];
            $round->weaponBot= strtolower($request['weaponBot']);
            
            $round->update();

            return redirect('rounds');
        }

        $message = "Atualização Falhou";

        return redirect('list-round','message');

    }

    public function edit($id)
    {
        $message = "";
        $round = JokenpoModel::find($id);

        return view('list-round', compact('round'));
    }

    public function forceDelete($id)
    {
        $round = JokenpoModel::find($id);
    
        $round->delete();

        return redirect('rounds');

    }

}
