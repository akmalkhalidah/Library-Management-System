<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

use Carbon\Carbon;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $books = Book::latest()->paginate(5);

      return view('books.index', compact('books'))
      ->with('i', (request()->input('page',1) -1) *5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $request->validate([
        'isbn' => 'required|integer',
          'title' => 'required',
            'type' => 'required',
              'name' => 'required',
                'qty' => 'required',
                  'date' => 'required',
                    'edition' => 'required',
                      'price' => 'required',
                        'pages' => 'required',
                          'publisher' => 'required',
      ]);

      Book::create([
        'isbn' =>$request->isbn,
        'title' =>$request->title,
        'type'=> $request->type,
        'name'=>$request->name,
        'qty'=>$request->qty,
        'date'=>$request->date,
        'edition'=>$request->edition,
        'price'=>$request->price,
        'pages'=>$request->pages,
        'publisher'=>$request->publisher
      ]);

      return redirect()->route('books.index')
      ->with('success', 'Books created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
          return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function edit($id)
    {
      $books = Book::findOrFail($id);
      return view('books.edit', compact('books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {

$book->update($request->all());


        return redirect()->route('books.index')
        ->with('success', 'Books updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
        ->with('success','Product has been deleted successfully');
    }
}
