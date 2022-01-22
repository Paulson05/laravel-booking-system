@extends('frontend.template.master')
@section('body')
<header id="header" class="site-header header--sticky header--not-sticked site-header--absolute">
    <div class="site-header-main-wrapper clearfix">
        <div class="container siteheader-container">
            <div class="flex-col flex-basis-auto">
                <div class="flex-row site-header-row site-header-main">
                    <!-- left column - logo -->
                    <div class="flex-col flex flex-start-x flex-center-y flex-basis-auto flex-grow-0 site-header-col-left">
                        <div id="logo-container">
                            <div class="site-logo">
                                <a href="index-2.html" class="site-logo-anch">
                                    <img class="logo-img-sticky site-logo-img-sticky" src="img-assets/greekhotel-logo-white.png" alt="greekhotel" title="Greek Hotel">
                                    <img class="logo-img site-logo-img" src="img-assets/greekhotel-logo.png" alt="greekhotel" title="Greek Hotel" width="196" height="36">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- center column -->
                    <div class="flex-col flex flex-center-x flex-center-y flex-basis-auto flex-grow-0 site-header-col-center site-header-main-center">
                    </div>
                    <!-- right column - navigation menu -->
                    <div class="flex-col flex flex-end-x flex-center-y flex-basis-auto site-header-col-right site-header-main-right">
                        <div class="main-menu-wrapper">
                            <a href="tel:+9714-421-4988" class="sh-component btn-fullwhite ">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>+9714-421-4988</span>
                            </a>
                            <div class="sh-component menu-wrapper">
                                <a href="#" class="sh__hamburger-trigger">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--slider starts -->
