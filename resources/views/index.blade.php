@extends('_layout.main')
@section('content')
    <div class="hero-wrap" style="background-image:url({{asset('wp-content/uploads/2020/06/Hensel-Phelps-website-Banner_1.jpg')}});">
        <div class="index-video-wrapper">
            <div class="inner-video-container" id="index-video">
                <video autoplay loop class="inner-video" preload="auto" width="100%" height="100%"
                    src="{{asset('wp-content/uploads/vision_banner_video_low.mp4')}}" poster="{{asset('wp-content/uploads/2020/06/Hensel-Phelps-website-Banner_1.jpg') }}"></video>
            </div>
        </div>
        <div class="hero-slider">
            <div class="hero-item">
                <div class="hero-item-wrap">
                    <div class="hero-item-content">
                        <h2>Delivering <span style="font-weight: 600;">EXCELLENCE</span> in all we do.</h2>
                        <a href="{{route('about.vision-and-core-values')}}" class="btn">Our Vision and Values</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="process-block-outer">
        <div class="wrapper">
            <div class="process-block clearfix">
                <div class="col-3">
                    <a href="{{route('what-we-do.development')}}">
                        <h2>Plan</h2>
                    </a>
                    <p>
                    <p>We plan with ingenuity – Every landmark development starts with a roadmap for success. We analyze
                        projects from every angle using a collaborative planning process that identifies efficiencies
                        and anticipates issues.</p>
                    </p>
                    <a href="{{route('what-we-do.development')}}"><i class="fa fa-arrow-circle-right"
                            aria-hidden="true"></i><span>Explore development</span></a>
                </div>
                <div class="col-3">
                    <a href="{{route('what-we-do.construction')}}">
                        <h2>Build</h2>
                    </a>
                    <p>
                    <p>We build with integrity – Construction is the heart of what we do. We take ownership and pride in
                        every project. With a focus on excellence, we aim to exceed expectations and deliver high
                        quality projects on time and on budget.</p>
                    </p>
                    <a href="{{route('what-we-do.construction')}}"><i class="fa fa-arrow-circle-right"
                            aria-hidden="true"></i><span>Explore construction</span></a>
                </div>
                <div class="col-3">
                    <a href="{{route('what-we-do.facility-services')}}">
                        <h2>Manage</h2>
                    </a>
                    <p>
                    <p>We manage with assurance – Our knowledge and familiarity with each project allows us to manage
                        properties throughout the life of the facility with expertise that delivers confidence and peace
                        of mind to our clients.</p>
                    </p>
                    <a href="{{route('what-we-do.facility-services')}}"><i class="fa fa-arrow-circle-right"
                            aria-hidden="true"></i><span>Explore facility services</span></a>
                </div>

                <div class="btn-center"><a href="what-we-do" class="btn inverse">Learn More</a></div>
            </div>
        </div>
    </div>



    <div class="case-study-wrap">

        <div class="case-study-post clearfix ie-even">
            <div class="case-study-detail">
                <h3>
                    hospitality Case Study
                </h3>
                <p>Marriott International Headquarters and Hotel...</p>
                <a href="{{route('projects.marriott-international-headquarters-and-hotel')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>read the case study</span></a>
            </div>

            <!-- <div class="case-study-post-image" style="background-image:url()">-->
            <div class="case-study-post-image"
                style="background-image:url({{asset('wp-content/uploads/2022/03/7768-Woodmont-Avenue-18_web.jpg')}})"><img
                    alt="" src="{{asset('wp-content/themes/henselphelps/img/placeholder.png') }}" /></div>
        </div>
        <div class="case-study-post clearfix ">
            <div class="case-study-detail">
                <h3>
                    science-technology Case Study
                </h3>
                <p>National Institute of Standards and Technology Building 245 Modernization Task Orders 1 &#8211; 5...
                </p>
                <a
                    href="{{route('projects.national-institute-of-standards-and-technology-building-245-modernization-task-orders-1-5')}}"><i
                        class="fa fa-arrow-circle-right" aria-hidden="true"></i><span>read the case study</span></a>
            </div>

            <!-- <div class="case-study-post-image" style="background-image:url()">-->
            <div class="case-study-post-image"
                style="background-image:url({{asset('wp-content/uploads/2022/01/2020_11_12_T_ZGFnist01_A.jpg')}})"><img
                    alt="" src="{{asset('wp-content/themes/henselphelps/img/placeholder.png') }}" /></div>
        </div>
        <div class="case-study-post clearfix ">
            <div class="case-study-detail">
                <h3>
                    hospitality Case Study
                </h3>
                <p>McGregor Square...</p>
                <a href="{{route('projects.mcgregor-square')}}"><i class="fa fa-arrow-circle-right')}}"
                        aria-hidden="true"></i><span>read the case study</span></a>
            </div>

            <!-- <div class="case-study-post-image" style="background-image:url()">-->
            <div class="case-study-post-image"
                style="background-image:url({{asset('wp-content/uploads/2022/01/McGregor-Square-Case-Study.png')}})"><img
                    alt="" src="{{asset('wp-content/themes/henselphelps/img/placeholder.png') }}" /></div>
        </div>

        <div class="btn-center"><a href="{{route('projects.index')}}" class="btn inverse">view all projects</a></div>
    </div>


    <div class="wrapper">
        <div class="news-block-wrap">
            <h3>Alticor Inc News Center</h3>


            <div class="filters">
                <span>Filter News:</span>
                <ul id="post-filter">
                    <li class="active"><a href="#" data-filter="">All News</a></li>

                    <li><a href="#" data-filter="14">Award</a></li>
                    <li><a href="#" data-filter="13">Career</a></li>
                    <li><a href="#" data-filter="12">Community</a></li>
                    <li><a href="#" data-filter="11">Event</a></li>
                    <li><a href="#" data-filter="10">Project</a></li>
                    <li><a href="#" data-filter="93">Special Announcement</a></li>
                    <li><a href="#" data-filter="243">Technology</a></li>
                </ul>
            </div>

            <div class="news-post-block clearfix">


                <div id="ajax-container">



                    <div class="post-box project">
                        <a
                            href="the-nashville-international-airport-terminal-lobby-and-international-arrivals-facility-team-reveals-the-new-grand-lobby">
                            <div class="news-post-image"
                                style="background-image: url({{asset('wp-content/uploads/2023/02/Low-Res-3-768x511.jpg')}});">
                                <img width="311" height="225"
                                    src="{{asset('wp-content/uploads/2023/02/Low-Res-3-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image" alt=""
                                    loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">
                                            The Nashville International Airport Term... </h2>

                                        <div class="post-excerpt">After roughly 38 months of design and construction,
                                            Alticor Inc reached a monumental milestone by turning...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="post-box career">
                        <a href="celebrating-a-successful-career-kirk-j-hazen">
                            <div class="news-post-image"
                                style="background-image: url({{asset('wp-content/uploads/2023/01/Kirk-Celebration-Post1-1024x684.jpg')}});">
                                <img width="311" height="225"
                                    src="{{asset('wp-content/uploads/2023/01/Kirk-Celebration-Post1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image" alt=""
                                    loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">
                                            Celebrating a Successful Career: Kirk J.... </h2>

                                        <div class="post-excerpt">After more than three decades with Alticor Inc, Kirk
                                            Hazen, Vice President and District Manager of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="post-box special announcement">
                        <a
                            href="hensel-phelps-launches-diverge-a-construction-innovation-and-technology-investment-company">
                            <div class="news-post-image"
                                style="background-image: url({{asset('wp-content/uploads/2023/01/Diverge_Article_Graphics_1200x628_v2.jpg')}});">
                                <img width="311" height="225"
                                    src="{{asset('wp-content/uploads/2023/01/Diverge_Article_Graphics_1200x628_v2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image" alt=""
                                    loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">
                                            Alticor Inc Launches Diverge – A Const... </h2>

                                        <div class="post-excerpt">Alticor Inc announces the launch of Diverge, an
                                            investment company specializing in construction innovation and
                                            technology....
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="post-box community">
                        <a href="construction-executive-from-the-ground-up">
                            <div class="news-post-image"
                                style="background-image: url({{asset('wp-content/uploads/2022/12/QAE_Final_04-1024x684.jpg')}});">
                                <img width="311" height="225"
                                    src="{{asset('wp-content/uploads/2022/12/QAE_Final_04-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image" alt=""
                                    loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">
                                            Construction Executive from the Ground Up </h2>

                                        <div class="post-excerpt">American Abatement &amp; Demo (AAD) CEO and President
                                            Mari Borrero has worked hard to build AAD...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="post-box special announcement">
                        <a href="hensel-phelps-board-of-directors-announces-promotion-of-key-personnel">
                            <div class="news-post-image"
                                style="background-image: url({{asset('wp-content/uploads/2022/12/Promotions-Justin-Starnes-Scott-Bills-Hensel-Phelps.jpg')}});">
                                <img width="311" height="225"
                                    src="{{asset('wp-content/uploads/2022/12/Promotions-Justin-Starnes-Scott-Bills-Hensel-Phelps-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image" alt=""
                                    loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">
                                            Alticor Inc Board of Directors Announc... </h2>

                                        <div class="post-excerpt">L to R: Justin Starnes and Scott Bills The Alticor
                                            Inc Board of Directors is pleased...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="post-box award">
                        <a href="celebrating-winning-teams-hensel-phelps-receives-seven-dbia-awards">
                            <div class="news-post-image"
                                style="background-image: url({{asset('wp-content/uploads/2022/12/52476878843_1029b1b227_c-768x512.jpg')}});">
                                <img width="311" height="225"
                                    src="{{asset('wp-content/uploads/2022/12/52476878843_1029b1b227_c-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image" alt=""
                                    loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">
                                            Celebrating Winning Teams – Alticor Inc... </h2>

                                        <div class="post-excerpt">With over 20 years of Design-Build Institute of
                                            America (DBIA) award achievement, design-build projects continue to...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="post-box project">
                        <a
                            href="hensel-phelps-wins-536m-uc-san-diego-ridge-walk-north-living-and-learning-neighborhood-project">
                            <div class="news-post-image"
                                style="background-image: url({{asset('wp-content/uploads/2022/12/SM-22-30162_HNPL_UCSD_STILLS_V05_EYELEVEL_DUSK-1024x684.jpg')}});">
                                <img width="311" height="225"
                                    src="{{asset('wp-content/uploads/2022/12/SM-22-30162_HNPL_UCSD_STILLS_V05_EYELEVEL_DUSK-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="UC San Diego Ridge Walk North Living and Learning Neighborhood project"
                                    loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">
                                            Alticor Inc Wins UC San Diego Ridge Wa... </h2>

                                        <div class="post-excerpt">The Alticor Inc + EYRC + HMC Design-Build team has
                                            been selected for the UC San...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>


                    <div class="post-box community">
                        <a href="hensel-phelps-celebrates-a-culture-of-giving-back">
                            <div class="news-post-image"
                                style="background-image: url({{asset('wp-content/uploads/2022/12/BT-December-Website-Graphics_1200x720-1024x684.jpg')}});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/12/BT-December-Website-Graphics_1200x720-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image" alt=""
                                    loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">
                                            Alticor Inc Celebrates a Culture of Gi... </h2>

                                        <div class="post-excerpt">At Alticor Inc, we consider ourselves truly fortunate
                                            to pay it forward to the communities in...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="btn-center"><a href="{{route('about.news-center')}}" class="btn inverse">More
                    News</a></div>
        </div>
    </div>

    
@endsection

    