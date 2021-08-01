<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Client;
use App\Models\Rent;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rents = Rent::all();
        return view('rents/index', ['rents' => $rents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cars = Car::all();
        $clients= Client::all();

        return view('rents/create', ['cars' => $cars, 'clients' => $clients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $r = new Rent;

        $r->client_id = $request->input('client_id');
        $r->car_id = $request->input('car_id');
        $r->date_start = $request->input('date_start');
        $r->date_end = $request->input('date_end');

        $r->save();

        return redirect()->route('rents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $r = Rent::find($id);

        if($r){
            return view('rents/show', ['rent' => $r]);
        }else{
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $r = Rent::find($id);
        $cars = Car::all();
        $clients= Client::all();

        if($r){
            return view('rents/edit', ['rent' => $r, 'cars' => $cars, 'clients' => $clients]);
        }else{
            return abort(404);
        }
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
        $r = Rent::find($id);

        if($r){
            $r->client_id = $request->input('client_id');
            $r->car_id = $request->input('car_id');
            $r->date_start = $request->input('date_start');
            $r->date_end = $request->input('date_end');

            $r->save();

            return redirect()->route('rents.index');
        }else{
            return abort(404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Rent::destroy($id);

        return redirect()->route('rents.index');
    }
}
