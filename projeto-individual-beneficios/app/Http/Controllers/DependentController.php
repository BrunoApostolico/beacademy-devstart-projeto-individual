<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Dependent;
use Illuminate\Http\Request;

class DependentController extends Controller
{
    protected $client;
    protected $dependent;

    public function __construct(Client $client, Dependent $dependent)
    {
        $this->client = $client;
        $this->dependent = $dependent;
    }
    public function index()
    {
        $dependents = $this->dependent->all();

        return view('dependents.index',compact('dependents'));
    }
    public function show($clientId)
    {
        if(!$client = $this->client->find($clientId))
            return redirect()->back();

        $dependents = $client->dependents()->get();

        return view ('dependents.show',compact('client','dependents'));
    }

}
