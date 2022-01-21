<script>
    var map;
    var myLatlng;
    var marker;
    function initMap() {
        var contentString = '<div id="content">'+
            '<div id="siteNotice">'+
            '</div>'+
            '<h1 id="firstHeading" class="firstHeading">Greek Hotel</h1>'+
            '<div id="bodyContent">'+
            '<p>77 Winchester Lane Coachella, CA 92236</p>'+
            '</div>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        myLatlng = new google.maps.LatLng(40.713287,-74.016626);
        var infowindow = new google.maps.InfoWindow({
            content: contentString
        });
        marker = new google.maps.Marker({
            position: myLatlng,
            title:"Hello World!",
            icon: 'img-assets/logotype.png'
        });
        marker.addListener('click', function() {
            infowindow.open(map, marker);
        });
        map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: 40.713287, lng: -74.016626},
                zoom: 14,
                styles: [
                    {
                        "featureType": "administrative",
                        "elementType": "labels.text.fill",
                        "stylers": [
                            {
                                "color": "#444444"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.province",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "lightness": "27"
                            }
                        ]
                    },
                    {
                        "featureType": "administrative.locality",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "color": "#3b3939"
                            },
                            {
                                "weight": "0.76"
                            },
                            {
                                "saturation": "-21"
                            },
                            {
                                "lightness": "45"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#f2f2f2"
                            }
                        ]
                    },
                    {
                        "featureType": "landscape",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "poi",
                        "elementType": "labels.text",
                        "stylers": [
                            {
                                "weight": "0.70"
                            },
                            {
                                "color": "#8a8a8a"
                            }
                        ]
                    },
                    {
                        "featureType": "road",
                        "elementType": "all",
                        "stylers": [
                            {
                                "saturation": -100
                            },
                            {
                                "lightness": 45
                            }
                        ]
                    },
                    {
                        "featureType": "road.highway",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "simplified"
                            }
                        ]
                    },
                    {
                        "featureType": "road.arterial",
                        "elementType": "labels.icon",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "transit",
                        "elementType": "all",
                        "stylers": [
                            {
                                "visibility": "off"
                            }
                        ]
                    },
                    {
                        "featureType": "water",
                        "elementType": "all",
                        "stylers": [
                            {
                                "color": "#e4e4e4"
                            },
                            {
                                "visibility": "on"
                            }
                        ]
                    }
                ]

            }

        );
        marker.setMap(map);
    }
</script>
<!-- revolution slider script -->
<script>
    var revapi1,
        tpj=jQuery;

    tpj(document).ready(function() {
        if(tpj("#rev_slider_1_1").revolution == undefined){
            revslider_showDoubleJqueryError("#rev_slider_1_1");
        }else{
            revapi1 = tpj("#rev_slider_1_1").show().revolution({
                sliderType:"standard",
                //jsFileLocation:"//localhost/wpmu/greek/wp-content/plugins/revslider/public/assets/js/",
                sliderLayout:"fullscreen",
                dottedOverlay:"none",
                delay:9000,
                navigation: {
                    keyboardNavigation:"off",
                    keyboard_direction: "horizontal",
                    mouseScrollNavigation:"off",
                    mouseScrollReverse:"default",
                    onHoverStop:"off",
                    arrows: {
                        style:"zeus",
                        enable:true,
                        hide_onmobile:false,
                        hide_onleave:false,
                        tmp:'<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                        left: {
                            h_align:"left",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        },
                        right: {
                            h_align:"right",
                            v_align:"center",
                            h_offset:20,
                            v_offset:0
                        }
                    }
                },
                visibilityLevels:[1240,1024,778,480],
                gridwidth:1240,
                gridheight:890,
                lazyType:"none",
                scrolleffect: {
                    fade:"on",
                    blur:"on",
                    maxblur:"100",
                    on_slidebg:"on",
                    on_parallax_layers:"on",
                    direction:"top",
                },
                parallax: {
                    type:"scroll",
                    origo:"enterpoint",
                    speed:400,
                    speedbg:0,
                    speedls:0,
                    levels:[5,10,15,20,25,30,35,40,45,46,47,48,49,50,51,55],
                },
                shadow:0,
                spinner:"spinner0",
                stopLoop:"on",
                stopAfterLoops:0,
                stopAtSlide:1,
                shuffle:"off",
                autoHeight:"off",
                fullScreenAutoWidth:"off",
                fullScreenAlignForce:"off",
                fullScreenOffsetContainer: "",
                fullScreenOffset: "",
                disableProgressBar:"on",
                hideThumbsOnMobile:"off",
                hideSliderAtLimit:0,
                hideCaptionAtLimit:0,
                hideAllCaptionAtLilmit:0,
                debugMode:false,
                fallbacks: {
                    simplifyAll:"off",
                    nextSlideOnWindowFocus:"off",
                    disableFocusListener:false,
                }
            });
        }

    });	/*ready*/

</script>



<script src="{{asset('frontend/js/src/plugins/bootstrap.min.js')}}"></script>
<script src="{{asset('frontend/modules/slick/slick.min.js')}}"></script>
<script src="{{asset('frontend/js/src/plugins/jquery-migrate-1.4.1.min.js')}}"></script>
<script src="{{asset('frontend/modules/rellax-master/rellax.min.js')}}"></script>
<script src="{{asset('frontend/modules/Magnific-Popup/jquery.magnific-popup.js')}}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCkeyAIzaSyC9YGfjSki_lzEHxN5PXpAJjSVhUk1ChSU&amp;callback=initMap" async defer></script>
<script src="{{asset('frontend/modules/jquery-datepicker/jquery-ui.min.js')}}"></script>
<!--Easy paginate script -->
<script src="{{asset('frontend/modules/easyPaginate/jquery.easyPaginate.js')}}"></script>
<!-- Main template script -->
<script src="{{asset('frontend/js/src/script.js')}}"></script>
