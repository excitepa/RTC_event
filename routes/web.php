<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\FormsController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\AuthController;
use App\Http\Controllers\admin\AuthController as AdminAuthController;

// Route::get('/mail', function () {
//     return view('emails.video1_resources_lead');
// });

Route::prefix('{year}')
    ->where(['year' => '2025']) // restricts it to only 2025
    ->name('rtm.')
    ->group(function () {
        
    Route::get('/', [HomeController::class, 'index'])->name('index');
    Route::get('/about-us', [HomeController::class, 'about'])->name('about');
    Route::get('/sponsor', [HomeController::class, 'sponsor'])->name('sponsor.detail');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/speakers', [HomeController::class, 'speakers'])->name('speakers');
    // Route::get('/speaker{slug}', [HomeController::class, 'speaker_detail'])->name('speaker.detail');
    Route::get('/schedule', [HomeController::class, 'schedule'])->name('schedule');
    Route::get('/event-detail/consumer-centric-marketing-strategies', [HomeController::class, 'event_detail1'])->name('event.detail1');
    Route::get('/event-detail/economic-factors-impacting-consumer-markets', [HomeController::class, 'event_detail2'])->name('event.detail2');
    Route::get('/event-detail/leveraging-technology-for-market-access', [HomeController::class, 'event_detail3'])->name('event.detail3');
    Route::get('/event-detail/understanding-consumer-trends-in-west-africa', [HomeController::class, 'event_detail4'])->name('event.detail4');
    Route::get('/event-detail/data-driven-decision-making', [HomeController::class, 'event_detail4'])->name('event.detail5');
    Route::get('/event-detail/building-effective-sales-strategies', [HomeController::class, 'event_detail4'])->name('event.detail6');
    Route::get('/keynote-resources', [HomeController::class, 'keynote_resources'])->name('keynote.resources');
    Route::get('/panel-resources', [HomeController::class, 'panel_resources'])->name('panel.resources');
    Route::post('/resources-lead', [FormsController::class, 'resources_lead'])->name('resources.lead');
    Route::get('/success-resources', [FormsController::class, 'resources_success'])->name('resources.success');
    Route::get('/video-success', [HomeController::class, 'video_success'])->name('video.resources.success');
    Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
    Route::get('/keynote1-resources', [HomeController::class, 'watch_keynote1'])->name('watch.keynote1');
    Route::get('/panel1-resources', [HomeController::class, 'watch_panel1'])->name('watch.panel1');
    Route::get('/panel2-resources', [HomeController::class, 'watch_panel2'])->name('watch.panel2');
    Route::get('/panel3-resources', [HomeController::class, 'watch_panel3'])->name('watch.panel3');
    // Route::get('/keynote1-resources', [HomeController::class, 'watch_keynote1'])->name('watch.keynote1');
    // Route::get('/download/keynote/{file}', [FormsController::class, 'downloadKeynote'])->name('download.keynote');
    // Route::get('/download/day1', [FormsController::class, 'downloadDay1'])->name('download.day1');
    // Route::get('/download/day2', [FormsController::class, 'downloadDay2'])->name('download.day2');
    Route::get('/download/day1', [FormsController::class, 'downloadDay1'])
        ->name('download.day1')
        ->middleware('signed');

    Route::get('/download/day2', [FormsController::class, 'downloadDay2'])
        ->name('download.day2')
        ->middleware('signed');
    Route::get('/register', [HomeController::class, 'register'])->name('register');
    Route::get('/Register', function () {return redirect()->route('register');});
    Route::get('/vip', [HomeController::class, 'vip'])->name('vip');
    Route::post('/newsletter', [FormsController::class, 'newsletter'])->name('newsletter.submit');
    Route::post('/sponsor-inquiry', [FormsController::class, 'inquiry'])->name('inquiry');
    Route::post('/attendee', [FormsController::class, 'attendee'])->name('attendee.signup');
    Route::post('/vip-submit', [FormsController::class, 'vip_submit'])->name('vip.submit');
    Route::get('/attendee-registered', [FormsController::class, 'eventRegistered'])->name('event.registered');
    Route::get('/vip-registered', [FormsController::class, 'vipRegistered'])->name('vip.registered');
    Route::post('/contact', [FormsController::class, 'contact'])->name('contact');
    Route::get('/privacypolicy', [HomeController::class, 'privacy'])->name('privacy');
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about-us', [HomeController::class, 'about'])->name('about');
Route::get('/participate', [HomeController::class, 'sponsor'])->name('sponsor.detail');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/speakers', [HomeController::class, 'speakers'])->name('speakers');
// Route::get('/speaker{slug}', [HomeController::class, 'speaker_detail'])->name('speaker.detail');
Route::get('/schedule', [HomeController::class, 'schedule'])->name('schedule');
Route::get('/event-detail/consumer-centric-marketing-strategies', [HomeController::class, 'event_detail1'])->name('event.detail1');
Route::get('/event-detail/economic-factors-impacting-consumer-markets', [HomeController::class, 'event_detail2'])->name('event.detail2');
Route::get('/event-detail/leveraging-technology-for-market-access', [HomeController::class, 'event_detail3'])->name('event.detail3');
Route::get('/event-detail/understanding-consumer-trends-in-west-africa', [HomeController::class, 'event_detail4'])->name('event.detail4');
Route::get('/event-detail/data-driven-decision-making', [HomeController::class, 'event_detail4'])->name('event.detail5');
Route::get('/event-detail/building-effective-sales-strategies', [HomeController::class, 'event_detail4'])->name('event.detail6');
Route::get('/keynote-resources', [HomeController::class, 'keynote_resources'])->name('keynote.resources');
Route::get('/panel-resources', [HomeController::class, 'panel_resources'])->name('panel.resources');
Route::get('/event-resources', [HomeController::class, 'resources'])->name('event-resources');
Route::post('/resources-lead', [FormsController::class, 'resources_lead'])->name('resources.lead');
Route::get('/resources-success', [FormsController::class, 'resources_success'])->name('resources.success');
Route::get('/video-success', [HomeController::class, 'video_success'])->name('video.resources.success');
Route::get('/panel1-resources', [HomeController::class, 'watch_panel1'])->name('watch.panel1');
Route::get('/panel2-resources', [HomeController::class, 'watch_panel2'])->name('watch.panel2');
Route::get('/panel3-resources', [HomeController::class, 'watch_panel3'])->name('watch.panel3');
Route::get('/panel5-resources', [HomeController::class, 'watch_panel5'])->name('watch.panel5');
Route::get('/panel6-resources', [HomeController::class, 'watch_panel6'])->name('watch.panel6');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/keynote1-resources', [HomeController::class, 'watch_keynote1'])->name('watch.keynote1');
Route::get('/download/day1', [FormsController::class, 'downloadDay1'])
    ->name('download.day1')
    ->middleware('signed');

Route::get('/download/day2', [FormsController::class, 'downloadDay2'])
    ->name('download.day2')
    ->middleware('signed');
Route::get('/register', [HomeController::class, 'register'])->name('register');
Route::get('/vip', [HomeController::class, 'vip'])->name('vip');
Route::post('/newsletter', [FormsController::class, 'newsletter'])->name('newsletter.submit');
Route::post('/sponsor-inquiry', [FormsController::class, 'inquiry'])->name('inquiry');
Route::post('/attendee', [FormsController::class, 'attendee'])->name('attendee.signup');
Route::post('/vip-submit', [FormsController::class, 'vip_submit'])->name('vip.submit');
Route::get('/attendee-registered', [FormsController::class, 'eventRegistered'])->name('event.registered');
    Route::get('/inquiry-successful', [FormsController::class, 'inquirySuccessful'])->name('inquiry.successful');
Route::get('/vip-registered', [FormsController::class, 'vipRegistered'])->name('vip.registered');
Route::post('/contact', [FormsController::class, 'contact'])->name('contact');
Route::get('/privacypolicy', [HomeController::class, 'privacy'])->name('privacy');

Route::get('/login', [AdminAuthController::class, 'login'])->name('login');
Route::post('/admin-login', [AdminAuthController::class, 'admin_login'])->name('admin.login');


Route::group(['middleware' => 'auth'], function()
{
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('attendees', [DashboardController::class, 'attendee'])->name('attendee');
    Route::get('export/attendees', [DashboardController::class, 'export_attendee'])->name('export.attendee');
    
    Route::get('resource-lead', [DashboardController::class, 'resource_lead'])->name('admin.resources.lead');
    Route::get('export/resource-lead', [DashboardController::class, 'export_resource_lead'])->name('export.resources.lead');
    
    Route::get('/generate-codes', [DashboardController::class, 'generateAndDownload'])->name('generate.codes');
    
    Route::get('vip-list', [DashboardController::class, 'vip'])->name('vip');
    Route::get('export/vip', [DashboardController::class, 'export_vip'])->name('export.vip');

    Route::get('newsletters', [DashboardController::class, 'newsletter'])->name('newsletter');
    Route::get('export/newsletters', [DashboardController::class, 'export_newsletter'])->name('export.newsletter');

    Route::get('sponsor_inquiry', [DashboardController::class, 'sponsor_inquiry'])->name('sponsor');
    Route::get('export/sponsor_inquiry', [DashboardController::class, 'export_sponsor_inquiry'])->name('export.sponsor');

    Route::get('contact', [DashboardController::class, 'contact'])->name('contact');
    Route::get('export/contact', [DashboardController::class, 'export_contact'])->name('export.contact');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    // Route::get('/categories', [CategoryController::class, 'index'])->name('admin.category.index');

    // Route::controller(AdminController::class)->group(function () {
    //     Route::group(["prefix" => "admin"], function ()
    //     {
    //         Route::get('/index', 'index')->name('admin.users.admins');
    //         Route::post('create-admin', 'createAdmin')->name('admin.admins.create');
    //         Route::put('edit-admin/{user_id}', 'updateAdmin')->name('admin.admins.edit');
    //         Route::delete('delete-admin/{user_id}', 'deleteAdmin')->name('admin.admins.delete');
    //     });
    // });



});









