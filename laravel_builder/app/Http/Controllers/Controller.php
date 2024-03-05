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

    public function page_render($id) {
        $page_data    = Page::where('id', $id)->first();
        // $page_data    = '<div class="old" id="oldId">Old Content</div> <div class="new" id="newId">Untouched Content</div>';

        // Load the HTML string into a DOMDocument
        $dom = new \DOMDocument;
        @$dom->loadHTML($page_data->html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

        // Find all div elements with the class attribute 'old'
        $xpath = new \DOMXPath($dom);
        $elements = $xpath->query('//div[@content_type="top_header_social_bar_1"]');

        // Replace each found element with new content
        foreach ($elements as $element) {
            $newElement = $dom->createElement('top_header_social_bar_1', '');
            

            // Replace the old element with the new one
            $element->parentNode->replaceChild($newElement, $element);
        }

        // Get the modified HTML
        $modifiedHtml = $dom->saveHTML();

        // Replace the new html with dynamic content
        $newElementContent = '<div class="col-lg-6 col-md-6">
            <div class="sub-header-left right-sub">
                <ul class="d-flex">
                    <li><a href="http://instagram.com/creativeitem"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://facebook.com/creativeitem"><i class="fa-brands fa-square-facebook"></i></a></li>
                    <li><a href="https://facebook.com/creativeitem"><i class="fa-brands fa-square-behance"></i></a></li>
                </ul>
            </div>
        </div>';
        $modifiedString = str_replace('<top_header_social_bar_1></top_header_social_bar_1>', $newElementContent, $modifiedHtml);



        return view('page_render', ['page_data' => $modifiedString]);
    }

    public function get_new_block($id) {
        $new_block    = Block::where('id', $id)->first()->html;
        return $new_block;
    }

    public function create_new_block($id) {
        $block_list    = Block::all();
        $parent_block_id      = $id;
        return view('block_create', [ 'block_list' => $block_list, 'parent_block_id' => $parent_block_id ]);
    }

    public function edit_block($id, $content_type) {
        $parent_block_id        = $id;
        $content_type           = $content_type;
        return view('block_edit', [ 'parent_block_id' => $parent_block_id, 'content_type' => $content_type ]);
    }

    public function upload_block_image(Request $request) {
        $image = $request->file('file');
        $path = $image->move( 'uploads/' , $image->getClientOriginalName());
        $imageUrl = asset($path);
        return $imageUrl;
        // return $image->getClientOriginalName();
        
        
        // if ($request->hasFile('file')) {
        //     $request->file('file')->store('uploads');
        //     return response()->json(['message' => 'File uploaded successfully.']);
        // }
        
    }

    public function get_block_html($id) {
        $block_html    = Block::where('id', $id)->first()->html;
        return $block_html;
    }

}
