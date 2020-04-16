<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function show()
    {
        $pages = DB::table('pages')->get();
        return view('pages.show',compact('pages'));
    }

    public function store($request)
    {
        $page = new Page;
        $page->name =$request->name;
        $page->save();
        return back();
    } 

    public function delete(Page $page)
    {
        $page->delete();
        return back();
    }

    public function edit(Page $page)
    {
        return view('pages.edit',compact('page'));
    }

    public function updata(Request $request , Page $page)
    {
        $page ->updata($request->all());
        return redirect('pages/' . $page->gage_id);
    }
}