<div class="clearfix">
    <div class="hg-slideshow">
        <div id="rev_slider_1_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="greekhotel-slider" data-source="gallery" style="background:rgba(102,102,102,0);padding:0px;">
            <!-- START REVOLUTION SLIDER 5.4.5.1 fullscreen mode -->
            <div id="rev_slider_1_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.5.1">
                <ul>	<!-- SLIDE  -->
                    <li data-index="rs-1" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slider_01cthumb.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_01c.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="8" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             id="slide-1-layer-1"
                             data-x=""
                             data-y=""
                             data-width="['full','full','full','full']"
                             data-height="['full','full','full','full']"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(12,12,12,0.1);"> </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-15"
                             id="slide-1-layer-3"
                             data-x="center" data-hoffset="8"
                             data-y="center" data-voffset="97"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":2770,"speed":600,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">We have the perfect accommodation for you. </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14"
                             id="slide-1-layer-2"
                             data-x="center" data-hoffset=""
                             data-y="center" data-voffset="-3"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;letter-spacing:20px;">Luxury Hotel &<br/>
                            Spa Resort </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-2" data-transition="slotzoom-vertical" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slider_09thumb.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_09.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgparallax="8" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             id="slide-2-layer-1"
                             data-x=""
                             data-y=""
                             data-width="['full','full','full','full']"
                             data-height="['full','full','full','full']"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(12,12,12,0.1);"> </div>

                        <!-- LAYER NR. 5 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-15"
                             id="slide-2-layer-3"
                             data-x="center" data-hoffset="7"
                             data-y="center" data-voffset="97"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":1430,"speed":610,"sfxcolor":"#ffffff","sfx_effect":"blockfromleft","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">We have the perfect accommodation for you. </div>

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14"
                             id="slide-2-layer-2"
                             data-x="center" data-hoffset=""
                             data-y="center" data-voffset="-2"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;letter-spacing:20px;">Luxury Hotel &<br/>
                            Spa Resort </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-3" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slider_11thumb.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_11.jpg"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="8" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             id="slide-3-layer-1"
                             data-x=""
                             data-y=""
                             data-width="['full','full','full','full']"
                             data-height="['full','full','full','full']"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(12,12,12,0.1);"> </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-15"
                             id="slide-3-layer-3"
                             data-x="center" data-hoffset="8"
                             data-y="center" data-voffset="97"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":2770,"speed":600,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">We have the perfect accommodation for you. </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14"
                             id="slide-3-layer-2"
                             data-x="center" data-hoffset=""
                             data-y="center" data-voffset="-3"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;letter-spacing:20px;">Luxury Hotel &<br/>
                            Spa Resort </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-4" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slider_11thumb.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_12.jpg"  alt=""  data-bgposition="center center" data-bgfit="normal" data-bgrepeat="no-repeat" data-bgparallax="8" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             id="slide-4-layer-1"
                             data-x=""
                             data-y=""
                             data-width="['full','full','full','full']"
                             data-height="['full','full','full','full']"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(12,12,12,0.1);"> </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-15"
                             id="slide-4-layer-3"
                             data-x="center" data-hoffset="8"
                             data-y="center" data-voffset="97"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":2770,"speed":600,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">We have the perfect accommodation for you. </div>

                        <!-- LAYER NR. 12 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14"
                             id="slide-4-layer-2"
                             data-x="center" data-hoffset=""
                             data-y="center" data-voffset="-3"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;letter-spacing:20px;">Luxury Hotel &<br/>
                            Spa Resort </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-5" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slider_13thumb.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_13.jpg"  alt=""  data-bgposition="center center" data-bgfit="normal" data-bgrepeat="no-repeat" data-bgparallax="8" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 13 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             id="slide-5-layer-1"
                             data-x=""
                             data-y=""
                             data-width="['full','full','full','full']"
                             data-height="['full','full','full','full']"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(12,12,12,0.1);"> </div>

                        <!-- LAYER NR. 14 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-15"
                             id="slide-5-layer-3"
                             data-x="center" data-hoffset="8"
                             data-y="center" data-voffset="97"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":2770,"speed":600,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">We have the perfect accommodation for you. </div>

                        <!-- LAYER NR. 15 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14"
                             id="slide-5-layer-2"
                             data-x="center" data-hoffset=""
                             data-y="center" data-voffset="-3"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;letter-spacing:20px;">Luxury Hotel &<br/>
                            Spa Resort </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-6" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slider_14thumb.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_14.jpg"  alt=""  data-bgposition="center center" data-bgfit="normal" data-bgrepeat="no-repeat" data-bgparallax="8" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 16 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             id="slide-6-layer-1"
                             data-x=""
                             data-y=""
                             data-width="['full','full','full','full']"
                             data-height="['full','full','full','full']"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(12,12,12,0.1);"> </div>

                        <!-- LAYER NR. 17 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-15"
                             id="slide-6-layer-3"
                             data-x="center" data-hoffset="8"
                             data-y="center" data-voffset="97"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":2770,"speed":600,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">We have the perfect accommodation for you. </div>

                        <!-- LAYER NR. 18 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14"
                             id="slide-6-layer-2"
                             data-x="center" data-hoffset=""
                             data-y="center" data-voffset="-3"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;letter-spacing:20px;">Luxury Hotel &<br/>
                            Spa Resort </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-7" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slider_15thumb.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_15.jpg"  alt=""  data-bgposition="center center" data-bgfit="normal" data-bgrepeat="no-repeat" data-bgparallax="8" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 19 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             id="slide-7-layer-1"
                             data-x=""
                             data-y=""
                             data-width="['full','full','full','full']"
                             data-height="['full','full','full','full']"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(12,12,12,0.1);"> </div>

                        <!-- LAYER NR. 20 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-15"
                             id="slide-7-layer-3"
                             data-x="center" data-hoffset="8"
                             data-y="center" data-voffset="97"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":2770,"speed":600,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">We have the perfect accommodation for you. </div>

                        <!-- LAYER NR. 21 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14"
                             id="slide-7-layer-2"
                             data-x="center" data-hoffset=""
                             data-y="center" data-voffset="-3"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;letter-spacing:20px;">Luxury Hotel &<br/>
                            Spa Resort </div>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-8" data-transition="slotzoom-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/slider_19thumb.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="images/slider_19.jpg"  alt=""  data-bgposition="center center" data-bgfit="normal" data-bgrepeat="no-repeat" data-bgparallax="8" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 22 -->
                        <div class="tp-caption tp-shape tp-shapewrapper  tp-resizeme"
                             id="slide-8-layer-1"
                             data-x=""
                             data-y=""
                             data-width="['full','full','full','full']"
                             data-height="['full','full','full','full']"

                             data-type="shape"
                             data-basealign="slide"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 5;background-color:rgba(12,12,12,0.1);"> </div>

                        <!-- LAYER NR. 23 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-15"
                             id="slide-8-layer-3"
                             data-x="center" data-hoffset="8"
                             data-y="center" data-voffset="97"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":2770,"speed":600,"sfxcolor":"#ffffff","sfx_effect":"blockfromright","frame":"0","from":"z:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['inherit','inherit','inherit','inherit']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 6; white-space: nowrap; font-size: 24px; line-height: 24px; font-weight: 400; color: #ffffff; letter-spacing: 0px;font-family:Poppins;">We have the perfect accommodation for you. </div>

                        <!-- LAYER NR. 24 -->
                        <div class="tp-caption   tp-resizeme rs-parallaxlevel-14"
                             id="slide-8-layer-2"
                             data-x="center" data-hoffset=""
                             data-y="center" data-voffset="-3"
                             data-width="['auto']"
                             data-height="['auto']"

                             data-type="text"
                             data-responsive_offset="on"

                             data-frames='[{"delay":10,"split":"chars","splitdelay":0.05,"speed":2000,"split_direction":"forward","frame":"0","from":"x:[105%];z:0;rX:45deg;rY:0deg;rZ:90deg;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                             data-textAlign="['center','center','center','center']"
                             data-paddingtop="[0,0,0,0]"
                             data-paddingright="[0,0,0,0]"
                             data-paddingbottom="[0,0,0,0]"
                             data-paddingleft="[0,0,0,0]"

                             style="z-index: 7; white-space: nowrap; font-size: 72px; line-height: 90px; font-weight: 500; color: #ffffff; letter-spacing: 0px;font-family:Poppins;text-transform:uppercase;letter-spacing:20px;">Luxury Hotel &<br/>
                            Spa Resort </div>
                    </li>
                </ul>
                <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>	</div>
        </div><!-- END REVOLUTION SLIDER -->
    </div>
</div>
<!-- end clearfix -->

