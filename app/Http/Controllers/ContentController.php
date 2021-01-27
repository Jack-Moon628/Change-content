<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
class ContentController extends Controller
{
    public function getContent(Request $request)
    {
        error_log('---------------------------------------');
        error_log($request->id);
        $content = Content::find($request->id);
        $ret = json_encode('"'.$content->html_content.'"');
        error_log($ret);
        return $ret;
    }
}
