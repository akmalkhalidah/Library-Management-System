<?php

namespace App\Http\Controllers;

use App\Magazine;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MagazineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $magazines = Magazine::latest()->paginate(5);

        return view('magazines.index', compact('magazines'))
        ->with('i',(request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('magazines.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

                  Magazine::create([
                    'type' =>$request->type,
                    'name' =>$request->name,
                    'dateReceipt'=>  Carbon::createFromFormat('Y-m-d', $request->dateReceipt)->toDateString(),
                    'datePublished'=>Carbon::createFromFormat('Y-m-d', $request->datePublished)->toDateString(),
                    'pages'=>$request->pages,
                    'price'=>$request->price,
                    'publisher'=>$request->publisher,
                  ]);

                  return redirect()->route('magazines.index')
                  ->with('success', 'Magazines created successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return view('magazines.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $magazines = Magazine::findOrFail($id);
      return view('magazines.edit', compact('magazines'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Magazine $magazine)
    {

  //  dd ($request->all());
      $magazine->update($request->all());


              return redirect()->route('magazines.index')
              ->with('success', 'Books updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Magazine  $magazine
     * @return \Illuminate\Http\Response
     */
    public function destroy(Magazine $magazine)
    {
      $magazine->delete();

      return redirect()->route('magazines.index')
      ->with('success','Product has been deleted successfully');
    }
}
