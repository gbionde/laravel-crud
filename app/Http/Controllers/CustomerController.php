<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:level')->only('index', 'create');
    }

    public function my_customers(User $id)
    {
        $user = User::where('id', '=', $id->id)->first();
        $customers = $user->customers()->get();

        return view('customers.my_customers', [
            'customers' => $customers,
        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customers.index', [
            'customers' => Customer::orderBy('name')->paginate('5'),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $customer = new Customer();

        $customer->user_id = $request->user_id;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->company = $request->company;
        $customer->telephone = $request->telephone;
        $customer->tel_commercial = $request->tel_commercial;

        $customer->save();

        return redirect('customer/create')->with('msg', 'Customer registered!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Customer $customer)
    {
        return view('customers.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Customer $customer)
    {
        Customer::findOrFail($customer->id)->update($request->all());
        return redirect()->route('customer.show', $customer->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
