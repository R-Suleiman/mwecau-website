<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Http\Request;
use App\Http\Requests\FooterRequest;

class FooterController extends Controller
{
    public function show()
    {

    }
    public function storeFooter(FooterRequest $request)
    {
        Footer::create($request->validated());
    }
    public function edit(FooterRequest $id)
    {

    }
    public function update($id)
    {
        Footer::update($request->validated());
    }
}
