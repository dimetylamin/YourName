<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\category;
use App\Models\comic_chapter;
use App\Models\comic;
use App\Models\comic_detail;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    public function reading(Request $request)
    {
        $node_img = "https://cdn.manhwatop.com/manga_d85193a61c2dbfdede40aef6cbd30c88/chapter_0//chap_0_1.jpg";
        $node_img = $request->img;
        header('Content-Type: image/png');
        $referer = "https://manhwatop.com/manga/versatile-mage";
        $opts = array(
            'http' => array(
                'header' => array("Referer: $referer\r\n")
            )
        );
        $context = stream_context_create($opts);
        echo file_get_contents($node_img, false, $context);
    }

    public function comic_top(Request $request)
    {
        $category = category::get();
        $mode=Cookie::get('mode');
        $tag_nav = 'null';
        if ($request->val == 'new_comic') {
            $new_comic = comic::where('new', 1)->orderBy('id', 'desc')->paginate(35);
            return view('index.index_comic_top', ['category' => $category, 'comic' => $new_comic, 'tag' => 'new_comic', 'tag_nav' => $tag_nav,'mode'=>$mode]);
        } else if ($request->val == 'comic_trending') {
            $hot_comic = comic::where('trending', 1)->orderBy('id', 'desc')->paginate(35);
            return view('index.index_comic_top', ['category' => $category, 'comic' => $hot_comic, 'tag' => 'comic_trending', 'tag_nav' => $tag_nav,'mode'=>$mode]);
        } else {
            $completed_comic = comic::where('completed', 1)->orderBy('id', 'desc')->paginate(35);
            return view('index.index_comic_top', ['category' => $category, 'comic' => $completed_comic, 'tag' => 'comic_completed', 'tag_nav' => $tag_nav,'mode'=>$mode]);
        }
    }
    public function mode(Request $request)
    {
        Cookie::queue('mode',$request->mode);
    }
    public function home(Request $request)
    {
        $history = json_decode(Cookie::get('history'));
        $tag_nav = 'home';
        $mode=Cookie::get('mode');
        $category = category::get();
        $comic = comic::orderBy('id', 'desc')->paginate(35);
        $new_comic = comic::where('new', 1)->orderBy('id', 'desc')->take(10)->get();
        $hot_comic = comic::where('trending', 1)->orderBy('id', 'desc')->take(10)->get();
        $completed_comic = comic::where('completed', 1)->orderBy('id', 'desc')->take(10)->get();
        $nominations_comic = comic::where('comic_rating', '>', 45)->orderBy('id', 'desc')->take(20)->get();
        return view('index.index_home', ['category' => $category, 'comic' => $comic, 'nominations_comic' => $nominations_comic, 
        'comic_new' => $new_comic, 'hot_comic' => $hot_comic, 'completed_comic' => $completed_comic, 
        'tag_nav' => $tag_nav,'mode'=>$mode,'history'=>$history]);
    }

    //Cái Find này chưa dùng đến
    public function find(Request $request)
    {
        $tag_nav = 'null';
        $category = category::get();
        return view('index.index_findcomic', ['idcomic' => $request->idcomic, 'category' => $category, 'tag_nav' => $tag_nav]);
    }

    public function search(Request $request)
    {
        $tag_nav = 'null';
        $mode=Cookie::get('mode');
        $category = category::get();
        $new_comic = comic::where('new', 1)->orderBy('id', 'desc')->take(10)->get();
        $hot_comic = comic::where('trending', 1)->orderBy('id', 'desc')->take(10)->get();
        $completed_comic = comic::where('completed', 1)->orderBy('id', 'desc')->take(10)->get();
        $search_comic = comic::where('comic_name', 'like', '%' . $request->input_search . '%')->paginate(35);
        return view('index.index_searchcomic', ['comic' => $search_comic, 'category' => $category, 'comic_new' => $new_comic, 'hot_comic' => $hot_comic, 'completed_comic' => $completed_comic, 'tag_nav' => $tag_nav,'mode'=>$mode]);
    }
    public function category(Request $request)
    {
        $mode=Cookie::get('mode');
        $tag_nav = 'category';
        $category = category::get();
        $comic = comic::where('comic_category_name', 'like', '%' . trim($request->category_name) . '%')->paginate(35);
        $new_comic = comic::where('new', 1)->orderBy('id', 'desc')->take(10)->get();
        $hot_comic = comic::where('trending', 1)->orderBy('id', 'desc')->take(10)->get();
        $completed_comic = comic::where('completed', 1)->orderBy('id', 'desc')->take(10)->get();
        return view('index.index_category', ['category' => $category, 'comic' => $comic, 'category_name' => $request->category_name, 'comic_new' => $new_comic, 'hot_comic' => $hot_comic, 'completed_comic' => $completed_comic, 'tag_nav' => $tag_nav,'mode'=>$mode]);
    }
}
