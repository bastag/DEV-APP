<?php

namespace App\Http\Controllers;


use App\Orders;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD

      $orders = Orders::all();

=======
>>>>>>> ef7af55b85a191df7bb7a4971bd86820bf56cee0
      $orders = Orders  ::all();
      return view('order-lists')->with('orders', $orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
<<<<<<< HEAD

      return view('create-order');

       $user_id = auth()->user('id');
       $user = User::find($user_id);
        return view('create-order')->with('orders', $orders);
=======
      // $user_id = auth()->user('id');
      // $user = User::find($user_id);
        return view('create-order');
>>>>>>> ef7af55b85a191df7bb7a4971bd86820bf56cee0
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('manage-order');
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
