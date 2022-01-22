
<!--   Core JS Files   -->
<script src="../../backend/assets/js/core/jquery.min.js" ></script>
<script src="../../backend/assets/js/core/popper.min.js" ></script>


<script src="../../backend/assets/js/core/bootstrap.min.js" ></script>


<script src="../../backend/assets/js/plugins/perfect-scrollbar.jquery.min.js" ></script>

<script src="../../backend/assets/js/plugins/moment.min.js"></script>



<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="../../backend/assets/js/plugins/bootstrap-switch.js"></script>

<!--  Plugin for Sweet Alert -->
<script src="../../backend/assets/js/plugins/sweetalert2.min.js"></script>

<!-- Forms Validations Plugin -->
<script src="../../backend/assets/js/plugins/jquery.validate.min.js"></script>

<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="../../backend/assets/js/plugins/jquery.bootstrap-wizard.js"></script>

<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="../../backend/assets/js/plugins/bootstrap-selectpicker.js" ></script>

<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="../../backend./assets/js/plugins/bootstrap-datetimepicker.js"></script>

<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="../../backend/assets/js/plugins/jquery.dataTables.min.js"></script>

<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="../../backend/assets/js/plugins/bootstrap-tagsinput.js"></script>

<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="../../backend/assets/js/plugins/jasny-bootstrap.min.js"></script>

<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="../../backend/assets/js/plugins/fullcalendar.min.js"></script>

<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="../../backend/assets/js/plugins/jquery-jvectormap.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="../../backend/assets/js/plugins/nouislider.min.js" ></script>


<!--  Google Maps Plugin    -->

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDGat1sgDZ-3y6fFe6HD7QUziVC6jlJNog"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="../../../../buttons.github.io/buttons.js"></script>


<!-- Chart JS -->
<script src="../../backend/assets/js/plugins/chartjs.min.js"></script>

<!--  Notifications Plugin    -->
<script src="../../backend/assets/js/plugins/bootstrap-notify.js"></script>





<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc --><script src="../../backend/assets/js/now-ui-dashboard.minaa26.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../../backend/assets/demo/demo.js"></script>


<!-- Sharrre libray -->
<script src="../../backend/assets/demo/jquery.sharrre.js"></script>
<!--<script>-->
<!--    $(document).ready(function() {-->
<!--        $('#datatable').DataTable({-->
<!--            "pagingType": "full_numbers",-->
<!--            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],-->
<!--            responsive: true,-->
<!--            language: {-->
<!--                search: "_INPUT_",-->
<!--                searchPlaceholder: "Search records",-->
<!--            }-->
<!---->
<!--        });-->
<!---->
<!--        var table = $('#datatable').DataTable();-->
<!---->
<!--        // Edit record-->
<!--        table.on( 'click', '.edit', function () {-->
<!--            $tr = $(this).closest('tr');-->
<!--            if($($tr).hasClass('child')){-->
<!--                $tr = $tr.prev('.parent');-->
<!--            }-->
<!---->
<!--            var data = table.row($tr).data();-->
<!--            alert( 'You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.' );-->
<!--        } );-->
<!---->
<!--        // Delete a record-->
<!--        table.on( 'click', '.remove', function (e) {-->
<!--            $tr = $(this).closest('tr');-->
<!--            if($($tr).hasClass('child')){-->
<!--                $tr = $tr.prev('.parent');-->
<!--            }-->
<!--            table.row($tr).remove().draw();-->
<!--            e.preventDefault();-->
<!--        } );-->
<!---->
<!--        //Like record-->
<!--        table.on( 'click', '.like', function () {-->
<!--            alert('You clicked on Like button');-->
<!--        });-->
<!--    });-->
<!--</script>-->

<script>
    $(document).ready(function(){






        // Facebook Pixel Code Don't Delete
        !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
            n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
            document,'script','../../../../connect.facebook.net/en_US/fbevents.js');

        try{
            fbq('init', '111649226022273');
            fbq('track', "PageView");

        }catch(err) {
            console.log('Facebook Track Error:', err);
        }

    });
</script>