<!--Search section  -->
<div class="container search-container">
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="home-container">
                <!--floating icon-->
                <div class="hg-iconbox--center-icon txt-center hg-iconbox--floating">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </div>
                </div>
                <!--search form-->
                <div class="form-container">
                    <h2>SEARCH YOUR ROOM</h2>
                    <form action="https://demos.hogash.com/greek-html/searchresult.html" style="z-index:9998;">
                        <div class="flex-row form-row">
                            <!--Coloana adults  -->
                            <div class="flex-col">
                                <!--date picker arrival-->
                                <div class="hg-form-component-input form-group">
                                    <label for="reservation-startdate">Arrival date</label>
                                    <div class='input-group date'>
                                        <input id="reservation-startdate" type='text' class="form-control js-datepicker" value placeholder="Arrival Date"/>

                                    </div>
                                </div>
                            </div>
                            <!---date pickerdeparture  -->
                            <div class="flex-col">
                                <div class="hg-form-component-input form-group">
                                    <label for="reservation-enddate">Departure date</label>
                                    <div class='input-group date'>
                                        <input id="reservation-enddate" type='text' class="form-control js-datepicker" value placeholder="Departure Date" />

                                    </div>
                                </div>
                            </div>

                            <!--Coloana adults  -->
                            <div class="flex-col">
                                <div class="hg-form-component-input">
                                    <label for="reservation-people">Adults</label>
                                    <select id="reservation-people" name="adults">
                                        <optgroup label="Adults">
                                            <option value="0">Adults</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>

                            <!--Coloana children  -->
                            <div class="flex-col">
                                <div class="hg-form-component-input">
                                    <label for="reservation-children">Children</label>
                                    <select id="reservation-children" name="children">
                                        <optgroup label="Children">
                                            <option value="0">Children</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <!--Coloana submit -->
                            <div class="flex-col flex-col-end">
                                <div class="hg-form-component">
                                    <button class="hb_btn btn-gradient" type="submit"> Check Availability</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- end search container -->

<!-- start wellcome section -->
<div class="hg-wcome-container container">
    <div class="hg-wcome-content">
        <h3>Welcome</h3>
        <h4>Staying in here doesn't have to cost a fortune. Book your stay with us and receive one of the lowest rates of any hostel in the city!
        </h4>
    </div>
</div>
<!-- start separator -->
<div class="clearfix hg-separator">
    <span class="hg-separator__line hg-separator__line--left"></span>
    <span class="hg-separator__icon"></span>
    <span class="hg-separator__line hg-separator__line--right"></span>
</div>
<!-- end separator -->
<!-- start icon box section -->

<div class="row hg-content-iconbox">
    <div class="col-md-3 col-sm-3">
        <div class="hg-iconbox">
            <div class="hg-iconbox__icon-wrapper">
                <span class="hg-iconbox__icon icon-travel-56 " style="font-size: 40px;"></span>
            </div>
            <div class="hg-iconbox__content-wrapper">
                <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                    <h3>
                        <a href="#">MAYFAIR HOTEL & SPA</a>
                    </h3>
                </div>
                <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                    <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

            </div>
        </div>
    </div><!-- end column -->
    <div class="col-md-3 col-sm-3">
        <div class="hg-iconbox">
            <div class="hg-iconbox__icon-wrapper bed_wrapper">
                <span class="hg-iconbox__icon icon-travel-55 bed" style="font-size:72px;"></span>
            </div>
            <div class="hg-iconbox__content-wrapper">
                <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                    <h3>
                        <a href="#">ROOMS</a>
                    </h3>
                </div>
                <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                    <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

            </div>
        </div>
    </div><!-- end column -->
    <div class="col-md-3 col-sm-3">
        <div class="hg-iconbox">
            <div class="hg-iconbox__icon-wrapper">
                <span class="hg-iconbox__icon icon-travel-57" style="font-size: 40px;"></span>
            </div>
            <div class="hg-iconbox__content-wrapper">
                <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                    <h3>
                        <a href="#">AMENITIES</a>
                    </h3>
                </div>
                <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                    <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

            </div>
        </div>
    </div><!-- end column -->
    <div class="col-md-3 col-sm-3">
        <div class="hg-iconbox">
            <div class="hg-iconbox__icon-wrapper boat_wrapper">
                <span class="hg-iconbox__icon icon-travel-46 boat" style="font-size: 62px;"></span>
            </div>
            <div class="hg-iconbox__content-wrapper">
                <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                    <h3>
                        <a href="#">ACTIVITIES</a>
                    </h3>
                </div>
                <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                    <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>

            </div>
        </div>
    </div><!-- end column -->
</div>

<!-- end icon box section -->
<!-- start separator -->
<div class="clearfix hg-separator--icon-no"></div>

