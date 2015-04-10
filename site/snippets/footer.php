  <footer>
  	<div class="one-col float">
  		Visual Dialogue<br/>
		24 Rutland Street<br/>
		Boston, MA 02118<br/>
		617.247.3658<br/>
		<a href="mailto:info@visualdialogue.com" target="_blank">info@visualdialogue.com</a><br/><br/> 

	</div>

	<div class="one-col float second">
		<strong>services</strong><br/>
		<a href="/scope/research">research</a><br/>
		<a href="/scope/marketing-strategy">marketing strategy</a><br/>
    <a href="/scope/copywriting">copywriting</a><br/>
		<a href="/scope/brand-positioning">brand positioning</a><br/>
		<a href="/scope/naming">naming</a><br/>
		<a href="/scope/visual-identity">visual identity</a><br/>
	</div>

	<div class="one-col float third">
    <br/>
    <a href="/scope/advertising">advertising</a><br/>
    <a href="/scope/websites">websites</a><br/>
		<a href="/scope/social-media-strategy">social media strategy</a><br/>
		<a href="/scope/publications">publications</a><br/>
		<a href="/scope/packaging">packaging</a><br/>
		<a href="/scope/video">video</a><br/>

  </div>
    
  <div class="one-col float fourth">
    <strong>start the dialogue</strong>
    <form action="http://htmlemail.visualdialogue.com/t/r/s/cirdy/" method="post" class="cm-form">
        <input id="fieldEmail" name="cm-cirdy-cirdy" type="email" placeholder="join our email list" required />
        <button type="submit" class="submit"><img src="/assets/images/arrow.png" alt="submit" height="10px" width="10px"/></button>
    </form>
  </div>

    <div class="one-col float lastchild">
		<a href="https://www.facebook.com/visualdialogueboston" target="_blank"><img src="/assets/images/fb.png" width="16" height="16" class="facebook"></a><a href="https://twitter.com/vdialogue" target="_blank"><img src="/assets/images/twitter.png" width="20" height="16" class="twitter"></a><br/>
		<?php echo kirbytext($site->copyright()) ?>
	</div>
  </footer>

</div><!--wrapper-->

<!--SCRIPTS-->
 
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" ></script>
  <?php echo js('/assets/js/jquery.isotope.js') ?><!--include isotope (http://isotope.metafizzy.co/)-->
  <?php echo js('/assets/js/jquery.isotope.perfectmasonry.js') ?><!--include perfect masonry isotope plugin (https://github.com/zonear/isotope-perfectmasonry)-->
  <?php echo js('/assets/js/jquery.slides.min.js') ?><!--include slides.js plugin (http://www.slidesjs.com/)-->
  <?php echo js('/assets/js/packery.pkgd.min.js') ?><!--include packery.js plugin (http://http://packery.metafizzy.co/)-->

  <script>
  
//packery
var $container = $('#container');
// init
$container.packery({
  itemSelector: '.thumb',
  stamp: ".stamp",
  gutter: 0
});

  //slideshow
    $(function(){
      $("#slides").slidesjs({
         preload: true,
        width: 1210,
        height: 843,
        effect: {
          fade: {
        // Slide effect settings.
        speed: 500
          // [number] Speed in milliseconds of the slide animation.
        }
        },
        pagination: {
      		active: false,     	// [boolean] Create pagination items. You cannot use your own pagination. Sorry.
      		effect: "fade"		// [string] Can be either "slide" or "fade".
        },
        navigation: {
      	active: false,			// [boolean] Generates next and previous buttons. You can set to false and use your own buttons.
        						// User defined buttons must have the following:
        						// previous button: class="slidesjs-previous slidesjs-navigation"
        						// next button: class="slidesjs-next slidesjs-navigation"
      	effect: "fade",			// [string] Can be either "slide" or "fade".
        },
        play: {
          auto: true,
          effect:"fade"
        }

      });
    });

    //mobile
    $('.hamburger').click(function() {
      $('nav').toggle();  
    });

    $('.mobile-nav').click(function() {
      $(this).siblings('ul').toggle();  
    });
  </script>




</body>

</html>