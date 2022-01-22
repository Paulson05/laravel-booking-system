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

            <p>Team</p>
        </a>

    </li>


    <li  class="{{ Route::currentRouteNamed('post.index') ? 'active' : '' }}" >


        <a href="{{route('post.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Post</p>
        </a>

    </li>
    <li  class="{{ Route::currentRouteNamed('category.index') ? 'active' : '' }}" >


        <a href="{{route('category.index')}}">

            <i class="now-ui-icons design_app"></i>

            <p>Category</p>
        </a>

    </li>
    <li >


        <a data-toggle="collapse" href="#pagesExamples" >

            <i class="now-ui-icons design_image"></i>

            <p>
               ShowDays <b class="caret"></b>
            </p>
        </a>

        <div class="collapse " id="pagesExamples">
            <ul class="nav">


                <li  class="{{ Route::currentRouteNamed('monday.index') ? 'active' : '' }}" >
                    <a href="{{route('monday.index')}}">
                        <span class="sidebar-mini-icon">M</span>
                        <span class="sidebar-normal">Monday</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('tuesday.index') ? 'active' : '' }}" >
                    <a href="{{route('tuesday.index')}}">
                        <span class="sidebar-mini-icon">T</span>
                        <span class="sidebar-normal">Tuesday</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('wednesday.index') ? 'active' : '' }}" >
                    <a href="{{route('wednesday.index')}}">
                        <span class="sidebar-mini-icon">W</span>
                        <span class="sidebar-normal">Wednesday</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('thursday.index') ? 'active' : '' }}" >
                    <a href="{{route('thursday.index')}}">
                        <span class="sidebar-mini-icon">T</span>
                        <span class="sidebar-normal">Thursday</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('friday.index') ? 'active' : '' }}" >
                    <a href="{{route('friday.index')}}">
                        <span class="sidebar-mini-icon">F</span>
                        <span class="sidebar-normal">Friday</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('saturday.index') ? 'active' : '' }}" >
                    <a href="{{route('saturday.index')}}">
                        <span class="sidebar-mini-icon">S</span>
                        <span class="sidebar-normal">Saturday</span>
                    </a>
                </li>
                <li  class="{{ Route::currentRouteNamed('sunday.index') ? 'active' : '' }}" >
                    <a href="{{route('sunday.index')}}">
                        <span class="sidebar-mini-icon">S</span>
                        <span class="sidebar-normal">Sunday</span>
                    </a>
                </li>






            </ul>
        </div>


    </li>

    <li class="{{ Route::currentRouteNamed('tag.index') ? 'active' : '' }}" >


        <a data-toggle="collapse" href="#componentsExamples" >

            <i class="now-ui-icons education_atom"></i>

            <p>
                Tags<b class="caret"></b>
            </p>
        </a>

        <div class="collapse " id="componentsExamples">
            <ul class="nav">

                <li  class="{{ Route::currentRouteNamed('tag.index') ? 'active' : '' }}">
                    <a href="{{route('tag.index')}}">
                        <span class="sidebar-mini-icon">T</span>
                        <span class="sidebar-normal">Tags</span>
                    </a>
                </li>



            </ul>
        </div>


    </li>

    <li class="{{ Route::currentRouteNamed('team.index') ? 'active' : '' }}" >


        <a data-toggle="collapse" href="#formsExamples" >

            <i class="now-ui-icons files_single-copy-04"></i>

            <p>
                User <b class="caret"></b>
            </p>
        </a>

        <div class="collapse " id="formsExamples">
            <ul class="nav">

                <li >
                    <a href="{{route('users.index')}}">
                        <span class="sidebar-mini-icon">U</span>
                        <span class="sidebar-normal">Users</span>
                    </a>
                </li>

            </ul>
        </div>


    </li>

    <li class="{{ Route::currentRouteNamed('team.index') ? 'active' : '' }}">


        <a data-toggle="collapse" href="#tablesExamples" >

            <i class="now-ui-icons design_bullet-list-67"></i>

            <p>
                Roles<b class="caret"></b>
            </p>
        </a>

        <div class="collapse " id="tablesExamples">
            <ul class="nav">


                <li >
                    <a href="{{route('roles.index')}}">
                        <span class="sidebar-mini-icon">R</span>
                        <span class="sidebar-normal">Roles</span>
                    </a>
                </li>

            </ul>
        </div>


    </li>




</ul>
