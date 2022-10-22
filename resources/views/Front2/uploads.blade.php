@extends('Front2.extend')
@section('content')
<body class="uk-background-body">

<header id="header">
	<div data-uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent ; top: #header">
	  <nav class="uk-navbar-container uk-letter-spacing-small uk-text-bold">
	    <div class="uk-container">
	      <div class="uk-position-z-index" data-uk-navbar>
	        <div class="uk-navbar-left">
	          <a class="uk-navbar-item uk-logo" href="index-2.html">Sprin</a>
	        </div>
	        <div class="uk-navbar-right">
	          <ul class="uk-navbar-nav uk-visible@m" data-uk-scrollspy-nav="closest: li; scroll: true; offset: 80">
	            <li class="uk-active"><a href="index-2.html">Courses</a></li>
	            <li ><a href="events.html">Events</a></li>
	            <li >
	              <a href="#">Pages</a>
	              <div class="uk-navbar-dropdown">
	                <ul class="uk-nav uk-navbar-dropdown-nav">
	                  <li ><a href="course.html">Course</a></li>
	                  <li ><a href="event.html">Event</a></li>
	                  <li ><a href="search.html">Search</a></li>
	                  <li ><a href="sign-in.html">Sign In</a></li>
	                  <li ><a href="sign-up.html">Sign Up</a></li>
	                </ul>
	              </div>            
	            </li>
	          </ul>
	          <div>
	            <a class="uk-navbar-toggle" data-uk-search-icon href="#"></a>
	            <div class="uk-drop uk-background-default" data-uk-drop="mode: click; pos: left-center; offset: 0">
	              <form class="uk-search uk-search-navbar uk-width-1-1">
	                <input class="uk-search-input uk-text-demi-bold" type="search" placeholder="Search..." autofocus>
	              </form>
	            </div>
	          </div>
	          <div class="uk-navbar-item">
	            <div><a class="uk-button uk-button-primary-light" href="sign-up.html">Sign Up</a></div>
	          </div>          
	          <a class="uk-navbar-toggle uk-hidden@m" href="#offcanvas" data-uk-toggle><span
	            data-uk-navbar-toggle-icon></span></a>
	        </div>
	      </div>
	    </div>
	  </nav>
	</div>
<div class="uk-section">
  <div class="uk-container">
    <div class="uk-grid-large" data-uk-grid>
      <div class="uk-width-expand@m">
        <div class="uk-article">
          

          <h3>File Requirements</h3>
          <p>Upload a Maximum of 20 files in a batch submission. Our team will go through all files and the transcripts will be delivered back before scheduled deadline submerges</p>

          <div class="uk-margin-large-top">
            <h3>Tom Solender</h3>
            <div data-uk-grid>
              <div class="uk-width-auto uk-flex uk-flex-middle">
                <img class="uk-border-circle" src="https://source.unsplash.com/CZ9AjMGKIFI/80x80" alt="Tom Solender">
              </div>
              <div class="uk-width-expand">
                <div data-uk-grid data-uk-margin>
                  <div class="uk-width-1-1">
                    <p>29-year UX + Design Veteran; Consultant, Author & Speaker</p>
                  </div>
                  <div class="uk-width-1-2">
                    <span class="uk-margin-small-right" data-uk-icon="star"></span>4.4 Instructor Rating
                  </div>
                  <div class="uk-width-1-2">
                    <span class="uk-margin-small-right" data-uk-icon="comments"></span>21,201 Reviews
                  </div>
                  <div class="uk-width-1-2">
                    <span class="uk-margin-small-right" data-uk-icon="users"></span>130,451 Students
                  </div>
                  <div class="uk-width-1-2">
                    <span class="uk-margin-small-right" data-uk-icon="file-text"></span>5 Courses
                  </div>
                </div>
              </div>              
            </div>
               
          </div>  

       
        

                 
        </div>
      </div>
      <div class="uk-width-1-3@m">
        <div data-uk-sticky="offset: 100; bottom: true; media: @m">
          <div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-border-rounded-large">
            <h3>$19.99<del class="uk-text-muted uk-margin-left uk-text-small">$99.99</del></h3>
            <a href="#" class="uk-button uk-button-primary-preserve uk-button-large uk-width-1-1">Buy Now</a>
            <p class="uk-text-center uk-text-muted uk-text-small">30-Day Money-Back Guarantee</p>
            <p class="uk-margin-remove">This course includes:</p>
            <ul class="uk-list uk-margin-small-top">
              <li><span class="uk-margin-small-right" data-uk-icon="clock"></span>10 hours on-demand video</li>
              <li><span class="uk-margin-small-right" data-uk-icon="unlock"></span>Full lifetime access</li>
              <li><span class="uk-margin-small-right" data-uk-icon="tablet"></span>Access on mobile</li>
              <li><span class="uk-margin-small-right" data-uk-icon="file-text"></span>Certificate of completion</li>
            </ul>
            <p class="uk-text-center"><a href="#contact" class="uk-link-muted" data-uk-scroll="offset: 100">Have a question, contact us</a></p>
          </div>			
          <h3>Tags</h3>
          <div data-uk-margin>
            <a class="uk-display-inline-block" href="#"><span class="uk-label uk-label-light">UX</span></a>
            <a class="uk-display-inline-block" href="#"><span class="uk-label uk-label-light">Design</span></a>
            <a class="uk-display-inline-block" href="#"><span class="uk-label uk-label-light">UI</span></a>
            <a class="uk-display-inline-block" href="#"><span class="uk-label uk-label-light">Experience</span></a>          
          </div>
          <h3>Share Course</h3>
          <div class="uk-margin">
            <div data-uk-grid class="uk-child-width-auto uk-grid-small">
              <div>
                <a href="#" data-uk-icon="icon: facebook" class="uk-icon-button facebook" target="_blank"></a>
              </div>
              <div>
                <a href="#" data-uk-icon="icon: linkedin" class="uk-icon-button linkedin" target="_blank"></a>
              </div>
              <div>
                <a href="#" data-uk-icon="icon: twitter" class="uk-icon-button twitter" target="_blank"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>





