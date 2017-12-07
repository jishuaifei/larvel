<?php
namespace App\Http\Controllers\Home;
use App\Http\Controllers\Controller;
class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }
}
?>