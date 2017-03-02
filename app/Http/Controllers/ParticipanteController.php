<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Participante;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Styde\Html\Facades\Alert;

class ParticipanteController extends Controller
{
    public function index(){

        $parts = Participante::paginate();
        return view('participante/index', compact('parts'));

    }

    public function edit($id){

        // Auth::loginUsingId(1);

        $parts = Participante::findOrFail($id);

        // $this->authorize('update-post', $parts);

        if(Gate::denies('update', $parts)){

            Alert::danger('Sin Privilegios');
            return redirect('participantes');

        }

        return $parts->apellidos;

    }
}
