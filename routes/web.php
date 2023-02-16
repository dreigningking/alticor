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

Route::get('/', function(){return view('index');})->name('index');

Route::view('privacy', 'privacy')->name('privacy');
Route::view('trade-partners', 'index')->name('trade-partners');

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
    
});

Route::view('contact-us','contact')->name('contact');


Route::group(['prefix'=> 'projects','as'=> 'projects.'],function(){
    Route::view('/', 'projects.index')->name('index');
    Route::view('eagle-county-regional-airport-expansion-remodel', 'industry.aviation')->name('eagle-county-regional-airport-expansion-remodel');
    Route::view('300-third-tower-condominiums', '300-third-tower-condominiums')->name('300-third-tower-condominiums');
    Route::view('701-rio', '701-rio')->name('701-rio');
    Route::view('1144-15th-street-office-building', '1144-15th-street-office-building')->name('1144-15th-street-office-building');
    Route::view('2400-nueces', '2400-nueces')->name('2400-nueces');
    Route::view('mcgregor-square','projects.mcgregor-square')->name('mcgregor-square');
    Route::view('foreign-affairs-security-training-center-fastc-contracts-1-3','foreign-affairs-security-training-center-fastc-contracts-1-3')->name('foreign-affairs-security-training-center-fastc-contracts-1-3');
    Route::view('aegis-ashore-missile-defense-test-complex', 'aegis-ashore-missile-defense-test-complex')->name('aegis-ashore-missile-defense-test-complex');
    Route::view('alaska-airlines-north-main-terminal-redevelopment-project-at-sea', 'alaska-airlines-north-main-terminal-redevelopment-project-at-sea')->name('alaska-airlines-north-main-terminal-redevelopment-project-at-sea');
    Route::view('allure-apollo', 'allure-apollo')->name('allure-apollo');
    Route::view('ameristar-casino-black-hawk-hotel-resort-2', 'ameristar-casino-black-hawk-hotel-resort-2')->name('ameristar-casino-black-hawk-hotel-resort-2');
    Route::view('archer-hotel-tysons', 'archer-hotel-tysons')->name('archer-hotel-tysons');
    Route::view('arkansas-travelers-baseball-stadium-dickey-stephens-park', 'arkansas-travelers-baseball-stadium-dickey-stephens-park')->name('arkansas-travelers-baseball-stadium-dickey-stephens-park');
    Route::view('armed-forces-retirement-home-afrh-new-commons-healthcare-center-the-scott-project', 'armed-forces-retirement-home-afrh-new-commons-healthcare-center-the-scott-project')->name('armed-forces-retirement-home-afrh-new-commons-healthcare-center-the-scott-project');
    Route::view('army-reserve-center-aviation-support-facility-macdill-afb', 'army-reserve-center-aviation-support-facility-macdill-afb')->name('army-reserve-center-aviation-support-facility-macdill-afb');
    Route::view('ascend-apollo', 'ascend-apollo')->name('ascend-apollo');
    Route::view('aspire-apollo', 'aspire-apollo')->name('aspire-apollo');
    Route::view('austin-bergstrom-international-airport-terminal-east-infill-2', 'austin-bergstrom-international-airport-terminal-east-infill-2')->name('austin-bergstrom-international-airport-terminal-east-infill-2');
    Route::view('austin-bergstrom-international-airport-terminalapron-expansion-improvements', 'austin-bergstrom-international-airport-terminalapron-expansion-improvements')->name('austin-bergstrom-international-airport-terminalapron-expansion-improvements');
    Route::view('aventura-hotel-at-universal-orlando', 'aventura-hotel-at-universal-orlando')->name('aventura-hotel-at-universal-orlando');
    Route::view('avenues-world-school-facility-management-fm', 'avenues-world-school-facility-management-fm')->name('avenues-world-school-facility-management-fm');
    Route::view('baltimore-washington-international-airport-b-c-connector-security-checkpoint', 'baltimore-washington-international-airport-b-c-connector-security-checkpoint')->name('baltimore-washington-international-airport-b-c-connector-security-checkpoint');
    Route::view('baltimore-washington-international-airport-concourse-five-gate-extension', 'baltimore-washington-international-airport-concourse-five-gate-extension')->name('baltimore-washington-international-airport-concourse-five-gate-extension');
    Route::view('baltimore-washington-international-airport-terminal-b-expansion', 'baltimore-washington-international-airport-terminal-b-expansion')->name('baltimore-washington-international-airport-terminal-b-expansion');
    Route::view('banner-health-alzheimer-institute', 'banner-health-alzheimer-institute')->name('banner-health-alzheimer-institute');
    Route::view('banner-university-medical-center-tucson-bumct-north-campus-outpatient-center', 'banner-university-medical-center-tucson-bumct-north-campus-outpatient-center')->name('banner-university-medical-center-tucson-bumct-north-campus-outpatient-center');
    Route::view('benjamin-p-grogan-jerry-l-dove-federal-building', 'benjamin-p-grogan-jerry-l-dove-federal-building')->name('benjamin-p-grogan-jerry-l-dove-federal-building');
    Route::view('bethune-cookman-university-residence-halls', 'bethune-cookman-university-residence-halls')->name('bethune-cookman-university-residence-halls');
    Route::view('broken-arrow-armed-forces-reserve-center-aerc', 'broken-arrow-armed-forces-reserve-center-aerc')->name('broken-arrow-armed-forces-reserve-center-aerc');
    Route::view('calexico-land-port-entry', 'calexico-land-port-entry')->name('calexico-land-port-entry');
    Route::view('california-air-resources-board-headquarters-mary-d-nichols-campus', 'california-air-resources-board-headquarters-mary-d-nichols-campus')->name('california-air-resources-board-headquarters-mary-d-nichols-campus');
    Route::view('california-veterans-home-fresno', 'california-veterans-home-fresno')->name('california-veterans-home-fresno');
    Route::view('caltech-chen-neuroscience-research-building', 'caltech-chen-neuroscience-research-building')->name('caltech-chen-neuroscience-research-building');
    Route::view('caltech-resnick-sustainability-center', 'caltech-resnick-sustainability-center')->name('caltech-resnick-sustainability-center');
    Route::view('camp-paumalu-stem-center-for-excellence', 'camp-paumalu-stem-center-for-excellence')->name('camp-paumalu-stem-center-for-excellence');
    Route::view('cedars-sinai-medical-center-plaza-healing-gardens', 'cedars-sinai-medical-center-plaza-healing-gardens')->name('cedars-sinai-medical-center-plaza-healing-gardens');
    Route::view('chanda-center-for-health', 'chanda-center-for-health')->name('chanda-center-for-health');
    Route::view('china-lake-south-airfield', 'china-lake-south-airfield')->name('china-lake-south-airfield');
    Route::view('cinepolis-luxury-movie-theatres', 'cinepolis-luxury-movie-theatres')->name('cinepolis-luxury-movie-theatres');
    Route::view('city-north-phase', 'city-north-phase')->name('city-north-phase');
    Route::view('city-north-phoenix-phase', 'city-north-phoenix-phase')->name('city-north-phoenix-phase');
    Route::view('city-of-austin-new-central-library-and-related-improvements', 'city-of-austin-new-central-library-and-related-improvements')->name('city-of-austin-new-central-library-and-related-improvements');
    Route::view('city-of-hope-orange-county-hospital', 'city-of-hope-orange-county-hospital')->name('city-of-hope-orange-county-hospital');
    Route::view('city-san-antonio-public-safety-headquarters', 'city-san-antonio-public-safety-headquarters')->name('city-san-antonio-public-safety-headquarters');
    Route::view('colorado-convention-center-and-expansion', 'colorado-convention-center-and-expansion')->name('colorado-convention-center-and-expansion');
    Route::view('colorado-state-university-regional-biocontainment-laboratory', 'colorado-state-university-regional-biocontainment-laboratory')->name('colorado-state-university-regional-biocontainment-laboratory');
    Route::view('columbia-place-apartments-hotel', 'columbia-place-apartments-hotel')->name('columbia-place-apartments-hotel');
    Route::view('columbus-land-port-entry', 'columbus-land-port-entry')->name('columbus-land-port-entry');
    Route::view('commercial-crew-cargo-processing-facility-c3pf-phases-1-3', 'commercial-crew-cargo-processing-facility-c3pf-phases-1-3')->name('commercial-crew-cargo-processing-facility-c3pf-phases-1-3');
    Route::view('commercial-crew-transportation-capability-cctcap-tower', 'commercial-crew-transportation-capability-cctcap-tower')->name('commercial-crew-transportation-capability-cctcap-tower');
    Route::view('the-university-of-texas-medical-branch-at-galveston-jennie-sealy-replacement-hospital', 'the-university-of-texas-medical-branch-at-galveston-jennie-sealy-replacement-hospital')->name('the-university-of-texas-medical-branch-at-galveston-jennie-sealy-replacement-hospital');
    Route::view('kalahari-resort-convention-center', 'kalahari-resort-convention-center')->name('kalahari-resort-convention-center');
    Route::view('wmata-andrews-federal-center-bus-garage', 'wmata-andrews-federal-center-bus-garage')->name('wmata-andrews-federal-center-bus-garage');
    Route::view('kailua-regional-wastewater-treatment-plant-tunnel-influent-pump-station-headworks-facility', 'kailua-regional-wastewater-treatment-plant-tunnel-influent-pump-station-headworks-facility')->name('kailua-regional-wastewater-treatment-plant-tunnel-influent-pump-station-headworks-facility');
    Route::view('marriott-international-headquarters-and-hotel', 'marriott-international-headquarters-and-hotel')->name('marriott-international-headquarters-and-hotel');
    Route::view('national-institute-of-standards-and-technology-building-245-modernization-task-orders-1-5', 'national-institute-of-standards-and-technology-building-245-modernization-task-orders-1-5')->name('national-institute-of-standards-and-technology-building-245-modernization-task-orders-1-5');
    
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

