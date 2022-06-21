<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function about()
    {
        return "About us page";
    }

    public function contact()
    {
        return "contact page";
    }

    public function submitContact()
    {
        return "Submitted Contact";
    }
}
