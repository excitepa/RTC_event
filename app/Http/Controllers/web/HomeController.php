<?php

namespace App\Http\Controllers\web;

use App\Models\Country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index($year = null)
    {
        return view('web.welcome', compact('year'));
    }

    public function about($year = null)
    {
        return view('web.about-us', compact('year'));
    }

    public function sponsor($year = null)
    {
        return view('web.be-a-sponsor', compact('year'));
    }

    public function faq($year = null)
    {
        return view('web.faq', compact('year'));
    }

    public function speakers($year = null)
    {
        return view('web.speakers', compact('year'));
    }

    public function speaker_detail($year = null)
    {
        return view('web.speaker_detail', compact('year'));
    }

    public function schedule($year = null)
    {
        return view('web.schedule', compact('year'));
    }

    public function event_detail1($year = null)
    {
        return view('web.event_detail1', compact('year'));
    }

    public function event_detail2($year = null)
    {
        return view('web.event_detail2', compact('year'));
    }

    public function event_detail3($year = null)
    {
        return view('web.event_detail3', compact('year'));
    }

    public function event_detail4($year = null)
    {
        return view('web.event_detail4', compact('year'));
    }

    public function event_detail5($year = null)
    {
        return view('web.event_detail5', compact('year'));
    }

    public function event_detail6($year = null)
    {
        return view('web.event_detail6', compact('year'));
    }

    // public function register($year = null)
    // {
    //     // $countries = Country::get($year = null);
    //     $countries = Country::orderByDesc('status', compact('year'))->get($year = null);
    //     return view('web.register', compact('countries', compact('year')));
    // }
    
    public function register($year = null)
    {
        $query = Country::orderByDesc('status');
    
        if ($year) {
            $query->where('year', $year);
        }
    
        $countries = $query->get();
    
        return view('web.register', compact('countries', 'year'));
    }

    public function vip($year = null)
    {
        return view('web.vip', compact('year'));
    }
    
    public function delegate($year = null)
    {
        return view('web.delegate', compact('year'));
    }

    public function privacy($year = null)
    {
        return view('web.privacy', compact('year'));
    }   

    public function day1_keynote_resources($year = null)
    {
        return view('web.day1_keynote_resources', compact('year'));
    }

    public function day2_keynote_resources($year = null)
    {
        return view('web.day2_keynote_resources', compact('year'));
    }

    public function panel_resources($year = null)
    {
        return view('web.panel_resources', compact('year'));
    }

    public function gallery($year = null)
    {
        return view('web.gallery', compact('year'));
    }

    public function watch_keynote1($year = null)
    {
        return view('web.watch_keynote1', compact('year'));
    }

    public function watch_panel1($year = null)
    {
        return view('web.watch_panel1', compact('year'));
    }

    public function watch_panel2($year = null)
    {
        return view('web.watch_panel2', compact('year'));
    }

    public function watch_panel3($year = null)
    {
        return view('web.watch_panel3', compact('year'));
    }
    
    public function watch_panel4($year = null)
    {
        return view('web.watch_panel4', compact('year'));
    }
    
    public function watch_panel5($year = null)
    {
        return view('web.watch_panel5', compact('year'));
    }
    
    public function watch_panel6($year = null)
    {
        return view('web.watch_panel6', compact('year'));
    }
    
    public function sit_down($year = null)
    {
        return view('web.sitdown', compact('year'));
    }

    public function video_success($year = null)
    {
        return view('web.video-resources-success', compact('year'));
    }
}
