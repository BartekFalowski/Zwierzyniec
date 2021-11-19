<?php

namespace App\Http\Controllers;

use App\Models\Konduktor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class KonduktorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('konduktor.konduktor',[
            'konduktors' => Konduktor::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('konduktor.konduktor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $konduktor = new Konduktor();

        $konduktor->name = $request->name;
        $konduktor->surname = $request->surname;
        $konduktor->email = $request->email;
        $konduktor->password = $request->password;
        $konduktor->phone = $request->phone;

        $konduktor->save();

        return redirect()->route('konduktor.konduktor')->with('message', 'Konduktor został dodany pomyślnie');
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit($id)
    {
        $konduktor = Konduktor::find($id);

        return view('konduktor.edit', ['konduktor'=>$konduktor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $konduktor = Konduktor::find($id);

        $konduktor->name = $request->name;
        $konduktor->surname = $request->surname;
        $konduktor->email = $request->email;
        $konduktor->phone = $request->phone;

        $konduktor->save();

        return redirect()->route('konduktor.konduktor')->with('message', 'Konduktor został edytowany pomyślnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Konduktor::destroy($id);

        return redirect()->route('konduktor.konduktor')->with('message', 'Konduktor został usunięty pomyślnie');
    }
}
