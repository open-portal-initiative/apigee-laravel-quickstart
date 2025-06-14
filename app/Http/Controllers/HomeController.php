<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use NinjaPortal\Shadow\Controllers\PagesController;

class HomeController extends PagesController
{
    public function welcome()
    {
        $products = $this->apiProductService->public();
        $faqs = Faq::latest()->limit(3)->get();
        return view('welcome',compact('products','faqs'));
    }
}
