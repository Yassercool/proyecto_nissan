<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Vehicle;
use App\Models\Customer;
use Illuminate\Support\Facades\Auth;

class saleController extends Controller
{
    public function index()
    {
        return view("sale");
    }

    public function create(Request $request)
    {
        $request->validate([
            'identify' => 'required',
            'model' => 'required',
        ]);

        // Obtener datos del formulario
        $identificacion = $request->identify;
        $modelo = $request->model;

        // Obtener el ID del vendedor autenticado
        $idSaller = Auth::id();

        // Consultas
        $idCustomer = Customer::where('identify', $identificacion)->value('id');
        $vehicle = Vehicle::where('model', $modelo)->first(); // Obtener todo el vehículo

        // Validar las consultas
        if (empty($idCustomer)) {
            return redirect()->route('homeMain')->with('alert_message', 'No hay usuario creado');
        } elseif (empty($vehicle)) {
            return redirect()->route('homeMain')->with('alert_message', 'Ese vehículo no se encontró');
        }

        // Guardar en la tabla 'sales'
        $sale = new Sale();
        $sale->seller_id = $idSaller;
        $sale->customer_id = $idCustomer;
        $sale->vehicle_id = $vehicle->id;
        $sale->total = $vehicle->value; // Usar 'quantity' como precio
        $sale->save();

        // Actualizar la cantidad del vehículo
        if ($vehicle->quantity == 1) {
            $vehicle->delete(); // Eliminar el vehículo si la cantidad es 0
        } else {
            $vehicle->quantity -= 1; // Reducir la cantidad
            $vehicle->save(); // Guardar los cambios
        }

        // Redirigir con mensaje de éxito
        return redirect()->route('homeMain')->with('alert_message', '¡Compra exitosa!');
    }
}
