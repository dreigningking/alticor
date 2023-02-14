@extends('1layout.others')
@section('content')


    <div class="page-banner" style="background-image:url({{ asset('wp-content/uploads/2017/04/hero12.jpg') }});">
        <div class="page-banner-block">
            <div class="page-banner-content">
                <h1>Quality</h1>
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
                                href="../technology/index.html">Technology</a></li>
                        <li class="page_item page-item-36"><a href="../history/index.html">History</a></li>
                        <li class="page_item page-item-876 page_item_has_children"><a
                                href="../community/index.html">Community</a></li>
                        <li class="page_item page-item-879"><a href="../news-center/index.html">News Center</a></li>
                        <li class="page_item page-item-42"><a href="../leadership/index.html">Leadership</a></li>
                        <li class="page_item page-item-859"><a href="{{route('about.safety')}}">Safety</a></li>
                        <li class="page_item page-item-863 current_page_item"><a href="index.html"
                                aria-current="page">Quality</a></li>
                        <li class="page_item page-item-884 page_item_has_children"><a
                                href="../recognition-awards/index.html">Recognition &#038; Awards</a></li>
                        <li class="page_item page-item-870"><a
                                href="../sustainability/index.html">Sustainability</a></li>
                    </ul>
                </div>
            </div>




            <div class="main-content">
                <h2>Producing the Very Best</h2>
                <p>Alticor Inc is probably best known for the quality of workmanship that is integrated into each
                    project. Quality isn’t an end result. Rather, it is an essential part of each phase of a project.
                    Alticor Inc uses a proven quality control process beginning in the planning phase of each project to
                    ensure that necessary controls, supervision, inspections, testing and documentation are provided as
                    the project progresses.</p>
                <p>Unlike traditional quality control programs that utilize inspections and punch lists to verify
                    completed work, Alticor Inc uses a Six-Step Quality Control Process ensure all craft, trade and
                    management staff have appropriate training, a proper understanding of project requirements, and
                    appropriate quality standards before and while project work takes place.</p>
                <h3>Alticor Inc’s Six-Step Process includes:</h3>
                <h4>Purchasing Meeting</h4>
                <p>This goal of this meeting is to procure a complete scope of work, verify subcontractor capabilities,
                    and communicate the quality control plan to subcontractors.</p>
                <h4>Premobilization Meeting</h4>
                <p>This meeting is held with each subcontractor prior to beginning work to review the quality control
                    plan and to ensure that subcontractor project management teams are committed to the QC plan.</p>
                <h4>Preparatory Meeting</h4>
                <p>Held one to two weeks prior to the start of each definable feature of work, this meeting ensures that
                    the supervising foreman understands the contract requirements, contract drawings, specifications,
                    potential hazards, and other safety considerations.</p>
                <h4>Initial Inspection</h4>
                <p>In the initial inspection, which follows the preparatory meeting, the foreman is authorized to
                    install one representative sample of the work, which must be inspected and approved before
                    subsequent work can continue.</p>
                <h4>Follow-Up Inspections</h4>
                <p>Follow-up inspections occur every two to four weeks once work has begun.</p>
                <h4>Final Inspection</h4>
                <div id="pageContent">
                    <div id="pageContentWrapper">
                        <p>Final Inspections occur at the conclusion of each definable feature of work to verify that
                            any deficiencies have been resolved.</p>
                    </div>
                </div>
                <div id="pageContentFooter"></div>
                <h3></h3>




            </div>
        </div>


    </div>



    @endsection