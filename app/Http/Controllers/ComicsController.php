<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comic;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::orderBy('id', 'desc')->get();
        return view('homepage', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate( 
                                [
                                    'title' => 'required|max:255|min:5',
                                    'description' => 'required|max:65535|min:5',
                                    'thumb' => 'required|url',
                                    'price' => 'required|min:2|max:30',
                                    'series' => 'required|min:3|max:50',
                                    'sale_date' => 'required|date',
                                    'type' => 'required|max:40',
                                ]
                            );

        $dati = $request->all();

        $newComic = new Comic();
        $newComic->fill($dati);
        $newComic->save();

        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        return view('show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        return view('edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $newComic)
    {

        $request->validate( 
                                [
                                    'title' => 'required|max:255|min:5',
                                    'description' => 'required|max:65535|min:5',
                                    'thumb' => 'required|url',
                                    'price' => 'required|min:2|max:30',
                                    'series' => 'required|min:3|max:50',
                                    'sale_date' => 'required|date',
                                    'type' => 'required|max:40',
                                ]
                            );
        

        $dati = $request->all();
        $newComic->update($dati);
        $newComic->save();
    
        return redirect()->route('comics.edit', ['comic' => $newComic->id])->with('status', 'Applicato con successo!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newComic = Comic::FindOrFail($id);

        $newComic->delete();
        return redirect()->route('comics.index');
    }
}
