<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

<<<<<<< HEAD
<<<<<<< HEAD
Route::view('/', 'index');
Route::view('/contact', 'contact-us.index');
=======
Route::get('/', function(){return view('index');})->name('index');
=======
Route::view('/', 'index')->name('index');

>>>>>>> 3bf6f26c043fa36058bcb804f11b102b551e5dfb
Route::group(['prefix'=> 'about','as'=>'about.'],function(){
    Route::view('vision-and-core-values', 'about.vision_core_values')->name('vision-and-core-values');
    Route::view('ourway', 'about.ourway')->name('ourway');
    Route::view('safety', 'about.safety')->name('safety');
    Route::view('quality', 'about.quality')->name('quality');
    Route::view('sustainability', 'about.sustainability')->name('sustainability');
    Route::view('technology', 'about.technology')->name('technology');
    Route::view('history', 'about.history')->name('history');
    Route::view('community', 'about.community')->name('community');
    Route::view('employee-diversity', 'about.employee-diversity')->name('employee-diversity');
    Route::view('news-center', 'about.news-center')->name('news-center');
    Route::view('leadership', 'about.leadership')->name('leadership');
    Route::view('recognition-awards', 'about.recognition-awards')->name('recognition-awards');
    Route::view('trade-partners', 'about.trade-partners')->name('trade-partners');
});

Route::view('contact-us','contact-us.index')->name('contact');
// Route::group(['prefix'=> 'contact-us'],function(){
    // Route::view('/', '')->name('inde');
    // Route::view('hydro', '')->name('');
    // Route::view('mid-atlantic', '')->name('');
    // Route::view('mid-south', '')->name('');
    // Route::view('northern-california', '')->name('');
    // Route::view('pacific', '')->name('');
    // Route::view('pacific-northwest', '')->name('');
    // Route::view('plains', '')->name('');
    // Route::view('southeast', '')->name('');
    // Route::view('southern-california', '')->name('');
    // Route::view('southwest', '')->name('');
    // Route::view('western', '')->name('');
// });

Route::group(['prefix'=> 'projects','as'=> 'projects.'],function(){
    Route::view('/', 'projects.index')->name('index');
    Route::view('eagle-county-regional-airport-expansion-remodel', 'industry.aviation')->name('eagle-county-regional-airport-expansion-remodel');
});
Route::group(['prefix'=> 'industry','as'=> 'industry.'],function(){
    Route::view('aviation', 'industry.aviation')->name('aviation');
    Route::view('commercial', 'industry.commercial')->name('commercial');
    Route::view('education', 'industry.education')->name('education');
    Route::view('government-justice', 'industry.government-justice')->name('government-justice');
    Route::view('healthcare', 'industry.healthcare')->name('healthcare');
    Route::view('hospitality', 'industry.hospitality')->name('hospitality');
    Route::view('infrastructure-transportation', 'industry.infrastructure-transportation')->name('infrastructure-transportation');
    Route::view('science-technology', 'industry.science-technology')->name('science-technology');
    Route::view('water-wastewater', 'industry.water-wastewater')->name('water-wastewater');
});
    

Route::group(['prefix'=> 'what-we-do','as'=>'what-we-do.'],function(){
    Route::view('/', 'what-we-do.index')->name('index');
    Route::view('development', 'what-we-do.development')->name('development');
    Route::view('construction', 'what-we-do.construction')->name('construction');
    Route::view('facility-services', 'what-we-do.facility-services')->name('facility-services'); 
});
Route::group(['prefix'=> 'careers','as'=> 'careers.'],function(){
    Route::view('/', 'careers.index')->name('index');
<<<<<<< HEAD
<<<<<<< HEAD
    Route::view('job-search', '')->name('job-search');
    Route::view('recruiting-events', '')->name('recruiting-events');
    Route::view('career-paths', '')->name('career-paths'); 
    Route::view('internships', '')->name('internships'); 
    Route::view('graduates', '')->name('graduates'); 
    Route::view('experienced', '')->name('experienced'); 
    Route::view('craft', '')->name('craft'); 
    Route::view('careers-facility-services', '')->name('careers-facility-services'); 
    Route::view('trainings', '')->name('trainings'); 
    Route::view('employment-email-fraud-warning', '')->name('employment-email-fraud-warning'); 
    Route::view('equal-opportunity-employer', '')->name('equal-opportunity-employer'); 
});
>>>>>>> 02028c9ede1ba1de425324caf3f60f4ef5e406a3
=======
    Route::view('job-search', 'careers.index')->name('job-search');
    Route::view('recruiting-events', 'careers.index')->name('recruiting-events');
    Route::view('career-paths', 'careers.index')->name('career-paths'); 
    Route::view('internships', 'careers.index')->name('internships'); 
    Route::view('graduates', 'careers.index')->name('graduates'); 
    Route::view('experienced', 'careers.index')->name('experienced'); 
    Route::view('craft', 'careers.index')->name('craft'); 
    Route::view('careers-facility-services', 'careers.index')->name('careers-facility-services'); 
    Route::view('trainings', 'careers.index')->name('trainings'); 
    Route::view('employment-email-fraud-warning', 'careers.index')->name('employment-email-fraud-warning'); 
    Route::view('equal-opportunity-employer', 'careers.index')->name('equal-opportunity-employer'); 
});
>>>>>>> 3bf6f26c043fa36058bcb804f11b102b551e5dfb
=======
    Route::view('job-search', 'careers.job-search')->name('job-search');
    Route::view('recruiting-events', 'careers.recruiting-events')->name('recruiting-events');
    Route::view('career-paths', 'careers.career-paths')->name('career-paths'); 
    Route::view('internships', 'careers.internships')->name('internships'); 
    Route::view('graduates', 'careers.graduates')->name('graduates'); 
    Route::view('experienced', 'careers.experienced')->name('experienced'); 
    Route::view('craft', 'careers.craft')->name('craft'); 
    Route::view('careers-facility-services', 'careers.careers-facility-services')->name('careers-facility-services'); 
    Route::view('trainings', 'careers.trainings')->name('trainings'); 
    Route::view('employment-email-fraud-warning', 'careers.employment-email-fraud-warning')->name('employment-email-fraud-warning'); 
    Route::view('equal-opportunity-employer', 'careers.equal-opportunity-employer')->name('equal-opportunity-employer'); 
});
>>>>>>> 2b319d001071e561e62af3b12816dda8a7c1698f
