<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Traits\Common;

class CarController extends Controller
{
    use Common;
    private $columns = ['title', 'description', 'published' , 'image'];
    /**
     * Display a listing of the resource.
     */
   
    public function index()
    {
        //return view('cars');
        $cars = Car::get();
        return view('cars', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('addCar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $cars = new Car();
        // $cars->title = $request->title;
        // $cars->description = $request->description;
        // if(isset($request->published)) {
        //     $cars->published = 1;
        // }else{
        //     $cars->published = 0;
        // }
        // $cars->save();
        // return 'Data added successfully!';
        // $data = $request->only($this->columns);

        
       $messages = $this->messages();
        $data = $request->validate([ 
            'title'=>'required|string|max:50',
            'description'=> 'required|string',
            'image' => 'required|mimes:png,jpg,jpeg|max:2048', 
            ], $messages);
            $fileName = $this->uploadFile($request->image, 'assets/images');

        $data['published'] = isset($request->published);
        $data['image']= $fileName;

        Car::create($data);
        return redirect('Car');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $car = Car::findOrFail($id);
        return view('showCar', compact('car'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return view ('update');
        $car = Car::findOrFail($id);
         return view('updateCar', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */

    // 1st trial on lecture 5:
    // $data = $request->only($this->columns);
    // $data['published'] = isset ($request->published);
    // Car::create($data);
    // return redirect('Car');

    public function update(Request $request, string $id)
    {
        // return dd ($request);
        // $data = $request->only($this->columns);
        // $data['published'] = isset($request->published);
        // Car::where('id', $id)->update($data);
        // return redirect('Car');
        $messages = $this->messages();
        $data = $request->validate([ 
            'title'=>'required|string|max:50',
            'description'=> 'required|string',
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:2048', 
            ], $messages);

        if($request->hasFile('image')){
            $fileName = $this->uploadFile($request->image, 'assets/Images');
            $data['image']= $fileName;

        }else{
            $data['image'] = $request->OldImage;

        }    
           
        $data['published'] = isset($request->published);
        Car::where('id' , '$id')->update($data);
        return redirect('Car');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Car::where('id', $id)->delete();
        return redirect('Car');
    }
 /**
     * Remove the specified resource from storage.
     */
    public function trashed()
    {
        $cars = Car:: onlyTrashed()->get();
        return view('trashed' , compact('cars'));
    }


    public function forceDelete(string $id)
    {
        Car::where('id', $id)->forceDelete();
        return redirect('Car');
    }



    public function restore(string $id)
    {
        Car::where('id', $id)->restore();
        return redirect('Car');
    }


    public function messages() {
        return [
            'title.required'=>'العنوان مطلوب',
            'title.string'=>'Should be string',
            'description.required'=> 'Should be text',
            'image.required'=> 'Please select an image',
            'image.mimes'=> 'Incorrect image type',
            'image.max'=> 'Max file size exceeded',
        ];
    }    
}
