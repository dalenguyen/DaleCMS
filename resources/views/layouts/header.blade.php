<!-- Header -->
<div id="header">

	<div class="top">

		<!-- Logo -->
			<div id="logo">
				<span class="image avatar48"><img src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAPlAAAAJDhkZDBmMGFmLTgzZDAtNGUxMy04ODBjLWI1Yjk3NzI2MzNkYw.jpg" alt="" /></span>
				<h1 id="title">Dale Nguyen</h1>
				<p>Application Architect</p>
				<p>Toronto Canada</p>
			</div>

		<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="/#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Architectural Philosophy</span></a></li>
					{{-- <li><a href="/blog" id="blog-link" class="skel-layers-ignoreHref"><span class="icon fa-book">Thoughts</span></a></li> --}}
					<li><a href="/#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Digital Portfolio</span></a></li>
					{{-- <li><a href="#" id="project-link" class="skel-layers-ignoreHref"><span class="icon fa-code">Projects</span></a></li> --}}
					<li><a href="/#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Biography</span></a></li>
					<li><a href="/#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>					

					@if(Auth::check())
						<li><hr></li>
						<li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <span class="icon fa-sign-out"> Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
					@endif

				</ul>
			</nav>
	</div>

	<div class="bottom">

		<!-- Social Icons -->
			<ul class="icons">
				<li><a href="https://www.linkedin.com/in/dalenguyenblogger/" class="icon fa-linkedin" target="_blank"><span class="label">LinkedIn</span></a></li>
				<li><a href="https://github.com/dalenguyen" class="icon fa-github" target="_blank"><span class="label">Github</span></a></li>
				<li><a href="mailto:dungnq@itbox4vn.com" class="icon fa-envelope"><span class="label">Email</span></a></li>
			</ul>

	</div>

</div>