<script>
    $(document).ready(function(){
        $().ready(function(){
            // $sidebar = $('.sidebar');
            // $sidebar_img_container = $sidebar.find('.sidebar-background');
            //
            // $full_page = $('.full-page');
            //
            // $sidebar_responsive = $('body > .navbar-collapse');
            // sidebar_mini_active = true;
            //
            // window_width = $(window).width();
            //
            // fixed_plugin_open = $('.sidebar .sidebar-wrapper .nav li.active a p').html();

            // if( window_width > 767 && fixed_plugin_open == 'Dashboard' ){
            //     if($('.fixed-plugin .dropdown').hasClass('show-dropdown')){
            //         $('.fixed-plugin .dropdown').addClass('show');
            //     }
            //
            // }

            $('.fixed-plugin a').click(function(event){
                // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                if($(this).hasClass('switch-trigger')){
                    if(event.stopPropagation){
                        event.stopPropagation();
                    }
                    else if(window.event){
                        window.event.cancelBubble = true;
                    }
                }
            });

            $('.fixed-plugin .background-color span').click(function(){
                $(this).siblings().removeClass('active');
                $(this).addClass('active');

                var new_color = $(this).data('color');

                if($sidebar.length != 0){
                    $sidebar.attr('data-color',new_color);
                }

                if($full_page.length != 0){
                    $full_page.attr('filter-color',new_color);
                }

                if($sidebar_responsive.length != 0){
                    $sidebar_responsive.attr('data-color',new_color);
                }
            });

            $('.fixed-plugin .img-holder').click(function(){
                $full_page_background = $('.full-page-background');

                $(this).parent('li').siblings().removeClass('active');
                $(this).parent('li').addClass('active');


                var new_image = $(this).find("img").attr('src');

                if( $sidebar_img_container.length !=0 && $('.switch-sidebar-image input:checked').length != 0 ){
                    $sidebar_img_container.fadeOut('fast', function(){
                        $sidebar_img_container.css('background-image','url("' + new_image + '")');
                        $sidebar_img_container.fadeIn('fast');
                    });
                }

                if($full_page_background.length != 0 && $('.switch-sidebar-image input:checked').length != 0 ) {
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $full_page_background.fadeOut('fast', function(){
                        $full_page_background.css('background-image','url("' + new_image_full_page + '")');
                        $full_page_background.fadeIn('fast');
                    });
                }

                if( $('.switch-sidebar-image input:checked').length == 0 ){
                    var new_image = $('.fixed-plugin li.active .img-holder').find("img").attr('src');
                    var new_image_full_page = $('.fixed-plugin li.active .img-holder').find('img').data('src');

                    $sidebar_img_container.css('background-image','url("' + new_image + '")');
                    $full_page_background.css('background-image','url("' + new_image_full_page + '")');
                }

                if($sidebar_responsive.length != 0){
                    $sidebar_responsive.css('background-image','url("' + new_image + '")');
                }
            });

            $('.switch-sidebar-image input').on("switchChange.bootstrapSwitch", function(){
                $full_page_background = $('.full-page-background');

                $input = $(this);

                if($input.is(':checked')){
                    if($sidebar_img_container.length != 0){
                        $sidebar_img_container.fadeIn('fast');
                        $sidebar.attr('data-image','#');
                    }

                    if($full_page_background.length != 0){
                        $full_page_background.fadeIn('fast');
                        $full_page.attr('data-image','#');
                    }

                    background_image = true;
                } else {
                    if($sidebar_img_container.length != 0){
                        $sidebar.removeAttr('data-image');
                        $sidebar_img_container.fadeOut('fast');
                    }

                    if($full_page_background.length != 0){
                        $full_page.removeAttr('data-image','#');
                        $full_page_background.fadeOut('fast');
                    }

                    background_image = false;
                }
            });

            $('.switch-sidebar-mini input').on("switchChange.bootstrapSwitch", function(){
                var $btn = $(this);

                if(sidebar_mini_active == true){
                    $('body').removeClass('sidebar-mini');
                    sidebar_mini_active = false;
                    nowuiDashboard.showSidebarMessage('Sidebar mini deactivated...');
                }else{
                    $('body').addClass('sidebar-mini');
                    sidebar_mini_active = true;
                    nowuiDashboard.showSidebarMessage('Sidebar mini activated...');
                }

                // we simulate the window Resize so the charts will get updated in realtime.
                var simulateWindowResize = setInterval(function(){
                    window.dispatchEvent(new Event('resize'));
                },180);

                // we stop the simulation of Window Resize after the animations are completed
                setTimeout(function(){
                    clearInterval(simulateWindowResize);
                },1000);
            });
        });
    });
</script>
@yield('scripts')
