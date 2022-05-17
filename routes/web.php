<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;

//Page

Route::any('/',[HomeController::class,'home'])->name('home');

Route::any('/comic/{idcomic}',[ComicController::class,'comic_detail'])->name('comic_detail');

Route::any('/comic/{idcomic}/{idchapter}',[ComicController::class,'readchapter'])->name('readchapter');

Route::any('/find',[HomeController::class,'find'])->name('find');

Route::any('/category/{category_name}',[HomeController::class,'category'])->name('category');

Route::any('/search',[HomeController::class,'search'])->name('search');

Route::any('/reading',[HomeController::class,'reading'])->name('reading');

Route::any('/prev_comic',[ComicController::class,'prev_comic'])->name('prev_comic');

Route::any('/chapterlist_hand',[ComicController::class,'chapterlist_hand'])->name('chapterlist-hand');

Route::any('/next_comic',[ComicController::class,'next_comic'])->name('next_comic');

Route::any('/comic_top',[HomeController::class,'comic_top'])->name('comic_top');

Route::any('/mode',[HomeController::class,'mode'])->name('mode');

Route::any('/delete_all_cookie',[ComicController::class,'delete_all_cookie'])->name('delete_all_cookie');

Route::any('/remove_cookie/{idcomic}',[ComicController::class,'remove_cookie'])->name('remove_cookie');






