@extends('_layout.others')
@section('content')

    


   


    <div class="page-banner" style="background-image:url({{asset('wp-content/uploads/2017/02/projects.jpg')}});">

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
    


            <li class="grid-item aviation">
    
               <div class="pro-image-box">
    
    
    
    
    
                   <img
                       src="{{asset('wp-content/uploads/2022/11/HP-TPA-International-Finals-15-reduced-768x511.jpg')}}">
    
    
    
    
                   <div class="pro-hover-content">
    
                       <h4><em>Aviation project</em><b></b></h4>
    
                       <span>Tampa International Airport Main Terminal Curbside Expansion Program</span>
    
                       <a
                           href="{{route('projects.tampa-international-airport-main-terminal-curbside-expansion-program-2')}}"><i
                               class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                               More</span></a>
    
                   </div>
    
    
    
               </div>
    
            </li> 
           
    
           <li class="grid-item aviation">
    
               <div class="pro-image-box">
    
    
    
    
    
                   <img src="{{asset('wp-content/uploads/2022/06/China-Lake-01.jpg')}}">
    
    
    
    
                   <div class="pro-hover-content">
    
                       <h4><em>Aviation project</em><b></b></h4>
    
                       <span>China Lake South Airfield</span>
    
                       <a href="{{route('projects.china-lake-south-airfield')}}"><i
                               class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                               More</span></a>
    
                   </div>
    
    
    
               </div>
    
           </li>
    
    
           <li class="grid-item aviation">
               <div class="pro-image-box">
                   <img src="{{asset('wp-content/uploads/2020/05/HP_Website_Main_LAX-T1.5-480x320.jpg')}}">
                   <div class="pro-hover-content">
    
                       <h4><em>Aviation project</em><b></b></h4>
    
                       <span>LAX Southwest Airlines Terminal 1.5 Development Program</span>
    
                       <a href="{{route('projects.lax-southwest-airlines-terminal-1-5-development-program')}}">
                           <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span>
                       </a>
    
                   </div>
               </div>
           </li>
    
    
           <li class="grid-item aviation">
               <div class="pro-image-box">
                   <img src="{{asset('wp-content/uploads/2022/02/DJC_Final_31Jan2012_010-480x320.jpg')}}">
    
                   <div class="pro-hover-content">
    
                       <h4><em>Aviation project</em><b></b></h4>
    
                       <span>Hangar Reconstruction &#8211; Dulles Jet Center</span>
    
                       <a href="{{route('projects.hangar-reconstruction-dulles-jet-center')}}"><i
                               class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                               More</span></a>
    
                   </div>
               </div>
           </li>
    
    
           <li class="grid-item aviation">
    
               <div class="pro-image-box">
    
    
    
    
    
                   <img
                       src="{{asset('wp-content/uploads/2022/02/4.Midfield-Concourse-at-Washington-Dulles-Intl-Airport-480x320.jpg')}}">
    
    
    
    
                   <div class="pro-hover-content">
    
                       <h4><em>Aviation project</em><b></b></h4>
    
                       <span>Midfield Concourse at Washington Dulles International Airport</span>
    
                       <a
                           href="{{route('projects.midfield-concourse-washington-dulles-international-airport')}}"><i
                               class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                               More</span></a>
    
                   </div>
    
    
    
               </div>
    
           </li>
    
    
           <li class="grid-item aviation">
    
               <div class="pro-image-box">
                   <img src="{{asset('wp-content/uploads/2022/02/BWI-Terminal-Ext-122-7x10-72dpi-1-480x320.jpg')}}">
                   <div class="pro-hover-content">
    
                       <h4><em>Aviation project</em><b></b></h4>
    
                       <span>Baltimore Washington International Airport Terminal A/B Expansion</span>
    
                       <a href="{{route('projects.baltimore-washington-international-airport-terminal-b-expansion')}}">
                           <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span>
                       </a>
                   </div>
               </div>
    
           </li>

           


            <li class="grid-item commercial">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/06/Main-Image-SeaWorld-Aquatica-02-1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project</em><b></b></h4>

                        <span>SeaWorld Aquatica SP2</span>

                        <a href="{{route('projects.seaworld-aquatica-sp2')}}"><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                                More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item commercial">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2022/01/701-Rio-Main-Image-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project</em><b></b></h4>

                        <span>701 Rio</span>

                        <a href="{{route('projects.701-rio')}}"><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item commercial">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/08/website-image1-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project</em><b></b></h4>

                        <span>Allure Apollo</span>

                        <a href="{{route('projects.allure-apollo')}}"><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item commercial">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/GEOGroup_025_reduced-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project</em><b></b></h4>

                        <span>The GEO Group Corporate Headquarters</span>

                        <a href="{{route('projects.geo-group-corporate-headquarters')}}"><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                                More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item commercial">

                <div class="pro-image-box">





                    <img src="{{asset('wp-content/uploads/2019/06/HP_Project_PacificDO-480x320.jpg')}}">




                    <div class="pro-hover-content">

                        <h4><em>Commercial project</em><b></b></h4>

                        <span>Alticor Inc Pacific District Office Renovation</span>

                        <a href="{{route('projects.pacific-district-office-renovation')}}"><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                                More</span></a>

                    </div>



                </div>

            </li>


            <li class="grid-item commercial">

                <div class="pro-image-box">
                    <img src="{{asset('wp-content/uploads/2019/04/sm5050-S-Syracuse4-480x320.jpg')}}">

                    <div class="pro-hover-content">

                        <h4><em>Commercial project</em><b></b></h4>

                        <span>50Fifty Office Tower</span>

                        <a href="{{route('projects.fifty-50-office-tower')}}"><i
                                class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                                More</span></a>

                    </div>



                </div>

            </li>

            


    <li class="grid-item education">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2022/07/Main-Image-LAUSD-Belvedere-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Education project</em><b></b></h4>

                <span>LAUSD Belvedere Middle School Comprehensive Modernization</span>

                <a
                    href="{{route('projects.lausd-belvedere-middle-school-comprehensive-modernization')}}"
                        class=><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item education">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2022/06/UCR-SOM-EBII-02-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Education project</em><b></b></h4>

                <span>UC Riverside School of Medicine Education Building II</span>

                <a href="{{route('projects.uc-riverside-school-of-medicine-education-building-ii')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item education">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/11/NAS-Pensacola-B633-3-Reduced-scaled-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Education project</em><b></b></h4>

                <span>Naval Air Station Pensacola Building 633</span>

                <a href="{{route('projects.naval-air-station-pensacola-building-633')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item education">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/04/Enscape_2022-05-23-16-03-33-Small.png')}}">




            <div class="pro-hover-content">

                <h4><em>Education project</em><b></b></h4>

                <span>Fawcett Elementary School Replacement</span>

                <a href="{{route('projects.fawcett-elementary-school-replacement')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item education">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/03/GSH-Feature-1-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Education project</em><b></b></h4>

                <span>Camp Paumalu STEM Center for Excellence</span>

                <a href="{{route('projects.camp-paumalu-stem-center-for-excellence')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item education">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/03/UWAC-Porch-Entrance-Wood_reduced.png')}}">




            <div class="pro-hover-content">

                <h4><em>Education project</em><b></b></h4>

                <span>University of Washington Interdisciplinary Engineering Building</span>

                <a
                    href="{{route('projects.university-of-washington-interdisciplinary-engineering-building')}}"
                        class=><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>
    <ul class="clearfix">

        <li class="grid-item government-justice">
    
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
        <li class="grid-item government-justice">
    
            <div class="pro-image-box">
    
    
    
    
    
                <img src="{{asset('wp-content/uploads/2022/12/AW-Maricopa-County-ITR-day-room.jpg')}}">
    
    
    
    
                <div class="pro-hover-content">
    
                    <h4><em>Government + Justice project</em><b></b></h4>
    
                    <span>Maricopa County Intake, Transfer and Release (ITR) Facility / Detention
                        Facility</span>
    
                    <a
                        href="{{route('projects.maricopa-county-intake-transfer-and-release-itr-facility-detention-facility')}}"><i
                            class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                            More</span></a>
    
                </div>
    
    
    
            </div>
    
        </li>
    
    
        <li class="grid-item government-justice">
    
            <div class="pro-image-box">
    
    
    
    
    
                <img src="{{asset('wp-content/uploads/2022/09/HP_Website_Main_LAX-APF-768x512.jpg')}}">
    
    
    
    
                <div class="pro-hover-content">
    
                    <h4><em>Government + Justice project</em><b></b></h4>
    
                    <span>LAX Airport Police Facility</span>
    
                    <a href="{{route('projects.lax-airport-police-facility')}}"><i
                            class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                            More</span></a>
    
                </div>
    
    
    
            </div>
    
        </li>
    
    
        <li class="grid-item government-justice">
    
            <div class="pro-image-box">
    
    
    
    
    
                <img src="{{asset('wp-content/uploads/2022/06/Main-Image-Western-County-EOC-05-480x320.jpg')}}">
    
    
    
    
                <div class="pro-hover-content">
    
                    <h4><em>Government + Justice project</em><b></b></h4>
    
                    <span>Western County of Riverside Emergency Operations Center</span>
    
                    <a
                        href="{{route('projects.western-county-of-riverside-emergency-operations-center')}}"><i
                            class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                            More</span></a>
    
                </div>
    
    
    
            </div>
    
        </li>
    
    
        <li class="grid-item government-justice">
    
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
    
    
        
    
        <li class="grid-item government-justice">
            <div class="pro-image-box">
                <img src="{{asset('wp-content/uploads/2021/07/SSA-Altmeyer-Award-Selections-1_Compressed-480x320.jpg')}}">
                <div class="pro-hover-content">
                    <h4><em>Government + Justice project</em><b></b></h4>
                    <span>Social Security Administration (SSA) Arthur J. Altmeyer Modernization</span>
                    <a href="{{route('projects.social-security-administration-ssa-arthur-j-altmeyer-modernization')}}">
                        <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                        <span>Learn More</span>
                    </a>
    
                </div>
    
    
    
            </div>
    
        </li>

        


    <li class="grid-item healthcare">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2022/09/HP_Website_Main_Kaiser-Riverside_new.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Healthcare project</em><b></b></h4>

                <span>Kaiser Permanente Riverside Medical Center Bed Tower Expansion</span>

                <a
                    href="{{route('projects.kaiser-permanente-riverside-medical-center-bed-tower-expansion')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item healthcare">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2022/10/HP_Website_Main_HUCLA_new.png')}}">




            <div class="pro-hover-content">

                <h4><em>Healthcare project</em><b></b></h4>

                <span>Harbor-UCLA Medical Center Replacement Program</span>

                <a href="{{route('projects.harbor-ucla-medical-center-replacement-program')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item healthcare">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2022/07/Main-Image-City-of-Hope-02-1-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Healthcare project</em><b></b></h4>

                <span>City of Hope Orange County Hospital</span>

                <a href="{{route('projects.city-of-hope-orange-county-hospital')}}">
                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn More</span>
                </a>

            </div>



        </div>

    </li>


    <li class="grid-item healthcare">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2022/06/HP_Website_Main_UCI-ICMC-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Healthcare project</em><b></b></h4>

                <span>UCI Medical Center Irvine</span>

                <a href="{{route('projects.uci-medical-center-irvine')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item healthcare">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2022/06/HP_Website_Main_Valencia-COVID-Lab-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Healthcare project</em><b></b></h4>

                <span>Valencia Temporary Laboratory Buildout Emergency COVID Testing Facility</span>

                <a
                    href="{{route('projects.valencia-temporary-laboratory-buildout-emergency-covid-testing-facility')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item healthcare">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/07/DSF3791-scaled-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Healthcare project</em><b></b></h4>

                <span>Texas Tech University Health Sciences Center Oral Health Clinic</span>

                <a
                    href="{{route('projects.texas-tech-university-health-sciences-center-oral-health-clinic')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>
    
    <li class="grid-item hospitality">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2022/03/7768-Woodmont-Avenue-18_web-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Hospitality project</em><b></b></h4>

                <span>Marriott International Headquarters and Hotel</span>

                <a href="{{route('projects.marriott-international-headquarters-and-hotel')}}"
                        class=><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item hospitality">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/11/McGregor-Main-Image-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Hospitality project</em><b></b></h4>

                <span>McGregor Square</span>

                <a href="{{route('projects.mcgregor-square')}}"><i class="fa fa-arrow-circle-right"
                        aria-hidden="true"></i><span>Learn More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item hospitality">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/10/Archer-Hotel-HP-Exterior-7_Reduced-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Hospitality project</em><b></b></h4>

                <span>Archer Hotel Tysons</span>

                <a href="{{route('projects.archer-hotel-tysons')}}">
                    <i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
                    <span>Learn More</span>
                </a>

            </div>



        </div>

    </li>


    <li class="grid-item hospitality">

        <div class="pro-image-box">
            <img src="{{asset('wp-content/uploads/2021/01/RamaTiru_Kalahari_HP-28-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Hospitality project</em><b></b></h4>

                <span>Kalahari Resort and Convention Center</span>

                <a href="{{route('projects.kalahari-resort-convention-center')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item hospitality">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2019/06/Aventural-Hotel-32_web-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Hospitality project</em><b></b></h4>

                <span>Aventura Hotel at Universal Orlando</span>

                <a href="{{route('projects.aventura-hotel-at-universal-orlando')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item hospitality">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2019/06/Hilton-Hokulani_01-web-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Hospitality project</em><b></b></h4>

                <span>Hokulani Waikiki by Hilton Grand Vacations</span>

                <a href="{{route('projects.hokulani-waikiki-hilton-grand-vacations')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>

    
    <li class="grid-item infrastructure-transportation">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2020/09/NorthFrom5th-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Infrastructure + Transportation project</em><b></b></h4>

                <span>Puyallup Station Parking Garage</span>

                <a href="{{route('projects.puyallup-station-parking-garage')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item infrastructure-transportation">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/08/HP_Project_KaneoheTIF-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Infrastructure + Transportation project</em><b></b></h4>

                <span>Kaneohe / Kailua Tunnel Influent Facility</span>

                <a href="{{route('projects.kaneohe-kailua-tunnel-influent-facility')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item infrastructure-transportation">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2020/09/DRLE-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Infrastructure + Transportation project</em><b></b></h4>

                <span>Downtown Redmond Link Extension &#8211; Parking Garage and Stations</span>

                <a
                    href="{{route('projects.downtown-redmond-link-extension-parking-garage-stations')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>

    <li class="grid-item infrastructure-transportation">

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
    <li class="grid-item infrastructure-transportation">

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
    


    <li class="grid-item infrastructure-transportation">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2019/03/Maintenance-Bay-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Infrastructure + Transportation project</em><b></b></h4>

                <span>WMATA Andrews Federal Center Bus Garage</span>

                <a href="{{route('projects.wmata-andrews-federal-center-bus-garage')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>

    
    <li class="grid-item science-technology">

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
    <li class="grid-item science-technology">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2022/07/Main-Image-Caltech-Resnick-05-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Science + Technology project</em><b></b></h4>

                <span>Caltech Resnick Sustainability Center</span>

                <a href="{{route('projects.caltech-resnick-sustainability-center')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    

    <li class="grid-item science-technology">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2020/05/HP_Website_Main_CARB-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Science + Technology project</em><b></b></h4>

                <span>California Air Resources Board Headquarters – Mary D. Nichols Campus</span>

                <a
                    href="{{route('projects.california-air-resources-board-headquarters-mary-d-nichols-campus')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item science-technology">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2022/01/2020_11_12_T_ZGFnist01_A-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Science + Technology project</em><b></b></h4>

                <span>National Institute of Standards and Technology Building 245 Modernization Task Orders
                    1 &#8211; 5</span>

                <a
                    href="{{route('projects.national-institute-of-standards-and-technology-building-245-modernization-task-orders-1-5')}}"
                        class=><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item science-technology">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2020/12/for-website-01-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Science + Technology project</em><b></b></h4>

                <span>NIA Alzheimer Disease and Related Dementias Temporary Research Facility</span>

                <a
                    href="{{route('projects.nia-alzheimer-disease-and-related-dementias-temporary-research-facility')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item science-technology">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2020/05/CF006599-3-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Science + Technology project</em><b></b></h4>

                <span>Caltech Chen Neuroscience Research Building</span>

                <a href="{{route('projects.caltech-chen-neuroscience-research-building')}}"
                        class=><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>

    
    <li class="grid-item water-wastewater">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/07/South-Fort-Collins-Hydro3-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Water + Wastewater project</em><b></b></h4>

                <span>SFCSD Water Reclamation Facility Expansion</span>

                <a href="{{route('projects.south-fort-collins-sanitation-district')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item water-wastewater">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/07/Drake-Hensel-Phelps2-scaled-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Water + Wastewater project</em><b></b></h4>

                <span>Drake Water Reclamation Facility</span>

                <a href="{{route('projects.drake-water-reclamation-facility')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item water-wastewater">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/08/HP_Project_Waianae-WWTP-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Water + Wastewater project</em><b></b></h4>

                <span>Waianae Wastewater Treatment Plant Improvements and Upgrade</span>

                <a
                    href="{{route('projects.waianae-wastewater-treatment-plant-improvements-upgrade')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item water-wastewater">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2021/08/HP_Project_KaneoheTIF-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Infrastructure + Transportation project</em><b></b></h4>

                <span>Kaneohe / Kailua Tunnel Influent Facility</span>

                <a href="{{route('projects.kaneohe-kailua-tunnel-influent-facility')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>


    <li class="grid-item water-wastewater">

        <div class="pro-image-box">





            <img src="{{asset('wp-content/uploads/2017/08/HP_Project_KWWTP-480x320.jpg')}}">




            <div class="pro-hover-content">

                <h4><em>Water + Wastewater project</em><b></b></h4>

                <span>Kailua Regional Wastewater Treatment Plant Tunnel Influent Pump Station and Headworks
                    Facility</span>

                <a
                    href="{{route('projects.kailua-regional-wastewater-treatment-plant-tunnel-influent-pump-station-headworks-facility')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>Learn
                        More</span></a>

            </div>



        </div>

    </li>






    
    
    </ul>






    
    
    
    </ul>

        <div class="btn-center"><a id="project_btn" class="btn inverse" href="#top">scroll to top</a></div>




        <div style="display:none;" class="btn-center"><a id="pagination" class="btn inverse load_more"
                data-nonce="" href="javascript:;">Load more</a>
        </div>










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