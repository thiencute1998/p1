@extends('viewer.layouts.master')
@section('page-title')
    <style type="text/css">
        .grve-bg-banner {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0px;
            left: 0px;
            z-index: 0;
            -webkit-backface-visibility: hidden;
            -webkit-transition: opacity .4s ease;
            -moz-transition: opacity .4s ease;
            -ms-transition: opacity .4s ease;
            -o-transition: opacity .4s ease;
            transition: opacity .4s ease;
        }

        .grve-bg-banner img {
            position: absolute;
            width: 100%;
            max-width: none;
            top: 50%;
            left: 50%;
            -webkit-transform: translate3d(-50%, -50%, 0);
            transform: translate3d(-50%, -50%, 0);
        }

        @media screen and (max-width: 480px) {
            .grve-bg-banner img {
                height: 100%;
            }
        }
    </style>
    <div id="grve-feature-section" data-height="75" style="background-color: #ffffff;min-height:200px;"
         class="grve-with-video grve-custom-size grve-bg-parallax">
        <div class="grve-wrapper clearfix" style="height:75vh; min-height:200px;">
            <div class="grve-content grve-align-center-center" data-animation="fade-in">
                <div class="grve-container">
                    <div class="grve-title-content-wrapper grve-bg-none grve-align-center grve-content-large">
                        <div class="grve-title grve-text-light"><span>Sustainable Plastic Packaging</span></div>
                        <div class="grve-description grve-text-light"><span>Plastic Corrugated Packaging for the Food Industry</span>
                        </div>

                        <div class="grve-button-wrapper">
                            <a class="grve-btn grve-btn-1 grve-btn-large grve-round grve-bg-primary-1 grve-bg-hover-primary-2"
                               href="/products" target="_self">
                                <span>Learn more</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="grve-background-wrapper">
            <div class="grve-bg-image grve-bg-image-id-758"
                 style="background-image: url({{asset('assets/viewer/images/banner.jpg')}}); z-index: 1;"></div>
            <div class="grve-bg-overlay grve-bg-dark grve-opacity-30"></div>
{{--            <div class="grve-bg-banner">--}}
{{--                <img src="{{asset('assets/viewer/images/banner.jpg')}}" alt="">--}}
{{--            </div>--}}
            <div class="grve-bg-overlay" style="background-color:rgba(0,0,0,0.30);"></div>
        </div>
    </div>
