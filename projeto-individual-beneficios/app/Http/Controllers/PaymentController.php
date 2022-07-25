<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePaymentFormRequest;
use App\Models\Client;
use App\Models\Dependent;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    protected $client;
    protected $dependent;
    protected $payment;

    public function __construct(Client $client, Dependent $dependent, Payment $payment)
    {
        $this->client = $client;
        $this->dependent = $dependent;
        $this->payment = $payment;
        $this->model = $payment;
    }
    public function index()
    {
        $payments = $this->payment->all();

        return view('payments.index',compact('payments'));
    }
    public function show($clientId)
    {
        if(!$client = $this->client->find($clientId))
            return redirect()->back();

        $payments = $client->payments()->get();

        return view ('payments.show',compact('client','payments'));
    }
    public function create($id)
    {
        if(!$client = $this->client->find($id))
            return redirect()->back();

        return view('payments.create',compact('client'));
    }

    public function store(StoreUpdatePaymentFormRequest $request)
    {
        $data = $request->all();

        $this->model->create($data);

        return redirect()->route('clients.index');
    }
    public function edit($id)
    {
        if(!$payment = $this->model->find($id))
            return redirect()->route('clients.index');

        return view('payments.edit', compact('payment'));
    }
    public function update(StoreUpdatePaymentFormRequest $request, $id)
    {
        if(!$payment = $this->model->find($id))
            return redirect()->route('clients.index');
        $data = $request->all();

        $payment->update($data);

        return redirect()->route('clients.index');
    }
    public function destroy($id)
    {
        if(!$payment = $this->model->find($id))
            return redirect()->route('clients.index');

        $payment->delete();

        return redirect()->route('clients.index');

    }

}
