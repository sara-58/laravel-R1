<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\Car;
use App\Models\Category;
use App\Traits\Common;
use Illuminate\Support\Facades\Redirect;

class CarController2 extends Controller
{
    use Common;
    private $columns = [
        'carTitle',
        'carPrice',
        'description',
        'carImage',
        'published',
        'category_id',
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
        $categories = Category::select('id','categoryName')->get();   
        return view('addCar', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $cars= new Car;
        // $cars->carTitle = $request->carTitle;
        // $cars->carPrice = $request->carPrice;
        // $cars->description = $request->description;
        // if (isset($request->published)) {
        //     $cars->published = true;
        // } else {
        //     $cars->published = false;
        // }
        // $cars->save();
        // return"Car title is : ". $request->carTitle ."<br> Car Price is : ". $request->carPrice . "<br> Car description is : " . $request->description . "<br> Car published is : " . $request->published;
            // $data = $request->only($this->columns);
        // $data['published'] = isset($data['published']) ? true : false;

            $messages=[
                'carTitle.required'=>'Title is required',
                'carPrice.required'=>'Price is required',
                'description.required'=>'Should be text',
                'carImage.required'=>'Image is required',
            ];

            $data=$request->validate([
                'carTitle'=>'required|string',
                'carPrice'=>'required|integer',
                'description'=>'required|string|max:100',
                'carImage'=>'required|mimes:png,jpg,jpeg|max:2048',
            ], $messages );

            $fileName = $this->uploadFile($request->carImage,'assets/images');
            $data['carImage']=$fileName;

            $data['category_id'] = $request['category_id'];

            $data['published'] = isset($request['published']);

            Car::create($data);
            return 'done';
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
        $categories = Category::select('id', 'categoryName')->get();
        $car =Car::findOrFail($id);
        return view('updateCar',compact('car'), compact('categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->only($this->columns);

        if ($request->hasFile('carImage'))
        {          
        $fileName = $this->uploadFile($request->carImage, 'assets/images');
        $data['carImage'] = $fileName;
        }
        
        $data['published'] = isset($data['published'])? true:false;

        Car::where('id',$id)->update($data);
        return 'Updated';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id):RedirectResponse
    {
        Car::where('id', $id)->delete();
        return redirect('cars');
    }

    public function trashed(){
        $cars = Car::onlyTrashed()->get();
        return view('trashed',compact('cars'));
    }
    public function restore(string $id):RedirectResponse
    {
        Car::where('id',$id)->restore();
        return redirect('cars');
    }
    public function forceDelete(string $id): RedirectResponse
    {
        Car::where('id', $id)->forceDelete();
        return redirect('trashed');
    }
}

