<?php

namespace App\Http\Controllers;

use App\Issue;
use App\Returned;
use Illuminate\Http\Request;

class ReturnedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $issues = Issue::where('status', 2);
        return view('returns.index', compact('issues'));
    }

    public function getIssue()
    {
        return Issue::all();
    }
}
