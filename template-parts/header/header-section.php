<?php $woof_options = get_option('woof'); ?>

    <nav id="main-nav" class="navbar-expand-xl fixed-top">
        <div class="row">
		    <?php get_template_part('template-parts/header/topbar-section'); ?> 
            <!-- Navbar Starts -->
            <div class="navbar container-fluid">
                <div class="container desk-menu">
                    <?php get_template_part('template-parts/header/logo-section'); ?> 
                  <!-- Navbartoggler -->
				  <!-- Nav button-->
                <div class="nav-button">
                    <span  class="nos"></span>
                    <span class="ncs"></span>
                    <span class="nbs"></span>
                </div>
                <!-- Nav button end -->
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggle-icon">
                  <i class="fas fa-bars"></i>
                  </span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <?php

								$defaults = array(
								'theme_location'  => 'top-menu',
								'menu'            => 'nav',
								'container'       => '',
								'container_class' => '',
								'menu_class'      => '',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								);
								if(has_nav_menu('top-menu')) {
								wp_nav_menu( $defaults );
								}
							?>
                        </ul>
						
                        <!--/ul -->
                  </div>
                  <!--collapse -->
               </div>
               <!-- /container -->
			  
            </div>
            <!-- /navbar -->
			<div class="nav-holder main-menu">
						<nav class="nav-inner isDown sliding-menu" id="menu">
						<ul>
                            <?php

								$defaults = array(
								'theme_location'  => 'top-menu',
								'menu'            => 'nav',
								'container'       => '',
								'container_class' => '',
								'menu_class'      => '',
								'menu_id'         => '',
								'echo'            => true,
								'fallback_cb'     => 'wp_page_menu',
								'before'          => '',
								'after'           => '',
								'link_before'     => '',
								'link_after'      => '',
								'items_wrap'      => '%3$s',
								'depth'           => 0,
								'walker'          => new Woof_Walker
								);
								if(has_nav_menu('top-menu')) {
								wp_nav_menu( $defaults );
								}
							?>
                        </ul>
						</nav>
						</div>
        </div>
         <!--/row -->
	</nav>
	<!-- /nav -->