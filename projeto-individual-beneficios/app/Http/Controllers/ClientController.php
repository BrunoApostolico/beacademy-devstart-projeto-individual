<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateClientFormRequest;
use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function __construct(Client $client)
    {
        $this->model = $client;
    }
    public function index(Request $request)
    {
        $clients = $this->model->getClients(
            $request->search ?? ''
        );

        return view('clients.index',compact('clients'));
    }

    public function show($id)
    {
        if (!$client = Client::find($id))
            return redirect()->route('clients.index');

        $title = 'Cliente '.$client->name;
        return view('clients.show', compact('client'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(StoreUpdateClientFormRequest $request)
    {
        $data = $request->all();

        if($request->image){
            $file = $request['image'];
            $path = $file->store('profile','public');
            $data['image'] = $path;
        }

        $this->model->create($data);

        return redirect()->route('clients.index');
    }
    public function edit($id)
    {
        if(!$client = $this->model->find($id))
            return redirect()->route('clients.index');

        return view('clients.edit', compact('client'));
    }
    public function update(StoreUpdateClientFormRequest $request, $id)
    {
        if(!$client = $this->model->find($id))
            return redirect()->route('clients.index');
        $data = $request->all();

        $client->update($data);

        return redirect()->route('clients.index');
    }
    public function destroy($id)
    {
        if(!$client = $this->model->find($id))
            return redirect()->route('clients.index');

        $client->delete();

        return redirect()->route('clients.index');

    }
}
