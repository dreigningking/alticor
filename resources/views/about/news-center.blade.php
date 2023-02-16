@extends('_layout.others')
@section('content')

    <div class="page-banner"
        style="background-image:url({{ asset('wp-content/themes/henselphelps/img/news-hero.jpg') }});">
        <div class="page-banner-block">
            <div class="page-banner-content">
                <h1>News Center</h1>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="news-block-wrap">
            <h3>Alticor Inc News Center</h3>


            <div class="filters">
                <span>Filter News:</span>
                <ul class="filters-button-group">
                    <li class="active"><a href="#" data-filter="*">All News</a></li>

                    <li><a href="#" data-filter=".award">Award</a></li>
                    <li><a href="#" data-filter=".career">Career</a></li>
                    <li><a href="#" data-filter=".community">Community</a></li>
                    <li><a href="#" data-filter=".event">Event</a></li>
                    <li><a href="#" data-filter=".project">Project</a></li>
                    <li><a href="#" data-filter=".special-announcement">Special Announcement</a></li>
                    <li><a href="#" data-filter=".technology">Technology</a></li>
                    <li><a href="#" data-filter=".uncategorized">Uncategorized</a></li>
                </ul>
            </div>

            <div class="news-post-block clearfix">
                <div class="category-filter">
                    <div class="post-box project">
                        <a
                            href="{{route('about.the-nashville-international-airport-terminal-lobby-and-international-arrivals-facility-team-reveals-the-new-grand-lobby')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2023/02/Low-Res-3-768x511.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2023/02/Low-Res-3-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">The Nashville International Airport Term...</h2>
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
                        <a href="{{route('about.celebrating-a-successful-career-kirk-j-hazen')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2023/01/Kirk-Celebration-Post1-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2023/01/Kirk-Celebration-Post1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Celebrating a Successful Career: Kirk J....</h2>
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
                            href="{{route('about.hensel-phelps-launches-diverge-a-construction-innovation-and-technology-investment-company')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2023/01/Diverge_Article_Graphics_1200x628_v2.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2023/01/Diverge_Article_Graphics_1200x628_v2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Launches Diverge – A Const...</h2>
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
                        <a href="{{route('about.construction-executive-from-the-ground-up')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/12/QAE_Final_04-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/12/QAE_Final_04-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Construction Executive from the Ground Up</h2>
                                        <div class="post-excerpt">American Abatement &amp; Demo (AAD) CEO and
                                            President Mari Borrero has worked hard to build AAD...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a
                            href="{{route('about.hensel-phelps-board-of-directors-announces-promotion-of-key-personnel')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/12/Promotions-Justin-Starnes-Scott-Bills-Hensel-Phelps.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/12/Promotions-Justin-Starnes-Scott-Bills-Hensel-Phelps-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Board of Directors Announc...</h2>
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
                        <a href="{{route('about.celebrating-winning-teams-hensel-phelps-receives-seven-dbia-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/12/52476878843_1029b1b227_c-768x512.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/12/52476878843_1029b1b227_c-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Celebrating Winning Teams – Alticor Inc...</h2>
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
                            href="{{route('about.hensel-phelps-wins-536m-uc-san-diego-ridge-walk-north-living-and-learning-neighborhood-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/12/SM-22-30162_HNPL_UCSD_STILLS_V05_EYELEVEL_DUSK-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/12/SM-22-30162_HNPL_UCSD_STILLS_V05_EYELEVEL_DUSK-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="UC San Diego Ridge Walk North Living and Learning Neighborhood project"
                                    loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins UC San Diego Ridge Wa...</h2>
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
                        <a href="{{route('about.hensel-phelps-celebrates-a-culture-of-giving-back')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/12/BT-December-Website-Graphics_1200x720-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/12/BT-December-Website-Graphics_1200x720-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates a Culture of Gi...</h2>
                                        <div class="post-excerpt">At Alticor Inc, we consider ourselves truly
                                            fortunate to pay it forward to the communities in...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-celebrates-national-institutes-of-health-nih-temporary-facility-ribbon-cutting')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/12/Untitled-2-01-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/12/Untitled-2-01-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates National Instit...</h2>
                                        <div class="post-excerpt">Alticor Inc completed the fully modular,
                                            design-build National Institute on Aging Alzheimer Disease and Related
                                            Dementias...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.pacific-northwest-hosts-4th-annual-veterans-day-event')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/11/DSC_0554-1-768x512.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/11/DSC_0554-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Alticor Inc and Permission to Start Dreaming at Westland Distillery"
                                    loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Pacific Northwest Hosts 4th Annual Veter...</h2>
                                        <div class="post-excerpt">Each year, the Alticor Inc Pacific Northwest Region
                                            hosts an annual Veterans Day Event to raise...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.southwest-airlines-phx-tech-ops-final-pick-topping-out')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/11/HP-Team-Picture2-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/11/HP-Team-Picture2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Southwest Airlines PHX Tech Ops Final Pi...</h2>
                                        <div class="post-excerpt">The Southwest Airlines Phoenix International Airport
                                            (PHX) Tech Ops team had more reasons than ever to...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box technology">
                        <a href="{{route('about.fawcett-elementary-school-becomes-a-vdc-playground')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/11/DSC_0121_medium-768x512.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/11/DSC_0121_medium-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Technology </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Fawcett Elementary School Becomes a VDC ...</h2>
                                        <div class="post-excerpt">Virtual Design and Construction (VDC) is a tool that
                                            helps construction teams visualize what they are...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-wins-project-of-the-year-and-two-eagle-awards-at-abc-central-florida-excellence-in-construction-award-ceremony')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/10/2022-ABC-EIC-Awards-2-scaled-e1667243855280-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/10/2022-ABC-EIC-Awards-2-scaled-e1667243855280-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins Project of the Year a...</h2>
                                        <div class="post-excerpt">Associated Builders and Contractors’ Excellence in
                                            Construction awards program is the industry’s leading competition that
                                            honors...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-recognizes-and-supports-awareness-for-mens-health')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/10/Article-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/10/Article-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Recognizes and Supports Aw...</h2>
                                        <div class="post-excerpt">In November, Alticor Inc’ Building Together campaign
                                            will focus on Men’s Health by raising awareness and...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.invested-in-womens-health-hensel-phelps-supports-the-fight-against-cancer')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/10/1705_UCI-Anti-Cancer_OUT_v1_002-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/10/1705_UCI-Anti-Cancer_OUT_v1_002-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Invested in Women’s Health – Hensel Phel...</h2>
                                        <div class="post-excerpt">In the US, there are currently over 863,830 women
                                            living with cancer. One out of every...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.a-lifetime-of-delivering-excellence-greg-gidez-recognized-with-dbia-lifetime-achievement-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/10/Greg-Gidez-Lifetime-Achievement-Award_1200x628-02.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/10/Greg-Gidez-Lifetime-Achievement-Award_1200x628-02-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">A Lifetime of Delivering Excellence &#82...</h2>
                                        <div class="post-excerpt">GREELEY, Colorado, October 17, 2022 —
                                            The Design-Build Institute of America has presented Greg Gidez, Corporate
                                            Director of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-is-proud-to-support-construction-inclusion-week')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/10/Construction-Inclusion-Web-Banner_1200x628.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/10/Construction-Inclusion-Web-Banner_1200x628-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc is Proud to Support Constr...</h2>
                                        <div class="post-excerpt">An advocate for its mission, Alticor Inc is proud to
                                            participate once again in Construction Inclusion...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-recognizes-and-supports-womens-health')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/09/Article-Graphic-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/09/Article-Graphic-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Recognizes and Supports a ...</h2>
                                        <div class="post-excerpt">Over the course of Building Together, Alticor Inc
                                            has focused and raised awareness on many significant...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-celebrates-trade-partners-at-inaugural-trade-partner-appreciation-awards-luncheon')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/09/HP_2022_AwardsLuncheon-3-768x512.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/09/HP_2022_AwardsLuncheon-3-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates Trade Partners ...</h2>
                                        <div class="post-excerpt">On Friday, September 23, Alticor Inc’ Mid Atlantic
                                            District honored 20 trade partners at the inaugural...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.orlando-sentinel-names-hensel-phelps-a-2022-central-florida-top-workplace-for-the-7th-year-in-a-row')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/09/Banner2-768x512.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/09/Banner2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Orlando Sentinel Names Alticor Inc a 2...</h2>
                                        <div class="post-excerpt">Alticor Inc has ranked #8 Top Workplace in Central
                                            Florida in the Mid-Size Company category by...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.ace-mentor-program-of-americas-third-annual-day-of-action-focuses-on-mentorship-in-the-community')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/09/For-the-third-consecutive-year-Hensel-Phelps-celebrates-the-ACE-Mentor-Program-of-Americas-annual-Day-of-Action..png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/09/For-the-third-consecutive-year-Hensel-Phelps-celebrates-the-ACE-Mentor-Program-of-Americas-annual-Day-of-Action.-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">ACE Mentor Program of America&#8217;s Th...</h2>
                                        <div class="post-excerpt">For the third consecutive year, Alticor Inc
                                            celebrates the ACE Mentor Program of America’s annual Day...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.the-family-behind-the-small-business-celsue-construction-services-inc')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/09/Building-Together-Graphics_Green-and-Yellow_Fam-Behind-Biz-Article-and-Social-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/09/Building-Together-Graphics_Green-and-Yellow_Fam-Behind-Biz-Article-and-Social-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">The Family Behind the Small Business: Ce...</h2>
                                        <div class="post-excerpt">Ruth Davila, President of Celsue Construction
                                            Services, Inc., was working as a Professional Engineer (PE) in...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-breaks-ground-on-the-wellington-water-treatment-plant-expansion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/09/Wellington-Ground-Breaking-1024x684.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/09/Wellington-Ground-Breaking-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Breaks Ground on the Welli...</h2>
                                        <div class="post-excerpt">Alticor Inc&#8217; Hydro District, the Town of
                                            Wellington and Jacobs broke ground on the $35 million Wellington Water
                                            Treatment...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-the-integrated-capabilities-office-ico-at-cape-canaveral-space-force-station-florida')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/09/Project-Win-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/09/Project-Win-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded the Integrated Cap...</h2>
                                        <div class="post-excerpt">The United States Army Corps of Engineers (USACE)
                                            Mobile District awarded Alticor Inc Southeast District the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.enr-southeast-announces-best-project-awards-hensel-phelps-recognized-for-multiple-projects')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/09/Untitled-1-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/09/Untitled-1-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">ENR Southeast Announces Best Project Awa...</h2>
                                        <div class="post-excerpt">Engineering News-Record Southeast announced the 2022
                                            Best Project Award Winners. The Southeast District was a proud...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-celebrates-small-businesses-trade-partnership')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/09/Overview-Article-Image-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/09/Overview-Article-Image-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates Small Businesse...</h2>
                                        <div class="post-excerpt">For decades, Alticor Inc has supported and
                                            celebrated small business trade partners. This month, in continuation...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-culture-of-care')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/08/AdobeStock_351221115-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/08/AdobeStock_351221115-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc&#8217; Culture of Care</h2>
                                        <div class="post-excerpt">According to industry experts, 50% of us will
                                            experience a mental health issue during our lifetime....
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.tampa-international-airports-blue-express-curbside-expansion-project-wins-fdot-2022-commercial-service-airport-project-of-the-year')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/08/HP-TPA-International-Finals-18-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/08/HP-TPA-International-Finals-18-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Tampa International Airport&#8217;s Blue...</h2>
                                        <div class="post-excerpt">The Commercial Service Airport Project of the Year
                                            award is given to a Florida airport that...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.enr-southeast-recognizes-two-hensel-phelps-project-managers')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/08/FB-and-LI-Graphic-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/08/FB-and-LI-Graphic-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">ENR Southeast Recognizes Two Hensel Phel...</h2>
                                        <div class="post-excerpt">This week, Alticor Inc&#8217; Project Mangers Callie
                                            Hepler and Timothy Queely were recognized by Engineering News...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-continues-to-hit-the-high-notes-at-the-nashville-international-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/08/BNA-Exterior-Reduced-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/08/BNA-Exterior-Reduced-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Continues to Hit the High ...</h2>
                                        <div class="post-excerpt">The Metropolitan Nashville Airport Authority awarded
                                            the Alticor Inc | Fentress Architects progressive design-build team the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-supports-ace-mentor-program')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/08/Mike-Choutka-Speaking-to-ACE-Students-2020_01_15-resized-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/08/Mike-Choutka-Speaking-to-ACE-Students-2020_01_15-resized-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Supports ACE Mentor Progra...</h2>
                                        <div class="post-excerpt">Founded in 1994, ACE works to engage, excite and
                                            enlighten high school students to pursue careers...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-celebrates-national-health-wellness-month')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/07/BT-August-Website-2-1200x720-1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/07/BT-August-Website-2-1200x720-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title"><strong>Alticor Inc Celebrates Nationa...</h2>
                                        <div class="post-excerpt">August is National Wellness Month, a time to focus
                                            on the full spectrum of healthy living....
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-cultural-cuisine-cookbook')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/07/MicrosoftTeams-image-8-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/07/MicrosoftTeams-image-8-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Cultural Cuisine Cookbook￼</h2>
                                        <div class="post-excerpt">Despite our differences, we all have one thing in
                                            common… our love for food. One of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.get-to-know-guam-and-its-diverse-culture')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/07/J-011-Team-Flags-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/07/J-011-Team-Flags-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Get to Know Guam and Its Diverse Culture￼</h2>
                                        <div class="post-excerpt">Located 2,500 miles west of the International Date
                                            Line, Guam is 20 hours ahead of Hawaii...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-celebrates-cultures-across-the-company')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/06/BT-July-Website-Graphics-02_1200x720-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/06/BT-July-Website-Graphics-02_1200x720-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates Cultures Across...</h2>
                                        <div class="post-excerpt">July is the month that we celebrate the independence
                                            of the United States of America. It...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-respectful-workplace-series-builds-strong-allies')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/06/HP-Onsite-Austin-123-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/06/HP-Onsite-Austin-123-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ Respectful Workplace Seri...</h2>
                                        <div class="post-excerpt">In 2013, Alticor Inc’ leadership committed to
                                            creating the Leadership Development Initiative (LDI) to formally develop...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-honors-juneteenth')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/06/20852712-Juneteenth-Mural-Galveston-2-65ad46-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/06/20852712-Juneteenth-Mural-Galveston-2-65ad46-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Honors Juneteenth</h2>
                                        <div class="post-excerpt">Juneteenth—a combination of the words “June” and
                                            “Nineteenth”—is a United States Federal holiday which celebrates the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.fort-lauderdale-aquatic-center-debuts-27-meter-dive-tower-with-professional-divers-from-red-bull-cliff-diving-and-usa-diving')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/06/IMG_1224_reduced-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/06/IMG_1224_reduced-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Fort Lauderdale Aquatic Center Debuts 27...</h2>
                                        <div class="post-excerpt">Almost 11 months to the day since the dive tower’s
                                            topping out, the Fort Lauderdale Aquatic...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.orlando-business-journal-names-timothy-queely-a-2022-40-under-40-honoree')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/05/1-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/05/1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Orlando Business Journal Names Timothy Q...</h2>
                                        <div class="post-excerpt">Orlando Business Journal (OBJ)&nbsp;named the
                                            Southeast District&#8217;s Timothy Queely one of&nbsp;2022&#8217;s 40 Under
                                            40. Recognized for...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.the-history-behind-hensel-phelps-harvey-milk-terminal-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/06/01_SFO-TI_Jason-ORear_lo-res-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/06/01_SFO-TI_Jason-ORear_lo-res-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">The History Behind Alticor Inc’ Harvey...</h2>
                                        <div class="post-excerpt">As the nation’s largest aviation builder, Alticor
                                            Inc is proud that one of our recent projects...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-celebrates-lgbtq-pride-month')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/05/MicrosoftTeams-image-23-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/05/MicrosoftTeams-image-23-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates LGBTQ+ Pride Month</h2>
                                        <div class="post-excerpt">In the United States, LGBTQ+ Pride Month is
                                            celebrated in June to commemorate the 1969 Stonewall...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a
                            href="{{route('about.hensel-phelps-veterans-network-vnet-works-to-support-hire-and-connect-the-veteran-community')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/05/NorCal-VNET-Lunch-1-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/05/NorCal-VNET-Lunch-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Veterans Network (VNET) Wo...</h2>
                                        <div class="post-excerpt">Alticor Inc has a long history of supporting our
                                            military. This support led to the creation...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-zone-1-f-35-flightline-facilities-at-tyndall-air-force-base-florida')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/05/Renderings-Combined-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/05/Renderings-Combined-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Zone 1 F-35 Flight...</h2>
                                        <div class="post-excerpt">The United State Army Corps of Engineers (USACE)
                                            Mobile District awarded the Alticor Inc Southeast District...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.a-lifetime-dedicated-to-service-always-in-uniform')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/05/Picture1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/05/Picture1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">A Lifetime Dedicated to Service – Always...</h2>
                                        <div class="post-excerpt">To show appreciation and recognition to all our
                                            Alticor Inc Veterans, National Guard and Reserve Members,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.hensel-phelps-celebrates-military-appreciation-month')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/05/Military-Apprec-Overview-Article-Image.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/05/Military-Apprec-Overview-Article-Image-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates Military Apprec...</h2>
                                        <div class="post-excerpt">Established by Congress in 1999, May is nationally
                                            recognized as Military Appreciation Month. In honor of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-awarded-the-2022-dwight-d-eisenhower-award-for-excellence')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/05/2022-SBA-Eisenhower-Award-1.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/05/2022-SBA-Eisenhower-Award-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded the 2022 Dwight D....</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded the U.S. Small Business
                                            Administration’s 2022 Dwight D. Eisenhower Award for...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a
                            href="{{route('about.hensel-phelps-celebrates-another-year-of-being-connected-supported-safe')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/05/DSC1444-1024x683.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/05/DSC1444-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates Another Year of...</h2>
                                        <div class="post-excerpt">Alticor Inc is pleased to announce their
                                            participation in Construction Safety Week. Alticor Inc&#8217; teams
                                            believe...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.a-history-of-success-with-small-business-partnerships')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/04/SBW-Article-Image-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/04/SBW-Article-Image-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">A History of Success With Small Business...</h2>
                                        <div class="post-excerpt">For decades, Alticor Inc has been committed to small
                                            and minority-owned businesses. Rooted in the company’s...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.hensel-phelps-and-path-continue-partnership-through-the-employment-opportunity-program')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/04/Employment-Opportunity-Program-Website-05.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/04/Employment-Opportunity-Program-Website-05-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc and PATH Continue Partners...</h2>
                                        <div class="post-excerpt">As a contractor building in the Los Angeles
                                            community, Alticor Inc values the opportunity to contribute...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-wins-multiple-awards-for-diversity-and-inclusion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/03/51953843222_31a1ec8ed8_o-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/03/51953843222_31a1ec8ed8_o-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins Multiple Awards for D...</h2>
                                        <div class="post-excerpt">In March of 2022, Alticor Inc’ diversity and
                                            inclusion efforts received national recognition by both Associated...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.building-together-celebrating-diversity-equity-inclusion-and-community')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/04/DSC6454-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/04/DSC6454-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Building Together – Celebrating Diversit...</h2>
                                        <div class="post-excerpt">At Alticor Inc, employees want to contribute
                                            meaningfully to diversity, equity and inclusion efforts. Alticor Inc...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-delivers-1-3-million-square-foot-marriott-international-headquarters-and-hotel')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/03/Untitled-3-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/03/Untitled-3-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Delivers 1.3 Million Squar...</h2>
                                        <div class="post-excerpt">Following 41 months of construction, Alticor Inc
                                            delivered the highly anticipated Marriott International Headquarters and
                                            Hotel...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.design-build-team-hensel-phelps-hmc-architects-co-architects-to-deliver-upgrade-of-harbor-ucla-medical-center')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/03/Twitter_v02-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/03/Twitter_v02-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Design-Build Team Alticor Inc | HMC Ar...</h2>
                                        <div class="post-excerpt">An investment centered on humanity, sustainability
                                            and exceptional care with an eye toward the future. The...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box technology">
                        <a
                            href="{{route('about.virtual-design-construction-on-the-bellvue-water-treatment-plant-package-b-project-and-beyond')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/03/Model-6_smcropped-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/03/Model-6_smcropped-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy"
                                    srcset="{{asset('wp-content/uploads/2022/03/Model-6_smcropped-311x225.jpg')}} 311w, {{asset('wp-content/uploads/2022/03/Model-6_smcropped-300x217.jpg')}} 300w, {{asset('wp-content/uploads/2022/03/Model-6_smcropped-1024x741.jpg')}} 1024w, {{asset('wp-content/uploads/2022/03/Model-6_smcropped-768x555.jpg')}} 768w, {{asset('wp-content/uploads/2022/03/Model-6_smcropped.jpg')}} 1369w"
                                    sizes="(max-width: 311px) 100vw, 311px" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Technology </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Virtual Design &amp; Construction on the...</h2>
                                        <div class="post-excerpt">On the $25 million Bellvue Water Treatment Plant –
                                            Package B project, Alticor Inc built a...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.women-in-construction-insight-from-hensel-phelps-rising-leaders')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/03/BRAND-WIC-AD-Layouts-05-1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/03/BRAND-WIC-AD-Layouts-05-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Women in Construction 2022" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Women In Construction – Insight from Hen...</h2>
                                        <div class="post-excerpt">Djenita Svinjar Title: Corporate CounselYears with
                                            Alticor Inc: 3 Years Why is Diversity, Inclusion &amp; Equity...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.building-together-womens-history-month')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/02/DSC6479-2-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/02/DSC6479-2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Building Together – Women&#8217;s Histor...</h2>
                                        <div class="post-excerpt">In celebration of Women’s History Month, Alticor Inc
                                            brings our focus to the influential women who...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.meta-formerly-the-facebook-company-awards-hensel-phelps-kuna-data-center')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/02/Meta1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/02/Meta1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Meta, Formerly the Facebook company, Awa...</h2>
                                        <div class="post-excerpt">As the mission critical sector continues to boom
                                            across the nation, so does Alticor Inc’ footprint...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.building-together-joel-kelley-iii')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/01/MicrosoftTeams-image-42-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/01/MicrosoftTeams-image-42-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Building Together – Joel Kelley III</h2>
                                        <div class="post-excerpt">Alticor Inc Q&amp;A with Joel Kelley III: Name: Joel
                                            Kelley IIITitle: Project SuperintendentDistrict: SouthwestYears with
                                            Hensel...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.building-together-city-group-solutions')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/02/NSAT-0034-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/02/NSAT-0034-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Building Together – City Group Solutions</h2>
                                        <div class="post-excerpt">City Group Solutions is a Seattle-based
                                            Disadvantaged Business Enterprise (DBE) and Minority Business Enterprise
                                            (MBE) operated...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.building-together-cloteal-haynes')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/01/Cloteal-Haynes-Trade-Partner-Spotlight-04-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/01/Cloteal-Haynes-Trade-Partner-Spotlight-04-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Building Together – Cloteal Haynes</h2>
                                        <div class="post-excerpt">For Cloteal Haynes, the partnership with Alticor Inc
                                            has created a path to success for her...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.ensuring-predictability-on-research-laboratory-projects-from-preconstruction-through-commissioning')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/01/2020_11_12_T_ZGFnist01_A-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/01/2020_11_12_T_ZGFnist01_A-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Ensuring Predictability on Research Labo...</h2>
                                        <div class="post-excerpt">Across the globe, scientists are performing research
                                            critical to the advancement of medicine, environmental monitoring and...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.building-together-black-history-month')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/01/Screen-Shot-2022-01-28-at-12.52.47-PM-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/01/Screen-Shot-2022-01-28-at-12.52.47-PM-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Building Together – Black History Month</h2>
                                        <div class="post-excerpt">In the United States, February is Black History
                                            Month, a time for the nation to celebrate...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.every-blood-drive-donor-is-a-life-saver')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/01/IMG-6060-1-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/01/IMG-6060-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Every Blood Drive Donor Is A Life Saver</h2>
                                        <div class="post-excerpt">Alticor Inc’ Southwest District wrapped up the 2021
                                            year by hosting blood drives in partnership with...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.national-institutes-of-health-awards-hensel-phelps-research-and-laboratory-projects-in-maryland-and-montana')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/01/NIH-Building-40A-Rendering-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/01/NIH-Building-40A-Rendering-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy"
                                    srcset="{{asset('wp-content/uploads/2022/01/NIH-Building-40A-Rendering-311x225.jpg')}} 311w, {{asset('wp-content/uploads/2022/01/NIH-Building-40A-Rendering-300x216.jpg')}} 300w, {{asset('wp-content/uploads/2022/01/NIH-Building-40A-Rendering-768x554.jpg')}} 768w, {{asset('wp-content/uploads/2022/01/NIH-Building-40A-Rendering.jpg')}} 804w"
                                    sizes="(max-width: 311px) 100vw, 311px" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">National Institutes of Health Awards Hen...</h2>
                                        <div class="post-excerpt">The life science sector is booming as researchers
                                            work to cure diseases and protect the global...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.building-together-a-culture-of-diversity-and-inclusion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2022/01/MicrosoftTeams-image-37-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2022/01/MicrosoftTeams-image-37-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Building Together a Culture of Diversity...</h2>
                                        <div class="post-excerpt">Created by employees and partners, Building Together
                                            is Alticor Inc’ national diversity and inclusion campaign. Building...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-the-chamonix-casino-hotel-project-in-cripple-creek-colorado')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/12/Chamonix-Casino-Hotel_CannonDesignRendering-1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/12/Chamonix-Casino-Hotel_CannonDesignRendering-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded the Chamonix Casin...</h2>
                                        <div class="post-excerpt">Owner and developer, Full House Resorts, experienced
                                            what “Delivering EXCELLENCE in All We Do” truly encompasses...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-turns-over-the-lockheed-martin-missile-assembly-building-4')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/12/Reduced-1-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/12/Reduced-1-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Turns Over the Lockheed Ma...</h2>
                                        <div class="post-excerpt">On October 4, 2021, Lockheed Martin held a grand
                                            opening for the Missile Assembly Building 4...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-pacific-northwest-region-successfully-places-large-pedestrian-bridge-in-the-heart-of-downtown-puyallup-washington')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/11/Puyallup-Bridge-Installation-2-2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/11/Puyallup-Bridge-Installation-2-2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ Pacific Northwest Region ...</h2>
                                        <div class="post-excerpt">The Sound Transit Puyallup Station Parking and
                                            Access Improvements (PSAI) project, located just south of Seattle,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.foreign-affairs-security-training-center-brings-home-11-industry-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/10/Aerial4_Reduced-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/10/Aerial4_Reduced-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Foreign Affairs Security Training Center...</h2>
                                        <div class="post-excerpt">The Foreign Affairs Security Training Center (FASTC)
                                            program, completed in 2020, swept in the 2020 –...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.trusted-partnerships-along-with-adaptive-and-inspired-solutions-lead-to-four-dbia-western-pacific-region-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/10/Caltech-Chen-Neuroscience-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/10/Caltech-Chen-Neuroscience-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Trusted Partnerships Along with Adaptive...</h2>
                                        <div class="post-excerpt">Alticor Inc has a long history of successfully
                                            delivering design-build projects in California, Arizona and Hawaii,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-ranked-8-in-top-workplaces-in-central-florida')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/10/Orlando-Sentinel-Photo_resize-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/10/Orlando-Sentinel-Photo_resize-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Ranked #8 in Top Workplace...</h2>
                                        <div class="post-excerpt">On September 22nd, Alticor Inc was ranked #8 in the
                                            Midsize Employer Group for the Orlando...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.upcoming-webinar-how-to-do-business-with-hensel-phelps-ii-a-five-phase-approach-to-diverse-business-inclusion-and-enhancement')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/09/Supplier-Diversity-Webinar-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/09/Supplier-Diversity-Webinar-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Small Business Webinar" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Upcoming Webinar: How to do business wit...</h2>
                                        <div class="post-excerpt">The Alticor Inc&#8217; supplier diversity team
                                            presents, How to do Business with Alticor Inc II:A Five...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.small-business-mentorship-on-the-baltimore-washington-international-bwi-thurgood-marshall-airport-concourse-a-5-gate-extension')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/09/BWI-article-photo1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/09/BWI-article-photo1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Small Business Mentorship on the Baltimo...</h2>
                                        <div class="post-excerpt">In January 2019, Alticor Inc was awarded the
                                            Concourse A 5 Gate Extension at Baltimore Washington...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.ace-mentor-program-of-america-day-of-action-draws-attention-to-the-importance-of-mentoring')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/09/IMG_2269-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/09/IMG_2269-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">ACE Mentor Program of America Day of Act...</h2>
                                        <div class="post-excerpt">On September 14th, 2021, the ACE Mentor Program of
                                            America will celebrate their second annual Day...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a
                            href="{{route('about.hensel-phelps-joins-sba-in-celebrating-resilience-and-renewal-during-national-small-business-week')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/09/HenselPhelps-Small-Business-Week-2021-scaled-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/09/HenselPhelps-Small-Business-Week-2021-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Joins SBA in Celebrating R...</h2>
                                        <div class="post-excerpt">Embracing diversity and supporting communities are
                                            two core values at Alticor Inc. As the construction industry...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.hensel-phelps-craft-industrial-athletes')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/08/Hensel-Phelps-Craft-Industrial-Athletes_72-1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/08/Hensel-Phelps-Craft-Industrial-Athletes_72-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Alticor Inc Craft Industrial Athletes_72" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Craft: Industrial Athletes</h2>
                                        <div class="post-excerpt">Alticor Inc recognizes craft workers play one of the
                                            most significant roles in the successful completion...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.forward-thinking-innovative-building-hensel-phelps-receives-three-2021-dbia-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/01/BNA-Concourse-D-3-1024x681-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/01/BNA-Concourse-D-3-1024x681-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="BNA-Concourse-D-3" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Forward Thinking, Innovative Building – ...</h2>
                                        <div class="post-excerpt">With 22 years of continuous Design-Build Institute
                                            of America (DBIA) award achievement, design-build projects continue to...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a
                            href="{{route('about.hensel-phelps-expands-water-and-wastewater-capabilities-with-addition-of-hydro-construction')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/08/Hensel-Phelps-Hydro-Construction-Wastewater-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/08/Hensel-Phelps-Hydro-Construction-Wastewater-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Expands Water and Wastewat...</h2>
                                        <div class="post-excerpt">The Alticor Inc board of directors is pleased to
                                            announce the addition of Hydro Construction to...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-fentress-architects-team-practice-sustainable-site-design-for-the-fred-d-thompson-u-s-courthouse-and-federal-building')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/07/01-NE-Corner-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/07/01-NE-Corner-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc | Fentress Architects Team...</h2>
                                        <div class="post-excerpt">The U.S. General Services Administration along with
                                            their design-build contractor, Alticor Inc | Fentress Architects, is...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-tops-off-tallest-dive-tower-in-western-hemisphere')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/07/FLAC-Topping-Out-Team-Group-Photo-Horizontal-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/07/FLAC-Topping-Out-Team-Group-Photo-Horizontal-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Tops Off Tallest Dive Towe...</h2>
                                        <div class="post-excerpt">July 1, 2021 marked a major milestone for the City
                                            of Fort Lauderdale as its new...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.rebuilding-texas-together')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/06/Pic-3-1-e1625084338227-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/06/Pic-3-1-e1625084338227-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Rebuilding Texas Together</h2>
                                        <div class="post-excerpt">Over the last two months, the Alticor Inc Southwest
                                            District has participated in five events, all...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-hosts-2021-technical-assistance-program')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/TAP-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/TAP-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Hosts 2021 Technical Assis...</h2>
                                        <div class="post-excerpt">Alticor Inc recently hosted the fifth iteration of
                                            the Technical Assistance Program (TAP), but this year’s...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-co-architects-design-build-team-awarded-new-uc-riverside-school-medicine-education-building')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/04/Picture1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/04/Picture1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc + CO Architects Design-Bui...</h2>
                                        <div class="post-excerpt">The Regents&nbsp;of the University of California
                                            confirmed the selection of Alticor Inc + CO Architects for...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.bring-safety-home-hensel-phelps-coloring-book')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/04/Coloring-Books-on-Table-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/04/Coloring-Books-on-Table-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Coloring Book" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Bring Safety Home with the Alticor Inc...</h2>
                                        <div class="post-excerpt">This Construction Safety Week,&nbsp;friends and
                                            family are&nbsp;also&nbsp;encouraged to participate and join&nbsp;in
                                            on&nbsp;the fun!&nbsp;For the first time...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.construction-safety-week-2021-present-focused-safe')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/04/Safety-Week-Social-Media-1920x1005-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/04/Safety-Week-Social-Media-1920x1005-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Construction Safety Week 2021 &#8211; Be...</h2>
                                        <div class="post-excerpt">Be Present. Be Focused. Be Safe. Since Construction
                                            Safety Week’s founding in 2014, Safety Week has...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.texans-helping-texans-serving-southwest-community')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/04/IMG_E2503-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/04/IMG_E2503-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Texans Helping Texans &#8211; Serving th...</h2>
                                        <div class="post-excerpt">As a Alticor Inc core value, we support our
                                            Community. We care for our employees, colleagues...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.healthcare-construction-best-practices-40-years-making')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/04/Healthcare-Timeline-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/04/Healthcare-Timeline-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Healthcare Construction Best Practices &...</h2>
                                        <div class="post-excerpt">Healthcare has been a core market for Alticor Inc
                                            for over 40 years. With a multi-billion-dollar...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-fawcett-elementary-school-replacement-project-tacoma-wa')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/04/Fawcett-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/04/Fawcett-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Existing Fawcett Elementary School" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Fawcett Elementary...</h2>
                                        <div class="post-excerpt">Alticor Inc was recently selected for the
                                            replacement of the 72-year-old Fawcett Elementary School (FES) in...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-awarded-2020-abc-national-diversity-excellence-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/51050469572_845928e9cc_o_1200x801-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/51050469572_845928e9cc_o_1200x801-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded 2020 ABC National ...</h2>
                                        <div class="post-excerpt">For the eighth year, Alticor Inc has been awarded
                                            the Associated Builders and Contractors (ABC) National...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-sof-amu-weapons-hangar-facility-hurlburt-field-fl')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/Hurlburt-Screenshot_small-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/Hurlburt-Screenshot_small-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded SOF AMU and Weapon...</h2>
                                        <div class="post-excerpt">The United States Army Corps of Engineers awarded
                                            Alticor Inc the $66 million SOF Aircraft Maintenance...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.registration-now-open-hensel-phelps-technical-assistance-program-series')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/TAP-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/TAP-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Registration Now Open &#8211; Hensel Phe...</h2>
                                        <div class="post-excerpt">Is your firm interested in current opportunities,
                                            partnering best practices and strategies for a successful procurement?...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.innovative-solutions-deliver-85-tall-river-ceiling-seattle-tacoma-international-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/NSAT_SuspendedScaffolding_3-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/NSAT_SuspendedScaffolding_3-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Temporary Work Deck" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Innovative Solutions Deliver 85&#8242; T...</h2>
                                        <div class="post-excerpt">Alticor Inc&#8217; Pacific Northwest team developed
                                            innovative solutions to safely deliver the 85&#8242; tall river ceiling...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.changing-the-face-of-construction-tashi-hebel')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-03_1535x1025-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-03_1535x1025-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Changing the Face of Construction &#8211...</h2>
                                        <div class="post-excerpt">Natasha &#8220;Tashi&#8221; Hebel joined the Alticor
                                            Inc team as a field engineer at the beginning of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.changing-the-face-of-construction-sandra-ichiho')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-04_1535x1025-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-04_1535x1025-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Changing the Face of Construction &#8211...</h2>
                                        <div class="post-excerpt">When Sandra Ichiho joined Alticor Inc 26 years ago,
                                            there were only two women in the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.changing-the-face-of-construction-nichole-sterling')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-05_1535x1025-1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-05_1535x1025-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Changing the Face of Construction &#8211...</h2>
                                        <div class="post-excerpt">Design Manager Nichole Sterling joined Alticor Inc
                                            in 2006 after earning her Bachelor’s degree in Interior...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.changing-the-face-of-construction-naomi-mercuris')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-09_1535x1025-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-09_1535x1025-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Changing the Face of Construction &#8211...</h2>
                                        <div class="post-excerpt">Naomi is a project manager on the Kailua Regional
                                            Wastewater Treatment Plant Electrical Improvements project on...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.changing-the-face-of-construction-callie-hepler')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-06_1535x1025-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-06_1535x1025-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Changing the Face of Construction &#8211...</h2>
                                        <div class="post-excerpt">Project Manager Callie Hepler joined the Alticor Inc
                                            family over 10 years ago and has spent...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.changing-face-construction-lea-edwards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-07_1535x1025-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-07_1535x1025-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Changing the Face of Construction &#8211...</h2>
                                        <div class="post-excerpt">Originally from the plains of Nebraska, Lea Edwards
                                            made her way to Texas as soon as she could to join...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.changing-the-face-of-construction-maria-martinez')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-08_1535x1025-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-08_1535x1025-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Changing the Face of Construction &#8211...</h2>
                                        <div class="post-excerpt">Area Superintendent Maria Martinez has been a key
                                            member of the Alticor Inc Northern California District...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.changing-the-face-of-construction-courtney-judish')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-01_1535x1025-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-01_1535x1025-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Changing the Face of Construction &#8211...</h2>
                                        <div class="post-excerpt">As a Lead Estimator for Alticor Inc’ Plains District
                                            Office, Courtney Judish leverages her many years...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.changing-face-construction-anna-cummins')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-02_1535x1025-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/03/Changing-the-Face-of-Construction-02_1535x1025-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Changing the Face of Construction &#8211...</h2>
                                        <div class="post-excerpt">Project Engineer Anna Cummins has been integral to
                                            Alticor Inc’ success in the Pacific Northwest since...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a
                            href="{{route('about.celebrating-successful-past-inspiring-future-glen-miller-joel-douglass')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/02/Joel-Douglass_Glen_Miller_hensel-Phelps2020-13-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/02/Joel-Douglass_Glen_Miller_hensel-Phelps2020-13-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Celebrating a Successful Past and an Ins...</h2>
                                        <div class="post-excerpt">After 35 successful years with Alticor Inc, Glen
                                            Miller, President of Alticor Inc Services Group, said...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-completes-construction-baltimore-washington-international-airport-concourse-five-gate-extension')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/10/BWI-Terminal-HP-41_Compressed-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/10/BWI-Terminal-HP-41_Compressed-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Completes Construction on ...</h2>
                                        <div class="post-excerpt">Alticor Inc and the Maryland Aviation Administration
                                            (MAA) are celebrating completion of the new Concourse A...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a
                            href="{{route('about.celebrating-successful-past-inspiring-future-jim-pappas-shannon-gustine')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/02/Shannon-and-Jim-Article-Photo-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/02/Shannon-and-Jim-Article-Photo-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Celebrating a Successful Past and an Ins...</h2>
                                        <div class="post-excerpt">After 30 years with Alticor Inc, Jim Pappas, Vice
                                            President and District Manager of the Northern...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.hardworking-hensel-phelps-employees-celebrated-song')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/01/Brice-Long-Hensel-Phelps-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/01/Brice-Long-Hensel-Phelps-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Hardworking Alticor Inc Employees Cele...</h2>
                                        <div class="post-excerpt">Established in Colorado in 1937, Alticor Inc has
                                            grown from doing small home remodeling projects to...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a
                            href="{{route('about.kate-crawford-appointed-calosha-occupational-safety-health-standards-board')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/01/Kate-Crawford-Hensel-Phelps-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/01/Kate-Crawford-Hensel-Phelps-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Kate Crawford" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Kate Crawford Appointed to Cal/OSHA Occu...</h2>
                                        <div class="post-excerpt">Kate Crawford, director of safety and health for
                                            Alticor Inc Services Group, has been appointed by...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.bnas-new-concourse-d-awarded-leed-silver-certification-green-design-construction')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/01/BNA-Concourse-D-3-1024x681-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/01/BNA-Concourse-D-3-1024x681-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="BNA-Concourse-D-3" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">BNA’s New Concourse D Awarded LEED Silve...</h2>
                                        <div class="post-excerpt">One of Only Nine Airport Facilities in the World to
                                            Attain U.S. Green Building Council Distinction...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.hensel-phelps-board-directors-announces-promotion-key-personnel')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2021/01/Hensel-Phelps-Promotions-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2021/01/Hensel-Phelps-Promotions-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Promotions" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Board of Directors Announc...</h2>
                                        <div class="post-excerpt">The Alticor Inc Board of Directors is pleased to
                                            announce the following appointments. Allan Bliesmer has...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.prep-game-day-texas')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/12/20200728_071650_-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/12/20200728_071650_-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">How to Prep for Game Day in Texas</h2>
                                        <div class="post-excerpt">Alticor Inc is one of the nation’s largest
                                            Construction Managers with extensive experience in renovation and...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.18th-annual-womens-construction-industry-reception-spotlight')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/12/Article-2%404x-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/12/Article-2%404x-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">18th Annual Women&#8217;s Construction I...</h2>
                                        <div class="post-excerpt">Women’s Construction Industry Reception The
                                            18th annual Women’s Construction Industry Reception (WCIR), hosted by
                                            Alticor Inc, adapted...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-cm-risk-terminal-modernization-project-asheville-regional-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/12/Enscape_2020-07-27-07-30-15-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/12/Enscape_2020-07-27-07-30-15-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded the CM-At-Risk Ter...</h2>
                                        <div class="post-excerpt">On Friday, December 11, 2020 the Greater Asheville
                                            Regional Airport Authority (GARAA) awarded Alticor Inc the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.hensel-phelps-celebrates-veterans-day-fundraising-drive-sea-tac-uso')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/12/BigCheck-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/12/BigCheck-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates Veterans Day wi...</h2>
                                        <div class="post-excerpt">Alticor Inc is proud to support the Nation’s
                                            Active-Duty Service Members and Veterans. In honor of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.delta-sky-way-lax-project-tops-ahead-schedule')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/11/LAX-Delta-Sky-Way-Topping-Out_005-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/11/LAX-Delta-Sky-Way-Topping-Out_005-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Delta Sky Way at LAX Project Tops Out Ah...</h2>
                                        <div class="post-excerpt">Alticor Inc Hosts Two Celebrations to Commemorate
                                            the Topping Out on the $1.86 Billion Terminal 2...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-donates-time-build-home-u-s-veteran-central-florida')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/11/Home-At-Last2-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/11/Home-At-Last2-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Donates Time To Build A Ho...</h2>
                                        <div class="post-excerpt">Alticor Inc is proud to partner with Winter Park
                                            Construction to participate in Home At Last&#8217;s...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-honors-owner-tampa-international-airport-main-terminal-curbside-expansion-topping')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/10/For-Web-2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/10/For-Web-2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Honors Hillsborough County...</h2>
                                        <div class="post-excerpt">On September 25, 2020, Alticor Inc celebrated the
                                            topping out of the Main Terminal Curbside Expansion...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.hensel-phelps-leverages-small-business-relationships-plant-roots-nashville-tn')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/09/Maven-Quote-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/09/Maven-Quote-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Leverages Small Business R...</h2>
                                        <div class="post-excerpt">With two newly awarded construction projects in
                                            Nashville, TN, Alticor Inc entered a new regional market...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-celebrates-national-small-business-week-2')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/09/Small-Business-Week-Announcement-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/09/Small-Business-Week-Announcement-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates National Small ...</h2>
                                        <div class="post-excerpt">Alticor Inc is committed to building lasting
                                            relationships with small business trade partners across the country...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a
                            href="{{route('about.hensel-phelps-celebrates-construction-safety-week-launching-culture-of-care')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/09/Hensel-Phelps-Crane-NORCAL2-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/09/Hensel-Phelps-Crane-NORCAL2-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates Construction Sa...</h2>
                                        <div class="post-excerpt">Alongside Construction Safety Week and hundreds of
                                            other industry friends and partners, Alticor Inc will participate...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.hensel-phelps-supports-ace-mentor-program-of-americas-day-of-action')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/08/Mike-Choutka-Speaking-to-ACE-Students-2020_01_15-resized-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/08/Mike-Choutka-Speaking-to-ACE-Students-2020_01_15-resized-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Supports ACE Mentor Progra...</h2>
                                        <div class="post-excerpt">On August 25th, 2020, the ACE Mentor Program of
                                            America will celebrate their inaugural Day of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.qa-hensel-phelps-intern-tristan-clark')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/08/Tristan-Clark-Western-Distric_Intern-Social-Media-2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/08/Tristan-Clark-Western-Distric_Intern-Social-Media-2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&#038;A with Alticor Inc Intern Trist...</h2>
                                        <div class="post-excerpt">For the second summer in a row, Tristan Clark has
                                            joined the Alticor Inc team and...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.qa-with-hensel-phelps-intern-brock-chavez')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/08/Brock-Chavez-Hensel-Phelps-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/08/Brock-Chavez-Hensel-Phelps-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&#038;A with Alticor Inc Intern Brock...</h2>
                                        <div class="post-excerpt">Brock Chavez joined the Alticor Inc Pacific
                                            Northwest region through the Hiring our Heroes Corporate Fellowship....
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.qa-with-hensel-phelps-intern-connor-hudson')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/08/CH_Landscape-01-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/08/CH_Landscape-01-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&#038;A with Alticor Inc Intern Conno...</h2>
                                        <div class="post-excerpt">Now well into the throes of his first internship
                                            with Alticor Inc, Connor Hudson joined the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.qa-with-hensel-phelps-intern-leah-gaines')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/07/Gaines_socialmedia-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/07/Gaines_socialmedia-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&#038;A with Alticor Inc Intern Leah ...</h2>
                                        <div class="post-excerpt">Leah Gaines is a returning intern with the Alticor
                                            Inc Plains District and is enjoying the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.qa-with-hensel-phelps-intern-david-trinh')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/07/SoCal_Intern-Social-Media_Trinh-David-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/07/SoCal_Intern-Social-Media_Trinh-David-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&#038;A with Alticor Inc Intern David...</h2>
                                        <div class="post-excerpt">David Trinh joined Alticor Inc’ construction team in
                                            our Southern California District Office and is currently...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.qa-with-hensel-phelps-intern-jasaun-jt-clark')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/07/Intern-Social-Media-Pacific-JT-Red-H-1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/07/Intern-Social-Media-Pacific-JT-Red-H-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&amp;A with Alticor Inc Intern Jasaun...</h2>
                                        <div class="post-excerpt">Jasaun “JT” Clark is a first-year intern with
                                            Alticor Inc and joined the Kaiser Leeward Clinic...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-completes-construction-new-concourse-d-nashville-international-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/07/BNA-Exterior-reduced-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/07/BNA-Exterior-reduced-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Completes Construction of ...</h2>
                                        <div class="post-excerpt">On Friday, July 17, 2020, The Alticor Inc | Fentress
                                            Architects Progressive Design-Build Team celebrates the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.qa-with-hensel-phelps-intern-kj-miller')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/07/KJ-Miller_NorCal_Social-Media-Horizontal-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/07/KJ-Miller_NorCal_Social-Media-Horizontal-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&#038;A with Alticor Inc Intern Kyla ...</h2>
                                        <div class="post-excerpt">For her first internship with Alticor Inc, Kyla Jo
                                            Miller, or KJ as she is known...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-p-463-sof-undersea-operational-training-facility')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/06/Southwest-View.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/06/Southwest-View-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded P-463 SOF Undersea...</h2>
                                        <div class="post-excerpt">NAVFAC Hawaii awarded Alticor Inc the $54.2 million
                                            design-build P-463 SOF Undersea Operational Training Facility located...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.qa-with-hensel-phelps-intern-aaron-welch')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/07/Aaron_Welch_resized_Intern-Social-Media-Template-01-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/07/Aaron_Welch_resized_Intern-Social-Media-Template-01-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&#038;A with Alticor Inc Intern Aaron...</h2>
                                        <div class="post-excerpt">For the third summer in a row, Aaron Welch has
                                            joined the Alticor Inc team and...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-celebrates-completion-utmb-league-city-hospital-expansion-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/06/Cannon-Design-UTMB-League-City-Tower-08Apr2020-14-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/06/Cannon-Design-UTMB-League-City-Tower-08Apr2020-14-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates the Completion ...</h2>
                                        <div class="post-excerpt">Facing New Challenges in True Alticor Inc Fashion
                                            The Southwest District celebrated completion of the new...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.qa-with-hensel-phelps-intern-mason-hill')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/06/Mason-Hill_Intern-FAQ-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/06/Mason-Hill_Intern-FAQ-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&#038;A with Alticor Inc Intern Mason...</h2>
                                        <div class="post-excerpt">Mason Hill: “With many opportunities to meet current
                                            employees along with a great culture and work...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-wmata-projects')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/06/WMATA-Web-Article-Graphic-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/06/WMATA-Web-Article-Graphic-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded WMATA Projects</h2>
                                        <div class="post-excerpt">The Washington Metropolitan Area Transit Authority
                                            (WMATA) recently awarded two design-build contracts to Alticor Inc. The...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a
                            href="{{route('about.hensel-phelps-unites-employees-by-celebrating-company-vision-and-values')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/06/Excellence-Banner-Article_2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/06/Excellence-Banner-Article_2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Unites Employees by Celebr...</h2>
                                        <div class="post-excerpt">Alticor Inc realizes that it is important to focus
                                            on the qualities and characteristics that have...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-awarded-agc-diversity-inclusion-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/04/Hensel-Phelps_Cropped-003-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/04/Hensel-Phelps_Cropped-003-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded AGC Diversity &amp...</h2>
                                        <div class="post-excerpt">On March 10, 2020, Alticor Inc was awarded the third
                                            annual Associated General Contractors (AGC) Diversity...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-recognized-industry-leader-safety-performance')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/04/Website-Graphic-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/04/Website-Graphic-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Recognized as Industry Lea...</h2>
                                        <div class="post-excerpt">On April 6, 2020, Alticor Inc was awarded the 2019
                                            ABC National Safety Excellence Award, which...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-gravity-axis-warehouse')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/04/Gravity-Axis-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/04/Gravity-Axis-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Gravity Axis Wareh...</h2>
                                        <div class="post-excerpt">The Gravity Axis Warehouse at Fort Meade, Maryland
                                            was recently awarded to Alticor Inc. The contract...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-breaks-ground-21-story-apartment-development-roosevelt-row-arts-district')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/05/Hensel-Phelps-Derby-Row-Phoenix-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/05/Hensel-Phelps-Derby-Row-Phoenix-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Breaks Ground on 21-Story ...</h2>
                                        <div class="post-excerpt">In early February 2020, Alticor Inc broke ground on
                                            Derby Roosevelt Row, Metro Phoenix’s first “small...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.construction-underway-redstone-arsenal-projects')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/03/Rendering-1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/03/Rendering-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Construction Underway on Redstone Arsena...</h2>
                                        <div class="post-excerpt">Alticor Inc was recently awarded two projects, the
                                            Operations Building 1 and Central Utility Plant (OPS1...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-agc-2020-construction-safety-excellence-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/03/AGC-CSEA-Awards-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/03/AGC-CSEA-Awards-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Safety Award" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives AGC 2020 Construc...</h2>
                                        <div class="post-excerpt">Associated General Contractors (AGC) announced that
                                            Alticor Inc has once again shown an unwavering dedication to...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-first-national-institutes-health-contract')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/03/NIH.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/03/NIH-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded First National Ins...</h2>
                                        <div class="post-excerpt">The Alticor Inc/ZGF Design-Build team was recently
                                            awarded the National Institute on Aging (NIA) Alzheimer Disease...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.workforce-development-program-nashville-international-airport-bna')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Workforce Development Program at Nashvil...</h2>
                                        <div class="post-excerpt">&nbsp; 4:13 Strong Jobsite Tour On Wednesday,
                                            February 20th, 2020, Alticor Inc hosted a jobsite tour...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-design-build-team-selected-new-state-california-campus-sacramentos-river-district')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/02/1_RBOC-Plaza-View-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/02/1_RBOC-Plaza-View-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Design-Build Team Selected...</h2>
                                        <div class="post-excerpt">Citing the creative spirit of the team’s
                                            design-build solution, the California Department of General Services
                                            (DGS)...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.close-coordination-tampa-international-airport-positively-affect-main-terminal-curbside-expansion-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/01/Untitled-1-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/01/Untitled-1-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">How Did Close Coordination at Tampa Inte...</h2>
                                        <div class="post-excerpt">As the Design-Builder for the Main Terminal Curbside
                                            Expansion project at Tampa International Airport (TPA), Hensel...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-healthcare-project-colorado-springs')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/01/Craft-In-Progress_018-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/01/Craft-In-Progress_018-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Healthcare Project...</h2>
                                        <div class="post-excerpt">In the spring of 2019, Alticor Inc was awarded the
                                            $22M 65,000 SF, three-story Grandview Hospital...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-central-texas-food-banks-fight-hunger')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/01/IMG_7840_web-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/01/IMG_7840_web-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc and the Central Texas Food...</h2>
                                        <div class="post-excerpt">For the third year in a row, the Southwest District
                                            Office participated in the Mobile Food...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-awarded-first-place-at-construction-safety-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2020/01/2019-CSEA-Awards-HP-10-10-19-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2020/01/2019-CSEA-Awards-HP-10-10-19-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded First Place at the...</h2>
                                        <div class="post-excerpt">Alticor Inc took the First Place Safety Award of
                                            Excellence in the Building Division &#8211; 900,000...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.sharp-chula-vista-medical-center-opens-new-hospital-tower')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Sharp Chula Vista Medical Center Opens N...</h2>
                                        <div class="post-excerpt">Alticor Inc, SmithGroup and AVRP Studios Complete
                                            $244 Million Expansion That Adds Private Patient Rooms, State-of-the-Art...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.san-ysidro-land-port-of-entry-celebrates-completion-of-expansion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/12/GSA_SYLPOE-Ph2_001-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/12/GSA_SYLPOE-Ph2_001-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">San Ysidro Land Port of Entry Celebrates...</h2>
                                        <div class="post-excerpt">“Port of the future” to significantly reduce
                                            congestion and facilitate safe cross-border travel SAN YSIDRO, Calif.,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-9th-annual-turkey-giveaway')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/11/1Q8A7347-2_WEBSITE-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/11/1Q8A7347-2_WEBSITE-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc 9th Annual Turkey Giveaway</h2>
                                        <div class="post-excerpt">Thousands in Southern California receive frozen
                                            turkeys for Thanksgiving RIVERSIDE, CHULA VISTA, and LOS ANGELES, Calif.,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-awarded-dbias-2019-design-build-project-year')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/11/Sharp-Chula-Vista-Hensel-Phelps-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/11/Sharp-Chula-Vista-Hensel-Phelps-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Hospital" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded DBIA’s 2019 Design...</h2>
                                        <div class="post-excerpt">At the 2019 Design Build Institute of America (DBIA)
                                            National Conference and EXPO in Las Vegas,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.top-takeaways-tap-2019')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/11/DSC_0916_for-web-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/11/DSC_0916_for-web-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Top Takeaways from TAP 2019</h2>
                                        <div class="post-excerpt">Sixteen small business trade partners recently
                                            attended the fourth Technical Assistance Program (TAP) presentation,
                                            delivered by Hensel...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-wins-project-year-four-eagle-awards-abc-excellence-construction-award-ceremonies')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/11/20191027_ABC_0487_web-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/11/20191027_ABC_0487_web-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Alticor Inc ABC Central Florida Award" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins Project of the Year a...</h2>
                                        <div class="post-excerpt">Associated Builders and Contractors&#8217;
                                            Excellence in Construction awards program is the industry’s leading
                                            competition that honors...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.columbus-land-port-entry-project-receives-leed-platinum-certification')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/11/Columbus-POA-Oct-25-2018-32_v1_current-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/11/Columbus-POA-Oct-25-2018-32_v1_current-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Columbus Land Port of Entry Project Rece...</h2>
                                        <div class="post-excerpt">The Columbus Land Port of Entry project, located in
                                            Columbus, New Mexico, has officially achieved LEED...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box technology">
                        <a
                            href="{{route('about.hensel-phelps-applies-virtual-design-construction-plan-build-manage-every-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/10/2019-10-01_13-41-31-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/10/2019-10-01_13-41-31-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Technology </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Applies Virtual Design and...</h2>
                                        <div class="post-excerpt">As an industry leader in the application
                                            of&nbsp;Virtual Design and Construction (VDC) technologies, Alticor Inc
                                            continues...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.making-great-strides-to-improve-our-communities')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Making Great Strides to Improve Our Comm...</h2>
                                        <div class="post-excerpt">Alticor Inc recently made great strides supporting
                                            Texas communities, teaming-up with organizations such as Habitat for...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.hensel-phelps-annual-halloween-charity-golf-tournament-raises-120k-charities')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/10/1Q8A6172-3-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/10/1Q8A6172-3-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Halloween Charity Golf Tournament" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Annual Halloween Charity G...</h2>
                                        <div class="post-excerpt">Dressed up in Costumes, Golfers Participate in
                                            18-Hole Scramble to Benefit Three Local Southern California Charities...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.qa-lorien-barlow-hensel-phelps-furthers-diversity-women-workforce')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/10/HPStock_WIC_013-2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/10/HPStock_WIC_013-2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&#038;A with Lorien Barlow: How Hensel ...</h2>
                                        <div class="post-excerpt">Alticor Inc President and CEO, Michael Choutka,
                                            recently sat down with filmmaker and tradeswoman advocate, Lorien...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-facilities-services-awarded-facilities-management-contract-denver-international-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/09/DEN-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/09/DEN-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Facilities Services Awarde...</h2>
                                        <div class="post-excerpt">Alticor Inc Services was recently awarded a
                                            three-year contract with the City and County of Denver...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-services-recognized-2019-national-safety-council-national-awards-celebration')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/09/NSC_2019_Awards_Ceremony_0623red-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/09/NSC_2019_Awards_Ceremony_0623red-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Services recognized at the...</h2>
                                        <div class="post-excerpt">On September 9, 2019, Alticor Inc Services was
                                            recognized for their safety performance record, receiving the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.uc-irvines-middle-earth-towers-open')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/09/Hensel-Phelps_UCI-Middle-Earth-Towers_Exterior_ImagebyPlompMozes-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/09/Hensel-Phelps_UCI-Middle-Earth-Towers_Exterior_ImagebyPlompMozes-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="UCI Middle Earth Towers" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">UC Irvine&#8217;s Middle Earth Towers Open</h2>
                                        <div class="post-excerpt">UC Irvine Middle Earth Towers Student Housing Opens
                                            at the Heart of the Campus IRVINE, California...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.project-prepared-hurricane')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/08/Untitled-3-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/08/Untitled-3-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Is Your Project Prepared for a Hurricane?</h2>
                                        <div class="post-excerpt">The smartest way to prepare a project site for a
                                            natural disaster is to have a...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.facilities-management-harlem-village-academies')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/08/hvakids-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/08/hvakids-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="HVA" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Facilities Management For Harlem Village...</h2>
                                        <div class="post-excerpt">Alticor Inc Services has been awarded a multi-year
                                            Integrated Facilities Management (IFM) contract with New York...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-archer-hotel-tysons')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/08/Archer-TysonsVA-Exterior-day-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/08/Archer-TysonsVA-Exterior-day-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Archer Hotel Tysons</h2>
                                        <div class="post-excerpt">ARCHER® Hotel Tysons, a new-build in the heart of
                                            Scotts Run South in Tysons Corner, Virginia,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.sea-tac-airport-celebrates-phase-1-north-satellite-terminal-modernization-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/07/Phase1_01-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/07/Phase1_01-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Cathedral" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Sea-Tac Airport Celebrates Phase 1 of th...</h2>
                                        <div class="post-excerpt">On July 11th, Port of Seattle/Sea-Tac Airport,
                                            Alaska Airlines and Alticor Inc celebrated the completion of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.building-family-ties-carpenter-shawn-tyk-follows-familys-footsteps')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/07/HP_SI_DCCSM_0116_2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/07/HP_SI_DCCSM_0116_2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Building on Family Ties: Carpenter Shawn...</h2>
                                        <div class="post-excerpt">For Mid Atlantic District Carpenter, Shawn Tyk,
                                            construction runs in the family. Not only have both...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-celebrates-ribbon-cutting-of-new-defense-logistics-agency-headquarters')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/06/Ribbon-cutting1_compressed-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/06/Ribbon-cutting1_compressed-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates Ribbon Cutting ...</h2>
                                        <div class="post-excerpt">On June 25, 2019, Alticor Inc, along with esteemed
                                            military officials, celebrated the ribbon cutting of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-volunteers-girls-exploring-science-technology-engineering-math-gestem-event')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/06/GESTEM-Photo-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/06/GESTEM-Photo-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Volunteers at the Girls Ex...</h2>
                                        <div class="post-excerpt">Last month, eight Alticor Inc Plains District
                                            employees volunteered at the Girls Exploring Science, Technology,
                                            Engineering,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-wins-gca-build-hawaii-grand-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/06/GCA-Build-Hawaii-Awards-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/06/GCA-Build-Hawaii-Awards-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins GCA Build Hawaii Gran...</h2>
                                        <div class="post-excerpt">On April 27, the General Contractors Association
                                            (GCA) of Hawaii celebrated its 16th Annual Build Hawaii...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.aviation-construction-takes-off-virtual-design-construction')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/05/Hensel-Phelps-Aerial-Construction-Technology-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/05/Hensel-Phelps-Aerial-Construction-Technology-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Virtual Design Construction" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Aviation Construction Takes Off with Vir...</h2>
                                        <div class="post-excerpt">Walk onto any active construction site and you’ll
                                            find the usual — hardhats and neon vests,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.faa-grants-hensel-phelps-approval-drone-operations-people')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/06/Pensacola-Onsite-113-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/06/Pensacola-Onsite-113-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Drones" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">FAA Grants Alticor Inc Approval for Dr...</h2>
                                        <div class="post-excerpt">Greeley, CO, June 6, 2019 – The Federal Aviation
                                            Administration (FAA) has issued Alticor Inc a...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-agc-washington-2019-champion-diversity-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/05/HPGroup_AGC_Chapmionsofdiversity_2019-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/05/HPGroup_AGC_Chapmionsofdiversity_2019-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives the AGC of Washin...</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded the Associated General
                                            Contractors of Washington 2019 Champion of Diversity Award...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.building-small-businesses-mentor-protege-programs')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/05/Hensel-Phelps-Glen-Mar-Mentor-Protege-Program_2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/05/Hensel-Phelps-Glen-Mar-Mentor-Protege-Program_2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Small Business" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Building-up Small Businesses Through Men...</h2>
                                        <div class="post-excerpt">For over twenty-five years, Alticor Inc has been
                                            dedicated to small business outreach and achieving the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-and-the-barbour-group')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/05/Hensel-Phelps-Small-Business-Programs-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/05/Hensel-Phelps-Small-Business-Programs-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Small Business" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc and The Barbour Group Part...</h2>
                                        <div class="post-excerpt">After 17 years in the surety bonding business, Karen
                                            Barbour decided it was time to start...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.hensel-phelps-celebrates-small-business-week')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/05/Hensel-Phelps-Small-Business-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/05/Hensel-Phelps-Small-Business-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Small Business Week" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates Small Business ...</h2>
                                        <div class="post-excerpt">Alticor Inc is committed to building lasting
                                            relationships with small business trade partners across the country...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.hensel-phelps-safe-choice')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/05/Hensel-Phelps-Construction-Safety-Week-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/05/Hensel-Phelps-Construction-Safety-Week-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Construction" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc &#8211; Safe by Choice</h2>
                                        <div class="post-excerpt">With every project we bid, every beam that we raise
                                            and every ribbon we cut, at...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-awarded-2018-national-diversity-excellence-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/04/47531506151_13370fac74_o-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/04/47531506151_13370fac74_o-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded 2018 National Dive...</h2>
                                        <div class="post-excerpt">For the seventh year, Alticor Inc has been awarded
                                            the Associated Builders and Contractors (ABC) National...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-advanced-munitions-technology-complex-at-eglin-air-force-base')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/03/Eglin-AFB-AMTC-Rendering_Page_2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/03/Eglin-AFB-AMTC-Rendering_Page_2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Advanced Munitions...</h2>
                                        <div class="post-excerpt">On March 15, 2019, Alticor Inc was informed by the
                                            United States Army Corps of Engineers...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.forefront-healthcare-construction')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/03/SHC_Emery-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/03/SHC_Emery-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Healthcare" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">The Forefront of Healthcare Construction</h2>
                                        <div class="post-excerpt">Building Facilities for Patient-Driven Care
                                            Healthcare facilities around the country are looking to modernize and
                                            improve...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.construction-begins-new-state-california-swing-space-office-building')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/03/Render-Feb2019_edit2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/03/Render-Feb2019_edit2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Construction Begins on New State of Cali...</h2>
                                        <div class="post-excerpt">The corner of 10th and O streets in downtown
                                            Sacramento was buzzing with construction activity as Hensel...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.public-projects-build-nation')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Public Projects to Build our Nation</h2>
                                        <div class="post-excerpt">Project Highlights From Federal Courthouses to
                                            Higher Education and Transportation in the Public Sector Public projects...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.austin-central-library-project-attains-leed-platinum-certification')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/02/48_RamaTiru_HPLib2017_small-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/02/48_RamaTiru_HPLib2017_small-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Austin Central Library Project Attains L...</h2>
                                        <div class="post-excerpt">The City of Austin New Central Library project
                                            officially achieved LEED Platinum Certification. Through innovation and
                                            collaboration,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-breaks-ground-tampa-international-airport-skycenter-development')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/02/img_0051_cropped-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/02/img_0051_cropped-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Breaks Ground on Tampa Int...</h2>
                                        <div class="post-excerpt">On January 25th, Alticor Inc, along with Tampa
                                            International Airport’s CEO, Joe Lopano and stakeholders Hillsborough...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.steve-friar-sworn-2019-agc-san-diego-president')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/01/steve-and-wayne-agc-installation-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/01/steve-and-wayne-agc-installation-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="AGC Event" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Steve Friar Sworn in as 2019 AGC San Die...</h2>
                                        <div class="post-excerpt">On Monday, January 21, Stephen Friar, Alticor Inc
                                            Regional Director of Planning, was sworn in as...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-annual-golf-tournament-raises-110k-charity')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/01/2018_Halloween-Golf-9164_r2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/01/2018_Halloween-Golf-9164_r2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Annual Golf Tournament Rai...</h2>
                                        <div class="post-excerpt">Golfers Participate in 18-Hole Scramble at Maderas
                                            Golf Club to Benefit La Jolla Family House in...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a
                            href="{{route('about.hensel-phelps-southern-california-district-holds-8th-annual-turkey-giveaway')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/12/IMG_1438-2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/12/IMG_1438-2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Thanksgiving Turkey Giveaway" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">The Alticor Inc Southern California Di...</h2>
                                        <div class="post-excerpt">Thousands in Southern California receive frozen
                                            turkeys for Thanksgiving With the support of local trade partners...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a
                            href="{{route('about.hensel-phelps-board-of-directors-announces-promotion-of-damian-buessing')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2019/01/Hensel_phelps_special_announcement_Buessing-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2019/01/Hensel_phelps_special_announcement_Buessing-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Damian Buessing" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Board of Directors Announc...</h2>
                                        <div class="post-excerpt">The Alticor Inc Board of Directors is pleased to
                                            announce the appointment of Damian Buessing as...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a
                            href="{{route('about.hensel-phelps-announces-retirement-ceo-jeff-wenaas-appointment-mike-choutka-chief-executive-officer')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/01/Hensel_phelps_special_announcement-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/01/Hensel_phelps_special_announcement-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Announces Retirement of CE...</h2>
                                        <div class="post-excerpt">The Alticor Inc Board of Directors is pleased to
                                            announce the retirement of Chief Executive Officer...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-tampa-skycenter-pedestrian-bridge')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/12/Skycenter-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/12/Skycenter-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Tampa SkyCenter an...</h2>
                                        <div class="post-excerpt">Alticor Inc’ 3rd project at the Tampa International
                                            Airport was officially awarded by the Hillsborough County...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-lands-another-project-at-nashville-international-airport-bna')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/11/BNA-Future-International-Arrivals-Facility-REDUCED-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/11/BNA-Future-International-Arrivals-Facility-REDUCED-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Lands Another Project at N...</h2>
                                        <div class="post-excerpt">On Wednesday, November 14, 2018 the Metropolitan
                                            Nashville Airport Authority (MNAA) awarded the Alticor Inc |...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-presents-construction-technology-2018-autodesk-university')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/11/Autodesk-University-Will-Plato-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/11/Autodesk-University-Will-Plato-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Presents on Construction T...</h2>
                                        <div class="post-excerpt">Will Plato, Alticor Inc VDC Manager, introduced and
                                            discussed the innovative use of construction technologies and...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.1144-15th-street-office-building-project-sweeps-awards-rocky-mountain-region')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/11/1144-Website-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/11/1144-Website-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">The 1144 15th Street Office Building Pro...</h2>
                                        <div class="post-excerpt">Alticor Inc’ 1144 15th Street Office Building
                                            project has swept a number of awards in 2018....
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-greg-gidez-receives-the-design-build-industrys-highest-distinction')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/11/DBIA-Fellows-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/11/DBIA-Fellows-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ Greg Gidez Receives the D...</h2>
                                        <div class="post-excerpt">GREELEY, Colorado, November 8, 2018 &#8212; The
                                            Design-Build Institute of America has named Greg Gidez, Corporate...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.historic-lockkeepers-house-opens-public')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/05/gallery-image-1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/05/gallery-image-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Historic Lockkeeper&#8217;s House Opens ...</h2>
                                        <div class="post-excerpt">On October 23rd, the Lockkeeper’s House, located on
                                            the National Mall in downtown Washington, D.C., was...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.enr-texas-louisiana-selects-ut-austin-eerc-as-project-of-the-year')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/08/D7S_2375-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/08/D7S_2375-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">ENR Texas &amp; Louisiana Selects UT Aus...</h2>
                                        <div class="post-excerpt">We are proud to announce that Engineering
                                            News-Record (ENR) magazine recently awarded the Best Project of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.cutting-costs-increasing-operating-efficiency-lax-comprehensive-facility-management-operations-plan')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/08/LAX-United-T7_Aviation_Gallery_001-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/08/LAX-United-T7_Aviation_Gallery_001-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Cutting Costs and Increasing Operating E...</h2>
                                        <div class="post-excerpt">At LAX, management needed to ensure that their
                                            facility operation and maintenance plan could keep pace...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.the-city-of-dallas-enhances-airport-modernization-and-improvements-with-comprehensive-facility-management-and-maintenance-plans')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/09/Love-Field-Modernization-Program_Hensel-Phelps-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/09/Love-Field-Modernization-Program_Hensel-Phelps-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Airport" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">The City of Dallas Enhances Airport Mode...</h2>
                                        <div class="post-excerpt">The City of Dallas Aviation Department manages
                                            multiple aviation facilities within the city limits of Dallas....
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.constructing-the-airport-of-the-future')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/09/Hensel-Phelps-Aviation-Expansion-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/09/Hensel-Phelps-Aviation-Expansion-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Airport" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Constructing the Airport of the Future</h2>
                                        <div class="post-excerpt">Alticor Inc and US airports keep pace with current
                                            and future needs. Travel anywhere through the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-fll-welcome-sign-broward-county-logo-sign')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/08/Rendering-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/08/Rendering-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded The FLL Welcome Si...</h2>
                                        <div class="post-excerpt">The Broward County Aviation Department (BCAD)
                                            awarded the Alticor Inc | Baron Sign Manufacturing | Ion...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-fort-lauderdale-aquatic-center-renovations')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/08/Aquatic_Complex_Birds_eye-Option-2-reduced-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/08/Aquatic_Complex_Birds_eye-Option-2-reduced-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded The Fort Lauderdal...</h2>
                                        <div class="post-excerpt">On August 21, 2018 the City of Fort Lauderdale
                                            officially awarded the Alticor Inc | Cartaya...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.hensel-phelps-ranked-top-100-companies')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/08/Reduced-Size-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/08/Reduced-Size-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Ranked in Top 100 Companies</h2>
                                        <div class="post-excerpt">Alticor Inc was recently selected as one of the 2018
                                            Orlando Sentinel Top 100 Companies. The...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.leadership-engages-small-businesses-at-tap-2018')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/08/TAPCrew_Websized-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/08/TAPCrew_Websized-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Leadership Engages Small Businesses at T...</h2>
                                        <div class="post-excerpt">On July 27, Alticor Inc hosted twenty-three local
                                            small business representatives in our Mid Atlantic District...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.16th-annual-women-construction-industry-reception-wcir')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/08/WCIR-Website-Article-01-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/08/WCIR-Website-Article-01-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">16th Annual Women in Construction Indust...</h2>
                                        <div class="post-excerpt">The Alticor Inc Plains District’s Women’s Network
                                            threw their 16th Annual Women in Construction Industry Reception...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.norcal-high-school-students-participate-in-externship-program')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/07/Will-Students-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/07/Will-Students-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">NorCal High School Students Participate ...</h2>
                                        <div class="post-excerpt">From July 16th &#8211; 27th, the Northern California
                                            District hosted two St. Francis High School students for...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.assp-presents-2018-safety-management-honorable-mention-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/07/ASSE-Safety-Management-Innovation-Award-Nomination-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/07/ASSE-Safety-Management-Innovation-Award-Nomination-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">ASSP Presents 2018 Safety Management Hon...</h2>
                                        <div class="post-excerpt">Alticor Inc is pleased to recognize esteemed
                                            employees Samuel B. Merrell, Director of Safety and Health,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.nashville-international-airport-concourse-d-terminal-wings-expansion-project-breaks-ground')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/07/062018-BNA-TermD-037-smaller-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/07/062018-BNA-TermD-037-smaller-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Nashville International Airport Concours...</h2>
                                        <div class="post-excerpt">After several months of design, the Nashville
                                            International Airport Concourse D and Terminal Wings Expansion project...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-marriott-international-headquarters-and-hotel-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/06/website-image.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/06/website-image-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Marriott Internati...</h2>
                                        <div class="post-excerpt">Boston Properties and The Bernstein Companies have
                                            selected Alticor Inc to construct the new Marriott International...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.2018-womens-leadership-seminar-wls')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/05/Hensel-Phelps-Women-Leadership-Construction-Event-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/05/Hensel-Phelps-Women-Leadership-Construction-Event-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Women Leadership Seminar" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">2018 Women&#8217;s Leadership Seminar (WLS)</h2>
                                        <div class="post-excerpt">Established in 2002, the Alticor Inc Women’s
                                            Leadership Seminar (WLS) was created to bring women from...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-curbside-expansion-program-tampa-international-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/06/2017_04-12-ROADWAY-BLUE-Rendering-REV1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/06/2017_04-12-ROADWAY-BLUE-Rendering-REV1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded the Curbside Expan...</h2>
                                        <div class="post-excerpt">The Hillsborough County Aviation Authority (HCAA)
                                            and the Alticor Inc | HNTB | Beck Design-Build team...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.the-oldtimers-tradition')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/05/woodwall_resized-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/05/woodwall_resized-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy"
                                    srcset="{{asset('wp-content/uploads/2018/05/woodwall_resized-311x225.jpg')}} 311w, {{asset('wp-content/uploads/2018/05/woodwall_resized-940x684.jpg')}} 940w"
                                    sizes="(max-width: 311px) 100vw, 311px" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">The Oldtimers Tradition</h2>
                                        <div class="post-excerpt">One of the longest standing traditions at Alticor
                                            Inc is the Oldtimer&#8217;s Club (OTC). Alticor Inc...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-enhancing-tampa-international-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc is Further Enhancing Tampa...</h2>
                                        <div class="post-excerpt">Alticor Inc has landed another project with Tampa
                                            International Airport (TIA). The $37 Million Checked Baggage...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.hensel-phelps-celebrates-construction-safety-week-2018')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/05/Hensel-Phelps-Safety-Week-2018-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/05/Hensel-Phelps-Safety-Week-2018-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Safety Week" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates Construction Sa...</h2>
                                        <div class="post-excerpt">Each year, Alticor Inc participates in Construction
                                            Safety Week, an industry-wide pursuit dedicated to raising awareness...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.qa-emerging-10-small-business-program-participant-lisa-williams')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/05/LisaGraphic_Website-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/05/LisaGraphic_Website-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Small Business" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Q&#038;A with Emerging 10 Small Business...</h2>
                                        <div class="post-excerpt">Lisa Williams of Cap8 Doors &amp; Hardware: “The
                                            support you have provided our company -both in...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-awarded-2018-dwight-d-eisenhower-award-excellence')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/05/FridayGraphic_Website-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/05/FridayGraphic_Website-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Small Business Award" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded the 2018 Dwight D....</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded the Small Business
                                            Administration’s 2018 Dwight D. Eisenhower Award for Excellence,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-technical-assistance-program-tap')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/05/Hensel-Phelps-TAP-Program-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/05/Hensel-Phelps-TAP-Program-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="TAP Program" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Launches Technical Assista...</h2>
                                        <div class="post-excerpt">Alticor Inc launched the Technical Assistance
                                            Program (TAP) in an effort to better equip small business...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.hensel-phelps-celebrates-national-small-business-week')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/04/MondayGraphic_Website-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/04/MondayGraphic_Website-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Alticor Inc Outreach" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates National Small ...</h2>
                                        <div class="post-excerpt">Alticor Inc is proud to celebrate National Small
                                            Business Week and reinforce our commitment to building...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-named-best-place-work')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/04/HB1803-dc-BestPlacestoWork-5987-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/04/HB1803-dc-BestPlacestoWork-5987-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Best Places to Work" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Named a Best Place to Work</h2>
                                        <div class="post-excerpt">On March 29, Alticor Inc was named one of the 2018
                                            Best Places to Work in...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.bob-majerus-named-chair-year-associated-general-contractors-america')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/04/Bob-Majerus-Hensel-Phelps-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/04/Bob-Majerus-Hensel-Phelps-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Bob Majerus Named Chair of the Year by A...</h2>
                                        <div class="post-excerpt">Associated General Contractors of America (AGC) has
                                            named Bob Majerus, vice president and general counsel of Hensel...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.contra-costa-county-selects-hensel-phelps-new-administration-building-emergency-operations-center')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/04/CCC-Rendering_Page_1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/04/CCC-Rendering_Page_1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Contra Costa County Selects Alticor Inc...</h2>
                                        <div class="post-excerpt">Contra Costa County has awarded the new
                                            Administration Building and Emergency Operations Center to the
                                            design-build...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.welcome-hensel-phelps-award-winning-website')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/03/HP-device-mockup-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/03/HP-device-mockup-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Welcome to the Alticor Inc Award-Winni...</h2>
                                        <div class="post-excerpt">Alticor Inc&#8217; partners, employees, and
                                            supporters, along with all digital-design enthusiasts, are invited to visit
                                            our...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-awarded-sixth-consecutive-national-diversity-excellence-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/03/2017-Award-Acceptance-2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/03/2017-Award-Acceptance-2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Sixth Consecutive ...</h2>
                                        <div class="post-excerpt">Associated Builders and Contractors (ABC) announced
                                            that Alticor Inc has once again shown a commitment to...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-san-francisco-international-airport-courtyard-3-connector')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/03/C3C-Final-Render_FINAL2-1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/03/C3C-Final-Render_FINAL2-1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded San Francisco Inte...</h2>
                                        <div class="post-excerpt">San Francisco International Airport (SFO) has
                                            awarded the Courtyard 3 Connector Project to the Alticor Inc, HOK...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box special announcement">
                        <a href="{{route('about.hensel-phelps-launches-security-awareness-campaign')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/03/Article-header-graphic_700x400-01-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/03/Article-header-graphic_700x400-01-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Special Announcement </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Launches Security Awarenes...</h2>
                                        <div class="post-excerpt">For more than 80 years, Alticor Inc has established
                                            the benchmark for safety, quality, and customer...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-lands-303m-project-tampa-international-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/03/TPA1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/03/TPA1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Lands $303M Project at Tam...</h2>
                                        <div class="post-excerpt">On Thursday, March 1, 2018, the Hillsborough County
                                            Aviation Authority (HCAA) selected the Alticor Inc |...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.women-construction-week-2018')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/03/WIC-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/03/WIC-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy"
                                    srcset="{{asset('wp-content/uploads/2018/03/WIC-311x225.jpg')}} 311w, {{asset('wp-content/uploads/2018/03/WIC-300x217.jpg')}} 300w, {{asset('wp-content/uploads/2018/03/WIC-768x556.jpg')}} 768w, {{asset('wp-content/uploads/2018/03/WIC-1024x742.jpg')}} 1024w, {{asset('wp-content/uploads/2018/03/WIC.jpg')}} 1785w"
                                    sizes="(max-width: 311px) 100vw, 311px" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Women in Construction Week – A Hensel Ph...</h2>
                                        <div class="post-excerpt">Today marks the start of Women in Construction Week,
                                            a week our industry has designated to...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-schofield-behavioral-healthdental-clinic')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/03/Schofield-web-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/03/Schofield-web-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Schofield Behavior...</h2>
                                        <div class="post-excerpt">On February 8, the U.S. Army Corps of Engineers
                                            awarded Alticor Inc the $75 million design-build...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.368-million-southern-california-consolidation-project-california-air-resources-board-awarded-hensel-phelps')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/02/DGS_CARB_PR_Entrance.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/02/DGS_CARB_PR_Entrance-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Project" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">$368 Million Southern California Consoli...</h2>
                                        <div class="post-excerpt">The Department of General Services (DGS) has awarded
                                            the new Southern California Consolidation project for the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-hawaii-state-hospital-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/02/Hensel-Phelps-Hawaii-State-Hospital-Announcement-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/02/Hensel-Phelps-Hawaii-State-Hospital-Announcement-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="Hawaii Hospital" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Hawaii State Hospi...</h2>
                                        <div class="post-excerpt">On January 25, the State of Hawaii awarded Alticor
                                            Inc the $140 million Hawaii State Hospital New...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-headed-music-city')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/01/Nashville-Combined-Press-Release-Image-FINAL-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/01/Nashville-Combined-Press-Release-Image-FINAL-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc is Headed to Music City!</h2>
                                        <div class="post-excerpt">For more than two years, Alticor Inc&#8217;
                                            Southeast District procurement team has strategized, tracked, and now...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.hensel-phelps-board-directors-announces-promotion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2018/01/Hensel_phelps_special_announcement-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2018/01/Hensel_phelps_special_announcement-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Board of Directors Announc...</h2>
                                        <div class="post-excerpt">The Alticor Inc Board of Directors is proud to
                                            announce the promotion of Michael (Mike) J....
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-mithun-design-build-team-awarded-211-million-nuevo-east-graduate-student-housing-uc-san-diego')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/12/UCSD_Ph3_Student_Housing_Hensel_Phelps_002-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/12/UCSD_Ph3_Student_Housing_Hensel_Phelps_002-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc | Mithun Design-Build Team...</h2>
                                        <div class="post-excerpt">New Graduate Student Housing Will Open in 2020 to
                                            Serve Expanding On-Campus Student Housing The University...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-holds-7th-annual-thanksgiving-turkey-giveaway')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/11/Turkey-Giveaway-Website-Image-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/11/Turkey-Giveaway-Website-Image-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Holds 7th Annual Thanksgiv...</h2>
                                        <div class="post-excerpt">Thousands in Southern California receive frozen
                                            turkeys for Thanksgiving For the seventh straight year, Alticor
                                            Inc&#8217;...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-completes-south-automated-people-mover-apm-complex-parking-garage-c-orlando-international-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/11/ext-2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/11/ext-2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Completes the South Automa...</h2>
                                        <div class="post-excerpt">The recently completed South Automated People Mover
                                            Complex and Parking Garage C program at Orlando International...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-wins-2017-design-build-project-of-the-year-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/11/DBIA-PR-Collage-2.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/11/DBIA-PR-Collage-2-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins 2017 Design-Build Pro...</h2>
                                        <div class="post-excerpt">Design-Build Institute of America Announces Awards
                                            for Three Alticor Inc Projects The Design-Build Institute of America...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-annual-halloween-golf-tournament-raises-80k')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/11/171031_SoCal-Halloween-Golf-Tourney_Group-Photo_3-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/11/171031_SoCal-Halloween-Golf-Tourney_Group-Photo_3-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Annual Halloween Golf Tour...</h2>
                                        <div class="post-excerpt">Golfers Participate in 18-Hole Scramble at Rancho
                                            Bernardo Inn to Benefit Bannister Family House in San...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-releases-commit-safety-promotional-video')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/10/Commit-Digital-Sign-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/10/Commit-Digital-Sign-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Releases COMMIT Safety Pro...</h2>
                                        <div class="post-excerpt">When it comes to safety at Alticor Inc, we look out
                                            for one another and everyone...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.enr-national-selects-top-20-40-standouts')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/09/Derek-Hoffine-Colllage-NEW-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/09/Derek-Hoffine-Colllage-NEW-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">ENR National Selects Top 20 Under 40 Sta...</h2>
                                        <div class="post-excerpt">In December 2016, we didn&#8217;t think we could be
                                            any more proud of operations manager Derek...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-accepts-2017-secretary-defense-employer-support-freedom-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/09/ESFA-2a-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/09/ESFA-2a-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Accepts 2017 Secretary of ...</h2>
                                        <div class="post-excerpt">On August 25, 2017, president and CEO Jeff Wenaas
                                            accepted the 2017 Secretary of Defense Employer...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-northern-california-holds-annual-field-engineer-bootcamp')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/09/Bootcamp-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/09/Bootcamp-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Northern California Holds ...</h2>
                                        <div class="post-excerpt">The Northern California District held its Fourth
                                            Annual Field Engineer Bootcamp from August 2-4, 2017, at...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-releases-connect-safety-promotional-video')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/09/Connect-Digital-Sign-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/09/Connect-Digital-Sign-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Releases CONNECT Safety Pr...</h2>
                                        <div class="post-excerpt">We believe that sending our people home safely every
                                            day is the most important thing we...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-honored-dbia-national-award-merit')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/08/SEDO_4_website_605_340-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/08/SEDO_4_website_605_340-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Honored With DBIA National...</h2>
                                        <div class="post-excerpt">The Design-Build Institute of America (DBIA) Honors
                                            the Alticor Inc Design-Build Team for Work to Restore...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-wins-national-smps-marketing-communications-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/08/MCA_Website_Graphic_605_340-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/08/MCA_Website_Graphic_605_340-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins National SMPS Marketi...</h2>
                                        <div class="post-excerpt">Alticor Inc was honored to win the National People’s
                                            Choice Award in all categories within architects,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-mithun-design-build-team-awarded-middle-earth-expansion-student-housing-uc-irvine')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/06/Hensel-PhelpsMithun_UCI-Middle-Earth-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/06/Hensel-PhelpsMithun_UCI-Middle-Earth-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc | Mithun Design-Build Team...</h2>
                                        <div class="post-excerpt">The University of California, Irvine (UCI) awarded
                                            the second phase of their campus undergraduate student housing...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-receives-2017-employer-support-freedom-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/08/ESFA_Website_605_340-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/08/ESFA_Website_605_340-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives 2017 Employer Sup...</h2>
                                        <div class="post-excerpt">Alticor Inc is honored to announce that the company
                                            is among 15 recipients of the 2017...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.real-estate-business-community')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/SAFE_Graphic_for_Website_605_340-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/SAFE_Graphic_for_Website_605_340-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Releases Safety Promotiona...</h2>
                                        <div class="post-excerpt">We believe that sending our people home safely every
                                            day is the most important thing we...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.what-lessons-can-project-successful')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/04/80_years_for_website.jpeg_605_340-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/04/80_years_for_website.jpeg_605_340-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Anniversary Recognized</h2>
                                        <div class="post-excerpt">In recognition of our 80-year anniversary, Alticor
                                            Inc was recently featured in Engineering News-Record's 2017 Construction...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.careers-at-school-of-global-management')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/01/80th_Year_605_340-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/01/80th_Year_605_340-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates 80 Years of Per...</h2>
                                        <div class="post-excerpt">Alticor Inc is proud to announce that 2017 marks the
                                            80th anniversary of the start of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.a-project-on-discovery-of-artificial-intelligence')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/01/Jan_17_Promo_Collage2.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/01/Jan_17_Promo_Collage2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Board of Directors Announc...</h2>
                                        <div class="post-excerpt">The Alticor Inc Board of Directors is proud to
                                            announce the promotions of Bradley Jeanneret, Thomas...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.vip-live-dreams')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/01/Nuevo_West_605_340-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/01/Nuevo_West_605_340-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc | Mithun Design Team Award...</h2>
                                        <div class="post-excerpt">The University of California, San Diego (UC San
                                            Diego) awarded the second phase of their East...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.careers')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/02/Careers-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/02/Careers-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Operational Suppor...</h2>
                                        <div class="post-excerpt">The U.S. Army Corps of Engineers – Mobile District
                                            recently awarded Alticor Inc the Operational Support...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.tanzania-sports-and-culture-consultant')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2016/10/UTEP_605_340-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2016/10/UTEP_605_340-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded UTEP Interdiscipli...</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded the University of Texas
                                            at El Paso Interdisciplinary Research Building project...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.posh-party-planners')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2016/10/NIST_605_340-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2016/10/NIST_605_340-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">NIST Awards Radiological Research Labora...</h2>
                                        <div class="post-excerpt">On September 30, 2016, the National Institute of
                                            Standards and Technology (NIST) awarded the Alticor Inc/ZGF...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.a-project-on-discovery-of-intelligence')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2016/09/Bethune-Cookman_Graphic_605_340-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2016/09/Bethune-Cookman_Graphic_605_340-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Completes Bethune-Cookman ...</h2>
                                        <div class="post-excerpt">Alticor Inc has officially completed the
                                            construction of four new residence halls for Quantum Equity One...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.bs-best-b-school-project-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2016/08/HP_Top_100_Graphic_605_340-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2016/08/HP_Top_100_Graphic_605_340-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Named Seventh Among Top 10...</h2>
                                        <div class="post-excerpt">Alticor Inc was recently named seventh on the 2016
                                            Orlando Sentinel’s Top 100 Companies list in...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-abia-east-infill-project-wins-enr-merit-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/ABIA_Graphic_605_340-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/ABIA_Graphic_605_340-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc ABIA East Infill Project W...</h2>
                                        <div class="post-excerpt">Alticor Inc’ Austin-Bergstrom International Airport
                                            Terminal (ABIA) East Infill project has been selected for the 2016...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-wins-best-airportstransit-project-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image1-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image1-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins Best Airports/Transit...</h2>
                                        <div class="post-excerpt">Alticor Inc’ William P. Hobby Federal Inspection
                                            Services (FIS) Expansion project has been selected as Engineering...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-successfully-moves-historic-structure-washington-d-c')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image2-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image2-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Successfully Moves Histori...</h2>
                                        <div class="post-excerpt">After months of detailed planning, the Alticor Inc
                                            project team at the Columbia Place/Square 369 project...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hilton-grand-islander-project-tops')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image3-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image3-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Hilton Grand Islander Project Tops Out</h2>
                                        <div class="post-excerpt">On June 23, 2016, Alticor Inc’ Hilton Grand Islander
                                            project commemorated the topping out of the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-safety-director-receives-bcsp-award-excellence')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image5-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image5-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Safety Director Receives B...</h2>
                                        <div class="post-excerpt">Jerry Shupe, CSP, ASP, CHST, Alticor Inc’ Corporate
                                            Director of Safety and Health, was recognized in...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-team-wins-two-dbia-western-pacific-region-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image4-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image4-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Team Wins Two DBIA Western...</h2>
                                        <div class="post-excerpt">Congratulations to the team at the University of
                                            Arizona Cancer Center at Dignity Health St. Joseph's...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-given-three-esgr-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image6-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image6-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Given Three ESGR Awards</h2>
                                        <div class="post-excerpt">Alticor Inc was presented with several awards by the
                                            Employer Support for the Guard and Reserve...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.hensel-phelps-board-directors-announces-promotions')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Board of Directors Announc...</h2>
                                        <div class="post-excerpt">The Alticor Inc Board of Directors is proud to
                                            announce the promotions of Jerry Boat, Ryan...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-second-fire-protection-repairs-task-order')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image1-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image1-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Second Fire Protec...</h2>
                                        <div class="post-excerpt">Alticor Inc Services has been awarded another task
                                            order award through the Facilities Repair & Renewal...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-wins-asse-large-contractor-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image7-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image7-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins ASSE Large Contractor...</h2>
                                        <div class="post-excerpt">Alticor Inc’ Pacific District was recently awarded
                                            first place in the Large Contractor category at the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.william-p-hobby-airport-project-wins-landmark-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image2-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image2-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">William P. Hobby Airport Project Wins La...</h2>
                                        <div class="post-excerpt">Alticor Inc was honored recently when the
                                            international concourse project at William P. Hobby Airport was...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-supports-safety-week-2016')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image3-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image3-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Supports Safety Week 2016</h2>
                                        <div class="post-excerpt">Alticor Inc is among more than 50 national and
                                            global construction firms who have joined forces...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-demolishes-former-nasa-building')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image8-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image8-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Demolishes Former NASA Bui...</h2>
                                        <div class="post-excerpt">Alticor Inc recently made a mark in history by
                                            demolishing a former NASA building located at...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-turns-lax-t1-west-terminal')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image9-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image9-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Turns Over LAX T1 West Ter...</h2>
                                        <div class="post-excerpt">Alticor Inc has officially turned over the West
                                            Terminal portion of the Los Angeles International Airport...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-fire-protection-repairs-task-order-little-rock-afb')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image4-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image4-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Fire Protection Re...</h2>
                                        <div class="post-excerpt">Alticor Inc Services is pleased to announce the
                                            award of their first task order issued through...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.work-continues-orlando-international-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image5-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image5-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Work Continues at Orlando International ...</h2>
                                        <div class="post-excerpt">The future of Orlando International Airport is
                                            really starting to take shape. Recent milestones include the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.yolo-superior-courthouse-earns-leed-silver-certification')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image6-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image6-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Yolo Superior Courthouse Earns LEED Silv...</h2>
                                        <div class="post-excerpt">Alticor Inc’ Yolo Superior Courthouse in Woodland,
                                            California, recently achieved LEED Silver Certification.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-wins-agc-alliant-build-america-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image7-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image7-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins AGC Alliant Build Ame...</h2>
                                        <div class="post-excerpt">Alticor Inc’ Love Field Modernization Program (LFMP)
                                            was selected as the AGC Alliant Build America 2016...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.university-arizona-cancer-center-team-receives-red-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image8-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image8-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">University of Arizona Cancer Center Team...</h2>
                                        <div class="post-excerpt">Alticor Inc’ University of Arizona Cancer Center
                                            project team received the award for Best Healthcare Project...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.slac-susb-earns-leed-gold-certification')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image9-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image9-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">SLAC SUSB Earns LEED Gold Certification</h2>
                                        <div class="post-excerpt">Alticor Inc’ Stanford Linear Accelerator Science and
                                            User Support Building (SLAC SUSB) in Menlo Park, California,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-abia-team-wins-outstanding-construction-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image10-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image10-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc ABIA Team Wins Outstanding...</h2>
                                        <div class="post-excerpt">Congratulations to the Austin-Bergstrom
                                            International Airport Terminal East Infill project (ABIA TEIP) team for
                                            winning the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-supports-brown-santa-program')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image10-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image10-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Supports Brown Santa Program</h2>
                                        <div class="post-excerpt">In the spirit of Christmas, Alticor Inc continues
                                            the tradition of participating in the Travis County...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-design-partners-selected-sharp-chula-vista-medical-center-ocean-view-tower')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image11-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image11-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc and Design Partners Select...</h2>
                                        <div class="post-excerpt">Sharp Chula Vista Medical Center has announced the
                                            selection of Alticor Inc, SmithGroupJJR and AVRP Studios...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-cmar-contract-austin-bergstrom-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image12-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image12-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded CMAR Contract at A...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded a Construction
                                            Manager-at-Risk contract for the concessions build-out at Austin-Bergstrom
                                            International Airport...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-wins-design-build-project-year-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image13-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image13-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins Design-Build Project ...</h2>
                                        <div class="post-excerpt">The Design-Build Institute of America (DBIA) has
                                            recognized Alticor Inc with the Design-Build Project of the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-breaks-ground-denver-health-site')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image14-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image14-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Breaks Ground at Denver He...</h2>
                                        <div class="post-excerpt">On Thursday, October 15, ceremonial shovels hit the
                                            dirt at the new Denver Health Support Services...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-design-build-idiq-contract')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image15-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image15-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Design-Build IDIQ ...</h2>
                                        <div class="post-excerpt">Alticor Inc Services was awarded a Design-Build
                                            Indefinite Delivery/Indefinite Quantity (IDIQ) contract with the Wyoming
                                            National...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-federal-building-project-wins-multiple-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image16-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image16-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Federal Building Project W...</h2>
                                        <div class="post-excerpt">In January of 2012, the U.S. General Services
                                            Administration selected Alticor Inc/Gensler as the Design-Build Team...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-mlpoe-project-receives-two-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image17-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image17-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ MLPOE Project Receives Tw...</h2>
                                        <div class="post-excerpt">Alticor Inc’ Mariposa Land Port of Entry project in
                                            Nogales, Arizona, was recently awarded another two...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-university-medical-center-expansion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image18-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image18-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded University Medical...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded the Banner University
                                            Medical Center North Campus Expansion project in Tucson, Arizona.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-completes-first-project-marine-corps-base-hawaii')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image19-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image19-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Completes First Project at...</h2>
                                        <div class="post-excerpt">Alticor Inc is proud to announce the completion of
                                            P-864 MALS 24 Aircraft Maintenance Expansion, its...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-increase-utility-capacity-fort-meade')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc to Increase Utility Capaci...</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded a single task order
                                            contract (SATOC) for design and construction at...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-turns-new-gate-lax')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image20-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image20-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Turns Over New Gate at LAX</h2>
                                        <div class="post-excerpt">Last week, the Alticor Inc Southwest Airlines (SWA)
                                            Terminal 1 (T1) team at LAX completed the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-supports-big-brother-big-sister')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image21-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image21-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Supports Big Brother Big S...</h2>
                                        <div class="post-excerpt">Alticor Inc’ Pacific District supported the Big
                                            Brother Big Sister Revenge of the Nerds Bowl For...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-serves-maui-community')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image22-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image22-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Serves Maui Community</h2>
                                        <div class="post-excerpt">Alticor Inc’ Pacific District project teams combined
                                            their efforts to make a lasting impact on the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-breaks-ground-uc-san-diego-student-housing')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image23-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image23-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Breaks Ground for UC San D...</h2>
                                        <div class="post-excerpt">The University of California, San Diego hosted a
                                            groundbreaking ceremony for the new East Campus Graduate...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-helping-bring-residence-inn-marriott-johns-hopkins')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image12-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image12-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Helping to Bring Residence...</h2>
                                        <div class="post-excerpt">Alticor Inc and Gensler are teaming up to bring
                                            Baltimore, Maryland, its newest hotel. The Marriott...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-contract-national-historic-civil-engineering-landmark')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image13-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image13-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Contract at Nation...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded a contract to upgrade the
                                            fire suppression and ventilation systems at Red...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-completes-advanced-cancer-center')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image24-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image24-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Completes Advanced Cancer ...</h2>
                                        <div class="post-excerpt">Alticor Inc’ University of Arizona Cancer Center
                                            team received final completion!
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-kailua-regional-wastewater-treatment-plant')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image25-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image25-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Kailua Regional Wa...</h2>
                                        <div class="post-excerpt">Alticor Inc was recently awarded the Kailua Regional
                                            Wastewater Treatment Plant TIPS and Headworks project located...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-donates-school-supplies')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image26-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image26-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Donates School Supplies</h2>
                                        <div class="post-excerpt">Alticor Inc’ ENR Phase 2 team engaged in the spirit
                                            of back-to-school by giving supplies to...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-helps-build-911-memorial-kennedy-space-center')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image14-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image14-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Hensel Helps Build 9/11 Memorial at Kenn...</h2>
                                        <div class="post-excerpt">The Kennedy Space Center (KSC) Fire Department
                                            hosted a ceremony on their property for a 9/11...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.citywalk-wins-excellence-construction-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image27-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image27-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">CityWalk Wins Excellence in Construction...</h2>
                                        <div class="post-excerpt">Alticor Inc is proud to announce that in early Au,
                                            the Southeast District received a prestigious...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.bethune-cookman-team-gives-back')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/image28-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/image28-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">BETHUNE-COOKMAN TEAM GIVES BACK</h2>
                                        <div class="post-excerpt">The Alticor Inc Bethune-Cookman Student Housing
                                            Project Team spent the day volunteering at the Volusia County...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-slac-tso-contract')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/2012076-Social_Security_Administration_National_Support_Center_SSA_NSC-005_ExtraLarge_605_370-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/2012076-Social_Security_Administration_National_Support_Center_SSA_NSC-005_ExtraLarge_605_370-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded SLAC TSO Contract</h2>
                                        <div class="post-excerpt">The Stanford Linear Accelerator Center (SLAC) in
                                            Menlo Park, California, has awarded to Alticor Inc’ Services...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-pena-station-phase-1')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Pena_Station_Aviation_Station-cropped2_605_399-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Pena_Station_Aviation_Station-cropped2_605_399-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Pena Station Phase 1</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded Pena Station Phase 1
                                            infrastructure project located in Denver, Colorado. The...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.environment-natural-resources-phase-2-enr2-reaches-substantial-completion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/ENR2_605_339-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/ENR2_605_339-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Environment and Natural Resources Phase ...</h2>
                                        <div class="post-excerpt">The Alticor Inc ENR2 project is a classroom and
                                            office building at the University of Arizona...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-named-2015-large-general-contractor-year-associated-subcontractors-alliance')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/COMBO_605_605-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/COMBO_605_605-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Named 2015 Large General C...</h2>
                                        <div class="post-excerpt">On Wednesday, July 22, 2015, Alticor Inc was named
                                            the Large General Contractor of the Year...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-coming-national-mall')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/HP_On_the_Mall_-_Twitter_Post_605_365-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/HP_On_the_Mall_-_Twitter_Post_605_365-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc is Coming to the National ...</h2>
                                        <div class="post-excerpt">Alticor Inc' Mid Atlantic District office was
                                            recently awarded Phase 1 of the Constitution Gardens rehabilitation...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.uci-mesa-court-tops')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/UCI2_605_454-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/UCI2_605_454-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">UCI Mesa Court Tops Out!</h2>
                                        <div class="post-excerpt">On Tuesday, July 21, 2015, the UC Irvine (UCI) Mesa
                                            Court Expansion Team celebrated their topping...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.investing-in-the-community')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Group_Photo_Adjusted.jpg_605_379-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Group_Photo_Adjusted.jpg_605_379-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Investing in the Community</h2>
                                        <div class="post-excerpt">The Alticor Inc/SmithGroupJJR/AVRP Studios team
                                            joined with various groups of the Chula Vista community to remove...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.star-alliance-lounge-voted-best-alliance-lounge-skytrax')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Star_Alliance_605_454-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Star_Alliance_605_454-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">The Star Alliance Lounge voted Best Alli...</h2>
                                        <div class="post-excerpt">Inspired by contemporary interpretation of modernist
                                            LA architecture of the 1950s and 1960s, the premium customer...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-boys-girls-clubs-weld-county')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Boys_and_girls_605_296.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Boys_and_girls_605_296-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Boys &#038; Girls Clubs of...</h2>
                                        <div class="post-excerpt">Alticor Inc is committed to supporting the
                                            communities in which they live and work.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.san-ysidro-achieves-leed-platinum')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/MikkiPiper_San_Ysidro_43_605_359-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/MikkiPiper_San_Ysidro_43_605_359-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">San Ysidro Achieves LEED Platinum</h2>
                                        <div class="post-excerpt">Alticor Inc San Ysidro U.S. Land Port of Entry Phase
                                            1B (SYLPOE) exceeded GSA goals and...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-donates-3000-pounds-food')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/DSC_0341_605_907-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/DSC_0341_605_907-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Donates 3000+ Pounds of Food</h2>
                                        <div class="post-excerpt">Alticor Inc donated 3,701 pounds of food for the
                                            Second Harvest Food Bank’s Stand Up for...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-supports-glaaacc')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Hensel_Phelps_GLAAACC_04.02.15_605_388-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Hensel_Phelps_GLAAACC_04.02.15_605_388-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Supports GLAAACC</h2>
                                        <div class="post-excerpt">The Greater Los Angeles African-American Chamber of
                                            Commerce (GLAAACC) recently hosted their 22nd Annual Economic Awards...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.denvers-union-tower-west-breaks-ground')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Union_Tower_West_605_430-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Union_Tower_West_605_430-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Denver’s Union Tower West Breaks Ground</h2>
                                        <div class="post-excerpt">Alticor Inc marked the groundbreaking for the
                                            booming market of Denver’s newest project, Union Tower West.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-renovates-royal-hawaiian')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Royal_Hawaiian.png') }});">
                                <img width="220" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Royal_Hawaiian-220x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Renovates the Royal Hawaiian</h2>
                                        <div class="post-excerpt">Alticor Inc is pleased to announce the completion of
                                            renovations at the Royal Hawaiian's exclusive Beach...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-cbic-topping-ceremony-william-p-hobby-international-expansion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2015/01/Hobby_1_960_605_135-1-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2015/01/Hobby_1_960_605_135-1-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc | CBIC Topping Out Ceremon...</h2>
                                        <div class="post-excerpt">The Alticor Inc - HP | CBIC Joint Venture, Southwest
                                            Airlines and over 400 attendees celebrated...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.armed-forces-retirement-home-new-commons-healthcare-center-achieves-leed-platinum-certification')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Armed Forces Retirement Home New Commons...</h2>
                                        <div class="post-excerpt">The Armed Forces Retirement Home New Commons and
                                            Healthcare Center, the Scott Building project in Washington,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.agc-california-recognizes-hensel-phelps-safety-personnel-performance')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">AGC of California Recognizes Hensel Phel...</h2>
                                        <div class="post-excerpt">The Associated General Contractors of California
                                            Recognized Alticor Inc for two prestigious awards at the Fall...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a
                            href="{{route('about.student-produces-video-documentary-hensel-phelps-summer-internship-experience')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2014/10/image004.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2014/10/image004-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Student Produces Video Documentary of He...</h2>
                                        <div class="post-excerpt">Alticor Inc is fortunate to have some of this
                                            country’s brightest young Construction Management students participate...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-wins-design-build-national-award-excellence-healthcare')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins Design-Build National...</h2>
                                        <div class="post-excerpt">Alticor Inc proudly acknowledges the California
                                            Health Care Facility in Stockton, California as a National Award...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.east-county-hall-justice-breaks-ground-dublin-ca')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/M.b_Site_Layout_rendering_605_340-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/M.b_Site_Layout_rendering_605_340-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">East County Hall of Justice Breaks Groun...</h2>
                                        <div class="post-excerpt">Alticor Inc proudly participated in the
                                            groundbreaking of the East County Hall of Justice on September...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.air-force-technical-application-center-receives-national-design-build-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/2014_airforcetechnical_lg_605_485-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/2014_airforcetechnical_lg_605_485-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Air Force Technical Application Center R...</h2>
                                        <div class="post-excerpt">The Alticor Inc led Design-Build received the
                                            Design-Build Institute of America, Civic Buildings, National Design-Build
                                            Award...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-tops-kaiser-permanente-san-diego-hospital-medical-center')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/20140925_KPSD_Topping_Out.jpg_605_403-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/20140925_KPSD_Topping_Out.jpg_605_403-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Tops Out Kaiser Permanente...</h2>
                                        <div class="post-excerpt">Alticor Inc was pleased to participate in the
                                            structural steel topping out ceremony with the project...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-southwest-airlines-team-kicks-off-lax-terminal-1-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/SW_LAX_ground_605_454-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/SW_LAX_ground_605_454-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Southwest Airlines Team Ki...</h2>
                                        <div class="post-excerpt">Alticor Inc is proud to participate in the
                                            Groundbreaking Ceremony for the Southwest Airlines.Terminal 1
                                            Modernization...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-metropolitan-washington-airports-authority-mwaa-contract')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Metropolitan Washi...</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded the Metropolitan
                                            Washington Airports Authority’s (MWAA) Rail Yard and Maintenance Facility...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-new-nasa-headquarters-building')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded New NASA Headquart...</h2>
                                        <div class="post-excerpt">Hense Phelps has been awarded a $64.8 million
                                            contract for NASA’s Kennedy Space Center Central Campus...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-first-project-konterra-realty-boston-properties')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ Awarded First Project wit...</h2>
                                        <div class="post-excerpt">Alticor Inc’ Mid Atlantic District has been awarded
                                            their first project with Konterra Realty and Boston...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-county-stanislaus-public-safety-expansion-projects-one-three')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/County_of_Stanislaus_Rendering_web_605_303.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/County_of_Stanislaus_Rendering_web_605_303-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded the County of Stan...</h2>
                                        <div class="post-excerpt">Alticor Inc is proud to announce the beginning of a
                                            strong partnership with the County of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-wmata-andrews-federal-bus-garage')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/rev_perspectives-no_border_web_605_234.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/rev_perspectives-no_border_web_605_234-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded WMATA Andrews Fede...</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded the $132 Million,
                                            335,000 SF design-build Andrews Federal Bus Garage by...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-recognized-two-critical-healthcare-facilities')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Hospitals2_605_340-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Hospitals2_605_340-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Recognized for Two Critica...</h2>
                                        <div class="post-excerpt">Alticor Inc is honored to receive two very distinct
                                            and prestigious awards by their peers at...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-honored-navfac-safety-awards-recognition-star')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Honored With NAVFAC Safety...</h2>
                                        <div class="post-excerpt">Alticor Inc received the NAVFAC Safety Through
                                            Awards and Recognition (STAR) Program Letter of Recognition for...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.university-california-irvine-awards-hensel-phelps-design-build-team-92-million-student-housing')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/UCI_Student_Hosuing_605_339-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/UCI_Student_Hosuing_605_339-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">University of California, Irvine Awards ...</h2>
                                        <div class="post-excerpt">Alticor Inc, in partnership with architect Mithun is
                                            proud to announce our selection by the University...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-245-million-joint-operations-center')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded $245 Million Joint...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded the construction of a $245
                                            million multi-story Joint Operations Center (JOC) along...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-top-25-best-corporations-veteran-owned-businesses')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc &#8211; Top 25 Best Corpor...</h2>
                                        <div class="post-excerpt">The National Veteran-Owned Business Association
                                            (NaVOBA) and Vetrepreneur magazine recognized Alticor Inc as a Top 25...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-contract-new-air-traffic-control-tower-tucson-international-airport')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Contract for New A...</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded a construction contract
                                            for the Airport Traffic Control Tower and associated...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-facilities-equipment-maintenance-consulting-services-contract')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Facilities &#038; ...</h2>
                                        <div class="post-excerpt">Alticor Inc Services Group has been awarded the
                                            Facilities & Equipment Maintenance Consulting Services contract for...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-nasa-contract-modify-kennedys-vehicle-assembly-building-high-bay-3')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/nasa-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/nasa-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded NASA Contract to M...</h2>
                                        <div class="post-excerpt">NASA has awarded Alticor Inc a contract to modify
                                            High Bay 3 in the Vehicle Assembly...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-wins-first-place-agc-america-safety-excellence-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2014/03/Hensel-Phelps_Plan-Build-Manage_LOGO-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2014/03/Hensel-Phelps_Plan-Build-Manage_LOGO-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Wins First Place in AGC of...</h2>
                                        <div class="post-excerpt">AGC of America awarded Alticor Inc first place in
                                            the Building Division, Over 4 Million Work...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-ground-breaking-kaiser-permanentes-new-san-diego-central-hospital')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2014/02/KPSD_Groundbreaking_web-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2014/02/KPSD_Groundbreaking_web-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Ground Breaking on Kaiser ...</h2>
                                        <div class="post-excerpt">Alticor Inc is proud to work with Kaiser Permanente,
                                            CO Architects and the entire design and...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-earns-national-diversity-excellence-award-associated-builders-contractors')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/EIC-Diversity-Recipient-Logo.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/EIC-Diversity-Recipient-Logo-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Earns National Diversity E...</h2>
                                        <div class="post-excerpt">Associated Builders and Contractors (ABC) announced
                                            that Alticor Inc showed a commitment to diversity that has...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-achieves-leed-platinum-navys-homeport-ashore-initiative')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/homeport_1_605_403-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/homeport_1_605_403-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Achieves LEED Platinum for...</h2>
                                        <div class="post-excerpt">Alticor Inc' design-build Homeport Ashore Bachelor
                                            Enlisted Quarters project at Naval Base San Diego received LEED...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-sfo-terminal-3-boarding-area-e-video')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Screen_Shot_2014-01-29_at_9.43.59_AM_605_339-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Screen_Shot_2014-01-29_at_9.43.59_AM_605_339-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc SFO Terminal 3, Boarding A...</h2>
                                        <div class="post-excerpt">Alticor Inc presents the SFO Terminal 3, Boarding
                                            Area E stakeholder video.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.sfo-unveils-hensel-phelps-terminal-3-boarding-area-e-design-build-renovation')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">SFO Unveils Alticor Inc Terminal 3, Bo...</h2>
                                        <div class="post-excerpt">SFO unveiled the newly renovated Boarding Area E in
                                            Terminal 3, a stylish and sophisticated state-of-the-art...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-navy-federal-credit-unions-pensacola-expansion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Navy Federal Credi...</h2>
                                        <div class="post-excerpt">Alticor Inc' Southeast District was awarded the
                                            Phase 1 Pensacola Campus Expansion for Navy Federal Credit...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.hensel-phelps-board-directors-key-personnel-announcement')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Board of Directors Key Per...</h2>
                                        <div class="post-excerpt">The Alticor Inc Board of Directors announced the
                                            following promotions, effective January 1, 2014: Brad D....
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-delivers-air-new-zealand-top-10-premium-airport-lounge-2013')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/LAX_605_371-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/LAX_605_371-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Delivers The Air New Zeala...</h2>
                                        <div class="post-excerpt">Alticor Inc' new Air New Zealand ‘Star Alliance’
                                            Lounge at the Thomas Bradley International Terminal at...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-presented-platinum-step-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/DKR_Platinum_Step_Award.jpg-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/DKR_Platinum_Step_Award.jpg-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Presented Platinum STEP Award</h2>
                                        <div class="post-excerpt">Alticor Inc was presented the Platinum STEP Award
                                            for their outstanding safety record for the Darrel...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-services-group-delivers-award-winning-performance-echostar-broadcasting-corp')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2013/11/Screenshot_2013-11-11_09.20.15-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2013/11/Screenshot_2013-11-11_09.20.15-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Services Group Delivers Aw...</h2>
                                        <div class="post-excerpt">The Alticor Inc Services Group successfully
                                            delivered for EchoStar Broadcasting Corporation, a Alticor Inc repeat
                                            client,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-receives-two-agc-ace-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2013/11/ACE2013-Web_605_503-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2013/11/ACE2013-Web_605_503-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives Two AGC ACE Awards</h2>
                                        <div class="post-excerpt">Alticor Inc has received two AGC of Colorado Award
                                            for Construction Excellence (ACE) awards in the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-2013-dbia-national-design-build-award-benner-township-pa-project-112013')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives 2013 DBIA Nationa...</h2>
                                        <div class="post-excerpt">Alticor Inc New Correctional Facility for SCI Benner
                                            Township project receives the 2013 Correctional Facilities, National...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-2013-dbia-national-design-build-award-camp-pendleton-ca-project-112013')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives 2013 DBIA Nationa...</h2>
                                        <div class="post-excerpt">Alticor Inc USMC Bachelor Enlisted Quarters, Package
                                            8 project receives the 2013 Civic Buildings, National Design-Build...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-2013-dbia-national-design-build-award-san-antonio-texas-project-112013')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives 2013 DBIA Nationa...</h2>
                                        <div class="post-excerpt">Alticor Inc San Antonio Public Safety Headquarters
                                            project receivies the 2013 Civic Buildings, National Design-Build Award...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-2013-dbia-national-design-build-award-cheyenne-wyoming-project-112013')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives 2013 DBIA Nationa...</h2>
                                        <div class="post-excerpt">Alticor Inc C-5 - 159th Readiness Center project
                                            receives the 2013 Civic Buildings, National Design-Build Award...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-2013-dbia-design-build-award-twentynine-palms-california-project-112013')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives 2013 DBIA Design-...</h2>
                                        <div class="post-excerpt">Alticor Inc Twentynine Palms North Mainside
                                            Infrastructure project receives the 2013 Transportation Projects,
                                            Design-Build Honor Award...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-5-dbia-awards-exemplary-collaboration-integration-112013')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives 5 DBIA Awards for...</h2>
                                        <div class="post-excerpt">Alticor Inc sweeps the Design Build Institute of
                                            America (DBIA) 2013 Design-Build Project Awards program with...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-receives-two-safety-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/66_Steve_Phillips.jpg.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/66_Steve_Phillips.jpg-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives Two Safety Awards</h2>
                                        <div class="post-excerpt">Alticor Inc receives two AGC of Calfornia safety
                                            awards. Alticor Inc’ Steve Phillips has been awarded...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.aci-presents-distinguished-achievement-award-hensel-phelps')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/ACI_Distinguished_Achievement_Award-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/ACI_Distinguished_Achievement_Award-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">ACI Presents Distinguished Achievement A...</h2>
                                        <div class="post-excerpt">The American Concrete Institute (ACI) presented its
                                            Distinguished Achievement Award to Alticor Inc at the ACI...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-launches-website-video-112013')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Launches Website and Video...</h2>
                                        <div class="post-excerpt">Alticor Inc is pleased to announce the release of
                                            their new website henselphelps.com. Its design includes...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-stanford-linear-accelerator-complex-slac-national-accelerator-laboratory')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/SLAC.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/SLAC-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Stanford Linear Ac...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded the Stanford Linear
                                            Accelerator Complex (SLAC) National Accelerator Laboratory - Science and...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-university-texas-austin-dell-medical-school')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/UT_Austin_Dell_Medical_School_-_Project_Award_-_October_2013_605_351-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/UT_Austin_Dell_Medical_School_-_Project_Award_-_October_2013_605_351-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded The University of ...</h2>
                                        <div class="post-excerpt">Alticor Inc was recently awarded The University of
                                            Texas at Austin Dell Medical School. The Dell...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hesnel-phelps-celebrates-new-star-lax-alliance-premier-lounge')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Star_Alliance_605_340-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Star_Alliance_605_340-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Celebrates New Star LAX Al...</h2>
                                        <div class="post-excerpt">Star Alliance celebrated the opening of its new
                                            premier lounge in Bradley West International Terminal with...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-turn-key-power-consortium-wins-army-corps-wind-technology-renewable-energy-matoc')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Turn Key Power Consortium ...</h2>
                                        <div class="post-excerpt">Boulder-based juwi Wind, LLC and Greeley,
                                            Colorado-based Alticor Inc, leading members of the Turn Key Power...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.kaiser-permanente-celebrates-anniversary-hensel-phelps-delivered-anaheim-medical-center')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Kaiser_Anaheim_605_303.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Kaiser_Anaheim_605_303-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Kaiser Permanente Celebrates Anniversary...</h2>
                                        <div class="post-excerpt">Kaiser Permanente celebrated their one year
                                            anniversary of the Alticor Inc delivered Anaheim Medical Center opening....
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-dedicates-fourth-house-wounded-warrior-family')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Dedicates Fourth House to ...</h2>
                                        <div class="post-excerpt">Alticor Inc participated for its fourth year in the
                                            West Orange Habitat for Humanity’s “Home at...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-granite-hangar-joint-venture-hangar-7-ribbon-cutting-ceremony-san-diego-california')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Hangar_7_605_405-480x320.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Hangar_7_605_405-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Granite Hangar Joint Ventu...</h2>
                                        <div class="post-excerpt">The Alticor Inc Granite Joint Venture Team held the
                                            ribbon cutting ceremony for the new MV-22...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.san-ysidro-land-port-entry-hensel-phelps-substantial-completion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2013/09/SYLPOE.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2013/09/SYLPOE-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">San Ysidro Land Port of Entry &#8211; HE...</h2>
                                        <div class="post-excerpt">Alticor Inc received Substantial Completion for the
                                            North Bound Primary Lanes and Inspection Booths at the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-combat-systems-engineering-development-site-building-contract')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Combat Systems Eng...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded a contract with the
                                            Department of the Navy for the P-237 Design-Bid-Build...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-manage-group-supports-nrol-65-launch-mission')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/NROL-65_605_340-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/NROL-65_605_340-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Manage Group Supports NROL...</h2>
                                        <div class="post-excerpt">The Alticor Inc Manage Group provided mission
                                            support services for the NROL-65 Launch Mission at Vandenberg...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-2400-nueces-celebrates-grand-opening')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/BWI_Checkpoint_605_454-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/BWI_Checkpoint_605_454-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc 2400 Nueces Celebrates Gra...</h2>
                                        <div class="post-excerpt">Alticor Inc 400 Nueces project celebrated its Grand
                                            Opening on August 1, 2013. The 16-story student...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-supports-water-projects-niger')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Supports Water Project(s) ...</h2>
                                        <div class="post-excerpt">Alticor Inc personnel in the Southeast District have
                                            raised funds to provide the seed water well...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-receives-minority-contractors-association-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives Minority Contract...</h2>
                                        <div class="post-excerpt">Alticor Inc receives an award from the Maryland
                                            Minority Contractors Association and presented by the President...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-washington-d-c-marriott-marquis-hotel-milestone')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2013/08/Marriott_Marquis_Sculptor.png') }});">
                                <img width="288" height="162"
                                    src="{{ asset('wp-content/uploads/2013/08/Marriott_Marquis_Sculptor.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Washington D.C. Marriott M...</h2>
                                        <div class="post-excerpt">Alticor Inc Marriott Marquis Hotel project in
                                            Washington D.C. has reached another milestone, the placement of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a
                            href="{{route('about.hensel-phelps-board-announces-promotion-laird-heikens-manager-work-procurement')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Board Announces Promotion ...</h2>
                                        <div class="post-excerpt">The Alticor Inc Board of Directors announces the
                                            promotion of Laird Heikens to Manager of Work...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-5-awards-exemplary-collaboration-integration')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives 5 Awards for Exem...</h2>
                                        <div class="post-excerpt">Alticor Inc sweeps the Design-Build Institute of
                                            America 2013 Design-Build Project Awards program with 5 awards...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-awarded-2013-dbia-design-build-award-twentynine-palms-california-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded 2013 DBIA Design-B...</h2>
                                        <div class="post-excerpt">Alticor Inc Twentynine Palms North Mainside
                                            Infrastructure project receives the 2013 Transportation Projects,
                                            Design-Build Honor Award...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-awarded-2013-dbia-national-design-build-award-benner-township-pa-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded 2013 DBIA National...</h2>
                                        <div class="post-excerpt">Alticor Inc New Correctional Facility for SCI Benner
                                            Township project receives the 2013 Correctional Facilities, National...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-awarded-2013-dbia-national-design-build-award-camp-pendleton-california-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded 2013 DBIA National...</h2>
                                        <div class="post-excerpt">Alticor Inc USMC Bachelor Enlisted Quarters, Package
                                            8 project receives the 2013 Civic Buildings, National Design-Build...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-awarded-2013-dbia-national-design-build-award-san-antonio-texas-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded 2013 DBIA National...</h2>
                                        <div class="post-excerpt">Alticor Inc San Antonio Public Safety Headquarters
                                            project receivies the 2013 Civic Buildings, National Design-Build Award...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-awarded-2013-dbia-national-design-build-award-cheyenne-wyoming-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded 2013 DBIA National...</h2>
                                        <div class="post-excerpt">Alticor Inc C-5 - 159th Readiness Center project
                                            receives the 2013 Civic Buildings, National Design-Build Award...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-nolan-building-garage-fort-belvoir-virginia')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded The Nolan Building...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded a contract with the U.S.
                                            Army Corps of Engineers (USACE) Baltimore District...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-presents-7th-annual-bim-features-conference-usc-school-architecture')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/MEO_at_USC.jpg_605_454-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/MEO_at_USC.jpg_605_454-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Presents at the 7th Annual...</h2>
                                        <div class="post-excerpt">The Alticor Inc team from the Kaiser Permanente San
                                            Diego Medical Center project discussed with the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box community">
                        <a href="{{route('about.hensel-phelps-supports-ace-mentor-program-america')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Community </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Supports the ACE Mentor Pr...</h2>
                                        <div class="post-excerpt">Alticor Inc is proud to support the ACE Mentor
                                            Program of America as an industry leader...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-new-washington-marriott-marquis-hotel-profiled-modern-steel-construction')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc New Washington Marriott Ma...</h2>
                                        <div class="post-excerpt">The Alticor Inc New Washington Marriott Marquis
                                            Hotel has been profiled by Modern Steel Construction for...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-builds-worlds-tallest-airport-control-towers')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Builds World’s Tallest Air...</h2>
                                        <div class="post-excerpt">McGraw-Hill Construction's Engineering News Record
                                            has published a list of the 10 Tallest Airport Control Towers...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.first-leed-gold-certification-federal-bureau-prisons-project-delivered-hensel-phelps')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">First LEED Gold Certification for Federa...</h2>
                                        <div class="post-excerpt">Alticor Inc' Hazelton Federal Correctional
                                            Institution is the first Federal Bureau of Prisons project to earn...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-tops-steel-hoag-health-center')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Hoag_Topping_605_452-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Hoag_Topping_605_452-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Tops Out Steel at Hoag Hea...</h2>
                                        <div class="post-excerpt">Alticor Inc held a structural steel topping out
                                            ceremony celebrating the successful completion of the structural...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-navfac-southwest-rack-another-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/APWA_John_Finn_Hall_Award_presentation.png') }});">
                                <img width="284" height="182"
                                    src="{{ asset('wp-content/uploads/2017/05/APWA_John_Finn_Hall_Award_presentation.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc and NAVFAC Southwest Rack ...</h2>
                                        <div class="post-excerpt">Alticor Inc and NAVFAC Southwest Win Project of the
                                            Year for $64.7 million John Finn Hall...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-recognized-award-excellence-green-building')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Recognized with Award of E...</h2>
                                        <div class="post-excerpt">The Los Angeles Building Council (LABC) awarded
                                            Alticor Inc the “Green Building” Award of Excellence at...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.hensel-phelps-board-directors-announce-promotion-darren-leary')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Darren_Leary.jpg.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Darren_Leary.jpg-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Board of Directors Announc...</h2>
                                        <div class="post-excerpt">The Board of Directors announces the promotion of
                                            Darren Leary to General Superintendent.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-national-safety-award-zero-lost-workday-case-incident-rate')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/2012_AGC_NASA_Award_WEB.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/2012_AGC_NASA_Award_WEB-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives National Safety A...</h2>
                                        <div class="post-excerpt">Alticor Inc receives The Associated General
                                            Contractors of America (AGC) National Award for Zero Lost Workday...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-receives-international-partnering-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives International Par...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded the prestigious 2013 Ruby
                                            Level John L. Martin Partnered Project of the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.partnership-continues-southwest-airlines-hensel-phelps-lax')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Partnership Continues Between Southwest ...</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded the Southwest Airlines
                                            Terminal 1 Renovation Project at Los Angeles International...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-united-states-courthouse-team-awarded-2013-excellence-partnering-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/Awardees_Courthouse.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/Awardees_Courthouse-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc United States Courthouse T...</h2>
                                        <div class="post-excerpt">Alticor Inc was honored to receive the 2013
                                            Excellence in Partnering Award given by the Associated...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-bwi-team-achieves-airport-schedule-milestone')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/BWI_Checkpoint_605_454-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/BWI_Checkpoint_605_454-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc BWI Team Achieves Airport ...</h2>
                                        <div class="post-excerpt">Alticor Inc BWI Team Achieves Airport Schedule
                                            Milestone.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.ribbon-cutting-ceremony-hensel-phelps-new-high-altitude-aviation-training-site-haats-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/HAATS_Flag_Posting_605_403-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/HAATS_Flag_Posting_605_403-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Ribbon-cutting Ceremony for Alticor Inc...</h2>
                                        <div class="post-excerpt">Alticor Inc celebrated the dedication and
                                            ribbon-cutting of the new High Altitude Aviation Training Site (HAATS)...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-national-zoo-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded National Zoo Project</h2>
                                        <div class="post-excerpt">Alticor Inc Awarded the Design-Bid-Build National
                                            Zoological Parks Retaining Wall And Renovations to the General Services...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a
                            href="{{route('about.board-directors-promotes-jim-pappas-northern-california-district-manager-vice-president')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Board of Directors promotes Jim Pappas t...</h2>
                                        <div class="post-excerpt">Alticor Inc Construction Co. Board of Directors
                                            promotes James (Jim) R. Pappas, Jr. to Northern California...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.dod-selects-hensel-phelps-blueforge-specialized-mentor-protege-program')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">DoD Selects Alticor Inc and BlueForge ...</h2>
                                        <div class="post-excerpt">Alticor Inc and BlueForge, LLC were recently
                                            selected by the Department of Defense (DoD) to participate...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hobby-airport-fis-terminal-contract-awarded-hensel-phelps-jv')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_Hobby_Airport_FIS_Terminal_605_150.jpg') }});">
                                <img width="311" height="150"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_Hobby_Airport_FIS_Terminal_605_150-311x150.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Hobby Airport FIS Terminal Contract Awar...</h2>
                                        <div class="post-excerpt">Alticor Inc teamed with CBIC Construction &
                                            Development as a Joint Venture and was awarded Hobby...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-design-build-contract-dss-facility-addition-quantico')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Design-Build Contr...</h2>
                                        <div class="post-excerpt">Alticor Inc and their design partner Fentress
                                            Architects was awarded a design-build contract with NAVFAC Washington...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.hensel-phelps-board-directors-announces-gustine-promotion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ Board of Directors Announ...</h2>
                                        <div class="post-excerpt">Alticor Inc' Board of Directors promotes Shannon M.
                                            Gustine, LEED AP BD+C to Operations Manager.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.hensel-phelps-board-directors-announces-shelby-promotion')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ Board of Directors Announ...</h2>
                                        <div class="post-excerpt">Alticor Inc' Board of Directors promotes Scott R.
                                            Shelby, LEED AP to Operations Manager.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-chosen-cmar-south-airport-automated-people-mover-complex-orlando')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Chosen as CMAR for South A...</h2>
                                        <div class="post-excerpt">Greater Orlando Aviation Authority (GOAA) has
                                            selected Alticor Inc as the Construction Manager at Risk for...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-guam-high-school-renovation-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Guam High School R...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded the Okkodo High School
                                            Expansion in Dededo, Guam.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-phx-sky-train-stage-1-project-honored-abcs-pyramid-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ PHX Sky Train Stage 1 Pro...</h2>
                                        <div class="post-excerpt">Associated Builders and Contractors (ABC) announced
                                            that Alticor Inc’ work on the Phoenix Sky Harbor (PHX)...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.high-performance-computing-center-awarded-hensel-phelps-jv')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">High Performance Computing Center Awarde...</h2>
                                        <div class="post-excerpt">The U.S. Army Corps of Engineers - Baltimore
                                            District has awarded the Alticor Inc/Kiewit Joint Venture...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.abc-honors-hensel-phelps-national-diversity-excellence-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_ABC_Honors_HP_with_National_Diversity_Exc_Award_605_405-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_ABC_Honors_HP_with_National_Diversity_Exc_Award_605_405-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">ABC Honors Alticor Inc with National D...</h2>
                                        <div class="post-excerpt">Associated Builders and Contractors (ABC) announced
                                            that Alticor Inc showed a commitment to diversity that has...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-sponsors-entertainment-boots-n-business-luncheon-sixth-year')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Sponsors Entertainment for...</h2>
                                        <div class="post-excerpt">For the 6th year, Alticor Inc sponsors the
                                            Entertainment for the Denver Metro Chamber of Commerce...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box career">
                        <a href="{{route('about.hensel-phelps-board-directors-announces-key-personnel-promotions')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Career </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ Board of Directors Announ...</h2>
                                        <div class="post-excerpt">Alticor Inc&#8217; Board of Directors promotes Key
                                            Personnel to the following Positions: Executive Vice Presidents, Vice...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.major-milestone-air-force-base-one-month-early')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Major Milestone for Air Force Base One M...</h2>
                                        <div class="post-excerpt">Alticor Inc' Southern Group Military Family Housing
                                            Project has reached a major milestone with the completion...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.substantial-completion-received-high-desert-infrastructure-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_Substantial_Compl_Received_for_High_Desert_Infrastructure_Project-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_Substantial_Compl_Received_for_High_Desert_Infrastructure_Project-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Substantial Completion Received for High...</h2>
                                        <div class="post-excerpt">Alticor Inc has received Substantial Completion for
                                            the 29 Palms North Mainside Expansion project in the...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-receives-five-dbia-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives Five DBIA Awards</h2>
                                        <div class="post-excerpt">Alticor Inc received five 2012 DBIA awards at the
                                            National Conference.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-delivers-dallas-love-fields-terminal-2-ticket-hall')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_HP_Delivers_Dallas_Love_Fields_Terminal_2_Ticket_Hall.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_HP_Delivers_Dallas_Love_Fields_Terminal_2_Ticket_Hall-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Delivers Dallas Love Field...</h2>
                                        <div class="post-excerpt">Alticor Inc delivered the Love Field Modernization
                                            Program’s (LFMP) new Terminal 2 ticket hall and curbside...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-four-construction-excellence-industry-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_HP_Receives_Four-Collage_605_154.jpg') }});">
                                <img width="311" height="154"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_HP_Receives_Four-Collage_605_154-311x154.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives Four Construction...</h2>
                                        <div class="post-excerpt">Alticor Inc received four industry awards for
                                            construction excellence from the Association of General Contractors (AGC)...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-mentor-protege-partner-completes-fort-sam-houston-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_HP_Mentor_Protege_Partner_Completes_Ft_Sam_Houston_Project.jpg') }});">
                                <img width="311" height="166"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_HP_Mentor_Protege_Partner_Completes_Ft_Sam_Houston_Project-311x166.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ Mentor Protege Partner Co...</h2>
                                        <div class="post-excerpt">Supported by a longstanding mentor-protégé
                                            partnership with Alticor Inc, Haynes-Eaglin-Waters, LLP (HEW) recently
                                            announced completion of...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-renovation-project-upscale-hawaiian-resort')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Renovation Project...</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded a Construction
                                            Management contract for the renovation of the Hilton Grand...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.mountainview-project-awarded-hensel-phelps')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Mountainview Project Awarded to Hensel P...</h2>
                                        <div class="post-excerpt">Alticor Inc has been awarded a construction contract
                                            by the U.S. Army Corps of Engineers, Baltimore...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.hensel-phelps-hosts-anti-topping-ceremony-martin-luther-king-jr-medical-center-project')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_HP_Hosts_Anti-Topping_Out_Ceremony.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_HP_Hosts_Anti-Topping_Out_Ceremony-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Hosts “Anti-Topping Out Ce...</h2>
                                        <div class="post-excerpt">The Alticor Inc Martin Luther King, Jr. project team
                                            hosted a barbeque, awards ceremony, and site...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-kaiser-potrero-hill-medical-office-building-garage')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_Awarded_Kaiser_Potrero_Hill_MOB_and_Garage.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_Awarded_Kaiser_Potrero_Hill_MOB_and_Garage-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded the Kaiser Potrero...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded the Kaiser Potrero Hill
                                            Medical Office Building and Garage to be constructed...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.offutt-afb-contract-awarded')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Offutt AFB Contract Awarded</h2>
                                        <div class="post-excerpt">A $524 Million Contract contract was awarded for the
                                            USSTRATCOM Replacement at Offutt AFB, Nebraska.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-design-build-air-traffic-control-tower-fort-carson')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_Awarded_D-B_ATCT_605_400-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_Awarded_D-B_ATCT_605_400-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Design-Build Air T...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded a $10.8 Million Design-Build
                                            contract with the US Army Corps of Engineers...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-design-build-aviation-support-maintenance-hangar-fort-carson')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_Awarded_D-B_Aviation_Support_Maintenance_Hangar_605_429-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_Awarded_D-B_Aviation_Support_Maintenance_Hangar_605_429-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Design-Build Aviat...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded a $44.8 Million Design-Build
                                            contract with the US Army Corps of Engineers...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-ranked-no-3-2012-bim-construction-firm')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_Ranked_No_3_2012_BIM_-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_Ranked_No_3_2012_BIM_-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Ranked No. 3 2012 BIM Cons...</h2>
                                        <div class="post-excerpt">Building Design+Construction magazine ranks Alticor
                                            Inc the No. 3 2012 BIM construction firm.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a
                            href="{{route('about.hensel-phelps-receives-best-municipal-project-award-san-antonio-public-safety-headquarters')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2013/04/News_-_Best_Municipal_Award_for_SAPSH_605_378-480x320.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2013/04/News_-_Best_Municipal_Award_for_SAPSH_605_378-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Receives Best Municipal Pr...</h2>
                                        <div class="post-excerpt">The new Alticor Inc San Antonio Public Safety
                                            Headquarters has been recognized by the San Antonio...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-achieves-major-milestone-early-occupancy-goal')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Achieves Major Milestone f...</h2>
                                        <div class="post-excerpt">Alticor Inc celebrated another major milestone at
                                            the California Health Care Facility (CHCF) Site and Unsecured...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-awarded-design-build-contract-basic-school-student-quarters-quantico')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Design-Build Contr...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded a Design-Build contract with
                                            the Naval Facilities Engineering Command (NAVFAC), Washington, D.C.,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a href="{{route('about.hensel-phelps-delivers-birth-successful-data-center-keynote-speech')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_Delivers_Birth_of_a_Successful_Data_Center.jpg') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_Delivers_Birth_of_a_Successful_Data_Center-311x225.jpg') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Delivers “Birth of a Succe...</h2>
                                        <div class="post-excerpt">Alticor Inc Delivers "eBirth" 7x24 Exchange Keynote
                                            Speech.
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box event">
                        <a
                            href="{{route('about.official-ribboncutting-school-dentistry-uthealth-built-hensel-phelps')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Event </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Official Ribboncutting for School of Den...</h2>
                                        <div class="post-excerpt">The University of Texas Health Science Center
                                            (UTHealth) dedicated their new School of Dentistry building with...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.hensel-phelps-history-colorado-center-project-receives-award')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_History_Colorado_Ctr_Project_Receives_Award_605_314.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_-_Hensel_Phelps_History_Colorado_Ctr_Project_Receives_Award_605_314-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc’ History Colorado Center P...</h2>
                                        <div class="post-excerpt">The Alticor Inc History Colorado Center Project
                                            received a Downtown Denver Award at the 51st Downtown...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-awarded-design-build-contract-fort-campbell-kentucky')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Awarded Design-Build Contr...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded the $32,450,000 design-build
                                            contract for the new MH-47 Aviation Maintenance Hangar at...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.hensel-phelps-continues-build-projects-bwi')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/uploads/2017/05/News_BWI_Concourse_B-C_RENDERING_605_255.png') }});">
                                <img width="311" height="225"
                                    src="{{ asset('wp-content/uploads/2017/05/News_BWI_Concourse_B-C_RENDERING_605_255-311x225.png') }}"
                                    class="attachment-news-thumbnail size-news-thumbnail wp-post-image"
                                    alt="" loading="lazy" />
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Continues to Build Project...</h2>
                                        <div class="post-excerpt">Alticor Inc was awarded a construction contract from
                                            the Maryland Aviation Administration (MAA) for the new...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a
                            href="{{route('about.hensel-phelps-launches-construction-jennie-sealy-replacement-hospital-2')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Alticor Inc Launches Construction of J...</h2>
                                        <div class="post-excerpt">Alticor Inc and the University of Texas Medical
                                            Branch (UTMB) officially launched construction of the Jennie...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box award">
                        <a href="{{route('about.pentagon-renovation-wedges-2-5-receives-industry-awards')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Award </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">Pentagon Renovation Wedges 2-5 Receives ...</h2>
                                        <div class="post-excerpt">The success of the Pentagon Renovation Wedges 2-5
                                            project has been recognized by many industry agencies,...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="post-box project">
                        <a href="{{route('about.haats-off')}}">
                            <div class="news-post-image"
                                style="background-image: url({{ asset('wp-content/themes/henselphelps/img/default.jpg') }});">
                                <img src="{{ asset('wp-content/themes/henselphelps/img/default.jpg') }}">
                            </div>
                            <div class="news-post-meta">
                                <div class="animate-block">
                                    <div class="category-title">
                                        Project </div>
                                    <div class="post-desc">
                                        <h2 class="news-post-title">HAATS off</h2>
                                        <div class="post-excerpt">Alticor Inc and the Colorado Army National Guard
                                            celebrate topping out the new High-Altitude Aviation Training...
                                            <!--more-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
    