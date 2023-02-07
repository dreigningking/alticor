@extends('1layout.others')
@section('content')

    <div class="page-banner" style="background-image:url({{asset('wp-content/uploads/2017/02/tech.jpg')}});">

        <div class="page-banner-block">

            <div class="page-banner-content">

                <h1>Technology</h1>

            </div>

        </div>

    </div>






    <div class="breadcumb" typeof="BreadcrumbList" vocab="https://schema.org/">

        <div class="wrapper clearfix">


        </div>

    </div>



    <div class="main-container">

        <div class="wrapper clearfix">










            <div class="sidebar">

                <div class="widget">

                    <h4>The Alticor Inc Way</h4>

                    <ul>

                        <li class="page_item page-item-5168 page_item_has_children current_page_item"><a
                                href="index.html" aria-current="page">Technology</a></li>
                        <li class="page_item page-item-36"><a href="../history/index.html">History</a></li>
                        <li class="page_item page-item-876 page_item_has_children"><a
                                href="../community/index.html">Community</a></li>
                        <li class="page_item page-item-879"><a href="../news-center/index.html">News Center</a></li>
                        <li class="page_item page-item-42"><a href="../leadership/index.html">Leadership</a></li>
                        <li class="page_item page-item-859"><a href="../safety/index.html">Safety</a></li>
                        <li class="page_item page-item-863"><a href="../quality/index.html">Quality</a></li>
                        <li class="page_item page-item-884 page_item_has_children"><a
                                href="../recognition-awards/index.html">Recognition &#038; Awards</a></li>
                        <li class="page_item page-item-870"><a
                                href="../sustainability/index.html">Sustainability</a></li>

                    </ul>

                </div>

            </div>













            <div class="main-content">

                <h2>Making Information Intelligent</h2>
                <p>Advances in digital information capture and utilization have brought significant benefits to facility
                    design, construction and operation. To save time, and money and improve accuracy, our virtual design
                    and construction (VDC) and innovation experts assist our project teams in using technology that
                    provides a unified experience for our clients. From artificial intelligence (AI) machine learning to
                    3D printing, reality capture, security awareness and more, Alticor Inc’ teams safely bring landmarks
                    to life long before project completion.</p>

            </div>





        </div>



        <div class="general-content">








            <div class="statistics" style="margin: 0">

                <div class="wrapper clearfix">

                    <ul>


                        <li>

                            <span><em>4,000,000</em></span>

                            <p>Received Emails per Month</p>

                        </li>


                        <li>

                            <span><em>355,000</em> GB</span>

                            <p>of Scalable Cloud Infrastructure</p>

                        </li>


                        <li>

                            <span><em>250</em></span>

                            <p>VDC Models Updated Daily</p>

                        </li>


                    </ul>

                </div>

            </div>









            <div class="case-study-wrap">


                <div class="case-study-post clearfix ">
                    <div class="case-study-detail">
                        <h3>Virtual Design & Construction</h3>
                        <p>
                        <p>The Virtual Design and Construction (VDC) Plan of Work is part of the Alticor Inc Way, the
                            combination of People, Processes, Partnership, and Technology in real-time collaboration. We
                            plan, build, and manage every aspect of our projects to enhance our standard of care and
                            processes. We collaborate with our project teams, including our owners, to identify
                            opportunities to create efficiencies within our workflow and communications. We do this by
                            leveraging technology to ensure our project teams have access to real-time data, allowing
                            all decisions to be made with the best information possible.</p>
                        </p>

                        <a href="vdc/index.html"><i class="fa fa-arrow-circle-right"
                                aria-hidden="true"></i><span>Learn More</span></a>

                    </div>







                    <div class="case-study-post-image"
                        style="background-image:url({{ asset('wp-content/uploads/2017/02/AI.png') }});">
                        <img alt=""
                            src="{{ asset('wp-content/themes/henselphelps/img/placeholder.png') }}" />


                    </div>



                </div>



                <div class="case-study-post clearfix ie-even">
                    <div class="case-study-detail">
                        <h3>Diverge</h3>
                        <p>
                        <p>Alticor Inc’ corporate venture capital company, Diverge, empowers our employees and partners
                            to disrupt the AEC industry and build the future of the Built Environment. Made up of
                            Alticor Inc&#8217; innovation and technology experts, Diverge is a strategic approach for
                            investing, sourcing, evaluating and deploying new innovative solutions.</p>
                        <p><a href="https://diverge.vc/"><i class="fa fa-arrow-circle-right"
                                    aria-hidden="true"></i><span>Learn More</span></a></p>
                        </p>


                    </div>







                    <div class="case-study-post-image"
                        style="background-image:url({{ asset('wp-content/uploads/2023/01/MicrosoftTeams-image-64.jpg') }});">
                        <img alt=""
                            src="{{ asset('wp-content/themes/henselphelps/img/placeholder.png') }}" />


                    </div>



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
    