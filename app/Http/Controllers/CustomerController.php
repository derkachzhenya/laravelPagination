<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Http\Requests\StoreCustomerRequest;
use App\Http\Requests\UpdateCustomerRequest;
use Illuminate\Http\Request;

class CustomerController extends Controller
{

    public function index(Request $request)
    {
        if ($request->filled('search')) {
            $customers = Customer::search($request->search)->get();
        }else{
            $customers = Customer::get();
        }
       
        return view('customer.index', compact('customers'));
    }

  
    public function create()
    {
        //
    }

  
    public function store(StoreCustomerRequest $request)
    {
        //
    }

 
    public function show(Customer $customer)
    {
        //
    }

   
    public function edit(Customer $customer)
    {
        //
    }

   
    public function update(UpdateCustomerRequest $request, Customer $customer)
    {
        //
    }

  
    public function destroy(Customer $customer)
    {
        //
    }
}
