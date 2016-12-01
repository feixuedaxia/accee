<!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu">                
                  <li class="active">
                      <a class="" href="{{url('/admin')}}">
                          <i class="icon_house_alt"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a class="" href="{{url('/admin/calendar')}}">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                          <span>Calender</span>
                      </a>
                  </li>

                  <li>
                      <a class="" href="{{url('/admin/calendar-add')}}">
                          <i class="fa fa-calendar" aria-hidden="true"></i>
                          <span>Calender-Add</span>
                      </a>
                  </li>
                  
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-user" aria-hidden="true"></i>
                          <span>Users</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="{{url('/admin/users')}}">All Users</a></li>
                          <li><a class="" href="{{url('/admin/register')}}"><span>Add User</span></a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-camera" aria-hidden="true"></i></i>
                          <span>Media</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="{{url('/admin/library')}}">Library</a></li>
                          <li><a class="" href="{{url('/admin/addmedia')}}"><span>Add New</span></a></li>
                      </ul>
                  </li>


                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon_documents_alt"></i>
                          <span>Pages</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="profile.html">Profile</a></li>
                          <li><a class="" href="login.html"><span>Login Page</span></a></li>
                          <li><a class="" href="blank.html">Blank Page</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                      </ul>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="fa fa-thumb-tack" aria-hidden="true"></i>
                          <span>Posts</span>
                          <span class="menu-arrow arrow_carrot-right"></span>
                      </a>
                      <ul class="sub">                          
                          <li><a class="" href="{{url('/admin/all-post')}}">All Posts</a></li>
                          <li><a class="" href="{{url('/admin/add')}}"><span>Add New</span></a></li>
                          <li><a class="" href="{{url('/admin/category')}}">Categories</a></li>
                      </ul>
                  </li>
                  
              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->