<!-- end separator -->
<!-- start gallery section -->
<section class="hg-gallery">
    <div class="hg-gallery-container container">
        <div class="hg-gallery-content">
            <h3>GALLERY</h3>
            <h4>These are real photos from our customers.
            </h4>
        </div>
    </div>
    <!-- start gallery -->
    <div class="hg-gallery--row container">
        <div class="col-md-12 col-sm-12 hg-gallery__photo-column">
            <div class="hg-gridGallery">
                <div class="hg-gridGallery-slider">
                    <!--first gallery-->
                    <div class="hg-gridGallery-jstrigger gridGallery--cols3">
                        <!--big picture-->

                        <div class="gridGallery__item-w2">
                            <div class="hg-gridGallery__wrapper">
                                <a href="images/glr1.jpg" class="hg-gridGallery--image_link sh__zoom--on">
                                    <div class="hg-gridGallery__img-container">
                                        <img src="images/glr1.jpg" alt="glr1" width="780" />
                                    </div>
                                    <i class="hg-icon glyphicon glyphicon-search hg-icon__circled-icon"></i>
                                </a>
                            </div>
                        </div>
                        <!--small picture-->
                        <div class="hg-gridGallery--item">
                            <div class="hg-gridGallery__wrapper">
                                <a href="images/glr2.jpg" class="hg-gridGallery--image_link sh__zoom--on">
                                    <div class="hg-gridGallery__img-container">
                                        <img src="images/glr2.jpg" alt="glr1" width="740">
                                    </div>
                                    <i class="hg-icon glyphicon glyphicon-search hg-icon__circled-icon"></i>
                                </a>
                            </div>
                        </div>
                        <!--small picture-->
                        <div class="hg-gridGallery--item">
                            <div class="hg-gridGallery__wrapper">
                                <a href="images/glr3.jpg" class="hg-gridGallery--image_link sh__zoom--on">
                                    <div class="hg-gridGallery__img-container">
                                        <img src="images/glr3.jpg" alt="glr1" width="740">
                                    </div>
                                    <i class="hg-icon glyphicon glyphicon-search hg-icon__circled-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end first gallery-->
                    <!--start second gallery-->
                    <div class="hg-gridGallery-jstrigger gridGallery--cols2">
                        <!--small picture-->
                        <div class="gridGallery--cols2 gridGallery__item">
                            <div class="hg-gridGallery__wrapper">
                                <a href="images/room_24.jpg" class="hg-gridGallery--image_link sh__zoom--on">
                                    <div class="hg-gridGallery__img-container">
                                        <img src="images/room_24.jpg" alt="glr1" width="780" />
                                    </div>
                                    <i class="hg-icon glyphicon glyphicon-search hg-icon__circled-icon"></i>
                                </a>
                            </div>
                        </div>

                        <!--small picture-->

                        <div class="gridGallery--cols2 gridGallery__item">
                            <div class="hg-gridGallery__wrapper">
                                <a href="images/slider_10.jpg" class="hg-gridGallery--image_link sh__zoom--on">
                                    <div class="hg-gridGallery__img-container">
                                        <img src="images/slider_10.jpg" alt="glr1" width="740">
                                    </div>
                                    <i class="hg-icon glyphicon glyphicon-search hg-icon__circled-icon"></i>
                                </a>
                            </div>
                        </div>


                        <!--big picture-->
                        <div class="gridGallery--cols2 gridGallery__item-w2">
                            <div class="hg-gridGallery__wrapper hg-gridGallery__item-h1">
                                <a href="images/room_18.jpg" class="hg-gridGallery--image_link sh__zoom--on">
                                    <div class="img-container">
                                        <img src="images/room_18.jpg" alt="glr1" width="740">
                                    </div>
                                    <i class="hg-icon glyphicon glyphicon-search hg-icon__circled-icon"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div><!--end slick slider-->
            </div>
        </div>

        <div class="col-md-12 col-sm-12 hg-gallery__content-column">
            <div class="hg-gallery--row-title row">
                <div class="col md-8 col-sm-8">
                    <div class="clearfix hg-title-block">
                        <h3 class="hg-title-block__title">Mayfair Hotel & Spa in Coconut Grove</h3>
                        <h4 class="hg-title-block__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</h4>
                    </div>
                </div>

                <div class="col md-4 col-sm-4">
                    <div class="hg-gallery--text-inner-content">
                        <button onclick="window.location.href='rooms.html'" class="hg-gallery-but btn-fullwhite">View all</button>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- end row gallery -->
</section>
<!-- start separator -->
<div class="clearfix hg-separator--icon-no">

</div>

<!-- end separator -->
<section class="hg-video-section">
    <div class="hg-video-container container">
        <div class="hg-row row">

            <div class="col-md-6 col-sm-6">
                <div class="hg-video-container--content">
                    <div class="clearfix hg-title-block">
                        <h3 class="hg-title-block__title">A picture is worth a thousand words, but a video is priceless.</h3>
                        <h4 class="hg-title-block__subtitle">Check out this amazing video tour of our hotel and the surroundings made by<a href="#"> Justbaj </a>in one of his trips to Santorini. Also give him a <a href="#">follow</a>.</h4>
                    </div>
                    <p class="hg-video-container__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.
                    </p>
                    <a href="#" class="hg-video-container__but btn-fullwhite">View all</a>
                </div>

            </div>
            <!-- right column video -->
            <div class="col-md-6 col-sm-6">

                <div class="hg-video-container--media-container"><!-- flex div -->
                    <div class="hg-bgsource">
                        <div class="hg-video-container__bg"></div>
                    </div><!-- bg img -->
                    <div class="hg-video-container__iconbox-video"><!-- flex item-->
                        <a href="https://www.youtube.com/watch?v=CtEp4PZHsv8" class="hg__playVideo">
                            <img src="img-assets/playbtn.png" class="hg-icon-video__icon img-responsive" alt="playbtn" width="110" height="110">
                        </a>
                    </div>
                </div><!-- end flex div -->

            </div>
        </div><!-- end video row -->
    </div><!-- end video container -->
</section>
<div class="hg-promotions-container container">
    <div class="hg-gpromotions-content">
        <h3>PROMOTIONS</h3>
        <h4>We have a few special promotions for our faithful customers.
        </h4>
    </div>
