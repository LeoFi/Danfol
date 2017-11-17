 <!-- Footer -->
        <footer id="footer">
          <div class="newsletter elementor">
          <!-- Begin MailChimp Signup Form -->
          <div id="mc_embed_signup">
          <form action="https://danfol-pf.us14.list-manage.com/subscribe/post?u=5fa2be4a6a6d24a311874e917&amp;id=638d0039a6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div class="container">
              <div id="mc_embed_signup_scroll">
              <h2 class="text-center">
                Newsletter
              </h2>
              <p class="col-md-12 text-center">
              <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="subscribe with your email address" required>
              <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button">
              <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
              <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_5fa2be4a6a6d24a311874e917_638d0039a6" tabindex="-1" value=""></div>
              </p>
              </div>
              </div>
          </form>
          </div>
          <!--End mc_embed_signup--></div>

        <div id="footer-copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                  <nav class="navbar navbar-default" role="navigation">
									<!-- Toggle get grouped for better mobile display -->
									<div class="navbar-header">
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-2">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>   
									<div class="navbar-collapse collapse" id="navbar-collapse-2" style="height: 1px;">
										
                                       <?php if ( has_nav_menu( 'secondary' ) ) : ?>
 
		<?php wp_nav_menu( array( 'theme_location' => 'secondary','menu_class' => 'nav navbar-nav nkkl navbar-right','depth'=>-1 ) ); ?>
	 
	<?php endif; ?>
                                        
                                            
									</div>
								</nav>
                
                
              </div>
              <div class="col-md-6 clearfix text-right">
                <p><?php if(get_theme_mod('aripop_copyright_text')): echo esc_attr( get_theme_mod( 'aripop_copyright_text' ) ); else: echo __('Copyright &#169; 2016 All Rights Reserved.', 'aripop');  endif;?> </p>
             </div>
            </div>
          </div>
        </div>
      </footer>
<!--end / footer-->

 
 
<?php wp_footer(); ?>







<!--++++++++++++++ Footer Section End +++++++++++++++++++++++++-->
 


</body></html>