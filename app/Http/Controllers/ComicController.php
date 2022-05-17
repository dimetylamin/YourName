<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\comic;
use App\Models\comic_detail;
use App\Models\comic_chapter;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Redirect;



class ComicController extends Controller
{
    public function comic_detail(Request $request)
    {

        // Cookie::queue(Cookie::forget('history'));
        // $cookie = Cookie::get('history');
        // return  $cookie ;
        $history = json_decode(Cookie::get('history'));
        $tag_nav = 'null';
        $category = category::get();
        $mode = Cookie::get('mode');
        $comic = comic::where('comic_slug', $request->idcomic)->first();
        if ($comic != null) {
            $new_comic = comic::where('new', 1)->orderBy('id', 'desc')->take(10)->get();
            $hot_comic = comic::where('trending', 1)->orderBy('id', 'desc')->take(10)->get();
            $completed_comic = comic::where('completed', 1)->orderBy('id', 'desc')->take(10)->get();
            $comic_chapter = comic_chapter::where('comic_slug', $comic->comic_slug)->orderBy('order', 'desc')->get();
            $chapter_min = comic_chapter::where('comic_slug', $comic->comic_slug)->orderby('order', 'asc')->first();
            $chapter_max = comic_chapter::where('comic_slug', $comic->comic_slug)->orderby('order', 'desc')->first();
            return view('index.index_comicdetail', [
                'comic' => $comic, 'comic_chapter' => $comic_chapter,
                'category' => $category, 'chapter_min' => $chapter_min,
                'chapter_max' => $chapter_max, 'comic_new' => $new_comic,
                'hot_comic' => $hot_comic, 'completed_comic' => $completed_comic,
                'tag_nav' => $tag_nav, 'mode' => $mode, 'history' => $history
            ]);
        } else
            return view('index.infomation', ['infomation' => 'Comics does not exist in the system', 'category' => $category, 'tag_nav' => $tag_nav, 'mode' => $mode]);
    }
    public function readchapter(Request $request)
    {
        $flag = false;
        $obj = array();

        if (Cookie::has('history')) {
            $history = Cookie::get('history');
            $obj = json_decode($history);
        }

        $tag_nav = 'null';
        $category = category::get();
        $mode = Cookie::get('mode');
        $comic = comic::where('comic_slug', $request->idcomic)->first();
        if ($comic != null) {
            $chapter = comic_chapter::where(['comic_slug' => $comic->comic_slug, 'chapter_slug' => $request->idchapter])->first();

            if ($chapter != null) {

                // foreach ($obj as $key => $value) {
                //     if ($obj[$key]->id ==  $comic->comic_slug) {

                //         unset($obj[$key]->chapter_name);
                //         $obj[$key]->chapter_name = $chapter->chapter_name;
                //     }
                // }

                $comic_page = comic_detail::where(['comic_slug' => $comic->comic_slug, 'chapter_slug' => $chapter->chapter_slug])->orderby('order', 'asc')->get();
                $listchapter = comic_chapter::where('comic_slug', $comic->comic_slug)->orderby('order', 'desc')->get();
                $min_chapter = comic_chapter::where('comic_slug', $comic->comic_slug)->orderby('order', 'asc')->first();
                $max_chapter = comic_chapter::where('comic_slug', $comic->comic_slug)->orderby('order', 'desc')->first();
                $comic_name = $comic->comic_name;
                $comic_thumb = $comic->comic_thumb;
                $cookie[] = array('id' => $request->idcomic, 'comic_name' => $comic_name, 'comic_thumb' =>  $comic_thumb, 'chapter_name' => $chapter->chapter_name);

                if (Cookie::has('history')) {
                    // $history = array();
                    $stemp = false;
                    $history = json_decode($request->cookie('history'));
                    foreach ($history as $history_item) {
                        if ($history_item->id == $request->idcomic)
                            $stemp = true;
                    }
                    if ($stemp != true) {
                        array_push($history, array('id' => $comic->comic_slug, 'comic_name' => $comic_name, 
                        'comic_thumb' =>  $comic_thumb, 'chapter_name' => $chapter->chapter_name));
                        
                        return response()->view('index.index_readcomic', [
                            'comic_page' => $comic_page, 'listchapter' => $listchapter,
                            'category' => $category, 'comic' => $comic, 'chapter' => $chapter, 'min_chapter'
                            => $min_chapter, 'max_chapter' => $max_chapter, 'tag_nav' => $tag_nav, 'mode' => $mode
                        ]) ->cookie('history', json_encode($history), 1000000);
                    } else {
                        return response()->view('index.index_readcomic', [
                            'comic_page' => $comic_page, 'listchapter' => $listchapter,
                            'category' => $category, 'comic' => $comic, 'chapter' => $chapter, 'min_chapter'
                            => $min_chapter, 'max_chapter' => $max_chapter, 'tag_nav' => $tag_nav, 'mode' => $mode
                        ]);
                    }
                } else {
                    return response()->view('index.index_readcomic', [
                        'comic_page' => $comic_page, 'listchapter' => $listchapter,
                        'category' => $category, 'comic' => $comic, 'chapter' => $chapter, 'min_chapter'
                        => $min_chapter, 'max_chapter' => $max_chapter, 'tag_nav' => $tag_nav, 'mode' => $mode
                    ])
                        ->cookie('history', json_encode($cookie), 1000000);
                }
                // end_history
                // return response()->view('index.index_readcomic', [
                //     'comic_page' => $comic_page, 'listchapter' => $listchapter,
                //     'category' => $category, 'comic' => $comic, 'chapter' => $chapter, 'min_chapter'
                //     => $min_chapter, 'max_chapter' => $max_chapter, 'tag_nav' => $tag_nav, 'mode' => $mode
                // ])
                //     ->cookie('history', json_encode($obj), 1000000);
            } else {
                return view('index.infomation', ['infomation' => 'This chapter does not exist in the system', 'category' => $category, 'tag_nav' => $tag_nav, 'mode' => $mode]);
            }
        } else {
            return view('index.infomation', ['infomation' => 'Comics does not exist in the system', 'category' => $category, 'tag_nav' => $tag_nav, 'mode' => $mode]);
        }
    }
    public function prev_comic(Request $request)
    {
        $comic_prev = comic_chapter::where(['comic_slug' => $request->idcomic, 'order' => $request->orderchapter - 1])->first();
        if ($comic_prev != null) {
            return redirect()->route('readchapter', ['idcomic' => $comic_prev->comic_slug, 'idchapter' => $comic_prev->chapter_slug]);
        }
    }
    public function next_comic(Request $request)
    {
        $comic_next = comic_chapter::where(['comic_slug' => $request->idcomic, 'order' => $request->orderchapter + 1])->first();
        if ($comic_next != null) {
            return redirect()->route('readchapter', ['idcomic' => $comic_next->comic_slug, 'idchapter' => $comic_next->chapter_slug]);
        }
    }

    public function delete_all_cookie(Request $request)
    {
        Cookie::queue(Cookie::forget('history'));
        return Redirect::to('/');
    }

    public function remove_cookie(Request $request)
    {

        $obj = array();

        if (Cookie::has('history')) {
            $history = Cookie::get('history');
            $obj = json_decode($history);
        }

        $id = $request->idcomic;

        foreach ($obj as $obj_item) {
            if ($obj_item->id ==  $id) {
                unset($obj_item);
            }
        }

        return Redirect::to('/')->cookie('history', json_encode($obj), 1000000);;
    }
}
