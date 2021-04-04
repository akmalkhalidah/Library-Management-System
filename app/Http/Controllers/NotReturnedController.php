<?php

namespace App\Http\Controllers;

use App\Issue;
use App\NotReturned;
use Illuminate\Http\Request;

class NotReturnedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index ()
    {
        $issues = $this->getIssue()->where('status', 3);
        return view('notreturns.index', compact('issues'));
    }

    public function getIssue()
    {
        return Issue::all();
    }
}
