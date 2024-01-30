<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Master\Category;
use App\Models\Administration\Cart\Cart;
use Illuminate\Support\Facades\Session;

class LandingController extends Controller
{
    public function menu()
    {
        $data['category'] = Category::where('id','>','1')->get();
        // dd($data['category']);
        return view('pages.landing.menu',$data);
    }

    public function menu_seller()
    {
        $user = auth()->user()->id;
        
        // greeting message
        $data['greeting'] = $this->getGreetingMessage();

        // make a query to count how much order in from buyer to seller (after order already exists)
        $data['order_in'] = Cart::where('seller_id', $user)
                        ->whereNotNull('order_id')
                        ->count();
        
        return view('pages.landing.menu-seller', $data);
    }

    public function make_product()
    {
        // $user = auth()->user()->id;
        return view('pages.landing.make-product');
    }


    private function getGreetingMessage()
    {
        date_default_timezone_set('Asia/Jakarta'); // Set your timezone here

        $hour = date('H');
        if ($hour >= 5 && $hour < 12) {
            return "Selamat pagi!";
        } else if ($hour >= 12 && $hour < 15) {
            return "Selamat siang!";
        } else if ($hour >= 15 && $hour < 18) {
            return "Selamat sore!";
        } else {
            return "Selamat malam!";
        }
    }

}