<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderCar;

use DateTime;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $orders = OrderCar::all();

        return view ('admin.orderCars.index')->with('orders', $orders);
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
        // $this->validate(request(),[

        // ])

        $orderCar = new OrderCar();
        
        
        $start_date = explode('/', $request->start_date);
        $start_date = $start_date[2] . "-" . $start_date[1] . "-" . $start_date[0];
        $end_date = explode('/', $request->end_date);
        $end_date = $end_date[2] . "-" . $end_date[1] . "-" . $end_date[0];

        $orderCar->start_date = $start_date;
        $orderCar->end_date = $end_date;
        $orderCar->from_destination = $request->from_destination;
        $orderCar->to_destination =$request->to_destination;

        $orderCar->save();

        return Redirect(Route('home'));


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
