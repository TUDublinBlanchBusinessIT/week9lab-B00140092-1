<?php 
namespace App\Http\Controllers; 
use Illuminate\Http\Request; 
use \App\Models\Customer as Customer; 

class CustomerController extends Controller 
{ 
    public function new() 
    { 
        return view('customers.new'); 
    } 

    public function edit($id)
    {
         $customer = Customer::find($id);
         return view('customers.edit')->with('customer', $customer);
    }

    public function update(Request $request)
    {
        $customer = Customer::find($request->id);
        $customer->setFirstname($request->firstname);
        $customer->setSurname($request->surname);
        $customer->save();
    }


   
} 
?>