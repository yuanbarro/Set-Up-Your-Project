<?php
    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class FootFitsController extends Controller
    {
        function index ()
        {
            return view('home');
        }
        function aboutus ()
        {
            return view('aboutus');
        }
        function contactus ()
        {
            return view('contactus');
        }
        function products ()
        {
            return view('products');
        }
    }
?>