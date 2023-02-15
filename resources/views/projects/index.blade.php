@extends('1layout.others')
@section('content')

    


   


    <div class="page-banner" style="background-image:url(


	'../wp-content/uploads/2017/02/projects.jpg')}});">

        <div class="page-banner-block">

            <div class="page-banner-content">

                <h1>Projects</h1>

            </div>

        </div>

    </div>

    <div id="top" class="breadcumb" typeof="BreadcrumbList" vocab="https://schema.org/">

        <div class="wrapper clearfix">


        </div>

    </div>



    <div class="main-container career">

        <div class="catagory-menu">

            <form method="post" action="#" id="project-filter">

                <ul class="clearfix" id="options">

                    <li class="slideToggle"><a href="#">industry <i class="fa fa-angle-down"></i></a>

                        <ul class="slideTogglebox">


                            <li>

                                <label class="control control--checkbox">Aviation
                                    <input data-name="Aviation" data-slug="aviation" id="aviation"
                                        name="project_protype[]" type="checkbox" value="3" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Commercial
                                    <input data-name="Commercial" data-slug="commercial" id="commercial"
                                        name="project_protype[]" type="checkbox" value="4" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Education
                                    <input data-name="Education" data-slug="education" id="education"
                                        name="project_protype[]" type="checkbox" value="5" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Government + Justice
                                    <input data-name="Government + Justice" data-slug="government-justice"
                                        id="government-justice" name="project_protype[]" type="checkbox"
                                        value="43" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Healthcare
                                    <input data-name="Healthcare" data-slug="healthcare" id="healthcare"
                                        name="project_protype[]" type="checkbox" value="6" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Hospitality
                                    <input data-name="Hospitality" data-slug="hospitality" id="hospitality"
                                        name="project_protype[]" type="checkbox" value="7" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Infrastructure + Transportation
                                    <input data-name="Infrastructure + Transportation"
                                        data-slug="infrastructure-transportation" id="infrastructure-transportation"
                                        name="project_protype[]" type="checkbox" value="8" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Science + Technology
                                    <input data-name="Science + Technology" data-slug="science-technology"
                                        id="science-technology" name="project_protype[]" type="checkbox"
                                        value="2" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Water + Wastewater
                                    <input data-name="Water + Wastewater" data-slug="water-wastewater"
                                        id="water-wastewater" name="project_protype[]" type="checkbox"
                                        value="238" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                        </ul>

                    </li>

                    <li class="slideToggle"><a href="#">line of business <i
                                class="fa fa-angle-down"></i></a>

                        <ul class="slideTogglebox">


                            <li>

                                <label class="control control--checkbox">Construction
                                    <input data-name="Construction" data-slug="construction" id="construction"
                                        name="project_business[]" type="checkbox" value="28" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Development
                                    <input data-name="Development" data-slug="development" id="development"
                                        name="project_business[]" type="checkbox" value="29" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Facility Services
                                    <input data-name="Facility Services" data-slug="services" id="services"
                                        name="project_business[]" type="checkbox" value="34" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                        </ul>

                    </li>

                    <li class="slideToggle"><a href="#">location <i class="fa fa-angle-down"></i></a>

                        <ul class="slideTogglebox">


                            <li>

                                <label class="control control--checkbox">Hydro
                                    <input data-name="Hydro" data-slug="hydro" id="hydro"
                                        name="project_location[]" type="checkbox" value="354" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Mid South
                                    <input data-name="Mid South" data-slug="mid-south" id="mid-south"
                                        name="project_location[]" type="checkbox" value="223" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Mid&nbsp;Atlantic
                                    <input data-name="Mid&nbsp;Atlantic" data-slug="mid-atlantic"
                                        id="mid-atlantic" name="project_location[]" type="checkbox"
                                        value="17" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Northern&nbsp;California
                                    <input data-name="Northern&nbsp;California" data-slug="northern-california"
                                        id="northern-california" name="project_location[]" type="checkbox"
                                        value="18" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Pacific
                                    <input data-name="Pacific" data-slug="pacific" id="pacific"
                                        name="project_location[]" type="checkbox" value="19" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Pacific&nbsp;Northwest
                                    <input data-name="Pacific&nbsp;Northwest" data-slug="pacific-northwest"
                                        id="pacific-northwest" name="project_location[]" type="checkbox"
                                        value="20" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Plains
                                    <input data-name="Plains" data-slug="plains" id="plains"
                                        name="project_location[]" type="checkbox" value="21" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Southeast
                                    <input data-name="Southeast" data-slug="southeast" id="southeast"
                                        name="project_location[]" type="checkbox" value="22" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Southern&nbsp;California
                                    <input data-name="Southern&nbsp;California" data-slug="southern-california"
                                        id="southern-california" name="project_location[]" type="checkbox"
                                        value="23" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Southwest
                                    <input data-name="Southwest" data-slug="southwest" id="southwest"
                                        name="project_location[]" type="checkbox" value="24" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Western
                                    <input data-name="Western" data-slug="western" id="western"
                                        name="project_location[]" type="checkbox" value="47" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                        </ul>

                    </li>

                    <li class="slideToggle"><a href="#">more filters <i class="fa fa-angle-down"></i></a>


                        <ul class="slideTogglebox">


                            <li>

                                <label class="control control--checkbox">CM at Risk
                                    <input data-name="CM at Risk" data-slug="cm-at-risk" id="cm-at-risk"
                                        name="project_more[]" type="checkbox" value="48" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Commissioning Services
                                    <input data-name="Commissioning Services" data-slug="commissioning"
                                        id="commissioning" name="project_more[]" type="checkbox"
                                        value="62" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Consulting Services
                                    <input data-name="Consulting Services" data-slug="consulting" id="consulting"
                                        name="project_more[]" type="checkbox" value="57" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Design Bid Build
                                    <input data-name="Design Bid Build" data-slug="design-bid-build"
                                        id="design-bid-build" name="project_more[]" type="checkbox"
                                        value="50" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Design Build
                                    <input data-name="Design Build" data-slug="design-build" id="design-build"
                                        name="project_more[]" type="checkbox" value="49" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Facility Management
                                    <input data-name="Facility Management" data-slug="facility-management"
                                        id="facility-management" name="project_more[]" type="checkbox"
                                        value="58" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">LEED/Sustainability
                                    <input data-name="LEED/Sustainability" data-slug="leed" id="leed"
                                        name="project_more[]" type="checkbox" value="52" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">Transitional Services
                                    <input data-name="Transitional Services" data-slug="tso" id="tso"
                                        name="project_more[]" type="checkbox" value="56" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                            <li>

                                <label class="control control--checkbox">VDC Services
                                    <input data-name="VDC Services" data-slug="vdc-services" id="vdc-services"
                                        name="project_more[]" type="checkbox" value="54" />

                                    <div class="control__indicator"></div>

                                </label>

                            </li>


                        </ul>


                    </li>

                    <li class="checkbox">

                        <label class="control control--checkbox">case studies only

                            <input class="case-study" data-name="Case Study" data-slug="case-study"
                                name="case_study" id="case-study" value="1" type="checkbox" />

                            <div class="control__indicator"></div>

                        </label>

                    </li>

                </ul>

            </form>

        </div>

        <div class="catagory-bottommenu">

            <ul id="selected-tags"></ul>

        </div>

    </div>









    <div class="projects" style="margin-bottom:65px;">





        <ul class="clearfix" id="projectAjax">



            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/12/AW-Maricopa-County-ITR-day-room.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Maricopa County Intake, Transfer and Release (ITR) Facility / Detention Facility</span>

                        <a
                            href="{{route('projects.maricopa-county-intake-transfer-and-release-itr-facility-detention-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/11/HP-TPA-International-Finals-15-reduced-768x511.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Tampa International Airport Main Terminal Curbside Expansion Program</span>

                        <a
                            href="{{route('projects.tampa-international-airport-main-terminal-curbside-expansion-program-2')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/09/HP_Website_Main_LAX-APF-768x512.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>LAX Airport Police Facility</span>

                        <a href="{{route('projects.lax-airport-police-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/09/HP_Website_Main_Kaiser-Riverside_new.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Kaiser Permanente Riverside Medical Center Bed Tower Expansion</span>

                        <a
                            href="{{route('projects.kaiser-permanente-riverside-medical-center-bed-tower-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/10/HP_Website_Main_HUCLA_new.png')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Harbor-UCLA Medical Center Replacement Program</span>

                        <a href="{{route('projects.harbor-ucla-medical-center-replacement-program')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/07/Main-Image-LAUSD-Belvedere-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>LAUSD Belvedere Middle School Comprehensive Modernization</span>

                        <a href="{{route('projects.lausd-belvedere-middle-school-comprehensive-modernization')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/07/Main-Image-Caltech-Resnick-05-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Caltech Resnick Sustainability Center</span>

                        <a href="{{route('projects.caltech-resnick-sustainability-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/07/Main-Image-City-of-Hope-02-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>City of Hope Orange County Hospital</span>

                        <a href="{{route('projects.city-of-hope-orange-county-hospital')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/China-Lake-01.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>China Lake South Airfield</span>

                        <a href="{{route('projects.china-lake-south-airfield')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/UCR-SOM-EBII-02-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC Riverside School of Medicine Education Building II</span>

                        <a href="{{route('projects.uc-riverside-school-of-medicine-education-building-ii')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/HP_Website_Main_UCI-ICMC-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>UCI Medical Center Irvine</span>

                        <a href="{{route('projects.uci-medical-center-irvine')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/05/HP_Website_Main_CARB-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>California Air Resources Board Headquarters – Mary D. Nichols Campus</span>

                        <a
                            href="{{route('projects.california-air-resources-board-headquarters-mary-d-nichols-campus')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/HP_Website_Main_Valencia-COVID-Lab-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Valencia Temporary Laboratory Buildout Emergency COVID Testing Facility</span>

                        <a
                            href="{{route('projects.valencia-temporary-laboratory-buildout-emergency-covid-testing-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/05/HP_Website_Main_LAX-T1.5-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>LAX Southwest Airlines Terminal 1.5 Development Program</span>

                        <a href="{{route('projects.lax-southwest-airlines-terminal-1-5-development-program')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/Main-Image-Western-County-EOC-05-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Western County of Riverside Emergency Operations Center</span>

                        <a href="{{route('projects.western-county-of-riverside-emergency-operations-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/03/7768-Woodmont-Avenue-18_web-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality case study </em><b></b></h4>

                        <span>Marriott International Headquarters and Hotel</span>

                        <a href="{{route('projects.marriott-international-headquarters-and-hotel')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/Main-Image-SeaWorld-Aquatica-02-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>SeaWorld Aquatica SP2</span>

                        <a href="{{route('projects.seaworld-aquatica-sp2')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/02/DJC_Final_31Jan2012_010-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Hangar Reconstruction &#8211; Dulles Jet Center</span>

                        <a href="{{route('projects.hangar-reconstruction-dulles-jet-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2022/02/4.Midfield-Concourse-at-Washington-Dulles-Intl-Airport-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Midfield Concourse at Washington Dulles International Airport</span>

                        <a href="{{route('projects.midfield-concourse-washington-dulles-international-airport')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/02/BWI-Terminal-Ext-122-7x10-72dpi-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Baltimore Washington International Airport Terminal A/B Expansion</span>

                        <a
                            href="{{route('projects.baltimore-washington-international-airport-terminal-b-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/02/Interior_Hangar_Bays_10-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>P263 Broad Area Maritime Surveillance Testing and Evaluation Hangar Facility
                            (BAMSTE)</span>

                        <a
                            href="{{route('projects.p263-broad-area-maritime-surveillance-testing-evaluation-hangar-facility-bamste')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/02/3Y1A8832-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Baltimore Washington International Airport B/C Connector and Security Checkpoint</span>

                        <a
                            href="{{route('projects.baltimore-washington-international-airport-b-c-connector-security-checkpoint')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/01/2020_11_12_T_ZGFnist01_A-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology case study </em><b></b></h4>

                        <span>National Institute of Standards and Technology Building 245 Modernization Task Orders 1
                            &#8211; 5</span>

                        <a
                            href="{{route('projects.national-institute-of-standards-and-technology-building-245-modernization-task-orders-1-5')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/02/Team-Edit-16-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Denver International Airport Great Hall Phase 1</span>

                        <a href="{{route('projects.denver-international-airport-great-hall-phase-1')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/01/701-Rio-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>701 Rio</span>

                        <a href="{{route('projects.701-rio')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/11/McGregor-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality case study </em><b></b></h4>

                        <span>McGregor Square</span>

                        <a href="{{route('projects.mcgregor-square')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/11/NAS-Pensacola-B633-3-Reduced-scaled-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>Naval Air Station Pensacola Building 633</span>

                        <a href="{{route('projects.naval-air-station-pensacola-building-633')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/11/MacDillAFB_ARC_Reduced-7-2-scaled-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Army Reserve Center and Aviation Support Facility at MacDill AFB</span>

                        <a href="{{route('projects.army-reserve-center-aviation-support-facility-macdill-afb')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/11/SkyCenter_005-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Tampa International Airport SkyCenter Atrium &#038; Pedestrian Bridge</span>

                        <a
                            href="{{route('projects.tampa-international-airport-skycenter-atrium-pedestrian-bridge')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/10/Archer-Hotel-HP-Exterior-7_Reduced-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Archer Hotel Tysons</span>

                        <a href="{{route('projects.archer-hotel-tysons')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/10/Entry-from-Skybridge-5-SW-to-Ticketing-Hall-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Alaska Airlines North Main Terminal Redevelopment Project at SEA</span>

                        <a
                            href="{{route('projects.alaska-airlines-north-main-terminal-redevelopment-project-at-sea')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/09/NorthFrom5th-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>Puyallup Station Parking Garage</span>

                        <a href="{{route('projects.puyallup-station-parking-garage')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/09/HP_Project_Mauka-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Mauka Concourse Extension at Daniel K. Inouye International Airport</span>

                        <a
                            href="{{route('projects.mauka-concourse-extension-daniel-k-inouye-international-airport')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/08/Website-Photo-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Nashville International Airport Concourse D and Terminal Wings</span>

                        <a href="{{route('projects.nashville-international-airport-concourse-d-terminal-wings')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/07/South-Fort-Collins-Hydro3-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Water + Wastewater project </em><b></b></h4>

                        <span>SFCSD Water Reclamation Facility Expansion</span>

                        <a href="{{route('projects.south-fort-collins-sanitation-district')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/07/Drake-Hensel-Phelps2-scaled-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Water + Wastewater project </em><b></b></h4>

                        <span>Drake Water Reclamation Facility</span>

                        <a href="{{route('projects.drake-water-reclamation-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/07/DSF3791-scaled-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Texas Tech University Health Sciences Center Oral Health Clinic</span>

                        <a
                            href="{{route('projects.texas-tech-university-health-sciences-center-oral-health-clinic')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/07/SSA-Altmeyer-Award-Selections-1_Compressed-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice case study </em><b></b></h4>

                        <span>Social Security Administration (SSA) Arthur J. Altmeyer Modernization</span>

                        <a
                            href="{{route('projects.social-security-administration-ssa-arthur-j-altmeyer-modernization')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/08/HP_Project_Waianae-WWTP-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Water + Wastewater project </em><b></b></h4>

                        <span>Waianae Wastewater Treatment Plant Improvements and Upgrade</span>

                        <a href="{{route('projects.waianae-wastewater-treatment-plant-improvements-upgrade')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/08/HP_Project_KaneoheTIF-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>Kaneohe / Kailua Tunnel Influent Facility</span>

                        <a href="{{route('projects.kaneohe-kailua-tunnel-influent-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/06/Featured-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Grandview Medical Office Building</span>

                        <a href="{{route('projects.grandview-medical-office-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/06/HSH-ProjectMain-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Hawaii State Hospital New Patient Facility</span>

                        <a href="{{route('projects.hawaii-state-hospital-new-patient-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/04/phlpoe_AutoBus-480x320.png')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Pacific Highway Land Port of Entry Building Envelope Replacement</span>

                        <a href="{{route('projects.pacific-highway-land-port-entry-building-envelope-replacement')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/04/Enscape_2022-05-23-16-03-33-Small.png')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>Fawcett Elementary School Replacement</span>

                        <a href="{{route('projects.fawcett-elementary-school-replacement')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/03/GSH-Feature-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>Camp Paumalu STEM Center for Excellence</span>

                        <a href="{{route('projects.camp-paumalu-stem-center-for-excellence')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/03/UWAC-Porch-Entrance-Wood_reduced.png')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>University of Washington Interdisciplinary Engineering Building</span>

                        <a
                            href="{{route('projects.university-of-washington-interdisciplinary-engineering-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/01/FSH-AIT_Page_02-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Medical Education Training Campus (METC) Dormitories (Task Orders #1-5)</span>

                        <a
                            href="{{route('projects.medical-education-training-campus-metc-dormitories-task-orders-1-5')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/12/Tac-Maze-Exterior-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice case study </em><b></b></h4>

                        <span>Foreign Affairs Security Training Center (FASTC) Contracts 1 and 3</span>

                        <a href="{{route('projects.foreign-affairs-security-training-center-fastc-contracts-1-3')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/12/for-website-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>NIA Alzheimer Disease and Related Dementias Temporary Research Facility</span>

                        <a
                            href="{{route('projects.nia-alzheimer-disease-and-related-dementias-temporary-research-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/11/IMG_8747-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Powertrain Facility and Central Energy Plant</span>

                        <a href="{{route('projects.powertrain-facility-central-energy-plant')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/01/RamaTiru_Kalahari_HP-28-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality case study </em><b></b></h4>

                        <span>Kalahari Resort and Convention Center</span>

                        <a href="{{route('projects.kalahari-resort-convention-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/11/Dell-Med-School16-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>The University of Texas at Austin Dell Medical School Ambulatory Surgery Center</span>

                        <a
                            href="{{route('projects.university-texas-austin-dell-medical-school-ambulatory-surgery-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/10/BWI-Terminal-HP-41_Compressed-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation case study </em><b></b></h4>

                        <span>Baltimore Washington International Airport Concourse A Five Gate Extension</span>

                        <a
                            href="{{route('projects.baltimore-washington-international-airport-concourse-five-gate-extension')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/09/STIA_Concourse_C-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>SEA Concourse C &#8211; New Power Center</span>

                        <a href="{{route('projects.sea-concourse-c-new-power-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/09/BOP2_LaserScanning_3-480x320.png')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>SEA Baggage Optimization Phase 2</span>

                        <a href="{{route('projects.sea-baggage-optimization-phase-2')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/09/DRLE-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>Downtown Redmond Link Extension &#8211; Parking Garage and Stations</span>

                        <a href="{{route('projects.downtown-redmond-link-extension-parking-garage-stations')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/07/1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>United Airlines Flight Training Center Building G</span>

                        <a href="{{route('projects.united-airlines-flight-training-center-building-g')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2020/06/Cannon-Design-UTMB-League-City-Tower-08Apr2020-15-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>The University of Texas Medical Branch League City Expansion</span>

                        <a href="{{route('projects.university-texas-medical-branch-league-city-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/05/Delta-Air-Lines-T2-3-Modernization-at-LAX_1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>LAX Delta Air Lines Terminals 2 &amp; 3 Modernization Program</span>

                        <a href="{{route('projects.lax-delta-air-lines-terminals-2-3-modernization-program')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2020/05/LAUSD-Venice-High-School-Comprehensive-Modernization-Project_3-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>LAUSD Venice High School Comprehensive Modernization</span>

                        <a href="{{route('projects.lausd-venice-high-school-comprehensive-modernization')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2020/05/American-Airlines-Terminal-4-5-Redevelopment-Program-at-LAX_1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>LAX American Airlines Terminals 4 &amp; 5 Redevelopment Program</span>

                        <a href="{{route('projects.lax-american-airlines-terminals-4-5-redevelopment-program')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/05/UCI-Verano-8-CopyrightPlomp_4-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC Irvine Verano 8 Graduate Student Housing</span>

                        <a href="{{route('projects.uc-irvine-verano-8-graduate-student-housing')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/05/CF006599-3-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Caltech Chen Neuroscience Research Building</span>

                        <a href="{{route('projects.caltech-chen-neuroscience-research-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/05/HP_Website_Main_Kaiser-Downey-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Kaiser Permanente Downey Hospital Expansion</span>

                        <a href="{{route('projects.kaiser-permanente-downey-hospital-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/05/HP_Website_Main_Kaiser-Irwindale-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Kaiser Permanente Irwindale Specialty Medical Office Building and Parking Structure</span>

                        <a
                            href="{{route('projects.kaiser-permanente-irwindale-specialty-medical-office-building-parking-structure')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/Main-Image-UCSD-Mesa-Nueva-07-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC San Diego Mesa Nueva Graduate and Professional Students &amp; Mixed-Use Housing</span>

                        <a
                            href="{{route('projects.uc-san-diego-mesa-nueva-graduate-and-professional-students-mixed-use-housing')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/12/HP_Website_Main_UCSD-Nuevo-East-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC San Diego Nuevo East Student Housing</span>

                        <a href="{{route('projects.uc-san-diego-nuevo-east-student-housing')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/05/SYLPOE-Ph2-Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>San Ysidro Land Port of Entry – Phase 2</span>

                        <a href="{{route('projects.san-ysidro-land-port-of-entry-phase-2')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/04/UCI-Middle-Earth-Towers-c-Kevin-Scott_3-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC Irvine Middle Earth Housing Expansion</span>

                        <a href="{{route('projects.uc-irvine-middle-earth-housing-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/05/UCI-Douglas-Hospital-Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare case study </em><b></b></h4>

                        <span>UC Irvine Douglas Hospital</span>

                        <a href="{{route('projects.uc-irvine-douglas-hospital')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/HP_Website_Main_SDCCD-ADT-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>SDCCD City College A, D, &#038; T Building Renovation</span>

                        <a href="{{route('projects.sdccd-city-college-d-t-building-renovation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2020/04/CTA-Departure-and-Arrival-Levels-Security-Bollards-%e2%80%93-Phase-2-at-LAX_7-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>LAX Central Terminal Area Departure and Arrival Levels Security Bollards – Phase 2</span>

                        <a
                            href="{{route('projects.lax-central-terminal-area-departure-arrival-levels-security-bollards-phase-2')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/05/LAUSD-Ortho-HS-Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>LAUSD Orthopaedic Hospital Medical Magnet High School</span>

                        <a href="{{route('projects.lausd-orthopaedic-hospital-medical-magnet-high-school')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/HP_Website_Main_P229-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>NAVFAC P229 Weapons Surveillance and Testing Laboratory and Calibration Laboratory</span>

                        <a
                            href="{{route('projects.navfac-p229-weapons-surveillance-testing-laboratory-calibration-laboratory')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/04/HP-Triton-Hangar-Final-47-2-e1587995110872-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Triton Forward Operating Base Hangar</span>

                        <a href="{{route('projects.triton-forward-operating-base-hangar')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/04/WebGOT5-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>UCHealth Memorial Hospital &#8211; EPIC and GOTC Renovations</span>

                        <a href="{{route('projects.uchealth-memorial-hospital-epic-gotc-renovations')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/04/EGE-0694-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation case study </em><b></b></h4>

                        <span>Eagle County Regional Airport Expansion and Remodel</span>

                        <a href="{{route('projects.eagle-county-regional-airport-expansion-remodel')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/01/UTMB_JennieSealy_01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare case study </em><b></b></h4>

                        <span>The University of Texas Medical Branch at Galveston Jennie Sealy Replacement
                            Hospital</span>

                        <a
                            href="{{route('projects.the-university-of-texas-medical-branch-at-galveston-jennie-sealy-replacement-hospital')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/12/Avenues-New-York_42450.00-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>Avenues: The World School &#8211; Facility Management (FM)</span>

                        <a href="{{route('projects.avenues-world-school-facility-management-fm')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/11/img-6-e1573221142690-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>RELLIS Academic Complex, Phase I</span>

                        <a href="{{route('projects.rellis-academic-complex-phase')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/HP_Website_Main_P730-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>NAVFAC P730 Andrew Mills Hall</span>

                        <a href="{{route('projects.navfac-p730-andrew-mills-hall')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/08/website-image1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Allure Apollo</span>

                        <a href="{{route('projects.allure-apollo')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/08/OIAAirside4_016-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation case study </em><b></b></h4>

                        <span>Orlando International Airport Airside Four Renovation and Wing Expansion</span>

                        <a
                            href="{{route('projects.orlando-international-airport-airside-four-renovation-wing-expansion-2')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/07/AlaskaLounge_01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Sea-Tac Airport North Satellite Alaska Airlines Lounge</span>

                        <a href="{{route('projects.sea-tac-airport-north-satellite-alaska-airlines-lounge')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/08/QAE_Final_02_reduced-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>Queen Anne Elementary School Addition</span>

                        <a href="{{route('projects.queen-anne-elementary-school-addition')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/GEOGroup_025_reduced-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>The GEO Group Corporate Headquarters</span>

                        <a href="{{route('projects.geo-group-corporate-headquarters')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/4261_C1A6796_web-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UT Medical Branch League City Parking Initiatives</span>

                        <a href="{{route('projects.ut-medical-branch-league-city-parking-initiatives')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/20160128-_DSC2491-sm-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Austin-Bergstrom International Airport Terminal East Infill</span>

                        <a href="{{route('projects.austin-bergstrom-international-airport-terminal-east-infill-2')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/Aventural-Hotel-32_web-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Aventura Hotel at Universal Orlando</span>

                        <a href="{{route('projects.aventura-hotel-at-universal-orlando')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/HP_Project_SouthwestGate6-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Southwest Airlines HNL Gate 6</span>

                        <a href="{{route('projects.southwest-airlines-hnl-gate-6')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/HP_Project_PacificDO-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Alticor Inc Pacific District Office Renovation</span>

                        <a href="{{route('projects.hensel-phelps-pacific-district-office-renovation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/Straub-DOC-web5-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Straub Doctors-on-Call Clinic Relocation</span>

                        <a href="{{route('projects.straub-doctors-on-call-clinic-relocation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/Aegis-Ashore-web-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Aegis Ashore Missile Defense Test Complex</span>

                        <a href="{{route('projects.aegis-ashore-missile-defense-test-complex')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/Okkodo-web2-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>Okkodo High School Expansion</span>

                        <a href="{{route('projects.okkodo-high-school-expansion-2')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/Hilton-Hokulani_01-web-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Hokulani Waikiki by Hilton Grand Vacations</span>

                        <a href="{{route('projects.hokulani-waikiki-hilton-grand-vacations')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2019/06/Hensel-Phelps-Baptist-Health-Hotel-Exterior-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality case study </em><b></b></h4>

                        <span>Hilton Miami Dadeland Hotel</span>

                        <a href="{{route('projects.hilton-miami-dadeland-hotel')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/05/CLeanSupply_Containment-Reduced-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>University of Washington Medical Center &#8211; Clean Supply Room Renovation</span>

                        <a
                            href="{{route('projects.university-washington-medical-center-clean-supply-room-renovation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/hensel_Phelps_UW-Medical-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Emergency Department Support Space and Resuscitation Rooms Renovation</span>

                        <a
                            href="{{route('projects.emergency-department-support-space-resuscitation-rooms-renovation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/03/20180909_Greeley_City_Center_0024_ScreenRes-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Greeley City Center</span>

                        <a href="{{route('projects.greeley-city-center')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/04/sm5050-S-Syracuse4-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>50Fifty Office Tower</span>

                        <a href="{{route('projects.fifty-50-office-tower')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/03/Hensel-Phelps-Colorado-Skyscraper-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial case study </em><b></b></h4>

                        <span>1144 15th Street Office Building</span>

                        <a href="{{route('projects.1144-15th-street-office-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/03/Maintenance-Bay-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation case study </em><b></b></h4>

                        <span>WMATA Andrews Federal Center Bus Garage</span>

                        <a href="{{route('projects.wmata-andrews-federal-center-bus-garage')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/12/OIAAirside4_011-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Orlando International Airport Airside Four Renovation and Wing Expansion</span>

                        <a
                            href="{{route('projects.orlando-international-airport-airside-four-renovation-wing-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/12/DALGarageC-Corgan-1353-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Love Field Parking Garage</span>

                        <a href="{{route('projects.love-field-parking-garage')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/12/SASOfficeExp_476-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Samsung Fab2 Office Expansion</span>

                        <a href="{{route('projects.samsung-fab2-office-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/01/Level-6-ICS-7017131-17-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>UT Medical Branch at Galveston Jennie Sealy Replacement Hospital Invasive Cardiology
                            Services</span>

                        <a
                            href="{{route('projects.ut-medical-branch-galveston-jennie-sealy-replacement-hospital-invasive-cardiology-services')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/12/Columbus-POA-Oct-25-2018-34_v1_current-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Columbus Land Port of Entry</span>

                        <a href="{{route('projects.columbus-land-port-entry')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/12/EPIA-7016125-Final-Photo-9-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>El Paso International Airport Checked Baggage Inspection System</span>

                        <a
                            href="{{route('projects.el-paso-international-airport-checked-baggage-inspection-system')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/11/Corgan_UTA__014-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>The University of Texas at Arlington Parking Garage &#8211; West Campus</span>

                        <a href="{{route('projects.university-texas-arlington-parking-garage-west-campus')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/11/Rosewood-Garage_4-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Rosewood Amenity Deck &amp; Garage</span>

                        <a href="{{route('projects.rosewood-amenity-deck-garage')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/11/UMC_EAST_3_2017_016-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>University Medical Center East &amp; West Clinics</span>

                        <a href="{{route('projects.university-medical-center-east-west-clinics')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/11/Home-image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Columbia Place Apartments and Hotel</span>

                        <a href="href="{{route('projects.columbia-place-apartments-hotel" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/11/Home-Page-image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Defense Logistics Agency Operations Center</span>

                        <a href="{{route('projects.defense-logistics-agency-operations-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/10/Website-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Kaiser Permanente Capitol Hill Expansion &amp; Restack</span>

                        <a href="{{route('projects.kaiser-permanente-capitol-hill-expansion-restack')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-image1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>San Francisco International Airport (SFO) Harvey Milk Terminal 1</span>

                        <a
                            href="{{route('projects.san-francisco-international-airport-sfo-harvey-milk-terminal-1')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/08/HP-MCO-Terminal-C-Finals-7-reduced-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Orlando International Airport South Terminal C Airside</span>

                        <a href="{{route('projects.orlando-international-airport-south-terminal-c-airside-2')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/07/SJC_Bridge_7369-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>San Jose International Airport Gates 29 &amp; 30 Jetbridge Expansion</span>

                        <a
                            href="{{route('projects.san-jose-international-airport-gates-29-30-jetbridge-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/07/HSC-DWing-RxReno_08-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>University of Washington Health Science Center D-Wing Rx Renovation</span>

                        <a
                            href="{{route('projects.university-of-washington-health-science-center-d-wing-rx-renovation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/06/MAIN-16.Efacade-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Colorado Convention Center and Expansion</span>

                        <a href="{{route('projects.colorado-convention-center-and-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/06/MAIN-Hyatt-Regency-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Hyatt Regency Denver at Colorado Convention Center</span>

                        <a href="{{route('projects.hyatt-regency-denver-at-colorado-convention-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/06/Main-PVH-2-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>UCHealth Poudre Valley Hospital Building A</span>

                        <a href="{{route('projects.uchealth-poudre-valley-hospital-building-a')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/06/MAIN-DSC06761-q-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Chanda Center for Health</span>

                        <a href="{{route('projects.chanda-center-for-health')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/06/MAIN-sm601-Bway-Aerial-1-q-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Denver Health 601 Broadway Hospital Support Services Building</span>

                        <a href="{{route('projects.denver-health-601-broadway-hospital-support-services-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/06/MAIN-Bordwin_Sage_Eliz_FtColl_0688-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>The Elizabeth Hotel, Autograph Collection and Parking Garage</span>

                        <a href="{{route('projects.elizabeth-hotel-autograph-collection-parking-garage')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/05/website-image-2-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Constitution Gardens Phase 1</span>

                        <a href="{{route('projects.constitution-gardens-phase-1')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/05/Exterior-03-Edited-Columns-USE-THIS-ONE-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Universal&#8217;s Cabana Bay Resort Towers</span>

                        <a href="{{route('projects.universals-cabana-bay-resort-towers')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/05/Atlas-V-TDRSM-Launch-3-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>Commercial Crew &amp; Transportation Capability (CCtCap) Tower</span>

                        <a href="{{route('projects.commercial-crew-transportation-capability-cctcap-tower')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/05/20180215_HENSP_1016-reduced-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Universal&#8217;s Fast &amp; Furious: Supercharged</span>

                        <a href="{{route('projects.universals-fast-furious-supercharged')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/02/Exterior3-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Marriott Residence Inn Baltimore</span>

                        <a href="{{route('projects.marriott-residence-inn-baltimore')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2018/01/MWAA-RailYard-93-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>MWAA Dulles Railyard and Maintenance Facility</span>

                        <a href="{{route('projects.mwaa-dulles-railyard-and-maintenance-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/sof-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>SOF C-130 Fuel Cell &amp; Corrosion Control Hangars</span>

                        <a href="{{route('projects.sof-c-130-fuel-cell-corrosion-control-hangars')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/IMG_9938-768x512.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Sandpearl Resort</span>

                        <a href="{{route('projects.sandpearl-resort')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/M5A7965-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Cinépolis Luxury Movie Theatres</span>

                        <a href="{{route('projects.cinepolis-luxury-movie-theatres')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Hensel-Phelps_Transformers-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Universal&#8217;s Transformers: The Ride 3D</span>

                        <a href="{{route('projects.universals-transformers-ride-3d')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/IMG_0984-768x512.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>University of Arizona Law Commons</span>

                        <a href="{{route('projects.university-arizona-law-commons')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/San-Antonio-PSHQ-03-768x511.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>City of San Antonio Public Safety Headquarters</span>

                        <a href="{{route('projects.city-san-antonio-public-safety-headquarters')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-UCSD-Nuevo-West-07-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC San Diego Nuevo West Graduate Student Housing</span>

                        <a href="{{route('projects.uc-san-diego-nuevo-west-graduate-student-housing')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Good_Sam_9.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Samaritan Medical Center Medical Office Building</span>

                        <a href="{{route('projects.samaritan-medical-center-medical-office-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/rotarypark-12-768x513.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>San Jose Rotary PlayGarden</span>

                        <a href="{{route('projects.san-jose-rotary-playgarden')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/20140217_HEPH_1044-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Universal CityWalk Venue Renovations</span>

                        <a href="{{route('projects.universal-citywalk-venue-renovations')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/20150915_HEPH_1005-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Universal Studios Royal Pacific Resort Expansion</span>

                        <a href="{{route('projects.universal-studios-royal-pacific-resort-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Mary-Gates-Hall_3-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>University of Washington Mary Gates Hall</span>

                        <a href="{{route('projects.university-washington-mary-gates-hall')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/King-Cty-Regional-Justice-Center-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>King County Regional Justice Center</span>

                        <a href="{{route('projects.king-county-regional-justice-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/SSAOps_Exterior.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Social Security Administration (SSA) Operations Building Renovation</span>

                        <a
                            href="{{route('projects.social-security-administration-ssa-operations-building-renovation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/NASA_Bldg21_PP1026_lg-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>NASA Building 21, Human Health &amp; Performance Lab</span>

                        <a href="{{route('projects.nasa-building-21-human-health-performance-lab')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Pentagon_HallofHeroes.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Pentagon Renovation Wedges 2-5</span>

                        <a href="{{route('projects.pentagon-renovation-wedges-2-5')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-SD-U.S.-Courthouse-07-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>San Diego United States Courthouse</span>

                        <a href="{{route('projects.san-diego-united-states-courthouse')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Hensel-Phelps-UC-San-Diego-Mesa-Nueva2.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>University of California, San Diego Mixed-Use Student Housing Phase 1</span>

                        <a
                            href="{{route('projects.university-california-san-diego-mixed-use-student-housing-phase-1')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-UCR-MRB1-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC Riverside Multidisciplinary Research Building 1</span>

                        <a href="{{route('projects.uc-riverside-multidisciplinary-research-building-1')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/UCI-Mesa-Court-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC Irvine Mesa Court Expansion</span>

                        <a href="{{route('projects.uc-irvine-mesa-court-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-UCI-Humanities-Gateway-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC Irvine Humanities Gateway</span>

                        <a href="{{route('projects.uc-irvine-humanities-gateway')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-UCI-Eng-3-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC Irvine Engineering Unit 3</span>

                        <a href="{{route('projects.uc-irvine-engineering-unit-3')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-UCI-CS-Unit-3-05-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UC Irvine Computer Science Unit 3</span>

                        <a href="{{route('projects.uc-irvine-computer-science-unit-3')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-The-Mark-02-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>The Mark</span>

                        <a href="{{route('projects.the-mark')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-Smart-Corner-07-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Smart Corner</span>

                        <a href="{{route('projects.smart-corner')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-Sharp-Rancho-Bernardo-07-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Rancho Bernardo Tenant Improvements</span>

                        <a href="{{route('projects.rancho-bernardo-tenant-improvements')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-Sharp-Chula-Vista-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Sharp Chula Vista Medical Center Ocean View Tower</span>

                        <a href="{{route('projects.sharp-chula-vista-medical-center-ocean-view-tower')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-Sanford-Consortium-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Sanford Consortium for Regenerative Medicine</span>

                        <a href="{{route('projects.sanford-consortium-for-regenerative-medicine')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/San-Ysidro-Land-Port-06-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>San Ysidro Land Port of Entry Phase 1B</span>

                        <a href="{{route('projects.san-ysidro-land-port-of-entry-phase-1b')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-NAVFAC-P750-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>NAVFAC P750 Helicopter Maintenance Facility</span>

                        <a href="{{route('projects.navfac-p750-helicopter-maintenance-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-NAVFAC-P742-SMALL-03-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>NAVFAC P742 John W. Finn Hall</span>

                        <a href="{{route('projects.navfac-p742-john-w-finn-hall')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/NASM_Interior1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>National Air &amp; Space Museum Phase 2 &#8211; Mary Baker Engen Restoration Hangar</span>

                        <a
                            href="{{route('projects.national-air-space-museum-phase-2-mary-baker-engen-restoration-hangar')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-UCIMC-Clinical-Lab-04-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>UC Irvine Medical Center Clinical Laboratory</span>

                        <a href="{{route('projects.uc-irvine-medical-center-clinical-laboratory')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/Arkansas-Travelers-Baseball-Stadium-7005058-EL-4-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Arkansas Travelers Baseball Stadium at Dickey-Stephens Park</span>

                        <a href="{{route('projects.arkansas-travelers-baseball-stadium-dickey-stephens-park')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Houston-Methodist-Center-2-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Houston Methodist Outpatient Center</span>

                        <a href="{{route('projects.houston-methodist-outpatient-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2020/01/UTMB_JennieSealy_960x590.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>UT Medical Branch at Galveston Jennie Sealy Replacement Hospital</span>

                        <a href="{{route('projects.ut-medical-branch-galveston-jennie-sealy-replacement-hospital')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/7006063_UTDPRI_EL3-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>UT Austin Dell Pediatric Research Institute</span>

                        <a href="{{route('projects.ut-austin-dell-pediatric-research-institute')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/B17E-necropsy-room-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UT Medical Branch at Galveston Building 17 Expansion</span>

                        <a href="{{route('projects.ut-medical-branch-galveston-building-17-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/MV-22-Hangar-MCBH1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>P907 MV-22 Parking Apron and Infrastructure and P-908 MV-22 Hangar</span>

                        <a
                            href="{{route('projects.p907-mv-22-parking-apron-and-infrastructure-and-p-908-mv-22-hangar')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/UT-Arlington-ERC-3_cropped-1024x684-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UT Arlington Engineering Research Complex</span>

                        <a href="{{route('projects.ut-arlington-engineering-research-complex')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/The-University-of-Texas-Frank-C-Erwin-Center-Stage-I-IL-I-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UT Austin Frank C. Erwin Jr. Special Events Center Renovations &amp; Expansion</span>

                        <a
                            href="{{route('projects.ut-austin-frank-c-erwin-jr-special-events-center-renovations-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/0P6A5488-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UT Austin Dell Medical School Stages A,B, &amp; C/E &#8211; Site, Research and MOB</span>

                        <a href="{{route('projects.ut-austin-dell-medical-school-stages-ab-ce-site-research-mob')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/DSC0730-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UT Austin Engineering Education and Research Center</span>

                        <a href="{{route('projects.ut-austin-engineering-education-research-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/UTEP-Exterior_photoshopped-sky-RS-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>The University of Texas at El Paso Interdisciplinary Research Building</span>

                        <a href="{{route('projects.university-texas-el-paso-interdisciplinary-research-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/300-Third-Condominiums-4-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>300 Third Tower Condominiums</span>

                        <a href="{{route('projects.300-third-tower-condominiums')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/MikkiPiper_Skyline_25-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>Skyline College CIP 2 Program</span>

                        <a href="{{route('projects.skyline-college-cip-2-program')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2021/03/OMFE_Final_13-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation case study </em><b></b></h4>

                        <span>Operations and Maintenance Facility East</span>

                        <a href="{{route('projects.operations-maintenance-facility-east')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Mercantile-on-Main-3-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Mercantile Place on Main</span>

                        <a href="{{route('projects.mercantile-place-main')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Spring-Condominiums-4-1024x684-768x513.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Spring Condominiums</span>

                        <a href="{{route('projects.spring-condominiums')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Guam-BEQ-Elevation-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>NAVFAC Guam Bachelor Enlisted Quarters (BEQ)</span>

                        <a href="{{route('projects.navfac-guam-bachelor-enlisted-quarters-beq')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/2400-Nueces-6-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>2400 Nueces</span>

                        <a href="{{route('projects.2400-nueces')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Homepage-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Sea-Tac North Satellite Modernization</span>

                        <a href="{{route('projects.sea-tac-north-satellite-modernization')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/HP_Project_KWWTP-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Water + Wastewater case study </em><b></b></h4>

                        <span>Kailua Regional Wastewater Treatment Plant Tunnel Influent Pump Station and Headworks
                            Facility</span>

                        <a
                            href="{{route('projects.kailua-regional-wastewater-treatment-plant-tunnel-influent-pump-station-headworks-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/MikkiPiper_Stanislaus_Jail_7-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Stanislaus County Public Safety Center</span>

                        <a href="{{route('projects.stanislaus-county-public-safety-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Love-Field-Modernization-6-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Love Field Modernization Program</span>

                        <a href="{{route('projects.love-field-modernization-program')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/SM_170313_SHC_Emeryville_HybridOR-768x512.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Stanford Health Care Emeryville</span>

                        <a href="{{route('projects.stanford-health-care-emeryville')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/SJC-B-ExtDuskFromNorth-KP-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>San Jose International Airport | Terminal Area Improvement Program</span>

                        <a
                            href="{{route('projects.san-jose-international-airport-terminal-area-improvement-program')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-LAX-Westfield-T2-03-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>LAX Westfield Terminal 2</span>

                        <a href="{{route('projects.lax-westfield-terminal-2')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-MLK-Jr-Tower-Reno-06-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Martin Luther King, Jr. Medical Center Inpatient Tower Renovation</span>

                        <a
                            href="{{route('projects.martin-luther-king-jr-medical-center-inpatient-tower-renovation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-LAX-United-T-Redev-03-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>LAX United Airlines Terminal Redevelopment Program</span>

                        <a href="{{route('projects.lax-united-airlines-terminal-redevelopment-program')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-LAX-SWA-T1-03-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>LAX Southwest Airlines Terminal 1 Modernization Program</span>

                        <a href="{{route('projects.lax-southwest-airlines-terminal-1-modernization-program')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/LBUSD-McBride-Sr-HS-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>LBUSD McBride Senior High School</span>

                        <a href="{{route('projects.lbusd-mcbride-senior-high-school')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Star-Alliance-Lounge-07-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>LAX Air New Zealand Star Alliance Lounge</span>

                        <a href="{{route('projects.lax-air-new-zealand-star-alliance-lounge')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/LAX-Alaska-T6-07-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>LAX Alaska Airlines Terminal 6 Renovation</span>

                        <a href="{{route('projects.lax-alaska-airlines-terminal-6-renovation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-LAUSD-RFK-Phs-1-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>LAUSD Robert F. Kennedy Community Schools Phase 1 (Ambassador Learning Center)</span>

                        <a
                            href="{{route('projects.lausd-robert-f-kennedy-community-schools-phase-1-ambassador-learning-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-LAUSD-RFK-Phs-2-04-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>LAUSD Robert F. Kennedy Community Schools Phase 2 (Ambassador Learning Center)</span>

                        <a
                            href="{{route('projects.lausd-robert-f-kennedy-community-schools-phase-2-ambassador-learning-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-Roybal-Learning-Center-02-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>LAUSD Edward R. Roybal Learning Center</span>

                        <a href="{{route('projects.lausd-edward-r-roybal-learning-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Main-Image-InterContinental-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>The InterContinental San Diego</span>

                        <a href="{{route('projects.the-intercontinental-san-diego')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/LFN_Gallery_002-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>SpringHill Suites &amp; Residence Inn San Diego</span>

                        <a href="{{route('projects.springhill-suites-residence-inn-san-diego')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/LA-Metro-Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>Division 16: Southwestern Yard</span>

                        <a href="{{route('projects.division-16-southwestern-yard')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Kaiser-Anaheim-Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Kaiser Permanente Orange County Anaheim Medical Center</span>

                        <a href="{{route('projects.kaiser-permanente-orange-county-anaheim-medical-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Kaiser-SD-MC_Hospital_Healthcare_Main_011.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Kaiser Permanente San Diego Medical Center</span>

                        <a href="{{route('projects.kaiser-permanente-san-diego-medical-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Hotel-Indigo_Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Hotel Indigo</span>

                        <a href="{{route('projects.hotel-indigo')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Hilton-SD-Bayfront-Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Hilton San Diego Bayfront Hotel</span>

                        <a href="{{route('projects.hilton-san-diego-bayfront-hotel')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/Geo-Adelanto-Detention-Facility-West-Expansion_Public_Main_003.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>GEO Adelanto Detention Facility West Expansion</span>

                        <a href="{{route('projects.geo-adelanto-detention-facility-west-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Cymer-CSD-6-EUV-TI-Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Cymer CSD 6 EUV Tenant Improvement</span>

                        <a href="{{route('projects.cymer-csd-6-euv-tenant-improvement')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/FORSCOM_Exterior-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>FORSCOM / USARC Combined Headquarters</span>

                        <a href="{{route('projects.forscom-usarc-combined-headquarters')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/NMIC_Exterior-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>National Maritime Intelligence Center (NMIC)</span>

                        <a href="{{route('projects.national-maritime-intelligence-center-nmic')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2019/07/2008054-DASH-William-B.-Hurd-Maintenance-and-Operations-Administration-Facility-003-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>DASH William B. Hurd Maintenance &amp; Operations Administration Facility</span>

                        <a
                            href="{{route('projects.dash-william-b-hurd-maintenance-operations-administration-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/WMATA_SE_Exterior2-1024x612.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>WMATA Southeastern Bus Garage Replacement</span>

                        <a href="{{route('projects.wmata-southeastern-bus-garage-replacement')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/5-Hilton-Baltimore-Convention-Center-Hotel-010_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Hilton Baltimore Convention Center Hotel</span>

                        <a href="{{route('projects.hilton-baltimore-convention-center-hotel')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/07/2004038-TC-Williams-High-School-002.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>T.C. Williams High School</span>

                        <a href="{{route('projects.t-c-williams-high-school')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/ECHOJ_1397-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>East County Hall of Justice</span>

                        <a href="{{route('projects.east-county-hall-justice')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/DSC4032-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Austin-Bergstrom International Airport Terminal/Apron Expansion and Improvements</span>

                        <a
                            href="{{route('projects.austin-bergstrom-international-airport-terminalapron-expansion-improvements')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Samsung-Fab-A2-Facility-4_cropped-1024x524.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Samsung Fab A2 Chip Fabrication Facility</span>

                        <a href="{{route('projects.samsung-fab-a2-chip-fabrication-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2019/07/2009059-Circuit-Court-Building-and-Public-Safety-Building-020-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Spotsylvania Circuit Court Building and Public Safety Building</span>

                        <a href="{{route('projects.spotsylvania-circuit-court-building-public-safety-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Mule_Creek_6-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Mule Creek Infill Complex</span>

                        <a href="{{route('projects.mule-creek-infill-complex')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Final-Union-Tower-West14a_Retouched-768x513.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Union Tower West</span>

                        <a href="{{route('projects.union-tower-west')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/3006083-Skywest-Hangar-040_Original-768x510.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Skywest Hangar</span>

                        <a href="{{route('projects.skywest-hangar')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/MikkiPiper_Yolo_SC_34.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Yolo County Superior Courthouse</span>

                        <a href="{{route('projects.yolo-county-superior-courthouse')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/History-Colorado-Center-2-768x511.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>History Colorado Center</span>

                        <a href="{{route('projects.history-colorado-center')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/HAATS-Exterior-Dusk-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>High Altitude Army Aviation Training Site (HAATS)</span>

                        <a href="{{route('projects.high-altitude-army-aviation-training-site-haats')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Fort-Collins-Discovery-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Fort Collins Discovery Museum</span>

                        <a href="{{route('projects.fort-collins-discovery-museum')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/Fort-Carson-13th-CAB-Control-Tower-012_Original-768x512.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Fort Carson 13th Combat Aviation Brigade Airport Traffic Control Tower</span>

                        <a
                            href="{{route('projects.fort-carson-13th-combat-aviation-brigade-airport-traffic-control-tower')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/4003037-Chemical-Sciences-Building-020-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>University of Arizona Chemical Sciences Building</span>

                        <a href="{{route('projects.university-arizona-chemical-sciences-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/4003040-Medical-Research-Building-014-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>University of Arizona Medical Research Building (MRB)</span>

                        <a href="{{route('projects.university-arizona-medical-research-building-mrb')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/University-Village-Thousand-Oaks-Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>University Village Thousand Oaks</span>

                        <a href="{{route('projects.university-village-thousand-oaks')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/05/7010092-UT-Austin-Darrell-K-Royal-Texas-Memorial-Stadium-Athletic-Offices-Infill-and-Stadium-Maint-and-Renovation-008_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>UT Austin Darrell K Royal Texas Memorial Stadium Athletic Offices Infill &#038; Stadium
                            Maintenance &#038; Renovation</span>

                        <a
                            href="{{route('projects.ut-austin-darrell-k-royal-texas-memorial-stadium-athletic-offices-infill-stadium-maint-renovation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/University-Village-Health-Center-Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>University Village Thousand Oaks Health Center</span>

                        <a href="{{route('projects.university-village-thousand-oaks-health-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/05/8012119-Benjamin-P.-Grogan-and-Jerry-L.-Dove-Federal-Building-GSA-FOB-028_Original-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Benjamin P. Grogan &amp; Jerry L. Dove Federal Building</span>

                        <a href="{{route('projects.benjamin-p-grogan-jerry-l-dove-federal-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/SFOT3East_3-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>SFO Terminal 3 East</span>

                        <a href="{{route('projects.sfo-terminal-3-east')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/Cedars-Sinai-Plaza-Healing-Gardens-Project-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Cedars-Sinai Medical Center Plaza Healing Gardens</span>

                        <a href="{{route('projects.cedars-sinai-medical-center-plaza-healing-gardens')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/NFCU-Phase-3-Final-Photos-9-GRASS-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Navy Federal Credit Union Phase 2 Campus Expansion</span>

                        <a href="{{route('projects.navy-federal-credit-union-phase-2-campus-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/3012146-Fort-Carson-13th-Combat-Aviation-Brigade-ASB-Hangar-060_Original-768x512.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Fort Carson 13th Combat Aviation Brigade Aviation Support Battalion (ASB) Hangar</span>

                        <a
                            href="{{route('projects.fort-carson-13th-combat-aviation-brigade-aviation-support-battalion-asb-hangar')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/B5B6-Lobby-003-e1502903519254-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Navy Federal Credit Union Phase 1 Campus Expansion</span>

                        <a href="{{route('projects.navy-federal-credit-union-phase-1-campus-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/5915090-Maricopa-County-Intake-Tr-004-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Maricopa County Intake / Transfer &amp; Release Facility</span>

                        <a href="{{route('projects.maricopa-county-intake-transfer-release-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/echostar-2-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Private Client Data Center</span>

                        <a href="{{route('projects.private-client-data-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/SFOT3_BAE_2-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>SFO Terminal 3, Boarding Area E</span>

                        <a href="{{route('projects.sfo-terminal-3-boarding-area-e')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Denver-Justice--480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Denver Justice Center</span>

                        <a href="{{route('projects.denver-justice-center')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/5904028-DIA-Conc-B-Regional-Jet-Facility-009_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>Denver International Airport (DEN) | Concourse B Regional Jet Facility</span>

                        <a
                            href="{{route('projects.denver-international-airport-den-concourse-b-regional-jet-facility')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/MikkiPiper_Fresno_VA_12-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>California Veterans Home | Fresno</span>

                        <a href="{{route('projects.california-veterans-home-fresno')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Edited-Photo-with-Background-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Denver Health | Federico F. Peña Southwest Family Health Center</span>

                        <a
                            href="{{route('projects.denver-health-federico-f-pena-southwest-family-health-center-2')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/M5A9483-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>South Airport Automated People Mover (APM) Complex at the Orlando International
                            Airport</span>

                        <a
                            href="{{route('projects.south-airport-automated-people-mover-apm-complex-orlando-international-airport')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Regional-Biocontainment-Laboratory-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>Colorado State University | Regional Biocontainment Laboratory</span>

                        <a href="{{route('projects.colorado-state-university-regional-biocontainment-laboratory')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Broken-Arrow-e1501881825360-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Broken Arrow Armed Forces Reserve Center (AERC)</span>

                        <a href="{{route('projects.broken-arrow-armed-forces-reserve-center-aerc')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Interior1_BRPH-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Commercial Crew &amp; Cargo Processing Facility (C3PF) Phases 1-3</span>

                        <a href="{{route('projects.commercial-crew-cargo-processing-facility-c3pf-phases-1-3')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/DSC_0180-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Orbital Processing Facility (OPF) 1 &amp; 2 Modifications</span>

                        <a href="{{route('projects.orbital-processing-facility-opf-1-2-modifications')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/getPictures4.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>Calexico Land Port of Entry</span>

                        <a href="{{route('projects.calexico-land-port-entry')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Ameristar-Large-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Ameristar Casino Black Hawk Hotel &amp; Resort</span>

                        <a href="{{route('projects.ameristar-casino-black-hawk-hotel-resort-2')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/BannerAlz_3571-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Banner Health Alzheimer Institute</span>

                        <a href="{{route('projects.banner-health-alzheimer-institute')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/MikkiPiper_SQ_53-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>San Quentin State Prison | Central Health Services Building</span>

                        <a href="{{route('projects.san-quentin-state-prison-central-health-services-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/5904033-US-Embassy-Berlin-003-1.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>US Embassy Berlin</span>

                        <a href="{{route('projects.us-embassy-berlin')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/5915093-Banner-University-Medical-002_Original-480x320.png')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Banner University Medical Center Tucson (BUMCT) &#8211; North Campus Outpatient
                            Center</span>

                        <a
                            href="{{route('projects.banner-university-medical-center-tucson-bumct-north-campus-outpatient-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/SJCountyAdmin_1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>San Joaquin County Administration Building</span>

                        <a href="{{route('projects.san-joaquin-county-administration-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/5908060-University-of-Arizona-Env-004-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>University of Arizona Environment and Natural Resources Phase II (ENRII)</span>

                        <a
                            href="{{route('projects.university-arizona-environment-natural-resources-phase-ii-enrii')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/city-north-768x510.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>City North Phase I</span>

                        <a href="{{route('projects.city-north-phase')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Lanai-web-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Four Seasons Resort at Manele Bay</span>

                        <a href="{{route('projects.four-seasons-resort-manele-bay')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/MikkiPiper_CAFB_2_5.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>SOF Hangar Aircraft Maintenance Unit (AMU) &#8211; Cannon Air Force Base</span>

                        <a
                            href="{{route('projects.sof-hangar-aircraft-maintenance-unit-amu-cannon-air-force-base')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/Pajarito-Cliffs-Site.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>Los Alamos County Airport Basin Project (Pajarito Cliffs Site)</span>

                        <a href="{{route('projects.los-alamos-county-airport-basin-project-pajarito-cliffs-site')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/four-seasons-maui-web-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Four Seasons Maui at Wailea Guest Room Renovations</span>

                        <a href="{{route('projects.four-seasons-maui-at-wailea-renovations-guest-room')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/621-Capitol-Mall-EP-5005035-32-768x512.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>US Bank Tower | 621 Capitol Mall</span>

                        <a href="{{route('projects.us-bank-tower-621-capitol-mall')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/MAIN-DTG-property-15-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>DoubleTree by Hilton Greeley at Lincoln Park</span>

                        <a href="{{route('projects.doubletree-hilton-greeley-lincoln-park')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/1-Block-A-Rendering-Creative-Suite-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Makers Quarter</span>

                        <a href="{{route('projects.makers-quarter')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/1-Aspire-Apollo-01-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>ASPIRE Apollo</span>

                        <a href="{{route('projects.aspire-apollo')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/1-Gateway-Hotel-001_Original2-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Hopkins Gateway Hotel &#8211; Development Services</span>

                        <a href="{{route('projects.hopkins-gateway-hotel-development-services')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/1-NCTD-Sprinter-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>North County Transit District</span>

                        <a href="{{route('projects.north-county-transit-district-facility-services')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/1-Eastman-Kodak-Aerial-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Eastman Kodak Campus</span>

                        <a href="{{route('projects.eastman-kodak-campus')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/1-U.S.-Southern-Command-Headquarters-065_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>U.S. Southern Command Headquarters</span>

                        <a href="{{route('projects.u-s-southern-command-headquarters')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/1-Evolved-Expendable-Launch-Vehicle-_Original-2-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Evolved Expendable Launch Vehicle</span>

                        <a href="{{route('projects.evolved-expendable-launch-vehicle-facility-services')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2019/07/2011070-Armed-Forces-Retirement-Home-AFRH-New-Commons-Healthcare-Center-The-Scott-Project-032-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Armed Forces Retirement Home (AFRH) New Commons / Healthcare Center, The Scott
                            Project</span>

                        <a
                            href="{{route('projects.armed-forces-retirement-home-afrh-new-commons-healthcare-center-the-scott-project')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2019/07/2011071-Smithsonian-Environmental-Research-Center-SERC-Charles-McC.-Mathias-Laboratory-066-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Smithsonian Environmental Research Center (SERC) Charles McC. Mathias Laboratory</span>

                        <a
                            href="{{route('projects.smithsonian-environmental-research-center-serc-charles-mcc-mathias-laboratory')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/OCAR_Aerial-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Office of the Chief Army Reserves (OCAR) Building</span>

                        <a href="{{route('projects.office-chief-army-reserves-ocar-building')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/05/2010064-Marriott-Marquis-Washington-DC-038_Original-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Marriott Marquis Washington, D.C.</span>

                        <a href="{{route('projects.marriott-marquis-washington-d-c')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/12/SSANSC_ExteriorDay-5-1024x683-1-768x512.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Social Security Administration (SSA) National Support Center</span>

                        <a href="{{route('projects.social-security-administration-ssa-national-support-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/SKYTR-_1015F-reduced-768x512.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>PHX Sky Train Stage 1 Fixed Facilities</span>

                        <a href="{{route('projects.phx-sky-train-stage-1-fixed-facilities')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/08/5910064-5912075-University-of-Arizona-Can-015-1-e1503605235792-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>University of Arizona Cancer Center</span>

                        <a href="{{route('projects.university-arizona-cancer-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/05/6013001-Okkodo-High-School-Expansion-020_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education project </em><b></b></h4>

                        <span>Okkodo High School Expansion</span>

                        <a href="{{route('projects.okkodo-high-school-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/05/6014010-Straub-DOC-CLinic-Relocat-003_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare project </em><b></b></h4>

                        <span>Straub DOC Clinic Relocation</span>

                        <a href="{{route('projects.straub-doc-clinic-relocation')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/05/5910055-Recovery-Expansion-and-Renovation-Mariposa-Land-Port-of-Entry-Nogales-Arizona-Phases-2-3-and-4-028_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation project </em><b></b></h4>

                        <span>Mariposa Land Port of Entry</span>

                        <a href="{{route('projects.mariposa-land-port-entry')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/05/7013102-William-P.-Hobby-Internat-021_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation project </em><b></b></h4>

                        <span>William P. Hobby International Expansion</span>

                        <a href="{{route('projects.william-p-hobby-international-expansion')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/05/5906044-City-North-Phoenix-Phase-I-014_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>City North Phoenix Phase I</span>

                        <a href="{{route('projects.city-north-phoenix-phase')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/05/MikkiPiper_Stockton_Ph_III_38-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>DeWitt Nelson Correctional Annex</span>

                        <a href="{{route('projects.dewitt-nelson-correctional-annex')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/05/SLAC_Bldg-header-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Science + Technology project </em><b></b></h4>

                        <span>Stanford Linear Accelerator Center (SLAC) Science and User Support Building</span>

                        <a href="{{route('projects.stanford-linear-accelerator-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/05/2011069-Potomac-Town-Center-Buildings-2-7-020_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Potomac Town Center</span>

                        <a href="{{route('projects.potomac-town-center-buildings-2-7')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/04/dk_061915-60-Edit-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Aviation case study </em><b></b></h4>

                        <span>SFO Replacement Airport Traffic Control Tower</span>

                        <a href="{{route('projects.sfo-replacement-airport-traffic-control-tower')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/04/6211001-Mamizu-Utilities-and-Site-Improvements-Phase-I-040_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project </em><b></b></h4>

                        <span>Mamizu Utilities and Site Improvements Phase 1</span>

                        <a href="{{route('projects.mamizu-utilities-and-site-improvements-phase')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/08/IMG_5745-1024x684.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality project </em><b></b></h4>

                        <span>Masonic Temple Hotel &#8211; Renaissance Providence</span>

                        <a href="{{route('projects.masonic-temple-hotel-renaissance-providence')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/04/SCFamlyJust_4883-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice project </em><b></b></h4>

                        <span>Santa Clara Family Justice Center</span>

                        <a href="{{route('projects.santa-clara-family-justice-center')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/04/SKYTR-_1586F-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Infrastructure + Transportation case study </em><b></b></h4>

                        <span>Phoenix Sky Harbor Sky Train</span>

                        <a href="{{route('projects.phoenix-sky-harbor-sky-train')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/04/UCI-Medical-Center_2-e1502905327895-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Healthcare case study </em><b></b></h4>

                        <span>University of California, Irvine Medical Center Replacement Hospital (UCI Douglas
                            Hospital)</span>

                        <a href="{{route('projects.leading-california-healthcare-into-design-build-delivery')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/04/Grand-Islander-Horizontal-12-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Hospitality case study </em><b></b></h4>

                        <span>Hilton Grand Islander</span>

                        <a href="{{route('projects.hilton-grand-islander')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/04/austin-central-library_ext-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Government + Justice case study </em><b></b></h4>

                        <span>City of Austin New Central Library and Related Improvements</span>

                        <a href="{{route('projects.city-of-austin-new-central-library-and-related-improvements')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2017/04/Ascend_Apollo_02_960_560_c1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial case study </em><b></b></h4>

                        <span>Ascend Apollo</span>

                        <a href="{{route('projects.ascend-apollo')}}" ><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item">

                <div class="pro-image-box">





                    <img
                        src="{{asset('wp-content/uploads/2017/04/8014137-Bethune-Cookman-Universit-031_Original-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Education case study </em><b></b></h4>

                        <span>Bethune-Cookman University Residence Halls</span>

                        <a href="{{route('projects.bethune-cookman-university-residence-halls')}}" ><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>



        </ul>



        <div class="btn-center"><a id="project_btn" class="btn inverse" href="#top">scroll to top</a></div>




        <div style="display:none;" class="btn-center"><a id="pagination" class="btn inverse load_more"
                data-nonce="" href="javascript:;">Load more</a></div>










    </div>



@endsection
@push('scripts')
<script>
	jQuery(document).ready(function() {

		jQuery('.pro-hover-content').click(function() {

			var myLink = jQuery(this).find('a');

			var myDest = jQuery(myLink).attr('href');

			window.location.href = myDest;

		});

	});
</script>
@endpush