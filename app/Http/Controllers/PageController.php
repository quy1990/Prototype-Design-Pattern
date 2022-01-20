<?php

namespace App\Http\Controllers;

use App\Http\Services\Pages\Author;
use App\Http\Services\Pages\Page;

class PageController extends Controller
{
    public function index()
    {
        $author = new Author('quy');
        $page = new Page('Programming', 'Programming', $author);
        $page->addComment("Nice tip, thanks!");
        $page->toString();
        
        $draft = clone $page;
        $draft->toString();
    }
}
