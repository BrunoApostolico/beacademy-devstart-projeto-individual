<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function index()
    {
        $clients = Client::all();

        return view('clients.index',compact('clients'));
    }

    public function show($id)
    {
        if (!$client = Client::find($id))
            return redirect()->route('clients.index');

        return view('clients.show', compact('client'));
    }
}