</div>
<section class="hg-promotions">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 hg-prom-col">
                <div class="hg-prom-content">
                    <div class="hg-prom-content--imgbox">
                        <div class="hg-prom-content__wrapper">
                            <a href="#" class="imglink">
                                <img src="images/room_12.jpg" alt title="room" class="img-responsive image-boxes-img cover-fit-img">
                            </a>
                        </div>
                    </div>
                    <div class="hg-prom-content--txt">
                        <div class="hg-title-block">
                            <h3 class="hg-title-block__title">Free Scooter for 1 day.</h3>
                            <h4 class="hg-title-block__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 hg-prom-col">
                <div class="hg-prom-content">
                    <div class="hg-prom-content--imgbox">
                        <div class="hg-prom-content__wrapper">
                            <a href="#" class="imglink">
                                <img src="images/room_13.jpg" alt title="room" class="img-responsive image-boxes-img cover-fit-img">
                            </a>
                        </div>
                    </div>
                    <div class="hg-prom-content--txt">
                        <div class="hg-title-block">
                            <h3 class="hg-title-block__title">Free Dinner for 2 persons.</h3>
                            <h4 class="hg-title-block__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 hg-prom-col">
                <div class="hg-prom-content">
                    <div class="hg-prom-content--imgbox">
                        <div class="hg-prom-content__wrapper">
                            <a href="#" class="imglink">
                                <img src="images/slider_13.jpg" alt title="room" class="img-responsive image-boxes-img cover-fit-img">
                            </a>
                        </div>
                    </div>
                    <div class="hg-prom-content--txt">
                        <div class="hg-title-block">
                            <h3 class="hg-title-block__title">Fee Motor boat for 1 day.</h3>
                            <h4 class="hg-title-block__subtitle">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- end promotions section -->

<section class="hg-reviews"><!--flex -->

    <div class="hg-reviews-bg rellax" data-rellax-percentage="0.9" style="background-image: url('images/santorinipano.jpg')">
        <div class="overlay--opacity">
        </div>
    </div>

    <!-- end bg -->
    <div class="hg-reviews--custom-height container"><!-- flex center -->
        <div class="hg-testimonialSlider" style="z-index:9;">

            <!-- testimonial1 -->
            <div class="testim">
                <div class=" hg-title-block">
                    <h3 class="hg-title-block__title">Gunter</h3>
                    <h4 class="hg-title-block__subtitle">Thanks once more for the good time in your lovely apartment, which we enjoyed very much! It was very comfortable, clean and equipped with love. You helped us a lot with your tips! The buss station is very near and it was easy to find and go to all destinations by buss.</h4>
                </div>
                <div class="hg-testimonialSlider--image-boxes">
                    <img class="hg-testimonialSlider--image-boxes__element img-responsive" src="img-assets/rating-5.png" alt="rating5" >
                </div>

            </div>

            <!-- testimonial2 -->
            <div class="testim">
                <div class=" hg-title-block">
                    <h3 class="hg-title-block__title">Patrick Neilson</h3>
                    <h4 class="hg-title-block__subtitle">We stayed at a Keys Please for 5 nights and enjoyed every moment of it. All the staff we extremely helpful, attentive and friendly. Celine greeted us and gave us a tour of the hotel properties before taking us to our room. The room is modern, clean, spacious, and has nice amenities. </h4>
                </div>
                <div class="hg-testimonialSlider--image-boxes">
                    <img class="hg-testimonialSlider--image-boxes__element img-responsive" src="img-assets/rating-4.png" alt="rating5" width="145" height="62">
                </div>
            </div>
        </div>
    </div><!-- end custom height container -->
</section>

<section class="hg-rewards">
    <div class="hg-bgsource">
        <div class="hg-rewards__bg">
        </div>
    </div>
    <div class="hg-rewards--rewards container">
        <div class="hg-title-block">
            <h3 class="hg-title-block__title">GET KEYS PLEASE REWARDS. GET CONNECTED.</h3>
            <h4 class="hg-title-block__subtitle">Tap into the power of perks, points, and exclusive deals. All from Keys Please Rewards.</h4>
            <a href="rooms.html" class="btn-fullwhite">View all</a>
        </div>
    </div>
</section>

