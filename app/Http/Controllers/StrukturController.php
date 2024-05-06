<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Struktur::all();
        return view('admin.struktur.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.struktur.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'Nama1' => 'required',
                'Nama2' => 'required',
                'Nama3' => 'required',
                'Nama4' => 'required',
                'Nama5' => 'required',
                'Nama6' => 'required',
                'jabatan1' => 'required',
                'jabatan2' => 'required',
                'jabatan3' => 'required',
                'jabatan4' => 'required',
                'jabatan5' => 'required',
                'jabatan6' => 'required',
                'img1' => 'mimes:jpg,png,jpeg',
                'img2' => 'mimes:jpg,png,jpeg',
                'img3' => 'mimes:jpg,png,jpeg',
                'img4' => 'mimes:jpg,png,jpeg',
                'img5' => 'mimes:jpg,png,jpeg',
                'img6' => 'mimes:jpg,png,jpeg',
            
               
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


       

        $data = [
            'Nama1' => $request->Nama1,
            'Nama2' => $request->Nama2,
            'Nama3' => $request->Nama3,
            'Nama4' => $request->Nama4,
            'Nama5' => $request->Nama5,
            'Nama6' => $request->Nama6,
            'jabatan1' => $request -> jabatan1,
            'jabatan2' => $request -> jabatan2,
            'jabatan3' => $request -> jabatan3,
            'jabatan4' => $request -> jabatan4,
            'jabatan5' => $request -> jabatan5,
            'jabatan6' => $request -> jabatan6,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
            'img4' => $imageName4,
            'img5' => $imageName5,
            'img6' => $imageName6,
         
            
        ];
        Struktur::create($data);
        return redirect('/struktur');
    }

    /**
     * Display the specified resource.
     */
    public function show(Struktur $struktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $item = Struktur::where('id', $id)->first();
        return view('admin.struktur.edit')->with('items', $item);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $request->validate(
            [
                'Nama1' => 'required',
                'Nama2' => 'required',
                'Nama3' => 'required',
                'Nama4' => 'required',
                'Nama5' => 'required',
                'Nama6' => 'required',
                'jabatan1' => 'required',
                'jabatan2' => 'required',
                'jabatan3' => 'required',
                'jabatan4' => 'required',
                'jabatan5' => 'required',
                'jabatan6' => 'required',
                'img1' => 'mimes:jpg,png,jpeg',
                'img2' => 'mimes:jpg,png,jpeg',
                'img3' => 'mimes:jpg,png,jpeg',
                'img4' => 'mimes:jpg,png,jpeg',
                'img5' => 'mimes:jpg,png,jpeg',
                'img6' => 'mimes:jpg,png,jpeg',
            
               
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


       

        $data = [
            'Nama1' => $request->Nama1,
            'Nama2' => $request->Nama2,
            'Nama3' => $request->Nama3,
            'Nama4' => $request->Nama4,
            'Nama5' => $request->Nama5,
            'Nama6' => $request->Nama6,
            'jabatan1' => $request -> jabatan1,
            'jabatan2' => $request -> jabatan2,
            'jabatan3' => $request -> jabatan3,
            'jabatan4' => $request -> jabatan4,
            'jabatan5' => $request -> jabatan5,
            'jabatan6' => $request -> jabatan6,
            'img1' => $imageName1,
            'img2' => $imageName2,
            'img3' => $imageName3,
            'img4' => $imageName4,
            'img5' => $imageName5,
            'img6' => $imageName6,
         
            
        ];
        Struktur::where('id', $id)->update($data); 
        return redirect('/struktur');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Struktur::where('id', $id)->delete();
        return redirect('/struktur');
    }
}
