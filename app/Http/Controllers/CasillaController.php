<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Casilla;

class CasillaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $casillas = Casilla::all();
        return view('casilla/list', compact('casillas'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('casilla/create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validacion = $request->validate([
            'ubicacion' => 'required|max:100',
        ]);

        $casilla = Casilla::create($validacion);

        return redirect('casilla')->with(
            'success',
            $casilla->ubicacion . ' guardado satisfactoriamente ...'
        );
    }
    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $casilla = Casilla::find($id);
        return view(
            'casilla/edit',
            compact('casilla')
        );
    }
    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validacion = $request->validate([
            'ubicacion' => 'required|max:100',
        ]);
        Casilla::whereId($id)->update($validacion);
        return redirect('casilla')
            ->with('success', 'Actualizado correctamente...');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $casilla = Casilla::find($id);
        $casilla->delete();
        return redirect('casilla');
    }
} //--- end class