<footer class="uk-section uk-section-secondary uk-section-large">
	<div class="uk-container uk-text-muted">
		<div class="uk-child-width-1-2@s uk-child-width-1-5@m" data-uk-grid>
			<div>
				<h5>Company</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Marketing Tools</a></li>
					<li><a class="uk-link-muted" href="#">Presentations</a></li>
					<li><a class="uk-link-muted" href="#">Professionals</a></li>
					<li><a class="uk-link-muted" href="#">Appointments</a></li>
					<li><a class="uk-link-muted" href="#">Stores</a></li>
				</ul>
			</div>
			<div>
				<h5>Community</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Webinars</a></li>
					<li><a class="uk-link-muted" href="#">Developers</a></li>
					<li><a class="uk-link-muted" href="#">Platforms</a></li>
					<li><a class="uk-link-muted" href="#">Workshops</a></li>
					<li><a class="uk-link-muted" href="#">Local Meetups</a></li>
				</ul>
			</div>
			<div>
				<h5>Join Us</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Our Initiatives</a></li>
					<li><a class="uk-link-muted" href="#">Giving Back</a></li>
					<li><a class="uk-link-muted" href="#">Communities</a></li>
					<li><a class="uk-link-muted" href="#">Youth Program</a></li>
					<li><a class="uk-link-muted" href="#">Charity</a></li>
				</ul>
			</div>
			<div>
				<h5>Contact</h5>
				<ul class="uk-list uk-text-small">
					<li><a class="uk-link-muted" href="#">Contact Form</a></li>
					<li><a class="uk-link-muted" href="#">LinkedIn</a></li>
					<li><a class="uk-link-muted" href="#">Facebook</a></li>
					<li><a class="uk-link-muted" href="#">Instagram</a></li>
					<li><a class="uk-link-muted" href="#">Visit Us</a></li>
				</ul>
			</div>
			<div>
				<div class="uk-margin">
					<a href="#" class="uk-logo">Sprin</a>
				</div>
				<div class="uk-margin uk-text-small">				
					<p><a href="templateshub.net">Templateshub</a></p>
				</div>
				<div class="uk-margin">
					<div data-uk-grid class="uk-child-width-auto uk-grid-small">
						<div class="uk-first-column">
							<a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
						<div>
							<a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
						<div>
							<a href="mailto:info@blacompany.com" data-uk-icon="icon: mail" class="uk-icon-link uk-icon"
								target="_blank"></a>
						</div>
					</div>
				</div>
			</div>			
		</div>
	</div>
</footer>

<div id="offcanvas" data-uk-offcanvas="flip: true; overlay: true">
  <div class="uk-offcanvas-bar">
    <a class="uk-logo" href="index-2.html">Sprin</a>
    <button class="uk-offcanvas-close" type="button" data-uk-close="ratio: 1.2"></button>
    <ul class="uk-nav uk-nav-primary uk-nav-offcanvas uk-margin-medium-top uk-text-center">
      <li ><a href="index-2.html">Courses</a></li>
      <li ><a href="events.html">Events</a></li>
      <li class="uk-active"><a href="course.html">Course</a></li>
      <li ><a href="event.html">Event</a></li>
      <li ><a href="search.html">Search</a></li>
      <li ><a href="sign-in.html">Sign In</a></li>
      <li ><a href="sign-up.html">Sign Up</a></li>
    </ul>
    <div class="uk-margin-medium-top">
      <a class="uk-button uk-width-1-1 uk-button-primary-light" href="sign-up.html">Sign Up</a>
    </div>
    <div class="uk-margin-medium-top uk-text-center">
      <div data-uk-grid class="uk-child-width-auto uk-grid-small uk-flex-center">
        <div>
          <a href="https://twitter.com/" data-uk-icon="icon: twitter" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.facebook.com/" data-uk-icon="icon: facebook" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://www.instagram.com/" data-uk-icon="icon: instagram" class="uk-icon-link" target="_blank"></a>
        </div>
        <div>
          <a href="https://vimeo.com/" data-uk-icon="icon: vimeo" class="uk-icon-link" target="_blank"></a>
        </div>
      </div>
    </div>
  </div>
</div>

</body>


<!-- course.html  19 Nov 2019 03:39:41 GMT -->
</html>