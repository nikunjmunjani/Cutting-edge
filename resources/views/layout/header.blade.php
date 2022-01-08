<!-- TopBar -->
<nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
	
	<ul class="navbar-nav ml-auto">
		<li class="nav-item"><a href="{{ URL::route('home') }}" class="nav-link ">Home</a></li>
		<li class="nav-item"><a href="{{ URL::route('presentation') }}" class="nav-link ">Presentation </a></li>
		<li class="nav-item"><a href="{{ URL::route('breakouts') }}" class="nav-link ">Breakouts </a></li>
	 	<li class="nav-item dropdown no-arrow">
			<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
				aria-haspopup="true" aria-expanded="false">
				<img class="img-profile rounded-circle" src="{{asset('public/img/boy.png')}}" style="max-width: 60px">
				<span class="ml-2 d-none d-lg-inline text-white small">Test User</span>
			</a>
			<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
				
				<a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
					<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
					Logout
				</a>
			</div>
		</li>
	</ul>
</nav>
<!-- Topbar -->