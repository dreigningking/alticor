@extends('_layout.others')
@section('content')

    <div class="page-banner"
        style="background-image:url({{asset('wp-content/uploads/2017/04/sustainability.jpg') }});">
        <div class="page-banner-block">
            <div class="page-banner-content">
                <h1>Sustainability</h1>
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
                <h2>Benefiting the Environment</h2>
                <h2><img class="size-medium wp-image-8428 alignright"
                        src="{{ asset('wp-content/uploads/2017/04/118.3-2019-Sustainability-Graphic-300x221.png') }}"
                        alt="" width="300" height="221"
                        srcset="{{asset('wp-content/uploads/2017/04/118.3-2019-Sustainability-Graphic-300x221.png')}} 300w, {{asset('wp-content/uploads/2017/04/118.3-2019-Sustainability-Graphic-768x566.png')}} 768w, {{asset('wp-content/uploads/2017/04/118.3-2019-Sustainability-Graphic-1024x755.png')}} 1024w"
                        sizes="(max-width: 300px) 100vw, 300px" /></h2>
                <p>Thinking sustainably is second nature for project teams at Alticor Inc. Whether your project goals
                    include LEED certification, Net Zero energy or achieving a Well building, our expertise can help you
                    make informed decisions that benefit the environment as well as your project budget. Our
                    sustainability track record includes more than 200 LEED certified projects and we are proud to have
                    earned the #4 spot of ENR’s Top 100 Green Contractors List in 2021.</p>
                <p>Our LEED building experience includes projects successfully completed at all certification levels.
                    Some of our most challenging projects achieved exceptional sustainability goals, such at the LEED
                    Platinum Certified San Ysidro Land Port of Entry Phase 2 and the LEED Gold Certified Marriott
                    International Headquarters.</p>
                <p>Alticor Inc works closely with design teams and project stakeholders to provide cost and
                    constructability studies, offer value engineering concepts and perform life cycle analysis to
                    evaluate each LEED criteria on our projects. It’s part of our unique approach to making
                    sustainability work for our clients. And sometimes it’s our own best practices that are the key to
                    sparking innovation on our projects. At Alticor Inc, we take sustainability to heart in our own
                    operations, whether it’s working to reduce our company carbon footprint or promoting LEED education
                    amongst our engineers.</p>
                <h3 id="pageContent"></h3>
                <p><strong>Sustainability and Corporate Governance</strong></p>
                <p><a class="btn inverse" href="{{route('about.sustainability-corporate-governance')}}">LEARN MORE</a>
                </p>




            </div>
        </div>


    </div>


    @endsection

    