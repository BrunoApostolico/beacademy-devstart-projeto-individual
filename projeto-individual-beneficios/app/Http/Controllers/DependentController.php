<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateDependentFormRequest;
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
        $this->model = $dependent;
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
    public function create($id)
    {
        if(!$client = $this->client->find($id))
            return redirect()->back();

        return view('dependents.create',compact('client'));
    }

    public function store(StoreUpdateDependentFormRequest $request)
    {
        $data = $request->all();

        $this->model->create($data);

        return redirect()->route('clients.index');
    }
    public function edit($id)
    {
        if(!$dependent = $this->model->find($id))
            return redirect()->route('clients.index');

        return view('dependents.edit', compact('dependent'));
    }
    public function update(StoreUpdateDependentFormRequest $request, $id)
    {
        if(!$dependent = $this->model->find($id))
            return redirect()->route('clients.index');
        $data = $request->all();

        $dependent->update($data);

        return redirect()->route('clients.index');
    }
    public function destroy($id)
    {
        if(!$dependent = $this->model->find($id))
            return redirect()->route('clients.index');

        $dependent->delete();

        return redirect()->route('clients.index');

    }

}
