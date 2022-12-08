<?php $woof_options = get_option('woof'); ?>

      <!-- ==== footer ==== -->
      <footer class="text-light">
         <div class="container">
		 
            <?php if ( is_active_sidebar( 'sidebar-6' ) ) { ?>		 
            <div class="row">
			    <?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar( 'sidebar-3' ); ?>
                </div>				
                <!--/ col-lg -->
				<?php } ?>
				<?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar( 'sidebar-4' ); ?>
                </div>				
                <!--/ col-lg -->
				<?php } ?>
				<?php if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar( 'sidebar-5' ); ?>
                </div>
                <!--/ col-lg -->
				<?php } ?>
				<?php if ( is_active_sidebar( 'sidebar-6' ) ) { ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar( 'sidebar-6' ); ?>
                </div>
                <!--/ col-lg -->
				<?php } ?>				
            </div>
			<!--/ row-->
			<?php } else {?> 
            <div class="row">
			    <?php if ( is_active_sidebar( 'sidebar-3' ) ) { ?>
                <div class="col-lg-6">
                    <?php dynamic_sidebar( 'sidebar-3' ); ?>
                </div>				
                <!--/ col-lg -->
				<?php } ?>
				<?php if ( is_active_sidebar( 'sidebar-4' ) ) { ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar( 'sidebar-4' ); ?>
                </div>				
                <!--/ col-lg -->
				<?php } ?>
				<?php if ( is_active_sidebar( 'sidebar-5' ) ) { ?>
                <div class="col-lg-3">
                    <?php dynamic_sidebar( 'sidebar-5' ); ?>
                </div>
                <!--/ col-lg -->
				<?php } ?>
            </div>
			<!--/ row-->			
			<?php };?>			
            
            <div class="row">
               <div class="credits col-sm-12">
                  <?php $woof_copy = woof_AfterSetupTheme::return_thme_option('copyright'); echo apply_filters('the_content',$woof_copy); ?>
               </div>
            </div>
            <!--/ row -->
         </div>
         <!--/ container -->
         <!-- Go To Top Link -->
		 <?php if (woof_AfterSetupTheme::return_thme_option('totop')=='yes'){ ?>
         <div class="page-scroll hidden-sm hidden-xs">
            <a href="#top" class="back-to-top"><i class="fa fa-angle-up"></i></a>
         </div>	
		<?php };?>			 
         <!--/page-scroll-->
      </footer>
      <!--/ footer-->


<?php wp_footer(); ?>
</body>
</html>