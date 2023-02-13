<!DOCTYPE html>

<html lang="en-US">

<html class="" lang="en-US">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    @include('1layout.head')
</head>


<body
    class="page-template page-template-template-career page-template-template-career-php page page-id-16 page-parent do-etfw">

    <header class="header">

        <div class="header-top">

            <div class="wrapper">

                <ul>

                    

                    <!--<li class="pop-tab"><a href="#">Partner Access</a>

                    <div class="popup-tab">

                            <div class="tab-box">

                            <div class="tabs-container">

                                    <ul class="tabs-menu">

                                        <li class="activated">

                                            <a href="#">

                                                <span>Partner/Employee Login</span>

                                            </a>

                                        </li>

                                       <!-- <li>

                                            <a href="#">

                                                <span>Employee Login</span>

                                            </a>

                                        </li>     -->

                    <!--</ul>

                                    <div class="tab">

                                        <div class="panes clear" style="display:block;">

                                            <div class="tab-content">

                                                <form action="https://projects.henselphelps.net/portal/Main/Login.aspx" method="post" name="frmMEOLogin" target="_blank">

                                                    <fieldset>

                                                    <label for="PortalUserName">Portal Login (User Email)</label>

                                                    <input name="PortalUserName" placeholder="Email Address" type="text">

                                                    <label for="PortalPassword">Password</label>

                                                    <div class="meo-password-row">

                                                    <input name="PortalPassword" placeholder="Password" type="password">

                                                    <button class="login-btn" type="submit">LOG IN</button>

                                                    <div class="new-account">

                                                    <a rel="windowCenter" target="_blank" href="https://projects.henselphelps.net/portal/Public/NewUserSignUp.aspx">Create an Account</a> | <a class="popupwindow" rel="windowCenter" href="https://projects.henselphelps.net/portal/Public/UserAssistance.aspx">Forgot Password?</a>

                                                    </div>

                                                    </div>

                                                    </fieldset>

                                                    

                                                </form>

                                            </div>

                                        </div>-->

                                    <!--<div class="panes clear">

                                            <div class="tab-content">

                                                 <form action="https://projects.henselphelps.net/portal/Main/Login.aspx" method="post" name="frmMEOLogin" target="_blank">

                                                    <fieldset>

                                                    <label for="PortalUserName">Portal Login (User Email)</label>

                                                    <input name="PortalUserName" placeholder="Email Address" type="text">

                                                    <label for="PortalPassword">Password</label>

                                                    <div class="meo-password-row">

                                                    <input name="PortalPassword" placeholder="Password" type="password">

                                                    <button class="login-btn" type="submit">LOG IN</button>

                                                    <div class="new-account">

                                                        <a class="popupwindow" rel="windowCenter" href="https://projects.henselphelps.net/portal/Public/UserAssistance.aspx">Forgot Password?</a>

                                                    </div>

                                                    </div>

                                                    </fieldset>

                                                </form>

                                            </div>

                                        </div>
                                    -->

                    <!--</div>

                                </div>

                            </div>

                        </div>

                    </li>-->
                    {{-- <li><a href="https://pc.henselphelps.net/PrologConverge/WebClient/" target="_blank">Partner
                            Access</a></li>
                    <li><a href="https://core.henselphelps.com/" target="_blank">Employee Portal</a></li> --}}

                </ul>

            </div>

        </div>

        <div class="header-bottom clearfix">

            <div class="wrapper">

                <a href="{{url('/')}}" class="logo"><img src="{{asset('wp-content/themes/henselphelps/img/logo.png')}}"></a>

                <div class="nav-container clearfix">

                    @include('1layout.menu')

                    <div class="toggle-nav">
                        <a href="#">
                            <img src="{{asset('wp-content/themes/henselphelps/img/toggle-icon.png')}}" alt="">
                        </a>
                    </div>

                </div>

            </div>

        </div>

    </header>
    @yield('content')

    <footer class="footer">
        <div class="wrapper">
            <div class="footer-top clearfix" style="margin-bottom: 20px;">
                <a href="../index.html" class="footer-logo">
                    <img src="{{asset('wp-content/themes/henselphelps/img/footer-logo.png')}}" alt="">
                </a>
                <div class="social-links">
                    <ul>
                        <li><a target="_blank" href="https://www.facebook.com/HenselPhelpsCommunications/"><img
                                    src="{{asset('wp-content/themes/henselphelps/img/facebook-icon.png')}}"
                                    alt=""></a></li>
                        <li><a target="_blank" href="https://twitter.com/henselphelps"><img
                                    src="{{asset('wp-content/themes/henselphelps/img/twitter-icon.png')}}" alt=""></a>
                        </li>
                        <li><a target="_blank"
                                href="https://www.linkedin.com/company/21743?trk=tyah&amp;trkInfo=clickedVertical:company,clickedEntityId:21743,idx:3-1-7,tarId:1473431308021,tas:Hensel%20Phelps"><img
                                    src="{{asset('wp-content/themes/henselphelps/img/linkedin-icon.png')}}"
                                    alt=""></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/henselphelps/"><img
                                    src="{{asset('wp-content/themes/henselphelps/img/instagram-icon.png')}}"
                                    alt=""></a></li>
                        <li><a target="_blank" href="https://www.youtube.com/c/HenselPhelpsConstructionCo"><img
                                    height="28" width="28"
                                    src="{{asset('wp-content/uploads/2021/08/youtube_social_squircle_red.png')}}"
                                    alt=""></a></li>
                    </ul>
                    <ul style="margin-top: 40px;">
                        <li style="position: relative; top: 20px; margin-right: 24px;"><a target="_blank"
                                href="https://www.glassdoor.com/Overview/Working-at-Hensel-Phelps-EI_IE3218.11,24.htm"><img
                                    height="80" width="100"
                                    src="{{asset('wp-content/uploads/2022/09/glassdoor-logo.png')}}"
                                    alt=""></a></li>
                        <li><a target="_blank"><img height="80" width="60"
                                    src="{{asset('wp-content/uploads/2022/09/top-work-places-logo.jpg')}}"
                                    alt=""></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-nav">
                    <ul id="menu-footer-menu" class="">
                        <li id="menu-item-115"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-115"><a
                                href="../projects/index.html">Projects</a></li>
                        <li id="menu-item-116"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-116"><a
                                href="../what-we-do/index.html">What We Do</a></li>
                        <li id="menu-item-105"
                            class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-16 current_page_item menu-item-105">
                            <a href="index.html" aria-current="page">Careers</a>
                        </li>
                        <li id="menu-item-4379"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-4379"><a
                                href="../the-hensel-phelps-way/index.html">The Alticor Inc Way</a></li>
                        <li id="menu-item-2779"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2779"><a
                                href="https://www.henselphelps.com/careers/trade-partners/">Trade Partners</a></li>
                        <li id="menu-item-5227"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5227"><a
                                href="../sustainability-corporate-governance/index.html">Sustainability and Corporate
                                Governance</a></li>
                        <li id="menu-item-113"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-113"><a
                                href="../contact-us/index.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <p>Copyright ©
                        <script>
                            document.write(new Date().getFullYear())
                        </script> Alticor Inc. All rights reserved.<a
                            href="https://www.henselphelps.com/privacy-policy/"> Privacy Policy </a><a
                            href="{{asset('wp-content/uploads/2021/07/Hensel-Phelps-Media-Kit_Logo-Specifications-and-Use.pdf')}}"
                            download=""> Media Kit </a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <script type='text/javascript' src="{{ asset('wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1') }}"
        id='jquery-ui-core-js'></script>
    <script type='text/javascript' src="{{ asset('wp-includes/js/jquery/ui/datepicker.min0028.js?ver=1.13.1') }}"
        id='jquery-ui-datepicker-js'></script>
    <script type='text/javascript' id='jquery-ui-datepicker-js-after'>
        jQuery(function(jQuery) {
            jQuery.datepicker.setDefaults({
                "closeText": "Close",
                "currentText": "Today",
                "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August",
                    "September", "October", "November", "December"
                ],
                "monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct",
                    "Nov", "Dec"
                ],
                "nextText": "Next",
                "prevText": "Previous",
                "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
                "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
                "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
                "dateFormat": "MM d, yy",
                "firstDay": 1,
                "isRTL": false
            });
        });
    </script>
    <script type='text/javascript'
        src="{{ asset('wp-content/plugins/modern-events-calendar-lite/assets/js/jquery.typewatchc945.js?ver=5.19.0') }}"
        id='mec-typekit-script-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/plugins/modern-events-calendar-lite/assets/packages/featherlight/featherlightc945.js?ver=5.19.0') }}"
        id='mec-featherlight-script-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/plugins/modern-events-calendar-lite/assets/packages/select2/select2.full.minc945.js?ver=5.19.0') }}"
        id='mec-select2-script-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/plugins/modern-events-calendar-lite/assets/packages/tooltip/tooltipc945.js?ver=5.19.0') }}"
        id='mec-tooltip-script-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/plugins/modern-events-calendar-lite/assets/packages/lity/lity.minc945.js?ver=5.19.0') }}"
        id='mec-lity-script-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/plugins/modern-events-calendar-lite/assets/packages/colorbrightness/colorbrightness.minc945.js?ver=5.19.0') }}"
        id='mec-colorbrightness-script-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/plugins/modern-events-calendar-lite/assets/packages/owl-carousel/owl.carousel.minc945.js?ver=5.19.0') }}"
        id='mec-owl-carousel-script-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/themes/henselphelps/js/jquery.popupwindow1eb7.js?ver=6.0.3') }}"
        id='jquery.popupwindow-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/themes/henselphelps/js/isotope.pkgd.min1eb7.js?ver=6.0.3') }}" id='jquery.isotope-js'>
    </script>
    <script type='text/javascript' src="{{ asset('wp-content/themes/henselphelps/js/waypoints.min1eb7.js?ver=6.0.3') }}"
        id='jquery.waypoints-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/themes/henselphelps/js/jquery.counterup1eb7.js?ver=6.0.3') }}" id='jquery.counterup-js'>
    </script>
    <script type='text/javascript' src="{{ asset('wp-content/themes/henselphelps/js/swiper.min1eb7.js?ver=6.0.3') }}"
        id='jquery.swiper-slider-js'></script>
    <script type='text/javascript' src="{{ asset('wp-content/themes/henselphelps/js/imagesloaded1eb7.js?ver=6.0.3') }}"
        id='jquery.imagesloaded-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/themes/henselphelps/js/jquery.flexslider1eb7.js?ver=6.0.3') }}"
        id='jquery.flexslider-js'></script>
    <script type='text/javascript' src="{{ asset('wp-content/themes/henselphelps/js/jquery.jscroll1eb7.js?ver=6.0.3') }}"
        id='jquery.jscroll-js'></script>
    <script type='text/javascript' src="{{ asset('wp-content/themes/henselphelps/js/map1eb7.js?ver=6.0.3') }}"
        id='jquery.map-js'></script>
    <script type='text/javascript' src="{{ asset('wp-content/themes/henselphelps/js/jquery.inview1eb7.js?ver=6.0.3') }}"
        id='jquery.inview-js'></script>
    <script type='text/javascript' id='jquery.custom-js-extra'>
        /* <![CDATA[ */
        var ajaxurl = "index.html\/\/henselphelps.com\/wp-admin\/admin-ajax.php";
        /* ]]> */
    </script>
    <script type='text/javascript' src="{{ asset('wp-content/themes/henselphelps/js/custom1eb7.js?ver=6.0.3') }}"
        id='jquery.custom-js'></script>
    <script type='text/javascript' src="{{ asset('wp-content/themes/henselphelps/js/bio-scripts1eb7.js?ver=6.0.3') }}"
        id='jquery.bio-scripts-js'></script>
    <script type='text/javascript'
        src="{{ asset('wp-content/plugins/easy-twitter-feed-widget/js/twitter-widgets5152.js?ver=1.0') }}"
        id='do-etfw-twitter-widgets-js'></script>
    <script type='text/javascript' id='main-js-js-extra'>
        /* <![CDATA[ */
        var headJS = {
            "ajaxurl": "https:\/\/henselphelps.com\/wp-admin\/admin-ajax.php",
            "templateurl": "\/wp-content\/themes\/henselphelps",
            "posts_per_page": "6"
        };
        /* ]]> */
    </script>
    <script type='text/javascript' src="{{ asset('wp-content/themes/henselphelps/js/script1eb7.js?ver=6.0.3') }}"
        id='main-js-js'></script>
    <div id="browser-msg">
        <div>
            <a id="close" href="#">X</a>
            <h3>Oh no... this website is not a fan of Internet Explorer!</h3>
            <p>Due to some geeky technical reasons, the Alticor Inc website is best viewed on any browser other than
                Internet Explorer. However, if you are a diehard IE fan you can continue to use it, but may have a less
                than great experience and will receive this annoying reminder every day. We recommend one of the
                following browsers to take full advantage of the Alticor Inc website. Thank you!</p>
            <p>
                <a href="https://www.google.com/chrome/browser/" target="_blank">
                    <img alt="Chrome" src="{{ asset('wp-content/uploads/2017/08/chrome-icon.png') }}" />
                </a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.mozilla.org/en-US/firefox/new/" target="_blank">
                    <img alt="Firefox" src="{{ asset('wp-content/uploads/2017/08/Firefox-icon.png') }}" />
                </a>&nbsp;&nbsp;&nbsp;
                <a href="https://www.microsoft.com/en-us/windows/microsoft-edge/" target="_blank">
                    <img alt="Edge" src="{{ asset('wp-content/uploads/2017/08/edge-icon.png') }}" />
                </a>
            </p>
        </div>
    </div>
    {{-- <script type="text/javascript" src="../analytics.clickdimensions.com/ts.js" > </script>
    <script type="text/javascript">
      var cdAnalytics = new clickdimensions.Analytics('analytics.clickdimensions.com');
      cdAnalytics.setAccountKey('az0CVqGz6DkKV5SrIXyx6D');
      cdAnalytics.setDomain('henselphelps.com');
      cdAnalytics.setScore(typeof(cdScore) == "undefined" ? 0 : (cdScore == 0 ? null : cdScore));
      cdAnalytics.trackPage();
    </script> --}}
    @stack('scripts')
</body>

<!-- Mirrored from henselphelps.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 04 Feb 2023 17:07:43 GMT -->

</html>
