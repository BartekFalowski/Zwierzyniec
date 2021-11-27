<?php

namespace App\Http\Controllers;

use App\Models\Konduktor;
use App\Models\Cennik;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CennikController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('cennik.cennik',[
            'cennik' => Cennik::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('cennik.cennik');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $cennik = new Cennik();

        $cennik->cena = $request->cena;
        $cennik->usluga = $request->usluga;

        $relacje->save();

        return redirect()->route('cennik.cennik')->with('message', 'Usługa została dodana pomyślnie');
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
        $cennik = Cennik::find($id);

        return view('cennik.edit', ['cennik'=>$cennik]);
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
        $cennik = Cennik::find($id);

        $cennik->cena = $request->cena;
        $cennik->usluga = $request->usluga;

        $cennik->save();

        return redirect()->route('cennik.cennik')->with('message', 'Usługa została edytowana pomyślnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Cennik::destroy($id);

        return redirect()->route('cennik.cennik')->with('message', 'Usługa została usunięta pomyślnie');
    }
}
