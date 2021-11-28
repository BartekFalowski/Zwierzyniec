<?php

namespace App\Http\Controllers;

use App\Models\Zwierze;
use Illuminate\Http\Request;

class ZwierzeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('zwierzeta.zwierze',[
            'zwierzes' => Zwierze::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('zwierzes.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $zwierze = new Zwierze();

        $zwierze->name = $request->name;
        $zwierze->rasa = $request->rasa;
        $zwierze->plec = $request->plec;

        $zwierze->save();

        return redirect()->route('zwierzes.store');
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
        $zwierze = Zwierze::find($id);

        return view('zwierzes.edit', ['zwierze'=>$zwierze]);
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
        $zwierze = Zwierze::find($id);

        $zwierze->name = $request->name;
        $zwierze->surname = $request->surname;
        $zwierze->email = $request->email;

        $zwierze->save();

        return redirect()->route('zwierzes.index')->with('message', 'Zwierze zostało edytowane pomyślnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Zwierze::destroy($id);

        return redirect()->route('zwierzes.index')->with('message', 'Zwierze zostało usunięte pomyślnie');
    }
}
