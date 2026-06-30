<!DOCTYPE html>
<!-- This site was created in Webflow. https://webflow.com -->
<html data-wf-domain="tnc-medflow-cms.webflow.io" data-wf-page="650a93508d45b1a9c66e5003"
    data-wf-site="650a93508d45b1a9c66e5000">

<head>
    <meta charset="utf-8" />
    <title>@yield('title', 'TNC Medflow')</title>
    <meta content="@yield('meta_description', 'At TNC Medflow, we are committed to delivering exceptional healthcare.')"
        name="description" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />

    <!-- Link CSS files -->
    <link crossorigin="anonymous" href="{{ asset('css/tnc-medflow-cms.webflow.shared.79a26d61a.css') }}"
        rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="anonymous" href="https://fonts.gstatic.com" rel="preconnect" />
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
    <script type="text/javascript">
        WebFont.load({ google: { families: ["Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic", "Rubik:300,400,500,600,700"] } });
    </script>
    <script type="text/javascript">
        !function (o, c) { var n = c.documentElement, t = " w-mod-"; n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch") }(window, document);
    </script>
    <link href="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/651127755c47e8494b9048c5_fav-icon-32x32.png"
        rel="shortcut icon" type="image/x-icon" />
    <link
        href="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/6511277828c98a68c1c8c9f8_tnc-medflow-webclip-256x256.png"
        rel="apple-touch-icon" />
    <style>
        .w-webflow-badge {
            position: fixed !important;
            display: None !important;
            visibility: hidden !important;
        }
    </style>
</head>

<body>
    <div class="loader" data-w-id="b1d5605c-a236-89a3-7f99-7fac289a6af3">
        <div class="half-part" data-w-id="b1d5605c-a236-89a3-7f99-7fac289a6af4"></div><img alt="" class="loader-logo"
            data-w-id="b1d5605c-a236-89a3-7f99-7fac289a6af5" loading="lazy"
            src="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/651167c794bf30dfeca57fad_TNC%20Medflow%20Logo%20(1).webp"
            width="70" />
        <div class="half-part lower" data-w-id="b1d5605c-a236-89a3-7f99-7fac289a6af6"></div>
    </div>

    <nav class="navigation-bar">
        <div class="top-navigation">
            <div class="container top-navigation">
                <div class="social-icon-container"><a class="social-icon" href="https://www.facebook.com/ThemeNcode#"
                        target="_blank"></a><a class="social-icon twitter" href="https://twitter.com/ThemeNcode"
                        target="_blank"></a><a class="social-icon gmail" href="https://www.gmail.com"
                        target="_blank"></a><a class="social-icon youtube"
                        href="https://www.youtube.com/@ThemeNcodeOfficial" target="_blank"></a><a
                        class="social-icon both-side-border" href="https://www.linkedin.com/company/themencode"
                        target="_blank"></a></div>
                <div class="information-container">
                    <div class="logo-and-text-block hide-from-tablet">
                        <div class="icon"></div>
                        <div class="header-info-text">8502 Preston Rd. Inglewood, Maine 98XX0</div>
                    </div>
                    <div class="logo-and-text-block">
                        <div class="icon"></div>
                        <div class="header-info-text">medflowX@gmail.com</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="middle-navigation">
            <div class="container middle-navigation"><a aria-current="page" class="logo-wrapper w-nav-brand w--current"
                    href="{{ route('home') }}"><img alt="" class="main-logo" loading="lazy"
                        src="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aa3304a3d9c423e77cb2e_TNC%20Medflow%20Logo.webp"
                        width="70" /></a>
                <div class="search-container-wrapper">
                    <form action="{{ route('search') }}" class="site-search w-form"><input class="search-input w-input" id="search"
                            maxlength="256" name="query" placeholder="Search" required="" type="search" /><input
                            class="search-button w-button" type="submit" value="" /></form><a
                        class="location-block w-inline-block" href="/contact-us#location"><img alt=""
                            class="location-image" loading="lazy"
                            src="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aa3304a3d9c423e77cb2c_location%20(1)%202.webp"
                            width="70" />
                        <div class="location-text">Location Map</div>
                    </a>
                    <div class="emergency-number-block">
                        <div class="phone-icon"></div>
                        <div class="number-block">
                            <div class="bold-text">Emergency Call</div>
                            <div class="phone-number">(603) 5XX-0123</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="sticky-navigation w-nav" data-animation="default" data-collapse="medium" data-duration="400"
        data-easing="ease" data-easing2="ease" role="banner">
        <div class="container bottom-navigation">
            <div class="mobile-hamburger-wrapper w-nav-button">
                <div class="hamburger-menu w-icon-nav-menu"></div>
            </div>
            <div class="main-menu-wrapper"><a aria-current="page" class="home-icon-link w-inline-block w--current"
                    href="{{ route('home') }}"><img alt="" class="svg-image" loading="lazy"
                        src="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/650aa927e87732320088988d_home%201.svg"
                        width="15" /></a>
                <nav class="nav-menu-wrapper w-nav-menu" role="navigation">
                    <ul class="nav-menu w-list-unstyled" role="list">
                        <li class="nav-list">
                            <div class="dropdown-menu-wrapper w-dropdown" data-delay="0" data-hover="false">
                                <div class="dropdown-menu w-dropdown-toggle">
                                    <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                                    <div class="nav-link">Departments</div>
                                </div>
                                <nav class="menu-dropdown-list w-dropdown-list">
                                    <div class="dropdown-list-wrapper">
                                        <div class="left-submenu">
                                            <div class="w-dyn-list">
                                                <div class="w-dyn-items" role="list">
                                                    @foreach($sharedDepartments->take(5) as $dept)<div
                                                        class="w-dyn-item" role="listitem">
                                                        <div class="submenu-wrapper"><a
                                                                class="sub-menu-item w-inline-block"
                                                                href="{{ route('departments.show', $dept->slug) }}">
                                                                <div class="title-wrapper-merge">
                                                                    <div>{{ $dept->name }}</div>
                                                                    <div
                                                                        class="department-text-hide-from-mobile-portrait">
                                                                        Department</div>
                                                                </div>
                                                                <div class="submenu-arrow"><span
                                                                        class="submenu-arrow"></span></div>
                                                            </a></div>
                                                    </div>@endforeach</div>
                                            </div>
                                        </div>
                                        <div class="right-submenu">
                                            <div class="w-dyn-list">
                                                <div class="w-dyn-items" role="list">
                                                    @foreach($sharedDepartments->skip(5) as $dept)<div
                                                        class="w-dyn-item" role="listitem">
                                                        <div class="submenu-wrapper"><a
                                                                class="sub-menu-item w-inline-block"
                                                                href="{{ route('departments.show', $dept->slug) }}">
                                                                <div class="title-wrapper-merge">
                                                                    <div>{{ $dept->name }}</div>
                                                                    <div
                                                                        class="department-text-hide-from-mobile-portrait">
                                                                        Department</div>
                                                                </div>
                                                                <div class="submenu-arrow"><span
                                                                        class="submenu-arrow"></span></div>
                                                            </a></div>
                                                    </div>@endforeach</div>
                                            </div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </li>
                        <li class="nav-list">
                            <div class="dropdown-menu-wrapper w-dropdown" data-delay="0" data-hover="false">
                                <div class="dropdown-menu w-dropdown-toggle">
                                    <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                                    <div class="nav-link">Doctors</div>
                                </div>
                                <nav class="menu-dropdown-list w-dropdown-list">
                                    <div class="dropdown-list-wrapper">
                                        <div class="left-submenu">
                                            @foreach($sharedDoctors as $doc)
                                                <div class="submenu-wrapper no-right-border"><a
                                                        class="sub-menu-item w-inline-block"
                                                        href="{{ route('doctors.show', $doc->slug) }}">
                                                        <div>{{ $doc->title }} {{ $doc->name }}</div>
                                                        <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                        </div>
                                                    </a></div>
                                            @endforeach
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </li>
                        <li class="nav-list">
                            <div class="dropdown-menu-wrapper w-dropdown" data-delay="0" data-hover="false">
                                <div class="dropdown-menu w-dropdown-toggle">
                                    <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                                    <div class="nav-link">Pages</div>
                                </div>
                                <nav class="menu-dropdown-list w-dropdown-list">
                                    <div class="dropdown-list-wrapper">
                                        <div class="left-submenu">
                                            <div class="submenu-wrapper"><a class="sub-menu-item w-inline-block"
                                                    href="{{ route('about') }}">
                                                    <div>About Us</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper"><a class="sub-menu-item w-inline-block"
                                                    href="/event">
                                                    <div>Events</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper"><a class="sub-menu-item w-inline-block"
                                                    href="/testimonial-style-1">
                                                    <div>Testimonials - 1</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper"><a class="sub-menu-item w-inline-block"
                                                    href="/testimonial-style-2">
                                                    <div>Testimonials - 2</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper"><a class="sub-menu-item w-inline-block"
                                                    href="/utility/style-guide">
                                                    <div>Style-Guide</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper"><a class="sub-menu-item w-inline-block"
                                                    href="/utility/change-log">
                                                    <div>Change-Log</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper"><a class="sub-menu-item w-inline-block"
                                                    href="/utility/license">
                                                    <div>License</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                        </div>
                                        <div class="right-submenu">
                                            <div class="submenu-wrapper no-right-border"><a
                                                    class="sub-menu-item w-inline-block" href="{{ route('faq') }}">
                                                    <div>FAQ - 1</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper no-right-border"><a
                                                    class="sub-menu-item w-inline-block" href="{{ route('faq') }}">
                                                    <div>FAQ - 2</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper no-right-border"><a
                                                    class="sub-menu-item w-inline-block" href="/department-style-1">
                                                    <div>Department Page - 1</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper no-right-border"><a
                                                    class="sub-menu-item w-inline-block" href="/department-style-2">
                                                    <div>Department Page - 2</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper no-right-border"><a
                                                    class="sub-menu-item w-inline-block"
                                                    href="{{ route('departments.show', $sharedDepartments->first()?->slug ?? 'gastroenterology') }}">
                                                    <div>Deparment Details</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper">
                                                <div class="w-dyn-list">
                                                    <div class="w-dyn-items" role="list">
                                                        <div class="w-dyn-item" role="listitem"><a
                                                                class="sub-menu-item w-inline-block"
                                                                href="{{ route('gallery') }}">
                                                                <div>Gallery</div>
                                                                <div class="submenu-arrow"><span
                                                                        class="submenu-arrow"></span></div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="submenu-wrapper no-right-border"><a
                                                    class="sub-menu-item w-inline-block" href="/404">
                                                    <div>404 Page</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </li>
                        <li class="nav-list">
                            <div class="dropdown-menu-wrapper w-dropdown" data-delay="0" data-hover="false">
                                <div class="dropdown-menu w-dropdown-toggle">
                                    <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                                    <div class="nav-link">Blog</div>
                                </div>
                                <nav class="menu-dropdown-list w-dropdown-list">
                                    <div class="dropdown-list-wrapper">
                                        <div class="left-submenu">
                                            <div class="submenu-wrapper no-right-border"><a
                                                    class="sub-menu-item w-inline-block"
                                                    href="{{ route('blog.index') }}">
                                                    <div>Blog Left Sidebar</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper no-right-border"><a
                                                    class="sub-menu-item w-inline-block"
                                                    href="{{ route('blog.index') }}">
                                                    <div>Blog Right Sidebar</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper no-right-border"><a
                                                    class="sub-menu-item w-inline-block"
                                                    href="{{ route('blog.show', \App\Models\BlogPost::first()?->slug ?? 'navigating-seasonal-allergies-tips-for-a-sneezing-free-spring') }}">
                                                    <div>Blog Details</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </li>
                        <li class="nav-list">
                            <div class="dropdown-menu-wrapper w-dropdown" data-delay="0" data-hover="false">
                                <div class="dropdown-menu w-dropdown-toggle">
                                    <div class="dropdown-icon w-icon-dropdown-toggle"></div>
                                    <div class="nav-link">Contact Pages</div>
                                </div>
                                <nav class="menu-dropdown-list w-dropdown-list">
                                    <div class="dropdown-list-wrapper">
                                        <div class="left-submenu">
                                            <div class="submenu-wrapper"><a class="sub-menu-item w-inline-block"
                                                    href="{{ route('contact') }}">
                                                    <div>Contact Us - 1</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper"><a class="sub-menu-item w-inline-block"
                                                    href="{{ route('contact') }}">
                                                    <div>Contact Us - 2</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                            <div class="submenu-wrapper"><a class="sub-menu-item w-inline-block"
                                                    href="{{ route('contact') }}">
                                                    <div>Contact Us - 3</div>
                                                    <div class="submenu-arrow"><span class="submenu-arrow"></span>
                                                    </div>
                                                </a></div>
                                        </div>
                                    </div>
                                </nav>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="cart-and-button-wrapper"><a class="primary-button naviagtion-button w-button"
                    data-w-id="16a0e0be-7907-18ca-408b-7fd71dfc8771" href="#">Book Appoinment</a></div>
        </div>
        <div class="appoinment-form-wrapper">
            <div class="appoinment-form-block w-form">
                <div class="close-icon" data-w-id="c7402ddf-8866-f3fc-99f1-ba32cb47db0c"></div>
                <div class="form-title">Make Appointment</div>
                <p class="form-paragraph">Convenient and Hassle-Free: Schedule Your Appointment at TNC Hospital Today
                </p>
                <form class="appoinment-form" action="{{ route('appointments.store') }}" method="POST" id="email-form"
                    name="email-form">@csrf<div class="form-field-wrapper"><input class="appoinment-field w-input"
                            data-name="Name" id="name-app" maxlength="256" name="name" placeholder="Esther Howard *"
                            required="" type="text" /><input class="appoinment-field w-input" data-name="Email"
                            id="email-app" maxlength="256" name="email" placeholder="example@gmail.com *" required=""
                            type="email" /></div>
                    <div class="form-field-wrapper"><input class="appoinment-field w-input" data-name="Phone Number 2"
                            id="Phone-Number-2" maxlength="256" name="Phone-Number-2" placeholder="(603) 555-0123 *"
                            required="" type="tel" /><input class="appoinment-field w-input" data-name="Schedule 2"
                            id="Schedule-2" maxlength="256" name="Schedule-2" placeholder="Schedule to receive call *"
                            required="" type="email" /></div>
                    <div class="form-field-wrapper" style="margin-bottom: 15px;">
                        <select name="doctor_id" id="doctor-select" class="appoinment-field w-select" style="width: 100%; border: 1px solid #e2e8f0; color: #0f3b5c; background: #fff; padding: 12px; border-radius: 4px;">
                            <option value="">Select Doctor (Optional)</option>
                            @foreach($sharedDoctors as $doc)
                                <option value="{{ $doc->id }}">{{ $doc->title }} {{ $doc->name }} ({{ $doc->specialty }})</option>
                            @endforeach
                        </select>
                    </div>
                    <textarea class="appoinment-field text-area w-input"
                        data-name="Message 2" id="Message-2" maxlength="5000" name="Message-2" placeholder="Message"
                        required=""></textarea><input class="form-submit-button w-button" data-wait="Please wait..."
                        type="submit" value="Send Message " />
                </form>
                @if(session('success'))
                    <div class="w-form-done" style="display: block;">
                        <div>{{ session('success') }}</div>
                    </div>
                @else
                    <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                    </div>
                @endif

                @if($errors->any())
                    <div class="w-form-fail" style="display: block;">
                        <div>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @else
                    <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                @endif
            </div>
            <div class="background-overlay" data-w-id="c7402ddf-8866-f3fc-99f1-ba32cb47db21"></div>
        </div>

        <div class="page-wrapper">
            {{ $slot }}

            <footer class="footer">
                <div class="container">
                    <div class="footer-wrapper">
                        <div class="footer-block logo-block"><img alt="" class="main-logo" loading="lazy"
                                src="https://cdn.prod.website-files.com/650a867a37d9816c7cc188ef/650a867a37d9816c7cc18987_TNC%20Medflow%20Logo%20(1).png"
                                width="169" />
                            <div class="footer-info-container">
                                <p class="footer-paragraph">TNC Medflow is a leading healthcare institution dedicated to
                                    providing exceptional medical services and compassionate care to our patients.</p>
                                <div class="information-wrapper">
                                    <div class="information-block">
                                        <div class="footer-icon"></div>
                                        <div class="information-text">9X0 Hilgard Ave, Los Angeles, CA 900XX, United
                                            States.</div>
                                    </div>
                                    <div class="information-block">
                                        <div class="footer-icon"></div>
                                        <div class="information-text">+111 345 5XX 00X</div>
                                    </div>
                                    <div class="information-block">
                                        <div class="footer-icon"></div>
                                        <div class="information-text">exampleX@gmail.com</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="links-and-menu">
                            <div class="footer-block">
                                <div class="footer-title">Pages</div>
                                <div class="list-block"><a class="footer-link" href="{{ route('about') }}">About
                                        Us</a><a class="footer-link" href="/event">Event</a><a class="footer-link"
                                        href="/testimonial-style-1">Testimonials - 1</a><a class="footer-link"
                                        href="/testimonial-style-2">Testimonials - 2</a><a class="footer-link"
                                        href="{{ route('blog.index') }}">Blogs</a><a class="footer-link"
                                        href="{{ route('gallery') }}">Gallery</a><a class="footer-link"
                                        href="{{ route('contact') }}">Contact Us</a></div>
                            </div>
                            <div class="footer-block">
                                <div class="footer-title">Quick Links</div>
                                <div class="list-block"><a class="footer-link"
                                        href="{{ route('about') }}">Find a Doctor</a><a
                                        class="footer-link"
                                        href="{{ route('about') }}">Specialists</a><a
                                        class="footer-link" href="{{ route('departments.show', $sharedDepartments->first()?->slug ?? 'cardiology') }}">Departments</a><a
                                        class="footer-link" href="/utility/style-guide">Style-Guide</a><a
                                        class="footer-link" href="/utility/change-log">Change-Log</a><a
                                        class="footer-link" href="/utility/license">License</a></div>
                            </div>
                            <div class="footer-block">
                                <div class="footer-title">Help Center</div>
                                <div class="list-block"><a class="footer-link" href="{{ route('departments.show', $sharedDepartments->first()?->slug ?? 'cardiology') }}">Doctor
                                        Dept</a><a class="footer-link" href="/#services">Services</a><a
                                        class="footer-link"
                                        href="{{ route('blog.show', \App\Models\BlogPost::first()?->slug ?? 'navigating-seasonal-allergies-tips-for-a-sneezing-free-spring') }}">Blog
                                        Details</a><a class="footer-link"
                                        href="{{ route('doctors.show', $sharedDoctors->first()?->slug ?? 'dr-emily-thompson') }}">Doctor Details</a><a
                                        class="footer-link" href="{{ route('faq') }}">FAQ - 1</a><a class="footer-link"
                                        href="{{ route('faq') }}">FAQ - 2</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom">
                    <div class="footer-copyright">Copyright © <span class="copy-year">2026</span>, All Rights Reserved
                        by TNC Medflow <span class="hide-in-tablet">/</span> <a class="external-link blue-color"
                            href="https://templates.themencode.com/" target="_blank">Designed by ThemeNcode.com</a><span
                            class="hide-in-tablet"> /</span> <a class="external-link blue-color"
                            href="https://webflow.com/"> Powered by Webflow.com</a></div>
                    <div class="hidden w-embed w-script">
                        <script>document.addEventListener("DOMContentLoaded", function () {
                                const yearSpan = document.querySelector('.copy-year');
                                const currentYear = new Date().getFullYear();

                                yearSpan.textContent = currentYear;
                            });</script>
                    </div>
                </div>
                <div class="buy-now">
                    <div class="buy-now-line"></div>
                    <div class="buy-now-button" data-w-id="22bd519e-2c53-d607-e6a7-ae9db45f73e9">
                        <div class="buy-now-title">Buy Now</div><svg class="buy-now-icon" fill="none"
                            viewbox="0 0 20 20" width="100%" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10 17.1869C9.46055 17.1869 9.02344 16.7498 9.02344 16.2104V3.79004C9.02344 3.25059 9.46055 2.81348 10 2.81348C10.5395 2.81348 10.9766 3.25059 10.9766 3.79004V16.2104C10.9766 16.7498 10.5395 17.1869 10 17.1869Z"
                                fill="currentColor"></path>
                            <path
                                d="M16.2104 10.9766H3.79004C3.25059 10.9766 2.81348 10.5395 2.81348 10C2.81348 9.46055 3.25059 9.02344 3.79004 9.02344H16.2104C16.7498 9.02344 17.1869 9.46055 17.1869 10C17.1869 10.5395 16.7498 10.9766 16.2104 10.9766Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                    <div class="buy-now-details">
                        <div class="buy-now-text">Great Job on choosing the right template! Just one more step to start
                            building.</div>
                        <div class="buy-now-list"><a aria-label="Link Block" class="buy-now-item w-inline-block"
                                href="https://webflow.com/dashboard/marketplace-checkout/redirect?rtype=Template&amp;rid=653b2e97299ab4a113162874&amp;unauthSignup=true"
                                target="_blank">
                                <div class="buy-now-list-icon"><img alt="" class="buy-now-favicon" loading="lazy"
                                        src="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/6925737934fc495ea29cd84c_Webflow.svg" />
                                </div>
                                <div class="buy-now-list-text">Buy on Webflow  (Official)</div>
                            </a><a aria-label="Link Block" class="buy-now-item w-inline-block"
                                href="https://tncflow.com/checkout/?edd_action=add_to_cart&amp;download_id=247949&amp;edd_options%5Bprice_id%5D=4&amp;discount=TFLP10"
                                target="_blank">
                                <div class="buy-now-list-icon"><img alt="" class="buy-now-favicon" loading="lazy"
                                        src="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/6925737934fc495ea29cd84e_TNCFlow.svg" />
                                </div>
                                <div class="buy-now-list-text">Buy from TNCFlow  <span class="buy-now-offer">Save
                                        10%</span></div>
                            </a><a aria-label="Link Block" class="buy-now-item w-inline-block"
                                href="https://tncflow.com/request-a-quote/?platform=Webflow%20Customization"
                                target="_blank">
                                <div class="buy-now-list-icon"><img alt="" class="buy-now-favicon" loading="lazy"
                                        src="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/6925737934fc495ea29cd84a_Request%20Customization.svg" />
                                </div>
                                <div class="buy-now-list-text">Request Customization</div>
                            </a><a aria-label="Link Block" class="buy-now-item w-inline-block"
                                href="https://tncflow.com/contact-us" target="_blank">
                                <div class="buy-now-list-icon"><img alt="" class="buy-now-favicon" loading="lazy"
                                        src="https://cdn.prod.website-files.com/650a93508d45b1a9c66e5000/6925737934fc495ea29cd84d_Questions%2FSupport.svg" />
                                </div>
                                <div class="buy-now-list-text">Questions/Support</div>
                            </a></div>
                    </div>
                    <div class="buy-now-line"></div>
                </div>
            </footer>
        </div>

        <script crossorigin="anonymous" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            src="{{ asset('js/jquery-3.5.1.min.dc5e7f18c8.js') }}" type="text/javascript"></script>
        <script crossorigin="anonymous"
            integrity="sha384-4abIlA5/v7XaW1HMXKBgnUuhnjBYJ/Z9C1OSg4OhmVw9O3QeHJ/qJqFBERCDPv7G"
            src="{{ asset('js/webflow.schunk.36b8fb49256177c8.js') }}" type="text/javascript"></script>
        <script crossorigin="anonymous"
            integrity="sha384-+dIK8Fy6EgnxkHVvv/RPpCdqwmepLNoh7fUwfMPa9ULp2WViUOIZO4cR0kXM3vSj"
            src="{{ asset('js/webflow.schunk.c182100f90eca4ed.js') }}" type="text/javascript"></script>
        <script crossorigin="anonymous"
            integrity="sha384-FoTOZ1artRQ01VebRzls7er2OghKKwHoIL613ODIUHjRJjMe2F+qjXEFsmVHiWgt"
            src="{{ asset('js/webflow.schunk.bdf58efcee47c042.js') }}" type="text/javascript"></script>
        <script crossorigin="anonymous"
            integrity="sha384-Jo5OAlL9/iELlSHa6ygztzWhU/hGov03pXAHiSInarvy16b+rFXk5B6V5I4TSfNS"
            src="{{ asset('js/webflow.b02b4b38.ceba3e922881384a.js') }}" type="text/javascript"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function () {
                // Listen for click on any appointment booking buttons that target a specific doctor
                document.querySelectorAll('[data-doctor-id]').forEach(function (button) {
                    button.addEventListener('click', function () {
                        var doctorId = this.getAttribute('data-doctor-id');
                        var select = document.getElementById('doctor-select');
                        if (select && doctorId) {
                            select.value = doctorId;
                        }
                    });
                });

                // Reset doctor selection if they click the general "Book Appointment" button in the header
                var generalBtn = document.querySelector('.naviagtion-button');
                if (generalBtn) {
                    generalBtn.addEventListener('click', function () {
                        var select = document.getElementById('doctor-select');
                        if (select) {
                            select.value = '';
                        }
                    });
                }
            });
        </script>
</body>

</html>