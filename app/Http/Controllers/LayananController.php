<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Layanan::all();
        return view('admin.layanan.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.layanan.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Card1' => 'required',
                'Card2' => 'required',
                'Card3' => 'required',
                'Card4' => 'required',
                'Card5' => 'required',
                'Card6' => 'required',
                'Card7' => 'required',
                'Card8' => 'required',
                'img1' => 'mimes:jpg,png,jpeg',
                'img2' => 'mimes:jpg,png,jpeg',
                'img3' => 'mimes:jpg,png,jpeg',
                'img4' => 'mimes:jpg,png,jpeg',
                'img5' => 'mimes:jpg,png,jpeg',
                'img6' => 'mimes:jpg,png,jpeg',
                'img7' => 'mimes:jpg,png,jpeg',
                'img8' => 'mimes:jpg,png,jpeg',
                
               
            ],
        );

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

        $imageName7 = time() . '.' . $request->img7->extension();
        $request->img7->move(public_path('img7'), $imageName7);

        $imageName8 = time() . '.' . $request->img8->extension();
        $request->img8->move(public_path('img8'), $imageName8);

       

       

        $data = [
            'Judul' => $request->Judul,
            'Card1' => $request -> Card1,
            'Card2' => $request -> Card2,
            'Card3' => $request -> Card3,
            'Card4' => $request -> Card4,
            'Card5' => $request -> Card5,
            'Card6' => $request -> Card6,
            'Card7' => $request -> Card7,
            'Card8' => $request -> Card8,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
            'img4' => $imageName4,
            'img5' => $imageName5,
            'img6' => $imageName6,
            'img7' => $imageName7,
            'img8' => $imageName8,
         
            
        ];
        Layanan::create($data);
        return redirect('/layanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Layanan $layanan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Layanan::where('id', $id)->first();
        return view('admin.layanan.edit')->with('items', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate(
            [
                'Judul' => 'required',
                'Card1' => 'required',
                'Card2' => 'required',
                'Card3' => 'required',
                'Card4' => 'required',
                'Card5' => 'required',
                'Card6' => 'required',
                'Card7' => 'required',
                'Card8' => 'required',
                'img1' => 'mimes:jpg,png,jpeg',
                'img2' => 'mimes:jpg,png,jpeg',
                'img3' => 'mimes:jpg,png,jpeg',
                'img4' => 'mimes:jpg,png,jpeg',
                'img5' => 'mimes:jpg,png,jpeg',
                'img6' => 'mimes:jpg,png,jpeg',
                'img7' => 'mimes:jpg,png,jpeg',
                'img8' => 'mimes:jpg,png,jpeg',
                
               
            ],
        );

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

        $imageName7 = time() . '.' . $request->img7->extension();
        $request->img7->move(public_path('img7'), $imageName7);

        $imageName8 = time() . '.' . $request->img8->extension();
        $request->img8->move(public_path('img8'), $imageName8);

       

       

        $data = [
            'Judul' => $request->Judul,
            'Card1' => $request -> Card1,
            'Card2' => $request -> Card2,
            'Card3' => $request -> Card3,
            'Card4' => $request -> Card4,
            'Card5' => $request -> Card5,
            'Card6' => $request -> Card6,
            'Card7' => $request -> Card7,
            'Card8' => $request -> Card8,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
            'img4' => $imageName4,
            'img5' => $imageName5,
            'img6' => $imageName6,
            'img7' => $imageName7,
            'img8' => $imageName8,
         
            
        ];
        Layanan::where('id', $id)->update($data); 
        return redirect('/layanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Layanan::where('id', $id)->delete();
        return redirect('/layanan');
    }
}
