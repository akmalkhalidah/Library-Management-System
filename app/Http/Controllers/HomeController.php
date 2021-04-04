<?php

namespace App\Http\Controllers;
use App\Book;
use App\Magazine;
use App\Newspaper;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {

      $countBooks = Book::count();
        $countMagazines = Magazine::count();
        $countNewspapers = Newspaper::count();
        return view('dashboard', compact('countBooks', 'countMagazines', 'countNewspapers'));


    }
}
