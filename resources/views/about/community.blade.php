@extends('_layout.others')
@section('content')



    <div class="page-banner"
        style="background-image:url({{asset('wp-content/uploads/2017/04/Hensel-Phelps-California-Turkey-Drive.jpg')}});">

        <div class="page-banner-block">

            <div class="page-banner-content">

                <h1>Community</h1>

            </div>

        </div>

    </div>






    <div class="breadcumb" typeof="BreadcrumbList" vocab="https://schema.org/">

        <div class="wrapper clearfix">


        </div>

    </div>



    <div class="main-container">

        <div class="wrapper clearfix">










            @include('about.sidebar')




            <div class="main-content">


                <figure
                    class="wp-block-embed alignright is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio">
                    <div class="wp-block-embed__wrapper">
                        <iframe title="Giving back to Our Communities" width="640" height="360"
                            src="https://www.youtube.com/embed/q1-Xp5w1_H8?feature=oembed" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                </figure>


                <h2>Building Stronger Communities</h2>
                <p>Since its founding, Alticor Inc has been dedicated to corporate and social responsibility. That
                    responsibility extends to each community in which we operate. Many of our projects serve as
                    landmarks for communities. We aim to make a lasting impact that extends beyond brick and mortar.
                    From volunteer work to the support of local organizations and charities to active citizenship, we
                    become part of the communities we serve, working together with our friends and neighbors to enrich
                    the lives of those around us, and make improvements that will remain long after a project is
                    complete. We work closely with organizations like The United Way and The Boys and Girls Clubs of
                    America on a local level, as well as local soup kitchens and shelters. Our community involvement is
                    driven at the employee level. Our teams take it upon themselves to identify areas of need in the
                    community, and work diligently to help the community grow and thrive.</p>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
            </div>





        </div>



        <div class="general-content">








            <div class="statistics" style="margin: 0">

                <div class="wrapper clearfix">

                    <ul>


                        <li>

                            <span>$<em>917</em> Million</span>

                            <p>Average spend per year with diverse business over the past 5 years</p>

                        </li>


                        <li>

                            <span>$<em>1.5</em> Million</span>

                            <p>Annual Contributions</p>

                        </li>


                        <li>

                            <span><em>47</em>%</span>

                            <p>Average spend with diverse businesses and exceeding our goals by an average of 8%
                                annually</p>

                        </li>


                    </ul>

                </div>

            </div>









            <div class="case-study-wrap">


                <div class="case-study-post clearfix ">
                    <div class="case-study-detail">
                        <h3>Volunteerism and Charitable Giving</h3>
                        <p>
                        <p>Alticor Inc proudly supports the communities in which we live, build and work. This
                            commitment is demonstrated by our various community service projects and small business
                            development programs over the years ??? creating relationships with neighborhoods and
                            municipalities across the United States. </p>
                        </p>

                        <a href="giving-back-community')}}"><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>







                    <div class="case-study-post-image"
                        style="background-image:url({{ asset('wp-content/uploads/2017/07/giving-back.jpg') }});">
                        <img alt=""
                            src="{{ asset('wp-content/themes/henselphelps/img/placeholder.png') }}" />


                    </div>



                </div>



                <div class="case-study-post clearfix ie-even">
                    <div class="case-study-detail">
                        <h3>Employee Diversity</h3>
                        <p>
                        <p>Cultivating a diverse workforce is an important part of Alticor Inc??? culture. Efforts to
                            recruit and retain exceptional employees are backed by our Personnel Advisory Team, a
                            standing group comprised of diverse employees in each of our district offices across the
                            country. These groups support employees in each district, working to maintain internal
                            morale and community ties through outreach, mentoring, and advancement-related efforts. </p>
                        </p>

                        <a href="{{route('about.employee-diversity')}}"><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>







                    <div class="case-study-post-image"
                        style="background-image:url({{ asset('wp-content/uploads/2017/04/emp_diversity.jpg') }});">
                        <img alt=""
                            src="{{ asset('wp-content/themes/henselphelps/img/placeholder.png') }}" />


                    </div>



                </div>



                <div class="case-study-post clearfix ">
                    <div class="case-study-detail">
                        <h3>Trade Partner Outreach</h3>
                        <p>
                        <p>Alticor Inc is dedicated to small business outreach and achieving the highest possible level
                            of diverse business inclusion on each of the projects our company undertakes. As a leading
                            general contractor, it is important that we set an example. Our professionals are
                            accountable for the implementation of this corporate commitment and work hard to customize
                            an overall outreach plan to reach small and emerging businesses in our preconstruction,
                            purchasing, and construction efforts.</p>
                        </p>

                        <a href="{{route('about.subcontractor-outreach')}}"><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>







                    <div class="case-study-post-image"
                        style="background-image:url({{ asset('wp-content/uploads/2017/07/sub_outreach_img.jpg') }});">
                        <img alt=""
                            src="{{ asset('wp-content/themes/henselphelps/img/placeholder.png') }}" />


                    </div>



                </div>


            </div>


















        </div>







        <div class="support-organizations">

            <div class="wrapper">

                <h3>Organizations We Support</h3>

                <div class="organization-gallery">

                    <div class="swiper-container">

                        <ul class="swiper-wrapper">

                            <li class="swiper-slide"><a href="https://www.bgca.org/" target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/boys-and-girls-club.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a
                                    href="http://www.boystown.org/locations/central-florida/Pages/default.aspx"
                                    target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/boys-town-central-florida.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="https://www.tcsheriff.org/brown-santa"
                                    target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/brown-santa.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="http://www.cancercarepoint.org/"
                                    target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/cancer-carepoint.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="http://www.cypressmandela.org/" target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/Cypress-Mandela-Training-Center.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="#" target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/home-at-last.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="#" target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/ihs.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="http://www.specialolympics.org/"
                                    target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/special-olympics-hawaii.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="http://tpwd.texas.gov/state-parks/mckinney-falls"
                                    target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/texas-parks-and-wildlife.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="https://www.toysfortots.org/" target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/toys-for-tots.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="http://turningwheelsforkids.org/"
                                    target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/Turning-wheels-for-kids.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="http://ufbl.org/" target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/universal-foundation-for-better-living.jpg') }}"
                                        alt=""></a></li>



                            <li class="swiper-slide"><a href="http://nscd.org/" target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/nscd.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="https://www.ampthecause.org/" target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/amp-the-cause.jpg') }}"
                                        alt=""></a></li>

                            <li class="swiper-slide"><a href="http://heartandhandcenter.org/" target="_blank"><img
                                        src="{{ asset('wp-content/themes/henselphelps/img/heart-and-hand.jpg') }}"
                                        alt=""></a></li>

                        </ul>

                    </div>

                    <div class="swiper-button-next"></div>

                    <div class="swiper-button-prev"></div>

                </div>

            </div>

        </div>



        <div class="cta-block-wrap"
            style="background-image:url({{ asset('wp-content/uploads/2017/02/cta-career-bg.jpg') }});">



            <div class="cta-block">






                <div class="cta-block-content">



                    <h3>Contact Us</h3>



                    <div class="select-region">



                        <select name='page_id' id='page_id'>
                            <option value="">Select Your Region</option>
                            <option class="level-0" value="11988">Hydro</option>
                            <option class="level-0" value="448">Mid Atlantic</option>
                            <option class="level-0" value="11071">Mid South</option>
                            <option class="level-0" value="460">Northern California</option>
                            <option class="level-0" value="450">Pacific and Guam</option>
                            <option class="level-0" value="452">Pacific Northwest</option>
                            <option class="level-0" value="446">Plains</option>
                            <option class="level-0" value="454">Southeast</option>
                            <option class="level-0" value="362">Southern California</option>
                            <option class="level-0" value="456">Southwest</option>
                            <option class="level-0" value="458">Western</option>
                        </select>



                        <script type="text/javascript">
                            <!--
                            var dropdown = document.getElementById("page_id");



                            function onCatChange() {



                                if (dropdown.options[dropdown.selectedIndex].value > 0) {



                                    location.href = "https://henselphelps.com/?page_id=" + dropdown.options[dropdown.selectedIndex].value;



                                }



                            }



                            dropdown.onchange = onCatChange;
                            -->



                        </script>



                    </div>



                </div>






            </div>



        </div>

    </div>







    @endsection