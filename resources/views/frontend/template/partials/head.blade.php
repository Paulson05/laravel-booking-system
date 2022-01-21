<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content=" width=device-width, initial-scale=1">
<title>Greek Hotel - HTML</title>

<!-- Fonts -->
<link href="http://fonts.googleapis.com/css?family=Poppins:400%2C500%2C700%7COpen+Sans%7CMontserrat:500" rel="stylesheet" property="stylesheet" type="text/css" media="all">

<!-- Icons -->
<link href="{{asset('frontend/style/icomoon.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('frontend/fonts/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('frontend/fonts/fontello/style.css')}}">

<!-- CSS assets -->
<link href="{{asset('frontend/style/bootstrap.min.css')}}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{asset('frontend/modules/jquery-datepicker/jquery-ui.min.css')}}">
<link href="{{asset('frontend/modules/Magnific-Popup/magnific-popup.css')}}" rel="stylesheet">

<!-- LOAD slick slider assets -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/modules/slick/slick.css')}}"/>
<link rel="stylesheet" type="text/css" href="{{asset('frontend/modules/slick/slick-theme.css')}}"/>

<!-- LOAD JQUERY LIBRARY-->
<script src="{{asset('frontend/js/src/plugins/jquery-3.2.1.min.js')}}"></script>

<!-- REVOLUTION STYLE SHEETS -->
<link rel="stylesheet" type="text/css" href="{{asset('frontend/modules/revolution/fonts/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('fronend/modules/revolution/css/settings.css')}}">

<!-- REVOLUTION JS FILES -->
<script src="{{asset('frontend/modules/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('frontend/modules/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
<script src="{{asset('frontend/modules/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('frontend/modules/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('frontend/modules/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('frontend/modules/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('frontend/modules/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('frontend/modules/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('frontend/modules/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('frontend/modules/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script src="{{asset('frontend/modules/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>
<script >function setREVStartSize(e){
        try{ var i=jQuery(window).width(),t=9999,r=0,n=0,l=0,f=0,s=0,h=0;
            if(e.responsiveLevels&&(jQuery.each(e.responsiveLevels,function(e,f){f>i&&(t=r=f,l=e),i>f&&f>r&&(r=f,n=e)}),t>r&&(l=n)),f=e.gridheight[l]||e.gridheight[0]||e.gridheight,s=e.gridwidth[l]||e.gridwidth[0]||e.gridwidth,h=i/s,h=h>1?1:h,f=Math.round(h*f),"fullscreen"==e.sliderLayout){var u=(e.c.width(),jQuery(window).height());if(void 0!=e.fullScreenOffsetContainer){var c=e.fullScreenOffsetContainer.split(",");if (c) jQuery.each(c,function(e,i){u=jQuery(i).length>0?u-jQuery(i).outerHeight(!0):u}),e.fullScreenOffset.split("%").length>1&&void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0?u-=jQuery(window).height()*parseInt(e.fullScreenOffset,0)/100:void 0!=e.fullScreenOffset&&e.fullScreenOffset.length>0&&(u-=parseInt(e.fullScreenOffset,0))}f=u}else void 0!=e.minHeight&&f<e.minHeight&&(f=e.minHeight);e.c.closest(".rev_slider_wrapper").css({height:f})
        }catch(d){console.log("Failure at Presize of Slider:"+d)}
    };
</script>

<!-- Main theme stylesheet -->
<link href="{{asset('frontend/style/css/template.css')}}" rel="stylesheet" type="text/css">
