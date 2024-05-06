<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Brand::all();
        return view('admin.brand.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'img' => 'mimes:jpg,png,jpeg',
                'img1' => 'mimes:jpg,png,jpeg',
                'img2' => 'mimes:jpg,png,jpeg',
                'img3' => 'mimes:jpg,png,jpeg',
                'img4' => 'mimes:jpg,png,jpeg',
                'img5' => 'mimes:jpg,png,jpeg',
                'img6' => 'mimes:jpg,png,jpeg',

                
               
            ],
        );

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

        $imageName1 = time() . '.' . $request->img1->extension();
        $request->img1->move(public_path('img1'), $imageName1);

        $imageName2 = time() . '.' . $request->img2->extension();
        $request->img2->move(public_path('img2'), $imageName2);

        $imageName3 = time() . '.' . $request->img3->extension();
        $request->img3->move(public_path('img3'), $imageName3);

        $imageName4 = time() . '.' . $request->img4->extension();
        $request->img4->move(public_path('img4'), $imageName4);

        $imageName5 = time() . '.' . $request->img5->extension();
        $request->img5->move(public_path('img5'), $imageName5);

        $imageName6 = time() . '.' . $request->img6->extension();
        $request->img6->move(public_path('img6'), $imageName6);
        

       

        $data = [
            'Judul' => $request->Judul,
            'img' => $imageName,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
            'img4' => $imageName4,
            'img5' => $imageName5,
            'img6' => $imageName6,
          
            
        ];
        Brand::create($data);
        return redirect('/brand');
    }

    /**
     * Display the specified resource.
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Brand::where('id', $id)->first();
        return view('admin.brand.edit')->with('items', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'img' => 'mimes:jpg,png,jpeg',
                'img1' => 'mimes:jpg,png,jpeg',
                'img2' => 'mimes:jpg,png,jpeg',
                'img3' => 'mimes:jpg,png,jpeg',
                'img4' => 'mimes:jpg,png,jpeg',
                'img5' => 'mimes:jpg,png,jpeg',
                'img6' => 'mimes:jpg,png,jpeg',

                
               
            ],
        );

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('img'), $imageName);

        $imageName1 = time() . '.' . $request->img1->extension();
        $request->img1->move(public_path('img1'), $imageName1);

        $imageName2 = time() . '.' . $request->img2->extension();
        $request->img2->move(public_path('img2'), $imageName2);

        $imageName3 = time() . '.' . $request->img3->extension();
        $request->img3->move(public_path('img3'), $imageName3);

        $imageName4 = time() . '.' . $request->img4->extension();
        $request->img4->move(public_path('img4'), $imageName4);

        $imageName5 = time() . '.' . $request->img5->extension();
        $request->img5->move(public_path('img5'), $imageName5);

        $imageName6 = time() . '.' . $request->img6->extension();
        $request->img6->move(public_path('img6'), $imageName6);
        

       

        $data = [
            'Judul' => $request->Judul,
            'img' => $imageName,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
            'img4' => $imageName4,
            'img5' => $imageName5,
            'img6' => $imageName6,
          
            
        ];
        Brand::where('id', $id)->update($data); 
        return redirect('/brand');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Brand::where('id', $id)->delete();
        return redirect('/brand');
    }
}
