<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page with a limited number of products.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        // Check if the user clicked to show more products
        $showMore = $request->has('show_more') && $request->show_more == 'true';

        // If showing more products, get all products, else get only the first 4
        $products = $showMore ? Product::all() : Product::limit(4)->get();

        // Pass both $products and $showMore to the view
        return view('home.home', compact('products', 'showMore'));
    }
    /**
     * Show all products.
     *
     * @return \Illuminate\View\View
     */
    public function showAll()
    {
        $products = Product::all();
        return view('home.show_all', compact('products'));
    }
}
