<?php

namespace App\Http\Controllers;

use App\customers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;

class CustomersController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function cpanel_index()
    {
        return view('Control Panel.features.customers.customers');
    }

      public function index()
    {   
        $key=Session::get('unique_session_key');
        $items = DB::table('carts')
            ->Join('products', 'products.product_id', '=', 'carts.product_id')
            ->where('sessionkey', $key)
            ->get();
        return view('/check-out', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function show(customers $customers)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function edit(customers $customers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, customers $customers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\customers  $customers
     * @return \Illuminate\Http\Response
     */
    public function destroy(customers $customers)
    {
        //
    }
}
