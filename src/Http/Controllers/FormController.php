<?php

namespace Jsxfardin\LaravelFormBuilder\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FormController extends Controller
{

    public function index()
    {
        dd('form called');
        // return view('contact::contact');
    }

    public function store(Request $request)
    {

        // Contact::create($request->all());

        return redirect(url('contact'));
    }

    public function show($id)
    {

        // return Contact::find($id);
    }
}
