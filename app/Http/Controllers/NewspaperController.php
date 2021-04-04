<?php

namespace App\Http\Controllers;

use App\Newspaper;
use Illuminate\Http\Request;
use Carbon\Carbon;

class NewspaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newspapers = Newspaper::latest()->paginate(5);

        return view('newspapers.index', compact('newspapers'))
        ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newspapers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                  Newspaper::create([
                    'language' =>$request->language,
                    'name' =>$request->name,
                    'dateReceipt'=>  Carbon::createFromFormat('Y-m-d', $request->dateReceipt)->toDateString(),
                    'datePublished'=>Carbon::createFromFormat('Y-m-d', $request->datePublished)->toDateString(),
                    'pages'=>$request->pages,
                    'price'=>$request->price,
                        'type'=>$request->type,
                    'publisher'=>$request->publisher,
                  ]);

                  return redirect()->route('newspapers.index')
                  ->with('success', 'Newspapers created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return view('newspapers.show',compact('newspaper'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $newspapers = Newspaper::findOrFail($id);
      return view('newspapers.edit', compact('newspapers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Newspaper $newspaper)
    {

  //  dd ($request->all());
      $newspaper->update($request->all());


              return redirect()->route('newspapers.index')
              ->with('success', 'Newspapers updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Newspaper $newspaper)
    {
      $newspaper->delete();

      return redirect()->route('newspapers.index')
      ->with('success','Product has been deleted successfully');
    }
}
