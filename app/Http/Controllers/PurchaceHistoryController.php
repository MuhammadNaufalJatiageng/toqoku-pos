<?php

namespace App\Http\Controllers;

use App\Models\PurchaceHistory;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class PurchaceHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('history.index', [
            'histories' => PurchaceHistory::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cart = $request->all(); 
        // dd(count($cart['product_id']));
        for($i = 0; $i < count($cart['product_id']); $i++)
        {
            $data = [
                'product_id' => $cart['product_id'][$i],   
                'quantity' => $cart['qty'][$i],   
                'customer_id' => 2,   
                'user_id' => auth()->user()->id,   
                'total' => $cart['total'][$i],   
            ];

            PurchaceHistory::create($data);
        }
        Cart::truncate();
        return redirect('/')->with('success');


    }

    /**
     * Display the specified resource.
     */
    public function show(PurchaceHistory $purchaceHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PurchaceHistory $purchaceHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PurchaceHistory $purchaceHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PurchaceHistory $purchaceHistory)
    {
        //
    }
}
