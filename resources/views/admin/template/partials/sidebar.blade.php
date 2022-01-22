<div class="user">
    <div class="photo">
        <img src="../assets/img/james.jpg" />
    </div>
    <div class="info">
        <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>
                        James Amos
                        <b class="caret"></b>
                    </span>
        </a>
        <div class="clearfix"></div>
        <div class="collapse" id="collapseExample">
            <ul class="nav">
                <li>
                    <a href="#">
                        <span class="sidebar-mini-icon">MP</span>
                        <span class="sidebar-normal">My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="sidebar-mini-icon">EP</span>
                        <span class="sidebar-normal">Edit Profile</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="sidebar-mini-icon">S</span>
                        <span class="sidebar-normal">Settings</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>

<ul class="nav">








    <li  class="" >


        <a href="dashboard.html">

            <i class="now-ui-icons design_app"></i>

            <p>Dashboard</p>
        </a>

    </li>
    <li  class="{{ Route::currentRouteNamed('team.index') ? 'active' : '' }}">


        <a href="{{route('team.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Customer</p>
        </a>

    </li>
    <li  class="{{ Route::currentRouteNamed('team.index') ? 'active' : '' }}">


        <a href="{{route('team.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Department</p>
        </a>

    </li>
    <li  class="{{ Route::currentRouteNamed('team.index') ? 'active' : '' }}">


        <a href="{{route('team.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Staff</p>
        </a>

    </li>
    <li  class="{{ Route::currentRouteNamed('team.index') ? 'active' : '' }}">


        <a href="{{route('team.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Staff payment</p>
        </a>

    </li>

    <li  class="{{ Route::currentRouteNamed('booking.index') ? 'active' : '' }}" >


        <a href="{{route('booking.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Booking</p>
        </a>

    </li>
    <li  class="{{ Route::currentRouteNamed('room.index') ? 'active' : '' }}" >


        <a href="{{route('room.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Room</p>
        </a>

    </li>
    <li  class="{{ Route::currentRouteNamed('roomtype.index') ? 'active' : '' }}" >


        <a href="{{route('roomtype.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Room type</p>
        </a>

    </li>
    <li  class="" >


        <a href="">

            <i class="now-ui-icons design_app"></i>

            <p>Room type image</p>
        </a>

    </li>

    <li  class="" >


        <a href="{{}}">

            <i class="now-ui-icons design_app"></i>

            <p>Services</p>
        </a>

    </li>
    <li  class="" >


        <a href="">

            <i class="now-ui-icons design_app"></i>

            <p>Testimonies</p>
        </a>

    </li>
    <li  class="" >


        <a href="">

            <i class="now-ui-icons design_app"></i>

            <p>Banner</p>
        </a>

    </li>








</ul>