@endsection
@section('page-content')
    <div id="page-63" class="post-63 page type-page status-publish hentry">
        <div
            class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-1x grve-bg-none">
            <div class="grve-container">
                <div class="grve-row grve-bookmark grve-columns-gap-30">
                    <div class="grve-column wpb_column grve-column-1">
                        <div class="grve-column-wrapper"><h3
                                class="grve-element grve-title grve-align-center grve-h1 grve-increase-heading grve-heading-120"
                                style=""><span>Food grade corrugated plastic boxes</span></h3>
                            <div class="grve-element grve-flexible-carousel grve-carousel grve-layout-1 grve-with-gap"
                                 style="">
                                <div class="grve-carousel-wrapper">
                                    <div class="grve-flexible-carousel-element " data-items="5"
                                         data-items-tablet-landscape="5" data-items-tablet-portrait="3"
                                         data-items-mobile="1" data-slider-autoplay="no" data-slider-speed="3000"
                                         data-slider-pause="yes" data-pagination-speed="400" data-pagination="no"
                                         data-slider-autoheight="no">
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-primary-1 fas fa-tint-slash"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Water resistant</h4></div>
                                                <p class="grve-leader-text">Doesn’t react to water, enabling it to be
                                                    fully submerged without detriment.</p></div>
                                        </div>
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-primary-1 fas fa-dumbbell"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Strong yet lightweight</h4></div>
                                                <p class="grve-leader-text">Durable and light, saving customers on
                                                    handling and transportation costs.</p></div>
                                        </div>
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-primary-1 fas fa-temperature-low"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Insulated</h4></div>
                                                <p class="grve-leader-text">Impervious to heat and moisture, reducing
                                                    chances of bacterial contamination.</p></div>
                                        </div>
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-primary-1 fas fa-shield-alt"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Leakproof</h4></div>
                                                <p class="grve-leader-text">Constructed to prevent leakage, preventing
                                                    messes and preserving contents.</p></div>
                                        </div>
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-primary-1 fas fa-magic"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Hygienic</h4></div>
                                                <p class="grve-leader-text">Dust free and sterile, protecting handlers
                                                    from contamination.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grve-element grve-align-center"><a href="/products/" title="Products"
                                                                           class="grve-btn grve-btn-large grve-square grve-bg-primary-1 grve-bg-hover-primary-2"><span>Learn more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grve-background-wrapper"></div>
        </div>
        <div
            class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-6x grve-padding-bottom-6x grve-bg-fixed">
            <div class="grve-container">
                <div class="grve-row grve-bookmark grve-columns-gap-30">
                    <div class="grve-column wpb_column grve-column-1 grve-headings-light" style="color:#ffffff;">
                        <div class="grve-column-wrapper"><h1
                                class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-120"
                                style=""><span>35 years in the packaging business</span></h1>
                            <div class="grve-element grve-align-center"><a href="/markets"
                                                                           class="grve-btn grve-btn-large grve-square grve-bg-primary-1 grve-bg-hover-primary-2"><span>Learn about the food markets we serve</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grve-background-wrapper">
                <div class="grve-bg-image grve-bg-image-id-758"
                     style="background-image: url(https://plastpac.com/wp-content/uploads/2020/08/markets-1920x864.jpg);"></div>
                <div class="grve-bg-overlay grve-bg-dark grve-opacity-30"></div>
            </div>
        </div>
        <div
            class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-6x grve-padding-bottom-6x grve-bg-none">
            <div class="grve-container">
                <div class="grve-row grve-bookmark grve-columns-gap-30">
                    <div class="grve-column wpb_column grve-column-1 grve-headings-light grve-align-center"
                         style="color:#ffffff;">
                        <div class="grve-column-wrapper"><h1
                                class="grve-element grve-title grve-align-center grve-h3 grve-increase-heading grve-heading-180"
                                style=""><span>We&#8217;re Green</span></h1>
                            <h3 class="grve-element grve-title grve-align-center grve-h3 grve-custom-font-1" style="">
                                <span>At Uno - Plastics, we believe that the way we treat the environment today will affect the world of tomorrow. In an effort to preserve our world for future generations, we’ve established eco-friendly business objectives that are in line with our green philosophy.</span>
                            </h3>
                            <div class="grve-empty-space grve-height-1x" style=""></div>
                            <div class="grve-element grve-flexible-carousel grve-carousel grve-layout-1 grve-with-gap"
                                 style="">
                                <div class="grve-carousel-wrapper">
                                    <div class="grve-flexible-carousel-element " data-items="3"
                                         data-items-tablet-landscape="3" data-items-tablet-portrait="3"
                                         data-items-mobile="1" data-slider-autoplay="no" data-slider-speed="3000"
                                         data-slider-pause="yes" data-pagination-speed="400" data-pagination="no"
                                         data-slider-autoheight="no">
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-white fas fa-tint"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Washable</h4></div>
                                            </div>
                                        </div>
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-white far fa-times-circle"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Anti-corrosive</h4></div>
                                            </div>
                                        </div>
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-white fas fa-user-shield"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Non-toxic</h4></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="grve-empty-space grve-height-1x" style=""></div>
                            <div class="grve-element grve-align-center"><a href="/green"
                                                                           class="grve-btn grve-btn-large grve-square grve-bg-primary-1 grve-bg-hover-primary-2"><span>Learn more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grve-background-wrapper">
                <div class="grve-bg-image grve-bg-center-center grve-bg-image-id-33"
                     style="background-image: url(https://plastpac.com/wp-content/uploads/2017/07/greenbg.jpg);"></div>
            </div>
        </div>
        <div
            class="grve-section grve-row-section grve-fullwidth-background grve-padding-top-1x grve-padding-bottom-1x grve-bg-none">
            <div class="grve-container">
                <div class="grve-row grve-bookmark grve-columns-gap-30">
                    <div class="grve-column wpb_column grve-column-1">
                        <div class="grve-column-wrapper"><h3
                                class="grve-element grve-title grve-align-center grve-h1 grve-increase-heading grve-heading-120"
                                style=""><span>Savings for you mean savings for the environment</span></h3>
                            <div class="grve-element grve-flexible-carousel grve-carousel grve-layout-1 grve-with-gap"
                                 style="">
                                <div class="grve-carousel-wrapper">
                                    <div class="grve-flexible-carousel-element " data-items="4"
                                         data-items-tablet-landscape="4" data-items-tablet-portrait="4"
                                         data-items-mobile="1" data-slider-autoplay="no" data-slider-speed="3000"
                                         data-slider-pause="yes" data-pagination-speed="400" data-pagination="no"
                                         data-slider-autoheight="no">
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-primary-1 fas fa-truck"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Foldable</h4></div>
                                                <p class="grve-leader-text">Our foldable boxes means a savings on
                                                    storage space for you and less transportation.</p></div>
                                        </div>
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-primary-1 fas fa-gas-pump"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Lightweight</h4></div>
                                                <p class="grve-leader-text">Our lightweight boxes mean savings on fuel
                                                    for you and a reduction in air pollution.</p></div>
                                        </div>
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-primary-1 fas fa-recycle"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Reusable</h4></div>
                                                <p class="grve-leader-text">Reusable boxes means a savings on process
                                                    and more water conservation for the environment.</p></div>
                                        </div>
                                        <div
                                            class="grve-element grve-box-icon grve-large grve-top-icon grve-align-center"
                                            style="">
                                            <div class="grve-wrapper-icon grve-no-shape" style=""><i
                                                    class="grve-text-primary-1 fas fa-trash"></i></div>
                                            <div class="grve-box-content">
                                                <div class="grve-box-title-wrapper"><h4 class="grve-box-title grve-h4">
                                                        Recyclable</h4></div>
                                                <p class="grve-leader-text">Recyclable boxes means savings on waste
                                                    removal for you and less waste ending up in landfills.</p></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="grve-background-wrapper"></div>
        </div>
    </div>
@endsection

