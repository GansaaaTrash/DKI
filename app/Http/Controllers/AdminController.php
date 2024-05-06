<?php

namespace App\Http\Controllers;

use App\Models\Visi;
use App\Models\About;
use App\Models\Admin;
use App\Models\Brand;
use App\Models\Testi;
use App\Models\Profil;
use App\Models\Layanan;
use App\Models\Struktur;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use App\Http\Requests\UpdatePostRequest;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Admin::all();
        return view('admin.posts.index')->with('data', $data);
    }

    public function frontend()
    {
        $data = Admin::all();
        return view('frontend.cp')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Description' => 'required',
                'img1' => 'mimes:jpg,png,jpeg',
                'img2' => 'mimes:jpg,png,jpeg',
                'img3' => 'mimes:jpg,png,jpeg'
               
            ],
        );

        $imageName1 = time() . '.' . $request->img1->extension();
        $request->img1->move(public_path('img1'), $imageName1);

        $imageName2 = time() . '.' . $request->img2->extension();
        $request->img2->move(public_path('img2'), $imageName2);

        $imageName3 = time() . '.' . $request->img3->extension();
        $request->img3->move(public_path('img3'), $imageName3);

       

        $data = [
            'Judul' => $request->Judul,
            'Description' => $request -> Description,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
            
        ];
        Admin::create($data);
        return redirect('/admin');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $data = Admin::all();
        return view('admin.posts.index')->with('data', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Admin::where('id', $id)->first();
        return view('admin.posts.edit')->with('items', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Description' => 'required',
                'img1' => 'mimes:jpg,png,jpeg',
                'img2' => 'mimes:jpg,png,jpeg',
                'img3' => 'mimes:jpg,png,jpeg'
               
            ],
        );

        $imageName1 = time() . '.' . $request->img1->extension();
        $request->img1->move(public_path('img1'), $imageName1);

        $imageName2 = time() . '.' . $request->img2->extension();
        $request->img2->move(public_path('img2'), $imageName2);

        $imageName3 = time() . '.' . $request->img3->extension();
        $request->img3->move(public_path('img3'), $imageName3);

       

        $data = [
            'Judul' => $request->Judul,
            'Description' => $request -> Description,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
             
        ];
        

        Admin::where('id', $id)->update($data); 
        return redirect('/admin');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Admin::where('id', $id)->delete();
        return redirect('/admin');
    }

// VISI

   

   public function gabungan()
    {
        $dataFromDatabase1 = Admin::all();
        $dataFromDatabase2 = Visi::all();
        $dataFromDatabase3 = Profil::all();
        $dataFromDatabase4 = Layanan::all();
        $dataFromDatabase5 = About::all();
        $dataFromDatabase6 = Struktur::all();
        $dataFromDatabase7 = Testi::all();
        $dataFromDatabase8 = Brand::all();

        View::share('data1', $dataFromDatabase1);
        View::share('data2', $dataFromDatabase2);
        View::share('data3', $dataFromDatabase3);
        View::share('data4', $dataFromDatabase4);
        View::share('data5', $dataFromDatabase5);
        View::share('data6', $dataFromDatabase6);
        View::share('data7', $dataFromDatabase7);
        View::share('data8', $dataFromDatabase8);


        return view('frontend.cp');
    }

    
    

    

    /**
     * Remove the specified resource from storage.
     */
   
}


