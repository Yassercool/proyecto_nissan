<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class customersController extends Controller
{
    public function index()
    {
        return view("createCustomer");
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'identify' => 'required',
            'phone' => 'required',
        ]);

        $customer = new Customer();
        $customer->name = $request->name.' '.$request->lastname;
        $customer->email = $request->email;
        $customer->identify = $request->identify;
        $customer->phone = $request->phone; // Añadido 'phone'

        $customer->save();

        return redirect()->route('homeMain');
    }
}
