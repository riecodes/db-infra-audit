<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class PageController extends Controller
{
    public function contact()
    {
        $contacts = Contact::active()->ordered()->get();
        return view('pages.contact', compact('contacts'));
    }
}
