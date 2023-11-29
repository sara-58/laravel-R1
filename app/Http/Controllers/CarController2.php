<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController2 extends Controller
{

    private $columns = [
        'carTitle',
        'description',
        'published'
    ];
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::get();
        return view('cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("addCar");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cars= new Car;
        $cars->carTitle = $request->carTitle;
        $cars->description = $request->description;
        $cars->published = true;
        $cars->save();
        return"Car title is : ". $request->carTitle . "<br> Car description is : " . $request->description . "<br> Car published is : " . $request->published;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view ('carDetail',compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car =Car::findOrFail($id);
        return view('updateCar',compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);
        $data['published'] = isset($data['published'])? true:false;

        Car::where('id',$id)->update($data);
        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return 'Car Deleted';
    }
}

