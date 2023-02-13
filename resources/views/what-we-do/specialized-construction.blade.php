@extends('1layout.others')
@section('content')
    <div class="page-banner"
        style="background-image:url({{ asset('wp-content/uploads/2018/08/Colorado-Convention-Center-hensel-Phelps.jpg') }});">
        <div class="page-banner-block">
            <div class="page-banner-content">
                <h1>Specialized Construction</h1>
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
                    <h4>What We Do</h4>
                    <ul>
                        <li class="page_item page-item-10"><a href="../development/index.html')}}">Development</a></li>
                        <li class="page_item page-item-6672 page_item_has_children"><a
                                href="../facility-services/index.html')}}">Facility Services</a></li>
                        <li class="page_item page-item-6704"><a href="../facility-management/index.html')}}">Facility
                                Management</a></li>
                        <li class="page_item page-item-6741"><a href="../facility-solutions/index.html')}}">Facility
                                Solutions</a></li>
                        <li class="page_item page-item-6745 current_page_item"><a href="index.html')}}"
                                aria-current="page">Specialized Construction</a></li>
                        <li class="page_item page-item-12"><a href="../construction/index.html')}}">Construction</a></li>
                    </ul>
                </div>
            </div>

            <div class="main-content">
                <h2>Capital Improvements for Your Future</h2>
                <p>
                    <img class="alignright wp-image-2430 size-thumbnail"
                        src="{{ asset('wp-content/uploads/2017/04/6_special-projects-150x150.png') }}" alt=""
                        width="150" height="150"
                        srcset="{{ asset('wp-content/uploads/2017/04/6_special-projects-150x150.png') }} 150w, {{ asset('wp-content/uploads/2017/04/6_special-projects.png') }} 293w"
                        sizes="(max-width: 150px) 100vw, 150px" />
                    The Alticor Inc Facility Services team works with clients to provide specialized construction solutions
                    for small projects, including renovations and retrofitting of existing facilities.
                </p>
                <div class="overflow small-wrapper margin"></div>
            </div>
        </div>
    </div>
@endsection