<section class="hg-icon_section">
    <div class="hg-icon-bottom container">


        <div class="hg-title-block txt-center">
            <h3 class="hg-title-block__title">SERVICES</h3>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="hg-iconbox--center-icon txt-center ">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__icon icon-travel-61"></span>
                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                FREE WIFI
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            </p>
                        </div>

                    </div>
                </div>
            </div><!-- end column -->
            <div class="col-md-3 col-sm-3">
                <div class="hg-iconbox--center-icon txt-center ">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__icon icon-travel-62"></span>
                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                AIR CONDITIONING
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            </p>
                        </div>

                    </div>
                </div>
            </div><!-- end column -->
            <div class="col-md-3 col-sm-3">
                <div class="hg-iconbox--center-icon txt-center ">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__icon icon-travel-54"></span>
                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                PRIVATE BATHROOM
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            </p>
                        </div>

                    </div>
                </div>
            </div><!-- end column -->
            <div class="col-md-3 col-sm-3">
                <div class="hg-iconbox--center-icon txt-center ">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__icon icon-travel-63"></span>
                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                SAFE
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            </p>
                        </div>

                    </div>
                </div>
            </div><!-- end column -->

            <div class="col-md-3 col-sm-3">
                <div class="hg-iconbox--center-icon txt-center ">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__icon icon-travel-51"></span>
                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                FLAT SCREEN TV
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            </p>
                        </div>

                    </div>
                </div>
            </div><!-- end column -->
            <div class="col-md-3 col-sm-3">
                <div class="hg-iconbox--center-icon txt-center ">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__icon icon-travel-16"></span>
                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                FREE MINI BAR
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            </p>
                        </div>

                    </div>
                </div>
            </div><!-- end column -->
            <div class="col-md-3 col-sm-3">
                <div class="hg-iconbox--center-icon txt-center ">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__icon icon-travel-19"></span>
                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                ROOM SERVICE
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            </p>
                        </div>

                    </div>
                </div>
            </div><!-- end column -->
            <div class="col-md-3 col-sm-3">
                <div class="hg-iconbox--center-icon txt-center ">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__icon icon-lounge2"></span>
                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                POOL
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                            </p>
                        </div>

                    </div>
                </div>
            </div><!-- end column -->



        </div>
    </div>
</section>
<!-- end icon box section -->
<!-- start google maps -->
<div id="map"></div>
<!-- end google maps -->

<section class="hg-contact"><!-- start services section -->
    <div class="container">
        <div class="hg-title-block txt-center">
            <h3 class="hg-title-block__title">SERVICES</h3>
        </div>
        <div class="row">
            <!--left column -->
            <div class="col-md-4 col-sm-4 ">
                <div class="hg-iconbox hg-iconbox--small">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__gly glyphicon glyphicon-home"></span>

                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                Greek Hotel
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">467 Devonshire Drive <br>Ravenna, OH 44266
                            </p>
                        </div>

                    </div>
                </div>

                <div class="hg-iconbox hg-iconbox--small">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__gly glyphicon glyphicon-envelope"></span>
                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                EMAIL
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">Hello@hogash.com
                            </p>
                        </div>

                    </div>
                </div>

                <div class="hg-iconbox hg-iconbox--small">
                    <div class="hg-iconbox__icon-wrapper">
                        <span class="hg-iconbox__gly glyphicon glyphicon-earphone" ></span>
                    </div>
                    <div class="hg-iconbox__content-wrapper">
                        <div class="hg-iconbox__wrapper hg-iconbox__title-wrapper">
                            <h3>
                                PHONE NUMBER
                            </h3>
                        </div>
                        <div class="hg-iconbox__wrapper hg-iconbox__desc-wrapper">
                            <p class="hg-iconbox__desc">01800 1800 1234
                            </p>
                        </div>

                    </div>
                </div>
            </div>
            <!--right column -->
            <div class="col-md-8 col-sm-8 ">
                <form class="hg-contactform" method="post" action="https://demos.hogash.com/greek-html/contactForm.php">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="hg-form-component">
                                <input class="hg-input" type="text" name="name" id="text_field" placeholder=""/>
                                <label for="text_field">Name</label>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="hg-form-component">
                                <input class="hg-input" type="email" name="email" id="email_field" placeholder="" />
                                <label for="email_field">Email</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="hg-form-component">
                                <textarea class="hg-input" name="message" id="text_area" cols="40" rows="6" placeholder=""></textarea>
                                <label for="text_area">Message</label>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="hg-form-component">
                                <input type="hidden" name="cf_type" value="cf_1" />
                                <input type="hidden" class="hg-redirect-to" value="" />
                                <div class="form-message"></div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="hg-form-component">
                                <button class="hb_btn btn-gradient hg-submitcontact" type="submit">Send message</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div><!-- end container -->
</section><!-- end services section -->
<div class="hg-insta"><!-- start services section -->
    <div class="container">
        <div class="hg-insta--row row">
            <div class="col-md-12 col-sm-12">
                <div class="img-box">
                    <img style="img-responsive" src="img-assets/instagram-logo.png" alt="instagram" width="185">
                </div>
                <p>Check out some pictures from our instagram page.
                    <span style="color:#7f82f0;"> @greekhotel</span>
                </p>
            </div>
        </div>
    </div>
