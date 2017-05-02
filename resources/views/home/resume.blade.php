{{-- home.blade.php --}}

@extends('layouts.master')

@section('title', 'Resume')

@section('header_script')
  <meta name="description" content="This is Dale Nguyen's Resume for Web Developer position">
  <meta name="author" content="Dale Nguyen">
  <meta name="keywords" content="Dale Nguyen, Resume, Web Developer, PHP, Laravel, JavaScript, HTML, CSS">

  <meta property="og:image" content="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAPlAAAAJDhkZDBmMGFmLTgzZDAtNGUxMy04ODBjLWI1Yjk3NzI2MzNkYw.jpg">
  <meta property="og:image:type" content="image/png">
  <meta property="og:image:width" content="1024">
  <meta property="og:image:height" content="1024">

  <link rel="stylesheet" href="/public/css/resume.css">
@endsection

@section('content')
  <div class="content">
    <section class="top-header">
      <ul>
        <li><strong>LOCATION:</strong> Toronto, ON</li>
        <li><strong>CELL:</strong> + 647 620 9676</li>
        <li><strong>EMAIL:</strong> <a href="mailto:dungnq@itbox4vn.com">dungnq@itbox4vn.com</a></li>
      </ul>
    </section>

    <header>
        <h1>DALE NGUYEN</h1>
        <h3><span class="green-dot">&bull;</span> Web Developer <span class="green-dot">&bull;</span></h3>
    </header>

    <section class="below-header">
      <ul>
        <li>Know me better at:</li>
        <li><i class="fa fa-user" aria-hidden="true"></i> <a href="http://dalenguyen.me" target="_blank">http://dalenguyen.me</a></li>
        <li><i class="fa fa-github-square" aria-hidden="true"></i> <a href="http://github.com/dalenguyen" target="_blank">http://github.com/dalenguyen</a></li>
      </ul>
    </section>

    <div class="row experience">
      <div class="col-md-8">
        {{-- Employment --}}
        <div class="work-title">
          <h2><span class="square"></span>Employment</h2>
        </div>

        <div class="work-detail">
          <p>2014 - Present</p>
          <h3>Web Developer</h3>
          <h4>Freelance, Toronto, ON</h4>
          <p>Work as a web contractor for various businesses</p>
        </div>

        <div class="work-detail">
          <p>2015 - Present</p>
          <h3>Web Developer</h3>
          <h4>George Brown College, Toronto, ON</h4>
          <p>Work with stakeholders such as Director and Project Managers to create first independent website and Project Management Web App for Research and Innovation Office</p>
        </div>

        <div class="work-detail">
          <p>2014 - 2015</p>
          <h3>E-Commerce Administrative Assistant</h3>
          <h4>Pet Owners Choice Brands, Toronto, ON</h4>
          <p>Managed, mantained and developed SEO stategy together with Web Analytics for the WooCommerce website that improved brand awareness and sales</p>
        </div>

        <div class="work-detail">
          <p>2013 - 2014</p>
          <h3>Internet Marketing Coordinator </h3>
          <h4>Woori Education & Immigration Consulting, Toronto, ON</h4>
          <p>Designed, organized and maintained Woori Vietnam website by using WordPress together with planning and managing Email Marketing campaigns to generate leads</p>
        </div>

        {{-- Education --}}
        <div class="education-title">
          <h2><span class="square"></span>Education</h2>
        </div>

        <div class="edu-detail">
          <div class="triangle">
          </div>
          <div class="edu-info">
            <h3>Digital Analytics Certificate<span style="float: right; font-size: 18px;">2015-2016</span></h3>
            <h4>George Brown College - Toronto, ON</h4>
          </div>
        </div>

        <div class="edu-detail">
          <div class="triangle">
          </div>
          <div class="edu-info">
            <h3>Design Management (Postgraduate) <span style="float: right; font-size: 18px;">2013 - 2015</span></h3>
            <h4>George Brown College - Toronto, ON</h4>
          </div>
        </div>

        <div class="edu-detail">
          <div class="triangle">
          </div>
          <div class="edu-info">
            <h3>Google Analytics IQ <span style="float: right; font-size: 18px;">2014</span></h3>
            <h4>Google</h4>
          </div>
        </div>

      </div>
      <div class="col-md-4">
        <div class="skills">

          <div class="objectives">
            <h2><i class="fa fa-fire" aria-hidden="true"></i> My Objective</h2>
            <p>Enthusiastic web developer with over 3 years of professional experience in structuring, developing and implementing interactive websites. Innovative use of technology and SEO to drive traffic and engage users</p>
          </div>

          <article >

            <h2><i class="fa fa-puzzle-piece" aria-hidden="true"></i> Professional Skills</h2>

            <section class="professional-skills">
              <p>Web Design</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>Design</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>SEO</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <div class="space"></div>

            <section class="professional-skills">
              <p>Photoshop</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>Illustrator</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <div class="space"></div>

            <section class="professional-skills">
              <p>PHP / MySQL</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>JavaScript</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>HTML / CSS</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
            </section>

            <div class="space"></div>

            <section class="professional-skills">
              <p>LAMP Stack</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>Laravel Framework</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>VueJS</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>WordPress</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
            </section>

          </article>

          <article >

            <h2><i class="fa fa-user-plus" aria-hidden="true"></i> Personal Skills</h2>

            <section class="professional-skills">
              <p>Work Ethic</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>Collaboration</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>Communication</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>Proactive</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

            <section class="professional-skills">
              <p>Time Management</p>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="green-dot">&#x25cf;</span>
              <span class="gray-dot">&#x25cf;</span>
            </section>

          </article>
        </div>
      </div>
    </div>
  </div>

@endsection
