<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Http\Resources\SaleResource;

class SaleController extends Controller
{
    public function index()
    {
        $sales = Sale::all();
        return SaleResource::collection($sales);
    }

    public function show($id)
    {
        $sale = Sale::findOrFail($id);
        return new SaleResource($sale);
    }

    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'client_id' => 'required|exists:clients,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric',
        ]);

        $sale = Sale::create($request->all());
        return new SaleResource($sale);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'client_id' => 'required|exists:clients,id',
            'quantity' => 'required|integer|min:1',
            'total_price' => 'required|numeric',
        ]);

        $sale = Sale::findOrFail($id);
        $sale->update($request->all());
        return new SaleResource($sale);
    }

    public function destroy($id)
    {
        $sale = Sale::findOrFail($id);
        $sale->delete();
        return response()->json(null, 204);
    }
}