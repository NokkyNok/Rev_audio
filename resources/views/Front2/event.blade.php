@extends('Front2.extend')
@section('content')

<body >

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
	            <li ><a href="index-2.html">Courses</a></li>
	            <li ><a href="events.html">Events</a></li>
	            <li >
	              <a href="#">Pages</a>
	              <div class="uk-navbar-dropdown">
	                <ul class="uk-nav uk-navbar-dropdown-nav">
	                  <li ><a href="course.html">Course</a></li>
	                  <li class="uk-active"><a href="event.html">Event</a></li>
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
	<div class="uk-container uk-container-large">
		<div class="uk-box-shadow-small uk-overflow-hidden uk-border-rounded uk-inline uk-background-center-center 
		uk-background-cover uk-background-norepeat uk-background-blend-overlay uk-overlay-blend" 
		style="background-image: url(img/5.jpg);">
			<div class="uk-padding-large uk-margin-bottom">
				<div data-uk-grid>
					<div class="uk-width-expand@m uk-flex uk-flex-middle uk-light">
						<div>
							<a class="uk-text-demi-bold hvr-back" href="events.html"><span class="uk-margin-small-right" 
								data-uk-icon="icon: arrow-left; ratio: 1.4"></span>Back</a>
							<h2 class="uk-heading-small uk-letter-spacing-medium">ProductCon The Biggest Product Management Conference</h2>
							<address>1020 Capital Ave, Peak Hill, San Francisco</address>
							<p data-uk-lightbox><a class="uk-text-demi-bold hvr-forward" 
								href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4740.819266853735!2d9.99008871708242!3d53.550454675412404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f9d24afe84a0263!2sRathaus!5e0!3m2!1sde!2sde!4v1499675200938" 
								data-caption="Conference location" data-type="iframe">
								<span class="uk-margin-small-right" data-uk-icon="icon: location; ratio: 1.2"></span>View Map</a></p>
						</div>
					</div>
					<div class="uk-width-1-3@m uk-flex uk-flex-middle uk-flex-right">
						<div class="uk-card uk-card-default uk-card-body uk-width-1-1 uk-border-rounded-large">
							<h3 class="uk-card-title">Date and Time</h3>
							<time class="uk-text-muted" datetime="2020-07-07 08:00">Saturday, July 7 2020 at 8:00 AM</time>
							<p>Lorem ipsum sit amet, consectetur adipiscing elit, sed do eiusmod tempo.</p>
							<a href="#" class="uk-button uk-button-primary-preserve uk-button-large uk-width-1-1">Book Now $18</a>
							<p class="uk-text-center"><a class="uk-link-muted" href="#contact" data-uk-scroll>Have a question, contact us</a></p>
						</div>			
					</div>
				</div>
			</div>
		</div>
	</div>
</header>



