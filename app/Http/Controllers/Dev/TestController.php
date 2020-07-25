<?php

namespace App\Http\Controllers\Dev;

use App\Http\Controllers\Controller;
use App\Http\Resources\Alert\ErrorResource;
use App\Models\Category;
use App\Models\Market;
use App\Models\Product;
use Corcel\Model\Post;
use Illuminate\Http\Request;

class TestController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
        return $request->all();
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
