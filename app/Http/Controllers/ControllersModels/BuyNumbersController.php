<?php

namespace App\Http\Controllers\ControllersModels;

use App\Http\Controllers\Controller;
use App\Models\BuyNumber;
use Illuminate\Http\Request;

class BuyNumbersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $buyNumbers = BuyNumber::all();
        return view('buy_numbers.index', compact('buyNumbers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('buy_numbers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image1' => 'required',
            'image2' => 'required',
            'number_card' => 'required',
            'order_details_id' => 'required',
        ]);

        BuyNumber::create($request->all());

        return redirect()->route('buy_numbers.index')
            ->with('success', 'Buy number created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BuyNumber  $buyNumber
     * @return \Illuminate\Http\Response
     */
    public function show(BuyNumber $buyNumber)
    {
        return view('buy_numbers.show', compact('buyNumber'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BuyNumber  $buyNumber
     * @return \Illuminate\Http\Response
     */
    public function edit(BuyNumber $buyNumber)
    {
        return view('buy_numbers.edit', compact('buyNumber'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BuyNumber  $buyNumber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BuyNumber $buyNumber)
    {
        $request->validate([
            'image1' => 'required',
            'image2' => 'required',
            'number_card' => 'required',
            'order_details_id' => 'required',
        ]);

        $buyNumber->update($request->all());

        return redirect()->route('buy_numbers.index')
            ->with('success', 'Buy number updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BuyNumber  $buyNumber
     * @return \Illuminate\Http\Response
     */
    public function destroy(BuyNumber $buyNumber)
    {
        $buyNumber->delete();

        return redirect()->route('buy_numbers.index')
            ->with('success', 'Buy number deleted successfully');
    }
}
