<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Page;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function pages() {
        $pages = Page::all();
        return view('pages', ['pages' => $pages]);
    }

    public function page_edit($id) {
        $page_data    = Page::where('id', $id)->first();
        return view('page_edit', ['page_data' => $page_data]);
    }
}
