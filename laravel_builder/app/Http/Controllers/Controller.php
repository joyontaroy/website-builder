<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Page;
use App\Models\Block;

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

    public function page_save(Request $request) {
        Page::where('id', $request->id)->update([
            'html' => $request->html,
        ]);
    }

    public function page_view($id) {
        $page_data    = Page::where('id', $id)->first();
        return view('page_view', ['page_data' => $page_data]);
    }

    public function get_new_block($id) {
        $new_block    = Block::where('id', $id)->first()->html;
        return $new_block;
    }

}
