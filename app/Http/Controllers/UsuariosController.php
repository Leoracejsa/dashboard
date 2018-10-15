<?php

namespace App\Http\Controllers;

use App\Model\UsuarioApp;
use Illuminate\Http\Request;


class UsuariosController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index(){
        
        $users = UsuarioApp::all();

        return view('users.index', compact('users'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $this->request->all();
    }

    public function show($universityId){
        $user = UsuarioApp::find($universityId);

        if(!$user)
            return redirect()->route('users.index');

        return view('users.show', compact('user'));
    }
}
