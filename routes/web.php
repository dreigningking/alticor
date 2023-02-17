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
    Route::view('subcontractor-outreach', 'about.subcontractor-outreach')->name('subcontractor-outreach');
    
});

Route::view('contact-us','contact')->name('contact');


Route::group(['prefix'=> 'projects','as'=> 'projects.'],function(){
    Route::view('/', 'projects.index')->name('index');
    Route::view('eagle-county-regional-airport-expansion-remodel', 'projects.industry.aviation')->name('eagle-county-regional-airport-expansion-remodel');
    Route::view('300-third-tower-condominiums', 'projects.300-third-tower-condominiums')->name('300-third-tower-condominiums');
    
    Route::view('1144-15th-street-office-building', 'projects.1144-15th-street-office-building')->name('1144-15th-street-office-building');
    Route::view('2400-nueces', 'projects.2400-nueces')->name('2400-nueces');
    
    Route::view('aegis-ashore-missile-defense-test-complex', 'projects.aegis-ashore-missile-defense-test-complex')->name('aegis-ashore-missile-defense-test-complex');
    Route::view('alaska-airlines-north-main-terminal-redevelopment-project-at-sea', 'projects.alaska-airlines-north-main-terminal-redevelopment-project-at-sea')->name('alaska-airlines-north-main-terminal-redevelopment-project-at-sea');
    
    Route::view('ameristar-casino-black-hawk-hotel-resort-2', 'projects.ameristar-casino-black-hawk-hotel-resort-2')->name('ameristar-casino-black-hawk-hotel-resort-2');
    
    Route::view('arkansas-travelers-baseball-stadium-dickey-stephens-park', 'projects.arkansas-travelers-baseball-stadium-dickey-stephens-park')->name('arkansas-travelers-baseball-stadium-dickey-stephens-park');
    Route::view('armed-forces-retirement-home-afrh-new-commons-healthcare-center-the-scott-project', 'projects.armed-forces-retirement-home-afrh-new-commons-healthcare-center-the-scott-project')->name('armed-forces-retirement-home-afrh-new-commons-healthcare-center-the-scott-project');
    Route::view('army-reserve-center-aviation-support-facility-macdill-afb', 'projects.army-reserve-center-aviation-support-facility-macdill-afb')->name('army-reserve-center-aviation-support-facility-macdill-afb');
    Route::view('ascend-apollo', 'projects.ascend-apollo')->name('ascend-apollo');
    Route::view('aspire-apollo', 'projects.aspire-apollo')->name('aspire-apollo');
    Route::view('austin-bergstrom-international-airport-terminal-east-infill-2', 'projects.austin-bergstrom-international-airport-terminal-east-infill-2')->name('austin-bergstrom-international-airport-terminal-east-infill-2');
    Route::view('austin-bergstrom-international-airport-terminalapron-expansion-improvements', 'projects.austin-bergstrom-international-airport-terminalapron-expansion-improvements')->name('austin-bergstrom-international-airport-terminalapron-expansion-improvements');
    
    Route::view('avenues-world-school-facility-management-fm', 'projects.avenues-world-school-facility-management-fm')->name('avenues-world-school-facility-management-fm');
    Route::view('baltimore-washington-international-airport-b-c-connector-security-checkpoint', 'projects.baltimore-washington-international-airport-b-c-connector-security-checkpoint')->name('baltimore-washington-international-airport-b-c-connector-security-checkpoint');
    Route::view('baltimore-washington-international-airport-concourse-five-gate-extension', 'projects.baltimore-washington-international-airport-concourse-five-gate-extension')->name('baltimore-washington-international-airport-concourse-five-gate-extension');
    Route::view('banner-health-alzheimer-institute', 'projects.banner-health-alzheimer-institute')->name('banner-health-alzheimer-institute');
    Route::view('banner-university-medical-center-tucson-bumct-north-campus-outpatient-center', 'projects.banner-university-medical-center-tucson-bumct-north-campus-outpatient-center')->name('banner-university-medical-center-tucson-bumct-north-campus-outpatient-center');
    Route::view('benjamin-p-grogan-jerry-l-dove-federal-building', 'projects.benjamin-p-grogan-jerry-l-dove-federal-building')->name('benjamin-p-grogan-jerry-l-dove-federal-building');
    Route::view('bethune-cookman-university-residence-halls', 'projects.bethune-cookman-university-residence-halls')->name('bethune-cookman-university-residence-halls');
    Route::view('broken-arrow-armed-forces-reserve-center-aerc', 'projects.broken-arrow-armed-forces-reserve-center-aerc')->name('broken-arrow-armed-forces-reserve-center-aerc');
    Route::view('calexico-land-port-entry', 'projects.calexico-land-port-entry')->name('calexico-land-port-entry');
    
    Route::view('california-veterans-home-fresno', 'projects.california-veterans-home-fresno')->name('california-veterans-home-fresno');
    
    Route::view('cedars-sinai-medical-center-plaza-healing-gardens', 'projects.cedars-sinai-medical-center-plaza-healing-gardens')->name('cedars-sinai-medical-center-plaza-healing-gardens');
    Route::view('chanda-center-for-health', 'projects.chanda-center-for-health')->name('chanda-center-for-health');
    Route::view('china-lake-south-airfield', 'projects.china-lake-south-airfield')->name('china-lake-south-airfield');
    Route::view('cinepolis-luxury-movie-theatres', 'projects.cinepolis-luxury-movie-theatres')->name('cinepolis-luxury-movie-theatres');
    Route::view('city-north-phase', 'projects.city-north-phase')->name('city-north-phase');
    Route::view('city-north-phoenix-phase', 'projects.city-north-phoenix-phase')->name('city-north-phoenix-phase');
    Route::view('city-of-austin-new-central-library-and-related-improvements', 'projects.city-of-austin-new-central-library-and-related-improvements')->name('city-of-austin-new-central-library-and-related-improvements');
    Route::view('city-san-antonio-public-safety-headquarters', 'projects.city-san-antonio-public-safety-headquarters')->name('city-san-antonio-public-safety-headquarters');
    Route::view('colorado-state-university-regional-biocontainment-laboratory', 'projects.colorado-state-university-regional-biocontainment-laboratory')->name('colorado-state-university-regional-biocontainment-laboratory');
    Route::view('columbia-place-apartments-hotel', 'projects.columbia-place-apartments-hotel')->name('columbia-place-apartments-hotel');
    Route::view('columbus-land-port-entry', 'projects.columbus-land-port-entry')->name('columbus-land-port-entry');
    Route::view('commercial-crew-cargo-processing-facility-c3pf-phases-1-3', 'projects.commercial-crew-cargo-processing-facility-c3pf-phases-1-3')->name('commercial-crew-cargo-processing-facility-c3pf-phases-1-3');
    Route::view('the-university-of-texas-medical-branch-at-galveston-jennie-sealy-replacement-hospital', 'projects.the-university-of-texas-medical-branch-at-galveston-jennie-sealy-replacement-hospital')->name('the-university-of-texas-medical-branch-at-galveston-jennie-sealy-replacement-hospital');
    Route::view('lax-central-terminal-area-departure-arrival-levels-security-bollards-phase-2', 'projects.lax-central-terminal-area-departure-arrival-levels-security-bollards-phase-2')->name('lax-central-terminal-area-departure-arrival-levels-security-bollards-phase-2');
    Route::view('lax-delta-air-lines-terminals-2-3-modernization-program', 'projects.lax-delta-air-lines-terminals-2-3-modernization-program')->name('lax-delta-air-lines-terminals-2-3-modernization-program');
    Route::view('lax-american-airlines-terminals-4-5-redevelopment-program', 'projects.lax-american-airlines-terminals-4-5-redevelopment-program')->name('lax-american-airlines-terminals-4-5-redevelopment-program');
    
    Route::view('lausd-orthopaedic-hospital-medical-magnet-high-school', 'projects.lausd-orthopaedic-hospital-medical-magnet-high-school')->name('lausd-orthopaedic-hospital-medical-magnet-high-school');
    
    
    
    Route::view('denver-international-airport-great-hall-phase-1', 'projects.denver-international-airport-great-hall-phase-1')->name('denver-international-airport-great-hall-phase-1');
    
    Route::view('tampa-international-airport-skycenter-atrium-pedestrian-bridge', 'projects.tampa-international-airport-skycenter-atrium-pedestrian-bridge')->name('tampa-international-airport-skycenter-atrium-pedestrian-bridge');
    Route::view('nashville-international-airport-concourse-d-terminal-wings', 'projects.nashville-international-airport-concourse-d-terminal-wings')->name('nashville-international-airport-concourse-d-terminal-wings');
    
    Route::view('mauka-concourse-extension-daniel-k-inouye-international-airport', 'projects.mauka-concourse-extension-daniel-k-inouye-international-airport')->name('mauka-concourse-extension-daniel-k-inouye-international-airport');
    Route::view('grandview-medical-office-building', 'projects.grandview-medical-office-building')->name('grandview-medical-office-building');
    Route::view('hawaii-state-hospital-new-patient-facility', 'projects.hawaii-state-hospital-new-patient-facility')->name('hawaii-state-hospital-new-patient-facility');
    Route::view('pacific-highway-land-port-entry-building-envelope-replacement', 'projects.pacific-highway-land-port-entry-building-envelope-replacement')->name('pacific-highway-land-port-entry-building-envelope-replacement');
    Route::view('medical-education-training-campus-metc-dormitories-task-orders-1-5', 'projects.medical-education-training-campus-metc-dormitories-task-orders-1-5')->name('medical-education-training-campus-metc-dormitories-task-orders-1-5');
    Route::view('powertrain-facility-central-energy-plant', 'projects.powertrain-facility-central-energy-plant')->name('powertrain-facility-central-energy-plant');
    Route::view('university-texas-austin-dell-medical-school-ambulatory-surgery-center', 'projects.university-texas-austin-dell-medical-school-ambulatory-surgery-center')->name('university-texas-austin-dell-medical-school-ambulatory-surgery-center');
    Route::view('sea-concourse-c-new-power-center', 'projects.sea-concourse-c-new-power-center')->name('sea-concourse-c-new-power-center');
    Route::view('sea-baggage-optimization-phase-2', 'projects.sea-baggage-optimization-phase-2')->name('sea-baggage-optimization-phase-2');
    Route::view('sea-tac-airport-north-satellite-alaska-airlines-lounge', 'projects.sea-tac-airport-north-satellite-alaska-airlines-lounge')->name('sea-tac-airport-north-satellite-alaska-airlines-lounge');
    Route::view('united-airlines-flight-training-center-building-g', 'projects.united-airlines-flight-training-center-building-g')->name('united-airlines-flight-training-center-building-g');
    Route::view('university-texas-medical-branch-league-city-expansion', 'projects.university-texas-medical-branch-league-city-expansion')->name('university-texas-medical-branch-league-city-expansion');
    Route::view('lausd-venice-high-school-comprehensive-modernization', 'projects.lausd-venice-high-school-comprehensive-modernization')->name('lausd-venice-high-school-comprehensive-modernization');
    Route::view('kaiser-permanente-downey-hospital-expansion', 'projects.kaiser-permanente-downey-hospital-expansion')->name('kaiser-permanente-downey-hospital-expansion');
    Route::view('kaiser-permanente-irwindale-specialty-medical-office-building-parking-structure', 'projects.kaiser-permanente-irwindale-specialty-medical-office-building-parking-structure')->name('kaiser-permanente-irwindale-specialty-medical-office-building-parking-structure');
    Route::view('uc-irvine-verano-8-graduate-student-housing', 'projects.uc-irvine-verano-8-graduate-student-housing')->name('uc-irvine-verano-8-graduate-student-housing');
    Route::view('uc-irvine-middle-earth-housing-expansion', 'projects.uc-irvine-middle-earth-housing-expansion')->name('uc-irvine-middle-earth-housing-expansion');
    Route::view('uc-irvine-douglas-hospital', 'projects.uc-irvine-douglas-hospital')->name('uc-irvine-douglas-hospital');
    Route::view('uc-san-diego-mesa-nueva-graduate-and-professional-students-mixed-use-housing', 'projects.uc-san-diego-mesa-nueva-graduate-and-professional-students-mixed-use-housing')->name('uc-san-diego-mesa-nueva-graduate-and-professional-students-mixed-use-housing');
    Route::view('uc-san-diego-nuevo-east-student-housing', 'projects.uc-san-diego-nuevo-east-student-housing')->name('uc-san-diego-nuevo-east-student-housing');
    Route::view('san-ysidro-land-port-of-entry-phase-2', 'projects.san-ysidro-land-port-of-entry-phase-2')->name('san-ysidro-land-port-of-entry-phase-2');
    Route::view('sdccd-city-college-d-t-building-renovation', 'projects.sdccd-city-college-d-t-building-renovation')->name('sdccd-city-college-d-t-building-renovation');
    
    Route::view('navfac-p730-andrew-mills-hall', 'projects.navfac-p730-andrew-mills-hall')->name('navfac-p730-andrew-mills-hall');
    Route::view('orlando-international-airport-airside-four-renovation-wing-expansion-2', 'projects.orlando-international-airport-airside-four-renovation-wing-expansion-2')->name('orlando-international-airport-airside-four-renovation-wing-expansion-2');
    Route::view('orlando-international-airport-airside-four-renovation-wing-expansion', 'projects.orlando-international-airport-airside-four-renovation-wing-expansion')->name('orlando-international-airport-airside-four-renovation-wing-expansion');
    Route::view('orlando-international-airport-south-terminal-c-airside-2', 'projects.orlando-international-airport-south-terminal-c-airside-2')->name('orlando-international-airport-south-terminal-c-airside-2');
    Route::view('ut-medical-branch-galveston-jennie-sealy-replacement-hospital-invasive-cardiology-services', 'projects.ut-medical-branch-galveston-jennie-sealy-replacement-hospital-invasive-cardiology-services')->name('ut-medical-branch-galveston-jennie-sealy-replacement-hospital-invasive-cardiology-services');
    Route::view('el-paso-international-airport-checked-baggage-inspection-system', 'projects.el-paso-international-airport-checked-baggage-inspection-system')->name('el-paso-international-airport-checked-baggage-inspection-system');
    Route::view('university-texas-arlington-parking-garage-west-campus', 'projects.university-texas-arlington-parking-garage-west-campus')->name('university-texas-arlington-parking-garage-west-campus');
    Route::view('san-jose-international-airport-gates-29-30-jetbridge-expansion', 'projects.san-jose-international-airport-gates-29-30-jetbridge-expansion')->name('san-jose-international-airport-gates-29-30-jetbridge-expansion');
    Route::view('university-of-washington-health-science-center-d-wing-rx-renovation', 'projects.university-of-washington-health-science-center-d-wing-rx-renovation')->name('university-of-washington-health-science-center-d-wing-rx-renovation');
    Route::view('hyatt-regency-denver-at-colorado-convention-center', 'projects.hyatt-regency-denver-at-colorado-convention-center')->name('hyatt-regency-denver-at-colorado-convention-center');
    Route::view('uchealth-poudre-valley-hospital-building-a', 'projects.uchealth-poudre-valley-hospital-building-a')->name('uchealth-poudre-valley-hospital-building-a');
    Route::view('denver-health-601-broadway-hospital-support-services-building', 'projects.denver-health-601-broadway-hospital-support-services-building')->name('denver-health-601-broadway-hospital-support-services-building');
    Route::view('elizabeth-hotel-autograph-collection-parking-garage', 'projects.elizabeth-hotel-autograph-collection-parking-garage')->name('elizabeth-hotel-autograph-collection-parking-garage');
    Route::view('constitution-gardens-phase-1', 'projects.constitution-gardens-phase-1')->name('constitution-gardens-phase-1');
    Route::view('universals-cabana-bay-resort-towers', 'projects.universals-cabana-bay-resort-towers')->name('universals-cabana-bay-resort-towers');
    Route::view('universals-fast-furious-supercharged', 'projects.universals-fast-furious-supercharged')->name('universals-fast-furious-supercharged');
    Route::view('marriott-residence-inn-baltimore', 'projects.marriott-residence-inn-baltimore')->name('marriott-residence-inn-baltimore');
    
    Route::view('triton-forward-operating-base-hangar', 'projects.triton-forward-operating-base-hangar')->name('triton-forward-operating-base-hangar');
    Route::view('uchealth-memorial-hospital-epic-gotc-renovations', 'projects.uchealth-memorial-hospital-epic-gotc-renovations')->name('uchealth-memorial-hospital-epic-gotc-renovations');
    Route::view('rellis-academic-complex-phase', 'projects.rellis-academic-complex-phase')->name('rellis-academic-complex-phase');
    Route::view('queen-anne-elementary-school-addition', 'projects.queen-anne-elementary-school-addition')->name('queen-anne-elementary-school-addition');
    Route::view('ut-medical-branch-league-city-parking-initiatives', 'projects.ut-medical-branch-league-city-parking-initiatives')->name('ut-medical-branch-league-city-parking-initiatives');
    Route::view('southwest-airlines-hnl-gate-6', 'projects.southwest-airlines-hnl-gate-6')->name('southwest-airlines-hnl-gate-6');
    Route::view('straub-doctors-on-call-clinic-relocation', 'projects.straub-doctors-on-call-clinic-relocation')->name('straub-doctors-on-call-clinic-relocation');
    Route::view('okkodo-high-school-expansion-2', 'projects.okkodo-high-school-expansion-2')->name('okkodo-high-school-expansion-2');
    
    Route::view('hilton-miami-dadeland-hotel', 'projects.hilton-miami-dadeland-hotel')->name('hilton-miami-dadeland-hotel');
    Route::view('university-washington-medical-center-clean-supply-room-renovation', 'projects.university-washington-medical-center-clean-supply-room-renovation')->name('university-washington-medical-center-clean-supply-room-renovation');
    Route::view('emergency-department-support-space-resuscitation-rooms-renovation', 'projects.emergency-department-support-space-resuscitation-rooms-renovation')->name('emergency-department-support-space-resuscitation-rooms-renovation');
    Route::view('greeley-city-center', 'projects.greeley-city-center')->name('greeley-city-center');
    Route::view('p263-broad-area-maritime-surveillance-testing-evaluation-hangar-facility-bamste', 'projects.p263-broad-area-maritime-surveillance-testing-evaluation-hangar-facility-bamste')->name('p263-broad-area-maritime-surveillance-testing-evaluation-hangar-facility-bamste');
    Route::view('love-field-parking-garage', 'projects.love-field-parking-garage')->name('love-field-parking-garage');
    Route::view('samsung-fab2-office-expansion', 'projects.samsung-fab2-office-expansion')->name('samsung-fab2-office-expansion');
    Route::view('rosewood-amenity-deck-garage', 'projects.rosewood-amenity-deck-garage')->name('rosewood-amenity-deck-garage');
    Route::view('university-medical-center-east-west-clinics', 'projects.university-medical-center-east-west-clinics')->name('university-medical-center-east-west-clinics');
    Route::view('defense-logistics-agency-operations-center', 'projects.defense-logistics-agency-operations-center')->name('defense-logistics-agency-operations-center');
    Route::view('kaiser-permanente-capitol-hill-expansion-restack', 'projects.kaiser-permanente-capitol-hill-expansion-restack')->name('kaiser-permanente-capitol-hill-expansion-restack');
    Route::view('san-francisco-international-airport-sfo-harvey-milk-terminal-1', 'projects.san-francisco-international-airport-sfo-harvey-milk-terminal-1')->name('san-francisco-international-airport-sfo-harvey-milk-terminal-1');
    
    //aviation
    Route::view('tampa-international-airport-main-terminal-curbside-expansion-program-2','projects.tampa-international-airport-main-terminal-curbside-expansion-program-2')->name('tampa-international-airport-main-terminal-curbside-expansion-program-2');
    Route::view('lax-southwest-airlines-terminal-1-5-development-program', 'projects.lax-southwest-airlines-terminal-1-5-development-program')->name('lax-southwest-airlines-terminal-1-5-development-program');
    Route::view('hangar-reconstruction-dulles-jet-center', 'projects.hangar-reconstruction-dulles-jet-center')->name('hangar-reconstruction-dulles-jet-center');
    Route::view('midfield-concourse-washington-dulles-international-airport', 'projects.midfield-concourse-washington-dulles-international-airport')->name('midfield-concourse-washington-dulles-international-airport');
    Route::view('baltimore-washington-international-airport-terminal-b-expansion', 'projects.baltimore-washington-international-airport-terminal-b-expansion')->name('baltimore-washington-international-airport-terminal-b-expansion');
    Route::view('china-lake-south-airfield', 'projects.china-lake-south-airfield')->name('china-lake-south-airfield');
    //commercial
    Route::view('allure-apollo', 'projects.allure-apollo')->name('allure-apollo');
    Route::view('pacific-district-office-renovation','pacific-district-office-renovation')->name('pacific-district-office-renovation');
    Route::view('seaworld-aquatica-sp2', 'projects.seaworld-aquatica-sp2')->name('seaworld-aquatica-sp2');
    Route::view('701-rio', 'projects.701-rio')->name('701-rio');
    Route::view('geo-group-corporate-headquarters', 'projects.geo-group-corporate-headquarters')->name('geo-group-corporate-headquarters');
    Route::view('fifty-50-office-tower', 'projects.fifty-50-office-tower')->name('fifty-50-office-tower');
    //education
    Route::view('lausd-belvedere-middle-school-comprehensive-modernization', 'projects.lausd-belvedere-middle-school-comprehensive-modernization')->name('lausd-belvedere-middle-school-comprehensive-modernization');
    Route::view('uc-riverside-school-of-medicine-education-building-ii', 'projects.uc-riverside-school-of-medicine-education-building-ii')->name('uc-riverside-school-of-medicine-education-building-ii');
    Route::view('naval-air-station-pensacola-building-633', 'projects.naval-air-station-pensacola-building-633')->name('naval-air-station-pensacola-building-633');
    Route::view('fawcett-elementary-school-replacement', 'projects.fawcett-elementary-school-replacement')->name('fawcett-elementary-school-replacement');
    Route::view('camp-paumalu-stem-center-for-excellence', 'projects.camp-paumalu-stem-center-for-excellence')->name('camp-paumalu-stem-center-for-excellence');
    Route::view('university-of-washington-interdisciplinary-engineering-building', 'projects.university-of-washington-interdisciplinary-engineering-building')->name('university-of-washington-interdisciplinary-engineering-building');
    
    //government-justice
    Route::view('maricopa-county-intake-transfer-and-release-itr-facility-detention-facility', 'projects.maricopa-county-intake-transfer-and-release-itr-facility-detention-facility')->name('maricopa-county-intake-transfer-and-release-itr-facility-detention-facility');
    Route::view('lax-airport-police-facility', 'projects.lax-airport-police-facility')->name('lax-airport-police-facility');
    Route::view('western-county-of-riverside-emergency-operations-center', 'projects.western-county-of-riverside-emergency-operations-center')->name('western-county-of-riverside-emergency-operations-center');
    Route::view('social-security-administration-ssa-arthur-j-altmeyer-modernization', 'projects.social-security-administration-ssa-arthur-j-altmeyer-modernization')->name('social-security-administration-ssa-arthur-j-altmeyer-modernization');
    Route::view('foreign-affairs-security-training-center-fastc-contracts-1-3','foreign-affairs-security-training-center-fastc-contracts-1-3')->name('foreign-affairs-security-training-center-fastc-contracts-1-3');
    Route::view('colorado-convention-center-and-expansion', 'projects.colorado-convention-center-and-expansion')->name('colorado-convention-center-and-expansion');

    //healthcare
    Route::view('kaiser-permanente-riverside-medical-center-bed-tower-expansion', 'projects.kaiser-permanente-riverside-medical-center-bed-tower-expansion')->name('kaiser-permanente-riverside-medical-center-bed-tower-expansion');
    Route::view('harbor-ucla-medical-center-replacement-program', 'projects.harbor-ucla-medical-center-replacement-program')->name('harbor-ucla-medical-center-replacement-program');
    Route::view('city-of-hope-orange-county-hospital', 'projects.city-of-hope-orange-county-hospital')->name('city-of-hope-orange-county-hospital');
    Route::view('uci-medical-center-irvine', 'projects.uci-medical-center-irvine')->name('uci-medical-center-irvine');
    Route::view('valencia-temporary-laboratory-buildout-emergency-covid-testing-facility', 'projects.valencia-temporary-laboratory-buildout-emergency-covid-testing-facility')->name('valencia-temporary-laboratory-buildout-emergency-covid-testing-facility');
    Route::view('texas-tech-university-health-sciences-center-oral-health-clinic', 'projects.texas-tech-university-health-sciences-center-oral-health-clinic')->name('texas-tech-university-health-sciences-center-oral-health-clinic');    
    
    //hospitality
    Route::view('marriott-international-headquarters-and-hotel', 'projects.marriott-international-headquarters-and-hotel')->name('marriott-international-headquarters-and-hotel');
    Route::view('mcgregor-square','projects.mcgregor-square')->name('mcgregor-square');
    Route::view('archer-hotel-tysons', 'projects.archer-hotel-tysons')->name('archer-hotel-tysons');
    Route::view('kalahari-resort-convention-center', 'projects.kalahari-resort-convention-center')->name('kalahari-resort-convention-center');
    Route::view('aventura-hotel-at-universal-orlando', 'projects.aventura-hotel-at-universal-orlando')->name('aventura-hotel-at-universal-orlando');
    Route::view('hokulani-waikiki-hilton-grand-vacations', 'projects.hokulani-waikiki-hilton-grand-vacations')->name('hokulani-waikiki-hilton-grand-vacations');
    
    //infrastructure-transportation
    Route::view('puyallup-station-parking-garage', 'projects.puyallup-station-parking-garage')->name('puyallup-station-parking-garage');
    Route::view('kaneohe-kailua-tunnel-influent-facility', 'projects.kaneohe-kailua-tunnel-influent-facility')->name('kaneohe-kailua-tunnel-influent-facility');
    Route::view('downtown-redmond-link-extension-parking-garage-stations', 'projects.downtown-redmond-link-extension-parking-garage-stations')->name('downtown-redmond-link-extension-parking-garage-stations');
    Route::view('commercial-crew-transportation-capability-cctcap-tower', 'projects.commercial-crew-transportation-capability-cctcap-tower')->name('commercial-crew-transportation-capability-cctcap-tower');
    Route::view('mwaa-dulles-railyard-and-maintenance-facility', 'projects.mwaa-dulles-railyard-and-maintenance-facility')->name('mwaa-dulles-railyard-and-maintenance-facility');
    Route::view('wmata-andrews-federal-center-bus-garage', 'projects.wmata-andrews-federal-center-bus-garage')->name('wmata-andrews-federal-center-bus-garage');

    //science-technology
    Route::view('navfac-p229-weapons-surveillance-testing-laboratory-calibration-laboratory', 'projects.navfac-p229-weapons-surveillance-testing-laboratory-calibration-laboratory')->name('navfac-p229-weapons-surveillance-testing-laboratory-calibration-laboratory');
    Route::view('caltech-resnick-sustainability-center', 'projects.caltech-resnick-sustainability-center')->name('caltech-resnick-sustainability-center');
    Route::view('caltech-chen-neuroscience-research-building', 'projects.caltech-chen-neuroscience-research-building')->name('caltech-chen-neuroscience-research-building');
    Route::view('california-air-resources-board-headquarters-mary-d-nichols-campus', 'projects.california-air-resources-board-headquarters-mary-d-nichols-campus')->name('california-air-resources-board-headquarters-mary-d-nichols-campus');
    Route::view('national-institute-of-standards-and-technology-building-245-modernization-task-orders-1-5', 'projects.national-institute-of-standards-and-technology-building-245-modernization-task-orders-1-5')->name('national-institute-of-standards-and-technology-building-245-modernization-task-orders-1-5');
    Route::view('nia-alzheimer-disease-and-related-dementias-temporary-research-facility', 'projects.nia-alzheimer-disease-and-related-dementias-temporary-research-facility')->name('nia-alzheimer-disease-and-related-dementias-temporary-research-facility');
    
    //water-waste water
    Route::view('south-fort-collins-sanitation-district', 'projects.south-fort-collins-sanitation-district')->name('south-fort-collins-sanitation-district');
    Route::view('drake-water-reclamation-facility', 'projects.drake-water-reclamation-facility')->name('drake-water-reclamation-facility');
    Route::view('waianae-wastewater-treatment-plant-improvements-upgrade', 'projects.waianae-wastewater-treatment-plant-improvements-upgrade')->name('waianae-wastewater-treatment-plant-improvements-upgrade');
    Route::view('kailua-regional-wastewater-treatment-plant-tunnel-influent-pump-station-headworks-facility', 'projects.kailua-regional-wastewater-treatment-plant-tunnel-influent-pump-station-headworks-facility')->name('kailua-regional-wastewater-treatment-plant-tunnel-influent-pump-station-headworks-facility');
   
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