</div><!-- end instagram section -->
<!--  SLIDER GALLERY -->
<div class="hg-slider">
    <div class="row">
        <div class="hg-slider-gallery">
            <div class="col-md-12 col-sm-12">

                <!-- first gallery -->
                <div class="hg-slider-jstrigger">
                    <!--picture-->
                    <div class="hg-slider__item">
                        <div class="hg-slider__wrapper">
                            <a href="../../scontent.cdninstagram.com/vp/9fa1ef801d84a6746f59a36adfca2c56/5BBEB799/t51.2885-15/s640x640/sh0.08/e35/16465100_1850201941889954_8652312515163717632_n.jpg" target="_blank" class="hg-slider--image_link">
                                <span class="hg-slider-media-cover"></span>
                                <div>
													 <span class="instashow-gallery-media-info">
														 	<span class="instashow-gallery-media-info-description">"morphosis to construct kolon corporate and research headquarters in seoul http://crwd.fr/2klu3Ak"
															</span>
													</span>
                                </div>
                                <div class="hg-slider__img-container">
                                    <img src="../../scontent.cdninstagram.com/vp/9fa1ef801d84a6746f59a36adfca2c56/5BBEB799/t51.2885-15/s640x640/sh0.08/e35/16465100_1850201941889954_8652312515163717632_n.jpg" alt="morphosis to construct kolon" style="width:158%;"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end picture-->

                    <!--picture-->
                    <div class="hg-slider__item">
                        <div class="hg-slider__wrapper">
                            <a href="../../scontent.cdninstagram.com/vp/3563605ad150aac44fd0f6bc3a1a8d2d/5BA80783/t51.2885-15/sh0.08/e35/p640x640/16465133_264062570683205_5631728721023991808_n.jpg" target="_blank" class="hg-slider--image_link">
                                <span class="hg-slider-media-cover"></span>
                                <div>
													 <span class="instashow-gallery-media-info">
														 	<span class="instashow-gallery-media-info-description">Perfect place for skating #Turkey photo @doyoutravel
															</span>
													</span>
                                </div>
                                <div class="hg-slider__img-container">
                                    <img src="../../scontent.cdninstagram.com/vp/3563605ad150aac44fd0f6bc3a1a8d2d/5BA80783/t51.2885-15/sh0.08/e35/p640x640/16465133_264062570683205_5631728721023991808_n.jpg" alt="Photo @oscarpedroso"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end picture-->
                    <!--picture-->
                    <div class="hg-slider__item">
                        <div class="hg-slider__wrapper">
                            <a href="../../scontent.cdninstagram.com/vp/a8699a9132fe2d6607a5719813837981/5BBC15DA/t51.2885-15/s640x640/sh0.08/e35/16583600_407800622900646_5213400345207635968_n.jpg" target="_blank" class="hg-slider--image_link">
                                <span class="hg-slider-media-cover"></span>
                                <div>
													 <span class="instashow-gallery-media-info">
														 	<span class="instashow-gallery-media-info-description">"I know this is photoshopped but would'nt be awesome to have a view like that? @luxuriesmagazines"
															</span>
													</span>
                                </div>
                                <div class="hg-slider__img-container">
                                    <img src="../../scontent.cdninstagram.com/vp/a8699a9132fe2d6607a5719813837981/5BBC15DA/t51.2885-15/s640x640/sh0.08/e35/16583600_407800622900646_5213400345207635968_n.jpg" alt="Photo @oscarpedroso"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end picture-->
                    <!--picture-->
                    <div class="hg-slider__item">
                        <div class="hg-slider__wrapper">
                            <a href="../../scontent.cdninstagram.com/vp/ee1455535ddbf65f6e85181b26141dad/5BB6FB03/t51.2885-15/s640x640/sh0.08/e35/16583185_253465398442151_6187232236241158144_n.jpg" target="_blank" class="hg-slider--image_link">
                                <span class="hg-slider-media-cover"></span>
                                <div>
													 <span class="instashow-gallery-media-info">
														 	<span class="instashow-gallery-media-info-description">Modern House Design
															</span>
													</span>
                                </div>
                                <div class="hg-slider__img-container">
                                    <img src="../../scontent.cdninstagram.com/vp/ee1455535ddbf65f6e85181b26141dad/5BB6FB03/t51.2885-15/s640x640/sh0.08/e35/16583185_253465398442151_6187232236241158144_n.jpg" alt="Photo @oscarpedroso"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end picture-->
                    <!--picture-->
                    <div class="hg-slider__item">
                        <div class="hg-slider__wrapper">
                            <a href="../../scontent.cdninstagram.com/vp/475a8634cf94ad3e68fccd75b405b0a0/5BB68819/t51.2885-15/sh0.08/e35/p640x640/16464581_382458722125817_5434873821339320320_n.jpg" target="_blank" class="hg-slider--image_link">
                                <span class="hg-slider-media-cover"></span>
                                <div>
													 <span class="instashow-gallery-media-info">
														 	<span class="instashow-gallery-media-info-description">" @chrisburkard #travel #destination #landscape #mountain #dream #travel #wanderlust #nomad #travels #traveler #traveller #traveling #worlderlust #world #inspiration #motivation #beautifulplaces #growth #growth #personaltrainer #earth #travel_dreamtrips #dreamtrips #personalgrowth #trips"
															</span>
													</span>
                                </div>
                                <div class="hg-slider__img-container">
                                    <img src="../../scontent.cdninstagram.com/vp/475a8634cf94ad3e68fccd75b405b0a0/5BB68819/t51.2885-15/sh0.08/e35/p640x640/16464581_382458722125817_5434873821339320320_n.jpg" alt="Photo @oscarpedroso"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end picture-->
                </div>
            </div><!--end column-->

            <div class="col-md-12 col-sm-12">
                <!-- first gallery -->
                <div class="hg-slider-jstrigger">
                    <!--picture-->
                    <div class="hg-slider__item">
                        <div class="hg-slider__wrapper">
                            <a href="../../scontent.cdninstagram.com/vp/dc6b230a4bae4bea69876ddbcc2972e8/5B8E3E1E/t51.2885-15/sh0.08/e35/p640x640/16465174_1819455308306437_7842325620653555712_n.jpg" target="_blank" class="hg-slider--image_link">
                                <span class="hg-slider-media-cover"></span>
                                <div>
													 <span class="instashow-gallery-media-info">
															<span class="instashow-gallery-media-info-description">House Goals @exclusiv http://crwd.fr/2klu3Ak"
															</span>
													</span>
                                </div>
                                <div class="hg-slider__img-container">
                                    <img src="../../scontent.cdninstagram.com/vp/dc6b230a4bae4bea69876ddbcc2972e8/5B8E3E1E/t51.2885-15/sh0.08/e35/p640x640/16465174_1819455308306437_7842325620653555712_n.jpg" alt="morphosis to construct kolon"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end picture-->

                    <!--picture-->
                    <div class="hg-slider__item">
                        <div class="hg-slider__wrapper">
                            <a href="../../scontent.cdninstagram.com/vp/3396d705ee4da841bc016f9b22c0e303/5BAC45BC/t51.2885-15/s640x640/sh0.08/e35/16583519_1845504382338312_4936911520584957952_n.jpg" target="_blank" class="hg-slider--image_link">
                                <span class="hg-slider-media-cover"></span>
                                <div>
													 <span class="instashow-gallery-media-info">
															<span class="instashow-gallery-media-info-description">Nights in the Arctic @daniel_ernst
															</span>
													</span>
                                </div>
                                <div class="hg-slider__img-container">
                                    <img src="../../scontent.cdninstagram.com/vp/3396d705ee4da841bc016f9b22c0e303/5BAC45BC/t51.2885-15/s640x640/sh0.08/e35/16583519_1845504382338312_4936911520584957952_n.jpg" alt="Photo @oscarpedroso"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end picture-->
                    <!--picture-->
                    <div class="hg-slider__item">
                        <div class="hg-slider__wrapper">
                            <a href="../../scontent.cdninstagram.com/vp/5b0d0a48c1a8bf5e47a5c46644b73aa9/5BC46F6E/t51.2885-15/sh0.08/e35/p640x640/16583478_375771706135772_484318314936401920_n.jpg" target="_blank" class="hg-slider--image_link">
                                <span class="hg-slider-media-cover"></span>
                                <div>
													 <span class="instashow-gallery-media-info">
															<span class="instashow-gallery-media-info-description">"Photo by @erikmcr #travel #destination #landscape #mountain #dream #travel #wanderlust #nomad #travels #traveler #traveller #traveling #worlderlust #world #inspiration #motivation #beautifulplaces #growth #growth #personaltrainer #earth #travel_dreamtrips #dreamtrips #personalgrowth #trips"
															</span>
													</span>
                                </div>
                                <div class="hg-slider__img-container">
                                    <img src="../../scontent.cdninstagram.com/vp/5b0d0a48c1a8bf5e47a5c46644b73aa9/5BC46F6E/t51.2885-15/sh0.08/e35/p640x640/16583478_375771706135772_484318314936401920_n.jpg" alt="Photo @oscarpedroso"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end picture-->
                    <!--picture-->
                    <div class="hg-slider__item">
                        <div class="hg-slider__wrapper">
                            <a href="../../scontent.cdninstagram.com/vp/af958c6473b2ebafb599269b66784b99/5BBCCDEC/t51.2885-15/sh0.08/e35/p640x640/16230595_241079653016947_1451677222103416832_n.jpg" target="_blank" class="hg-slider--image_link">
                                <span class="hg-slider-media-cover"></span>
                                <div>
													 <span class="instashow-gallery-media-info">
															<span class="instashow-gallery-media-info-description">Newport beach CA
															</span>
													</span>
                                </div>
                                <div class="hg-slider__img-container">
                                    <img src="../../scontent.cdninstagram.com/vp/af958c6473b2ebafb599269b66784b99/5BBCCDEC/t51.2885-15/sh0.08/e35/p640x640/16230595_241079653016947_1451677222103416832_n.jpg" alt="Photo @oscarpedroso"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end picture-->
                    <!--picture-->
                    <div class="hg-slider__item">
                        <div class="hg-slider__wrapper">
                            <a href="../../scontent.cdninstagram.com/vp/9ecb209d2d7a9b319c9c98034a7a3e4f/5BC4EA36/t51.2885-15/s640x640/sh0.08/e35/16464382_186476235168027_7496941010887376896_n.jpg" target="_blank" class="hg-slider--image_link">
                                <span class="hg-slider-media-cover"></span>
                                <div>
													 <span class="instashow-gallery-media-info">
															<span class="instashow-gallery-media-info-description">Dream Island at the Maldives
																" @saadde #travel #destination #landscape #mountain #dream #travel #wanderlust #nomad #travels #traveler #traveller #traveling #worlderlust #world #inspiration #motivation #beautifulplaces #growth #growth #personaltrainer #earth #travel_dreamtrips #dreamtrips #personalgrowth #trips"
															</span>
													</span>
                                </div>
                                <div class="hg-slider__img-container">
                                    <img src="../../scontent.cdninstagram.com/vp/9ecb209d2d7a9b319c9c98034a7a3e4f/5BC4EA36/t51.2885-15/s640x640/sh0.08/e35/16464382_186476235168027_7496941010887376896_n.jpg" alt="Photo @oscarpedroso"/>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--end picture-->
                </div>
            </div>

        </div><!-- end column -->
    </div>

</div>
<!-- START FOOTER SECTION -->
<!-- end footer section -->
</div><!-- end page_wrapper -->
<a href="#" class="totop">TOP</a> <!--/.totop -->
@endsection
