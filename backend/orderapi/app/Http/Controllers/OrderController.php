<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $rules = [
        'description' => 'required|string|max:100|min:3',
        'hours' => 'required|numeric|max:9999999999|min:1',
        'technician_id' => 'required|numeric|max:99999999999999999999',
        'type_id' => 'required|numeric|max:99999999999999999999'

    ];

    private $traductionAttributes = [
        'description' => 'descripcion',
        'hours' => 'horas',
        'technician_id' => 'tecnico',
        'type_id' => 'tipo'
    ];

    public function applyValidator(Request $request)
    {

    }

    
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        $orders->load(['observation', 'causal']);
        return response()->json($orders, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function add_activity(Order $order, Activity $activity)
    {
        $order->activities()->attach($activity->id);
        $response = [
            'message' => $order->activities
        ];
        return response()->json($response, Response::HTTP_OK);
    }

    public function remove_activity(Order $order, Activity $activity)
    {
        $order->activities()->attach($activity->id);
        $response = [
            'message' => 'Actividad eliminada exitosamente'
            'order_activity'
        ];
        return response()->json($response, Response::HTTP_OK);
    }
}
