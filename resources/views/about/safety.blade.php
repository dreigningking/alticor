@extends('1layout.others')
@section('content')

    <div class="page-banner" style="background-image:url({{ asset('wp-content/uploads/2017/02/hero13.jpg') }});">
        <div class="page-banner-block">
            <div class="page-banner-content">
                <h1>Safety</h1>
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
                        <li class="page_item page-item-5168 page_item_has_children"><a
                                href="{{route('about.technology')}}">Technology</a></li>
                        <li class="page_item page-item-36"><a href="{{route('about.history')}}">History</a></li>
                        <li class="page_item page-item-876 page_item_has_children"><a
                                href="{{route('about.community')}}"">Community</a></li>
                        <li class="page_item page-item-879"><a href="{{route('about.news-center')}}"">News Center</a></li>
                        <li class="page_item page-item-42"><a href="{{route('about.leadership')}}"">Leadership</a></li>
                        <li class="page_item page-item-859 current_page_item"><a href="index.html"
                                aria-current="page">Safety</a></li>
                        <li class="page_item page-item-863"><a href="{{route('about.quality')}}"">Quality</a></li>
                        <li class="page_item page-item-884 page_item_has_children"><a
                                href="{{route('about.recognition-awards')}}"">Recognition &#038; Awards</a></li>
                        <li class="page_item page-item-870"><a
                                href="{{route('about.sustainability')}}"">Sustainability</a></li>
                    </ul>
                </div>
            </div>




            <div class="main-content">
                <h2>No job or service is so important or urgent that it cannot be performed the SAFE way</h2>
                <p>Alticor Inc maintains an unwavering commitment to the safety of our people and trade partners through
                    implementation of our corporate safety program, detailed site-specific safety plans, extensive
                    training, planning, and personal accountability. Our commitment to a “zero-accident” safety culture
                    extends beyond the employees of Alticor Inc to all our trade partners working on a Alticor Inc
                    project. While we can boast that we have one of the industry’s best safety records, what really
                    excites us is sending our people home safely to their loved ones each day.</p>
                <p><img class="aligncenter wp-image-4526 size-medium"
                        src="{{ asset('wp-content/uploads/2017/04/SAFE-Emblem-2017_Final-300x193.png') }}"
                        alt="" width="300" height="193" /></p>
                <p style="text-align: left;"><iframe loading="lazy"
                        src="https://www.youtube.com/embed/SUoJjuLVZw4" width="100%" height="534"
                        frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>




            </div>
        </div>


    </div>



    
    @endsection

    