<div class="uk-section">
  <div class="uk-container">
    <div class="uk-grid-large" data-uk-grid>
      <div class="uk-width-expand@m">
        <div class="uk-article">
          <h3>Event description</h3>
          <p>Labour, of evaluated would he the a the our what is in the arduous sides behavioural is which the 
            have didn't kicked records the it framework by the for traveler sure the can most well her. 
            Entered have break himself cheek, and with activity that and the scarfs, for bit of text, never just 
            as our have they of begin to cannot in of ran middle at behind seal that their accustomed. For 
            devotion their to though one rationally small sight escape, little. In so her has I solider, touched 
            the we the past, time, he posterity.</p>
          <p>Not off be and of where and the together absolutely in a step I which where the original are feel 
            as he of rung. On be walls. Create over to king intended musical relief. Project the of if both sort 
            have a to clues okay. Produce the coast searched clarinet of it and ocean. Pile is apparent consider 
            one of let the italic been as or puzzles all be they and universal ago. The I of that how these, at 
            warned tried next long stupid. Exploration, yet the language although such-like been sisters feedback.</p>
          <p>Produce the coast searched clarinet of it and ocean. Pile is apparent consider 
            one of let the italic been as or puzzles all be they and universal ago. The I of that how these, at 
            warned tried next long stupid. Exploration, yet the language although such-like been sisters feedback.</p>
          <h3>Event description</h3>
          <p>Saturday Hours: <strong>8:00 AM - 10:00 PM</strong></p>  
          <p>Sunday Hours: <strong>9:00 AM - 8:00 PM</strong></p>            
          <p>Monday Hours: <strong>8:00 AM - 10:00 PM</strong></p>      

          <h3 id="contact">How do I contact event organized with my questions?</h3>
          <p>Activity that and the scarfs, for bit of text, never just 
            as our have they of begin to cannot in of ran middle at behind seal that their accustomed. For 
            devotion their to though one rationally small sight escape, little. In so her has I solider, touched 
            the we the past.</p>          
        </div>
      </div>
      <div class="uk-width-1-3@m">
        <h3>Event Location</h3>
        <img class="uk-border-rounded" src="https://source.unsplash.com/i3tR0UEAHhM/600x430" alt="Location">
        <address>1020 Capital Ave, Peak Hill, San Francisco</address>
        <p data-uk-lightbox><a class="uk-text-demi-bold uk-link-muted" 
          href="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4740.819266853735!2d9.99008871708242!3d53.550454675412404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x3f9d24afe84a0263!2sRathaus!5e0!3m2!1sde!2sde!4v1499675200938" 
          data-caption="Conference location" data-type="iframe">
          <span class="uk-margin-small-right" data-uk-icon="icon: location; ratio: 1.2"></span>View Map</a></p>
        <h4>Parking Instructions</h4>
        <p>Activity that and the scarfs, for bit of text, never just 
         ran middle at behind seal that their accustomed.</p>                    
        <h3>Tags</h3>
        <div data-uk-margin>
          <a class="uk-display-inline-block" href="#"><span class="uk-label uk-label-light">Product</span></a>
          <a class="uk-display-inline-block" href="#"><span class="uk-label uk-label-light">Management</span></a>
          <a class="uk-display-inline-block" href="#"><span class="uk-label uk-label-light">Conference</span></a>
          <a class="uk-display-inline-block" href="#"><span class="uk-label uk-label-light">San Francisco</span></a>         
        </div>
        <h3>Share Event</h3>
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

<div class="uk-section uk-section-muted">
  <div class="uk-container">
    <h3>Other Events You May Like</h3>
    <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-margin-medium-top" data-uk-grid>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/Y_paTwmA7sc/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$59.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Feb</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">2</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">Fosters Live in Great Hall</h3>
                <p class="uk-text-muted uk-text-small">10902 Great Hall, Los Angeles, California USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/w423NnHFjFg/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$119.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Nov</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">30</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">Door Stopper Rock Concert</h3>
                <p class="uk-text-muted uk-text-small">40111 Small Arena, New York City USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/S3hhrqLrgYM/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$99.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Feb</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">10</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">ProductCon Conference</h3>
                <p class="uk-text-muted uk-text-small">90111 Short Beach Hall, San Francisco</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/W3SEyZODn8U/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">FREE</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Jan</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">8</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">Local Food Tasting Group Meetup</h3>
                <p class="uk-text-muted uk-text-small">40111 Great Hall, Los Angeles, California USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/bzdhc5b3Bxs/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$19.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Nov</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">21</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">React Development Conference</h3>
                <p class="uk-text-muted uk-text-small">40111 Great Hall, Los Angeles, California USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
        </div>
      </div>
      <div>
        <div class="uk-card uk-card-small uk-card-default uk-card-hover uk-border-rounded-large uk-overflow-hidden">
          <div class="uk-card-media-top uk-inline uk-light">
            <img src="https://source.unsplash.com/zFBVxClB2I8/640x380" alt="Course Title">
            <div class="uk-position-cover uk-overlay-xlight"></div>
            <div class="uk-position-small uk-position-top-left">
              <span class="uk-label uk-text-bold uk-text-price">$29.00</span>
            </div>
            <div class="uk-position-small uk-position-top-right">
              <a href="#" class="uk-icon-button uk-like uk-position-z-index uk-position-relative" data-uk-icon="heart"></a>
            </div>            
          </div>
          <div class="uk-card-body">
            <div data-uk-grid>
              <div class="uk-width-auto uk-text-center">
                <span class="uk-display-block uk-text-small uk-text-bold uk-text-primary uk-text-uppercase">Mar</span>
                <span class="uk-display-block uk-h4 uk-margin-xsmall-top">27</span>
              </div>
              <div class="uk-width-expand">
                <h3 class="uk-card-title">Software Development Conference</h3>
                <p class="uk-text-muted uk-text-small">40111 Great Hall, Los Angeles, California USA</p>
              </div>
            </div>
          </div>
          <a href="event.html" class="uk-position-cover"></a>
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
      <li ><a href="course.html">Course</a></li>
      <li class="uk-active"><a href="event.html">Event</a></li>
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


<!-- event.html  19 Nov 2019 03:39:43 GMT -->
</html>