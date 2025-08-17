<?php

namespace App\Http\Controllers\web;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('web.welcome');
    }

    public function about()
    {
        return view('web.about-us');
    }

    public function sponsor()
    {
        return view('web.be-a-sponsor');
    }

    public function faq()
    {
        return view('web.faq');
    }

    public function speakers()
    {
        return view('web.speakers');
    }

    public function speaker_detail()
    {
        return view('web.speaker_detail');
    }

    public function schedule()
    {
        return view('web.schedule');
    }

    public function event_detail1()
    {
        return view('web.event_detail1');
    }

    public function event_detail2()
    {
        return view('web.event_detail2');
    }

    public function event_detail3()
    {
        return view('web.event_detail3');
    }

    public function event_detail4()
    {
        return view('web.event_detail4');
    }

    public function event_detail5()
    {
        return view('web.event_detail5');
    }

    public function event_detail6()
    {
        return view('web.event_detail6');
    }

    public function register()
    {
        // $countries = Country::get();
        $countries = Country::orderByDesc('status')->get();
        return view('web.register', compact('countries'));
    }

    public function vip()
    {
        return view('web.vip');
    }

    public function privacy()
    {
        return view('web.privacy');
    }   

    public function keynote_resources()
    {
        return view('web.keynote_resources');
    }

    public function panel_resources()
    {
        return view('web.panel_resources');
    }

    public function gallery()
    {
        return view('web.gallery');
    }

    public function watch_keynote1()
    {
        return view('web.watch_keynote1');
    }

    public function watch_panel1()
    {
        return view('web.watch_panel1');
    }

    public function watch_panel2()
    {
        return view('web.watch_panel2');
    }

    public function video_success()
    {
        return view('web.video-resources-success');
    }
}

