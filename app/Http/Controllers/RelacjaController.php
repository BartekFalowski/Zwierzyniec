<?php

namespace App\Http\Controllers;

use App\Models\Konduktor;
use App\Models\Relacje;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class RelacjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('relacje.relacje',[
            'relacjes' => Relacje::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('relacje.relacje');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $relacje = new Relacje();

        $relacje->skad = $request->skad;
        $relacje->dokad = $request->dokad;
        $relacje->przystanki = $request->przystanki;
        $relacje->data = $request->data;
        $relacje->pociag = $request->pociag;
        $relacje->timeod = $request->timeod;
        $relacje->timedo = $request->timedo;

        $relacje->save();

        return redirect()->route('relacje.relacje')->with('message', 'Relacja została dodany pomyślnie');
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
        $relacje = Relacje::find($id);

        return view('relacje.edit', ['relacje'=>$relacje]);
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
        $relacje = Relacje::find($id);

        $relacje->skad = $request->skad;
        $relacje->dokad = $request->dokad;
        $relacje->przystanki = $request->przystanki;
        $relacje->data = $request->data;
        $relacje->pociag = $request->pociag;
        $relacje->timeod = $request->timeod;
        $relacje->timedo = $request->timedo;

        $relacje->save();

        return redirect()->route('relacje.relacje')->with('message', 'Relacja została edytowana pomyślnie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        Relacje::destroy($id);

        return redirect()->route('relacje.relacje')->with('message', 'Relacja została usunięta pomyślnie');
    }
}
