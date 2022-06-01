@php
    $prefix = Request::route()->getprefix() ;
    $route = Route::current()->getName() ;
@endphp
{{-- @dd($prefix) ; check which prefix is calling now --}}  

  <aside class="main-sidebar">
    <!-- sidebar-->
    <section class="sidebar">	
		
        <div class="user-profile">
			<div class="ulogo">
				 <a href=" {{ Route('dashboard') }}">
				  <!-- logo for regular state and mobile devices -->
					 <div class="d-flex align-items-center justify-content-center">					 	
						  <img src="{{asset('backend/images/logo/logo.png')}}" style="width: 40%" alt="">
						  {{-- <h3><b> Unicorn </b> Admin</h3> --}}
					 </div>
				</a>
			</div>
        </div>
      
      <!-- sidebar menu-->
      <ul class="sidebar-menu" data-widget="tree">  
		  
		<li class="{{ ($route == 'dashboard')?'active':'' }}">
          <a href=" {{ Route('dashboard') }} ">
            <i data-feather="pie-chart"></i>
			<span>Dashboard</span>
          </a>
        </li>  
		
        <li class="treeview {{ ($prefix == '/users')?'active':'' }} " >
          <a href="#">
            <i data-feather="message-circle"></i>
            <span>Studens And Teacher</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('users.add') }} "><i class="ti-more"></i>Add</a></li>
            <li><a href="{{route('user.view')}} "><i class="ti-more"></i>View </a></li>
            <li> <a href=" {{ Route('user.allteachers') }} "><i class="ti-more"></i> View All Teacher </a> </li>
            <li> <a href=" {{ Route('user.inactiveusers') }} "><i class="ti-more"></i> View All students  </a> </li>
            <li> <a href=" {{ Route('user.inactiveusers') }} "><i class="ti-more"></i> Inactive User </a> </li>


          </ul>
        </li> 
		  
        <li class="treeview {{ ($prefix == '/profile')?'active':'' }}">
          <a href="#">
            <i data-feather="user"></i> <span>Manage Profile</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href=" {{Route('profile.view')}} "><i class="ti-more"></i>Your Profile</a></li>
            <li><a href=" {{Route('password.view')}} "><i class="ti-more"></i>Change Password</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap text-uppercase">manage basic details</li>		  


        <li class="treeview {{ ($prefix == '/admin-board')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Board</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('admin-board.add') }}"><i class="ti-more"></i>Add Board</a></li>
            <li><a href="{{ Route('admin-board.view') }}"><i class="ti-more"></i>View Board</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/admin-medium')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Medium</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('admin-medium.add') }}"><i class="ti-more"></i>Add Medium</a></li>
            <li><a href="{{ Route('admin-medium.view') }}"><i class="ti-more"></i>View Medium</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/admin-stream')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Stream</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('admin-stream.add') }}"><i class="ti-more"></i>Add Stream</a></li>
            <li><a href="{{ Route('admin-stream.view') }}"><i class="ti-more"></i>View Stream</a></li>
          </ul>
        </li>


        <li class="treeview {{ ($prefix == '/admin-subject')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Subjects</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('admin-subject.add') }}"><i class="ti-more"></i>Add Subject</a></li>
            <li><a href="{{Route('admin-subject.view') }} "><i class="ti-more"></i>View Subject</a></li>
          </ul>
        </li>

        <li class="treeview {{ ($prefix == '/admin-center')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Centers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('admin-center.add') }}"><i class="ti-more"></i>Add Center</a></li>
            <li><a href="{{ Route('admin-center.view') }}"><i class="ti-more"></i>View Center</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap text-uppercase">manage courses</li>		  


        <li class="treeview {{ ($prefix == '/admin-course')?'active':'' }}">
          <a href="javascript:void(0)">
            <i data-feather="book"></i> <span>Manage Courses</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('admin-course.add') }}"><i class="ti-more"></i>Add Course</a></li>
            <li><a href="{{ Route('admin-course.view') }}"><i class="ti-more"></i>View Course</a></li>
          </ul>
        </li>

        <li class="header nav-small-cap text-uppercase">manage Online CLasses </li>		  


        <li class="treeview {{ ($prefix == '/admin-online-videos')?'active':'' }}">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Videos</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ Route('admin-online-videos.add') }}"><i class="ti-more"></i>Add Videos</a></li>
            <li><a href="{{ Route('admin-online-videos.view') }}"><i class="ti-more"></i>View Videos</a></li>
          </ul>
        </li>

        {{-- <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Manage Links</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mailbox_compose.html"><i class="ti-more"></i>update Link</a></li>
            <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>View links</a></li>
          </ul>
        </li> --}}



        

        {{-- <li class="treeview">
          <a href="#">
            <i data-feather="mail"></i> <span>Mailbox</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-right pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="mailbox_inbox.html"><i class="ti-more"></i>Inbox</a></li>
            <li><a href="mailbox_compose.html"><i class="ti-more"></i>Compose</a></li>
            <li><a href="mailbox_read_mail.html"><i class="ti-more"></i>Read</a></li>
          </ul>
        </li> --}}
		  
		<li class="header nav-small-cap">EXTRA</li>		  
		  
		<li>
          <a href="{{Route('admin.logout')}}">
            <i data-feather="lock"></i>
			<span>Log Out</span>
          </a>
        </li> 
        
      </ul>
    </section>
	
	{{-- <div class="sidebar-footer">
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Settings" aria-describedby="tooltip92529"><i class="ti-settings"></i></a>
		<!-- item-->
		<a href="mailbox_inbox.html" class="link" data-toggle="tooltip" title="" data-original-title="Email"><i class="ti-email"></i></a>
		<!-- item-->
		<a href="javascript:void(0)" class="link" data-toggle="tooltip" title="" data-original-title="Logout"><i class="ti-lock"></i></a>
	</div> --}}
  </aside>

 


