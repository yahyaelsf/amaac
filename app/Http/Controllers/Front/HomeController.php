<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogSection;
use App\Models\Category;
use App\Models\DocsPage;
use App\Models\DocsSection;
use App\Models\Library;
use App\Models\LibraryFeature;
use App\Models\LibrarySetting;
use App\Models\LibraryUse;
use App\Models\Message;
use App\Models\TAffiliateQuestion;
use App\Models\TLibraryCategory;
use App\Models\TPlan;
use App\Models\TQuestion;
use App\Models\TStrategy;
use App\Models\TTestimonial;
use App\Models\TUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use ZipArchive;
class HomeController extends Controller
{
    public function home(){
        return view('front.home');
    }
     public function about(){
        return view('front.about');
    }
    public function goals(){
        return view('front.goals');
    }
    public function team(){
        return view('front.team');
    }
    public function teamPage(){
        return view('front.about-me');
    }
    public function works(){
        return view('front.works');
    }
    public function involved(){
        return view('front.involved');
    }
    public function contact(){
         return view('front.contact-us');
    }
}
