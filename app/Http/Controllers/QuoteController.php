<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class QuoteController extends Controller
{
    /**
     * Display the quote page.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return Inertia::render('Quote/Index');
    }
}
