<?php
    /**
     * ReduxFramework Sample Config File
     * For full documentation, please visit: http://docs.reduxframework.com/
     */

    if ( ! class_exists( 'Redux' ) ) {
        return;
    }


    // This is your option name where all the Redux data is stored.
    $opt_name = "woof";

    // This line is only for altering the demo. Can be easily removed.
    $opt_name = apply_filters( 'woof/opt_name', $opt_name );

    /*
     *
     * --> Used within different fields. Simply examples. Search for ACTUAL DECLARATION for field examples
     *
     */

    /**
     * ---> SET ARGUMENTS
     * All the possible arguments for Redux.
     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments
     * */

    $theme = wp_get_theme(); // For use with some settings. Not necessary.

    $args = array(
        // TYPICAL -> Change these values as you need/desire
        'opt_name'             => $opt_name,
		'class'                => 'admin-color-pimax',
        // This is where your data is stored in the database and also becomes your global variable name.
        'display_name'         => $theme->get( 'Name' ),
        // Name that appears at the top of your panel
        'display_version'      => $theme->get( 'Version' ),
        // Version that appears at the top of your panel
        'menu_type'            => 'menu',
        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)
        'allow_sub_menu'       => true,
        // Show the sections below the admin menu item or not
        'menu_title'           => esc_attr__( 'Woof! Options', 'woof' ),
        'page_title'           => esc_attr__( 'Woof! Options', 'woof' ),
        // You will need to generate a Google API key to use this feature.
        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth
        'google_api_key'       => 'AIzaSyCN8bSGZHdbSOXu0HbhXf8j0SnswTmbCNw',
        // Set it you want google fonts to update weekly. A google_api_key value is required.
        'google_update_weekly' => true,
        // Must be defined to add google fonts to the typography module
        'async_typography'     => false,
        // Use a asynchronous font on the front end or font string
        //'disable_google_fonts_link' => true,                    // Disable this in case you want to create your own google fonts loader
        'admin_bar'            => true,
        // Show the panel pages on the admin bar
        'admin_bar_icon'       => 'dashicons-portfolio',
        // Choose an icon for the admin bar menu
        'admin_bar_priority'   => 50,
        // Choose an priority for the admin bar menu
        'global_variable'      => '',
        // Set a different name for your global variable other than the opt_name
        'dev_mode'             => false,
        // Show the time the page took to load, etc
        'update_notice'        => false,
        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo
        'customizer'           => true,
        // Enable basic customizer support
        //'open_expanded'     => true,                    // Allow you to start the panel in an expanded way initially.
        //'disable_save_warn' => true,                    // Disable the save warning when a user changes a field

        // OPTIONAL -> Give you extra features
        'page_priority'        => null,
        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.
        'page_parent'          => 'themes.php',
        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters
        'page_permissions'     => 'manage_options',
        // Permissions needed to access the options panel.
        'menu_icon'            => '',
        // Specify a custom URL to an icon
        'last_tab'             => '',
        // Force your panel to always open to a specific tab (by id)
        'page_icon'            => 'icon-themes',
        // Icon displayed in the admin panel next to your menu_title
        'page_slug'            => '',
        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided
        'save_defaults'        => true,
        // On load save the defaults to DB before user clicks save or not
        'default_show'         => false,
        // If true, shows the default value next to each field that is not the default value.
        'default_mark'         => '',
        // What to print by the field's title if the value shown is default. Suggested: *
        'show_import_export'   => true,
        // Shows the Import/Export panel when not used as a field.

        // CAREFUL -> These options are for advanced use only
        'transient_time'       => 60 * MINUTE_IN_SECONDS,
        'output'               => true,
        // Global shut-off for dynamic CSS output by the woof. Will also disable google fonts output
        'output_tag'           => true,
        // Allows dynamic CSS to be generated for customizer and google fonts, but stops the dynamic CSS from going to the head
        // 'footer_credit'     => '',                   // Disable the footer credit of Redux. Please leave if you can help it.

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.
        'database'             => '',
        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!
        'use_cdn'              => true,
        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.

        // HINTS
        'hints'                => array(
            'icon'          => 'el el-question-sign',
            'icon_position' => 'right',
            'icon_color'    => 'lightgray',
            'icon_size'     => 'normal',
            'tip_style'     => array(
                'color'   => 'red',
                'shadow'  => true,
                'rounded' => false,
                'style'   => '',
            ),
            'tip_position'  => array(
                'my' => 'top left',
                'at' => 'bottom right',
            ),
            'tip_effect'    => array(
                'show' => array(
                    'woof'   => 'slide',
                    'duration' => '500',
                    'event'    => 'mouseover',
                ),
                'hide' => array(
                    'woof'   => 'slide',
                    'duration' => '500',
                    'event'    => 'click mouseleave',
                ),
            ),
        )
    );

    
    // Panel Intro text -> before the form
    if ( ! isset( $args['global_variable'] ) || $args['global_variable'] !== false ) {
        if ( ! empty( $args['global_variable'] ) ) {
            $v = $args['global_variable'];
        } else {
            $v = str_replace( '-', '_', $args['opt_name'] );
        }
        $args['intro_text'] = sprintf( esc_attr__( '', 'woof' ), $v );
    } else {
        $args['intro_text'] = esc_attr__( '', 'woof' );
    }

    // Add content after the form.
    $args['footer_text'] = esc_attr__( '', 'woof' );

    Redux::setArgs( $opt_name, $args );

    /*
     * ---> END ARGUMENTS
     */


    /*
     * ---> START HELP TABS
     */

    $tabs = array(
        array(
            'id'      => 'redux-help-tab-1',
            'title'   => esc_attr__( 'Support', 'woof' ),
            'content' => esc_attr__( 'Send us a mail by using our item support form.', 'woof' )
        ),
        
    );
    Redux::setHelpTab( $opt_name, $tabs );

    // Set the help sidebar
    $content = esc_attr__( 'Send us a mail by using our item support form.', 'woof' );
    Redux::setHelpSidebar( $opt_name, $content );


    /*
     * <--- END HELP TABS
     */


    /*
     *
     * ---> START SECTIONS
     *
     */

    /*

        As of Redux 3.5+, there is an extensive API. This API can be used in a mix/match mode allowing for


     */

    // ACTUAL DECLARATION OF SECTIONS
                Redux::setSection( $opt_name, array(
                    'title'  => esc_attr__( 'General Settings', 'woof' ),
                    'desc'   => esc_attr__( '', 'woof' ),
                    'icon'   => 'el-icon-home-alt',
                    // 'submenu' => false, // Setting submenu to false on a given section will hide it from the WordPress sidebar menu!
                    'fields' => array(
					
					array(
							'id' => 'textlogo',
							'type' => 'button_set',
							'title' => esc_attr__('Select Logo Format', 'woof'),
							'subtitle' => esc_attr__('', 'woof'),
							'desc' => '',
							'options' => array(
									'st1'=> esc_attr__('Text Logo', 'woof'),
									'st2' => esc_attr__('Image Logo', 'woof'),
									
							),
							'default'  => 'st1'
					),
					 
					array(
							'id' => 'logopic',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_attr__('Upload  Logo', 'woof'),
							'subtitle' => esc_attr__('', 'woof'),
							'required' => array('textlogo', '=' , 'st2')
					),
					$fields = array(
					'id'       => 'opt_logo_dimensions',
					'type'     => 'dimensions',
					'units'    => array('em','px','%'),
					'output' => array('a.navbar-brand img'),
					'title'    => __('Logo Size', 'woof'),
					'subtitle' => __('.', 'woof'),
					'desc'     => __('Optional', 'woof'),
					'default'  => array(
						'Width'   => '75', 
						'Height'  => '53'
					),
					'required' => array('textlogo', '=' , 'st2')
					),						
					
					array(
							'id' => 'logotext',
							'type' => 'text',
							'title' => esc_attr__('Logo Text ', 'woof'),
							'subtitle' => esc_attr__('', 'woof'),
							'required' => array('textlogo', '=' , 'st1')
					
					),
			        array(
							'id' => 'logoicon',
							'type' => 'button_set',
							'title' => esc_attr__('Logo Icon', 'woof'),
							'default'  => 'no',
							'options' => array(
									'yes'=> esc_attr__('Enable', 'woof'),
									'no'=> esc_attr__('Disable', 'woof'),
							),							
					),	
					
					array(
							'id' => 'logoicon_class',
							'type' => 'text',
							'title' => esc_attr__('Icon Class', 'woof'),
							'subtitle' => __('<a href="http://webredox.net/demo/wp/woof/icon" target="_blank">Flaticon</a> Ex: flaticon-dog-20 <br><a href="https://fontawesome.com/v5/cheatsheet" target="_blank">Fontawesome Icon</a> Ex: fab fa-android', 'woof'),
							'required' => array('logoicon', '=' , 'yes')
					
					),
					
			        array(
							'id' => 'preloader',
							'type' => 'button_set',
							'title' => esc_attr__('Pre-Loader', 'woof'),
							'default'  => 'no',
							'options' => array(
									'yes'=> esc_attr__('Enable', 'woof'),
									'no'=> esc_attr__('Disable', 'woof'),
							),
							
					),

					array(
							'id' => 'preloader_class',
							'type' => 'text',
							'title' => esc_attr__('Icon Class', 'woof'),
							'subtitle' => __('<a href="http://webredox.net/demo/wp/woof/icon" target="_blank">Flaticon</a> Ex: flaticon-dog-20 <br><a href="https://fontawesome.com/v5/cheatsheet" target="_blank">Fontawesome Icon</a> Ex: fab fa-android', 'woof'),
							'required' => array('preloader', '=' , 'yes')
					
					),

					
				  )
               ) );
			   
			   
			   
			   Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-idea',
                    'title'  => esc_attr__( 'Header Settings', 'woof' ),
                    'fields' => array(
					
			        array(
							'id' => 'tobar',
							'type' => 'button_set',
							'title' => esc_attr__('Header Top Bar', 'woof'),
							'subtitle' => esc_attr__('To show/hide top header section.', 'woof'),
							'default'  => 'no',
							'options' => array(
							        'no'=> esc_attr__('Disable', 'woof'),
									'yes'=> esc_attr__('Enable', 'woof'),
							),								
					),	
			        array(
							'id' => 'contact-info',
							'type' => 'button_set',
							'title' => esc_attr__('Contact Info', 'woof'),
							'default'  => 'no',
							'options' => array(
									'no'=> esc_attr__('Disable', 'woof'),
									'yes'=> esc_attr__('Enable', 'woof'),									
							),
							'required' => array('tobar', '=' , 'yes')
					),	
					array(
							'id' => 'contact-address',
							'type' => 'text',
							'title' => esc_attr__('Location Address', 'woof'),
							'subtitle' => esc_attr__('Write your location address here.', 'woof'),
							'default' => '',
							'required' => array('contact-info', '=' , 'yes')
					),					
					array(
							'id' => 'contact-email',
							'type' => 'text',
							'title' => esc_attr__('E-mail Address', 'woof'),
							'subtitle' => esc_attr__('Write your e-mail address here.', 'woof'),
							'default' => '',
							'required' => array('contact-info', '=' , 'yes')
					),
					array(
							'id' => 'contact-phone',
							'type' => 'text',
							'title' => esc_attr__('Phone Number', 'woof'),
							'subtitle' => esc_attr__('Write your phone number here.', 'woof'),
							'default' => '',
							'required' => array('contact-info', '=' , 'yes')
					),	
			        array(
							'id' => 'social-header',
							'type' => 'button_set',
							'title' => esc_attr__('Header Socail Icon', 'woof'),
							'default'  => 'no',
							'options' => array(
									'no'=> esc_attr__('Disable', 'woof'),
									'yes'=> esc_attr__('Enable', 'woof'),									
							),
							'required' => array('tobar', '=' , 'yes')
					),							
					array(
			                'id' => 'notice_headeroption',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_attr__('Header Top Option', 'woof'),
			                'desc' => esc_attr__('Select header style of your site.', 'woof')
			            ),						
						
			        array(
							'id' => 'page-breadcrumb',
							'type' => 'button_set',
							'title' => esc_attr__('Header Breadcrumb', 'woof'),
							'subtitle' => esc_attr__('Enable/Disable header breadcrumb for pages.', 'woof'),
							'default'  => 'no',
							'options' => array(
									'yes'=> esc_attr__('Enable', 'woof'),
									'no'=> esc_attr__('Disable', 'woof'),
							),
					),						
					array(
							'id' => 'page-breadcrumb-text',
							'type' => 'text',
							'title' => esc_attr__('Home Text', 'woof'),
							'subtitle' => esc_attr__('Change/Repalce breadcrumb "Home" text here.', 'woof'),
							'default' => '',
							'required' => array('page-breadcrumb', '=' , 'yes')
							
					),						
					
                    )
                ) );
				
			
				 Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-cogs',
                    'title'  => esc_attr__( 'Page Settings', 'woof' ),
                    'fields' => array(		
						
					array(
							'id' => 'header-error',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_attr__('404 Error Page Option', 'woof'),
							
					),	
			        array(
							'id' => 'error-page-header-show',
							'type' => 'button_set',
							'title' => esc_attr__('404 Header Section', 'woof'),
							'subtitle' => esc_attr__('Enable/Disable header section for 404 page.', 'woof'),
							'default'  => 'no',
							'options' => array(
									'yes'=> esc_attr__('Enable', 'woof'),
									'no'=> esc_attr__('Disable', 'woof'),
							),
							
					),	
					array(
							'id' => 'error-page-bg-img',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_attr__('Upload Image', 'woof'),
							'subtitle' => esc_html__('Upload a 404 Page Image.', 'woof'),
						
					),										
					array(
							'id' => 'error-page-title',
							'type' => 'text',
							'title' => esc_attr__('Title Text', 'woof'),
							'subtitle' => esc_attr__('Change/Repalce "404" text here.', 'woof'),
							'default' => '',
							
					),	
					array(
							'id' => 'error-page-sbtitle',
							'type' => 'text',
							'title' => esc_attr__('Subtitle Text', 'woof'),
							'subtitle' => esc_attr__('Change/Repalce "Page Error" text here.', 'woof'),
							'default' => '',
							
					),						
					array(
							'id' => 'error-page-button',
							'type' => 'text',
							'title' => esc_attr__('Button Text', 'woof'),
							'subtitle' => esc_attr__('Change/Repalce "Back To Home" text here.', 'woof'),
							'default' => '',
							
					),	
					array(
							'id' => 'header-adoption',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_attr__('Adoption Page Options', 'woof'),
							
					),	
			        array(
							'id' => 'adoption-header-show',
							'type' => 'button_set',
							'title' => esc_attr__('Adoption Page Header Section', 'woof'),
							'subtitle' => esc_attr__('Enable/Disable header section for adoption details page.', 'woof'),
							'default'  => 'yes',
							'options' => array(
									'yes'=> esc_attr__('Enable', 'woof'),
									'no'=> esc_attr__('Disable', 'woof'),
							),
							
					),						
					array(
							'id' => 'adoption-page-tile',
							'type' => 'text',
							'title' => __('Page Header Title', 'woof'),
							'subtitle' => __('insert adoption details page title here.', 'woof'),
							'default' => '',
							'required' => array('adoption-header-show', '=' , 'yes'),							
					),	
					array(
							'id' => 'adopt_icon_class',
							'type' => 'text',
							'title' => esc_attr__('Header Icon Class', 'woof'),
							'subtitle' => __('<a href="http://webredox.net/demo/wp/woof/icon" target="_blank">Flaticon</a> Ex: flaticon-dog-20 <br><a href="https://fontawesome.com/icons?d=gallery" target="_blank">Fontawesome Icon</a> Ex: fab fa-android', 'woof'),
							'required' => array('adoption-header-show', '=' , 'yes')
					
					),						
					array(
							'id' => 'opt-adaption-bg',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_attr__('Adoption Details Page Header Background', 'woof'),
							'subtitle' => esc_attr__('', 'woof'),
							
					),
					
					array(
							'id' => 'adopt-read-more',
							'type' => 'text',
							'title' => esc_attr__('Adoption More Info Text', 'woof'),
							'subtitle' => esc_attr__('Change/Repalce adoption "More Info" text here.', 'woof'),							
							'default' => '',
							
					),	
			        array(
							'id' => 'adoption-related-post',
							'type' => 'button_set',
							'title' => esc_attr__('Adoption Related Post', 'woof'),
							'subtitle' => esc_attr__('Enable/Disable adoption related post for adoption details page.', 'woof'),
							'default'  => 'no',
							'options' => array(
									'yes'=> esc_attr__('Enable', 'woof'),
									'no'=> esc_attr__('Disable', 'woof'),
							),
							
					),						
					array(
							'id' => 'header-services',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_attr__('Services Page Options', 'woof'),
							
					),	
			        array(
							'id' => 'services-header-show',
							'type' => 'button_set',
							'title' => esc_attr__('Services Page Header Section', 'woof'),
							'subtitle' => esc_attr__('Enable/Disable header section for services details page.', 'woof'),
							'default'  => 'yes',
							'options' => array(
									'yes'=> esc_attr__('Enable', 'woof'),
									'no'=> esc_attr__('Disable', 'woof'),
							),
							
					),						
					array(
							'id' => 'services-page-tile',
							'type' => 'text',
							'title' => __('Page Header Title', 'woof'),
							'subtitle' => __('insert services details page title here.', 'woof'),
							'default' => '',
							'required' => array('services-header-show', '=' , 'yes'),	
					),	
					array(
							'id' => 'serv_icon_class',
							'type' => 'text',
							'title' => esc_attr__('Header Icon Class', 'woof'),
							'subtitle' => __('<a href="http://webredox.net/demo/wp/woof/icon" target="_blank">Flaticon</a> Ex: flaticon-dog-20 <br><a href="https://fontawesome.com/icons?d=gallery" target="_blank">Fontawesome Icon</a> Ex: fab fa-android', 'woof'),
							'required' => array('services-header-show', '=' , 'yes')
					
					),					
					array(
							'id' => 'opt-services-bge',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_attr__('Service Details Page Header Background', 'woof'),
							'subtitle' => esc_attr__('', 'woof'),
							
					),
						
			        array(
							'id' => 'portfolio-related-post',
							'type' => 'button_set',
							'title' => esc_attr__('Services Gallery Section', 'woof'),
							'subtitle' => esc_attr__('Enable/Disable gallery section for services details page.', 'woof'),
							'default'  => 'no',
							'options' => array(
									'yes'=> esc_attr__('Enable', 'woof'),
									'no'=> esc_attr__('Disable', 'woof'),
							),
							
					),	
					array(
							'id' => 'header-gallery',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_attr__('Gallery Options', 'woof'),
							
					),	
					array(
							'id' => 'prf-project-filter-all',
							'type' => 'text',
							'title' => esc_attr__('Gallery All Text', 'woof'),
							'subtitle' => esc_attr__('Change/Repalce gallery filter "All" text here.', 'woof'),							
							'default' => '',
							
					),	
					
                    )
                ));					
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-bullhorn',
                    'title'  => esc_attr__( 'Blog Settings', 'woof' ),
                    'fields' => array(
					
					array(
							'id' => 'blogtyle',
							'type' => 'button_set',
							'title' => esc_attr__('Select Blog Layout', 'woof'),
							'subtitle' => esc_attr__('', 'woof'),
							'desc' => '',
							'options' => array(
									'st2'=> esc_attr__('Left Sidebar', 'woof'),
									'st1' => esc_attr__('Right Sidebar', 'woof'),

							),
							'default'  => 'st1'
					),
			        array(
							'id' => 'index-header-show',
							'type' => 'button_set',
							'title' => esc_attr__('Blog Header Section', 'woof'),
							'subtitle' => esc_attr__('Enable/Disable header section for blog single, archives, category, tag & search page.', 'woof'),
							'default'  => 'yes',
							'options' => array(
									'yes'=> esc_attr__('Enable', 'woof'),
									'no'=> esc_attr__('Disable', 'woof'),
							),
							
					),						
					array(
						'id'       => 'opt-services-bg',
						'type'     => 'background',
						'title'    => esc_attr__( 'Index Page Header Background', 'woof' ),
						'subtitle' => esc_attr__( '', 'woof' ),
						'desc'     => esc_attr__( '', 'woof' ),
						'required' => array('index-header-show', '=' , 'yes'),
						'output'      => array('.blog .jumbotron, .archive .jumbotron, .category .jumbotron, .tag  .jumbotron, .search .jumbotron, .single-post .jumbotron, .single  .jumbotron'),
						'background-repeat'      => false,
						'background-attachment'      => false,
						'background-position'      => false,
						'background-size'      => false,
						'background-image'      => true,
						'background-color'      => false,
						
					),						
					array(
							'id' => 'blog-page-tile',
							'type' => 'text',
							'title' => esc_attr__('Blog Page Title ', 'woof'),
							'subtitle' => esc_attr__('Insert blog page title text here.', 'woof'),
							'required' => array('index-header-show', '=' , 'yes')
							
					),
					array(
							'id' => 'blog_icon_class',
							'type' => 'text',
							'title' => esc_attr__('Header Icon Class', 'woof'),
							'subtitle' => __('<a href="http://webredox.net/demo/wp/woof/icon" target="_blank">Flaticon</a> Ex: flaticon-dog-20 <br><a href="https://fontawesome.com/icons?d=gallery" target="_blank">Fontawesome Icon</a> Ex: fab fa-android', 'woof'),
							'required' => array('index-header-show', '=' , 'yes')
					
					),					
					array(
							'id' => 'arch-page-title',
							'type' => 'text',
							'title' => __('Archive Page Title', 'woof'),
							'subtitle' => __('Write header title for blog archive page here. Ex: Archive : ', 'woof'),
							'default' => '',
							'required' => array('index-header-show', '=' , 'yes')
					),	

					array(
							'id' => 'cat-page-title',
							'type' => 'text',
							'title' => __('Category Page Title', 'woof'),
							'subtitle' => __('Write header title for blog category page here. Ex: Category : ', 'woof'),
							'default' => '',
							'required' => array('index-header-show', '=' , 'yes')
					),	
	
					array(
							'id' => 'tag-page-title',
							'type' => 'text',
							'title' => __('Tag Page Title', 'woof'),
							'subtitle' => __('Write header title for blog tag page here. Ex: Tag : ', 'woof'),
							'default' => '',
							'required' => array('index-header-show', '=' , 'yes')
					),						

					array(
							'id' => 'src-page-title',
							'type' => 'text',
							'title' => esc_attr__('Search Page Title', 'woof'),
							'subtitle' => esc_attr__('Write header title for blog search page title here. Ex: Search Results for :', 'woof'),
							'default' => '',
							'required' => array('index-header-show', '=' , 'yes')
					),					

					
                    )
                ) );
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-cog',
                    'title'  => esc_html__( 'Translate Settings', 'redux-framework-demo' ),
                    'fields' => array(
					array(
			                'id' => 'notice_blog_translation',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => esc_html__('Translation Options', 'woof'),
			                'desc' => esc_html__('Default Text Translate Here.', 'woof'),
			        ),	
					array(
							'id' => 'blog-read-more',
							'type' => 'text',
							'title' => __('Read More Text', 'woof'),
							'subtitle' => __('Change/Repalce "Read More" text here.', 'woof'),							
							'default' => '',
							
					),						
					array(
							'id' => 'translet_opt_10',
							'type' => 'text',
							'title' => esc_html__('One Comment on', 'woof'),
							'subtitle' => esc_html__('Post Comment Section.', 'woof'),
					),
					
					array(
							'id' => 'translet_opt_11',
							'type' => 'text',
							'title' => esc_html__('Comment on', 'woof'),
							'subtitle' => esc_html__('Post Comment Section.', 'woof'),
					),
					
					array(
							'id' => 'translet_opt_12',
							'type' => 'text',
							'title' => esc_html__('Comments on', 'woof'),
							'subtitle' => esc_html__('Post Comment Section.', 'woof'),
					),
					
					array(
							'id' => 'translet_opt_13',
							'type' => 'text',
							'title' => esc_html__('Comments are closed.', 'woof'),
							'subtitle' => esc_html__('Post Comment Section.', 'woof'),
					),
					
					array(
							'id' => 'translet_opt_14',
							'type' => 'text',
							'title' => esc_html__('Your Name', 'woof'),
							'subtitle' => esc_html__('Post Comment Section Form.', 'woof'),
					),
					
					array(
							'id' => 'translet_opt_15',
							'type' => 'text',
							'title' => esc_html__('Your Email', 'woof'),
							'subtitle' => esc_html__('Post Comment Section Form.', 'woof'),
					),
					
					array(
							'id' => 'translet_opt_16',
							'type' => 'text',
							'title' => esc_html__('Your Comment', 'woof'),
							'subtitle' => esc_html__('Post Comment Section Form.', 'woof'),
					),
					
					array(
							'id' => 'translet_opt_17',
							'type' => 'text',
							'title' => esc_html__('Leave a Reply', 'woof'),
							'subtitle' => esc_html__('Post Comment Section Form.', 'woof'),
					),
					
					array(
							'id' => 'translet_opt_22',
							'type' => 'text',
							'title' => esc_html__('Type & Hit Enter...', 'woof'),
							'subtitle' => esc_html__('Search Widget Placeholder.', 'woof'),
					),
					
                    )
                ) );					
				
				if (class_exists('WooCommerce')) {
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el el-shopping-cart-sign',
                    'title'  => esc_attr__( 'Shop Settings', 'woof' ),
                    'fields' => array(
					
					array(
							'id' => 'wr-shop-opt',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_attr__('Shop Page Header Options', 'woof'),
							'desc' => esc_attr__(' ', 'woof')
							
					  ),

					array(
							'id' => 'shopheaderimg',
							'type' => 'media',
							'compiler' => 'true',
							'title' => esc_attr__('Upload Shop Page Header Image', 'woof'),
							'subtitle' => esc_attr__('', 'woof'),
							
					),			
					array(
							'id' => 'shop_icon_class',
							'type' => 'text',
							'title' => esc_attr__('Page Header Icon Class', 'woof'),
							'subtitle' => __('<a href="http://webredox.net/demo/wp/woof/icon" target="_blank">Flaticon</a> Ex: flaticon-dog-20 <br><a href="https://fontawesome.com/icons?d=gallery" target="_blank">Fontawesome Icon</a> Ex: fab fa-android', 'woof'),							
					
					),						
					
					
                    )
                ) );
				}
				
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-brush',
                    'title'  => esc_attr__( 'Styling', 'woof' ),
                    'fields' => array(
					
					array(
                            'id'       => 'opt-theme-style-red',
                            'type'     => 'color',
                            'title'    => esc_attr__( 'Color Scheme Red', 'woof' ),
                            'subtitle' => esc_attr__( 'Only color validation can be done on this field type', 'woof' ),
                            'desc'     => esc_attr__( 'Change all global color.', 'woof' ),
                            //'regular'   => false, // Disable Regular Color
                            //'hover'     => false, // Disable Hover Color
                            //'active'    => false, // Disable Active Color
                            //'visited'   => true,  // Enable Visited Color
                            
                        ),
					array(
                            'id'       => 'opt-theme-style-yellow',
                            'type'     => 'color',
                            'title'    => esc_attr__( 'Color Scheme Yellow', 'woof' ),
                            'subtitle' => esc_attr__( 'Only color validation can be done on this field type', 'woof' ),
                            'desc'     => esc_attr__( 'Change all global color.', 'woof' ),
                            //'regular'   => false, // Disable Regular Color
                            //'hover'     => false, // Disable Hover Color
                            //'active'    => false, // Disable Active Color
                            //'visited'   => true,  // Enable Visited Color
                            
                        ),	
					array(
                            'id'       => 'opt-theme-style-brown',
                            'type'     => 'color',
                            'title'    => esc_attr__( 'Color Scheme Brown', 'woof' ),
                            'subtitle' => esc_attr__( 'Only color validation can be done on this field type', 'woof' ),
                            'desc'     => esc_attr__( 'Change all global color.', 'woof' ),
                            //'regular'   => false, // Disable Regular Color
                            //'hover'     => false, // Disable Hover Color
                            //'active'    => false, // Disable Active Color
                            //'visited'   => true,  // Enable Visited Color
                            
                        ),	
					array(
                            'id'       => 'opt-theme-style-lt-yellow',
                            'type'     => 'color',
                            'title'    => esc_attr__( 'Color Scheme Light Yellow', 'woof' ),
                            'subtitle' => esc_attr__( 'Only color validation can be done on this field type', 'woof' ),
                            'desc'     => esc_attr__( 'Change all global color.', 'woof' ),
                            //'regular'   => false, // Disable Regular Color
                            //'hover'     => false, // Disable Hover Color
                            //'active'    => false, // Disable Active Color
                            //'visited'   => true,  // Enable Visited Color
                            
                        ),						
					array(
                        'id'        => 'custom-css',
                        'type'      => 'ace_editor',
                        'title'     => __('Custom CSS', 'woof'),
                        'subtitle'  => __('Write your CSS code here.', 'woof'),
                        'mode'      => 'css',
						'theme'    => 'monokai',
                        
                    ),						
					

                    )
                ) );
				
            Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-text-width',
                    'title'  => __( 'Typography', 'woof' ),
                    'fields' => array(     

						array(
			                'id' => 'notice_critical11',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Entry Headings', 'woof'),
			                'desc' => __('Entry Headings in posts/pages', 'woof')
			            ),					
                        array(
                            'id'          => 'typography-h1',
                            'type'        => 'typography', 
                            'title'       => __('H1', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h1'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the Heading font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
                        array(
                            'id'          => 'typography-h2',
                            'type'        => 'typography', 
                            'title'       => __('H2', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h2'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the Heading font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),      
                        ),
                        array(
                            'id'          => 'typography-h3',
                            'type'        => 'typography', 
                            'title'       => __('H3', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h3'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the Heading font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
                        array(
                            'id'          => 'typography-h4',
                            'type'        => 'typography', 
                            'title'       => __('H4', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h4'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the Heading font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),                        	
                        array(
                            'id'          => 'typography-h5',
                            'type'        => 'typography', 
                            'title'       => __('H5', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h5'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the Heading font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
                        array(
                            'id'          => 'typography-h6',
                            'type'        => 'typography', 
                            'title'       => __('H6', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('h6'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the Heading font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
						  
						array(
			                'id' => 'notice_critical13',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Page', 'woof'),
			                'desc' => __('', 'woof')
			            ),
                        array(
                            'id'          => 'typography-pgtl',
                            'type'        => 'typography', 
                            'title'       => __('Page Title', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.page-title h1'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the page title font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),	
                        array(
                            'id'          => 'typography-pgsubtl',
                            'type'        => 'typography', 
                            'title'       => __('Page Breadcrumb', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.page-breadcrumb a, .page-breadcrumb'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the page sub title font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						), 

                        array(
                            'id'          => 'typography-pgcontentl',
                            'type'        => 'typography', 
                            'title'       => __('Content', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('p'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the page content text font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),	
                        array(
                            'id'          => 'typography-pgsectl',
                            'type'        => 'typography', 
                            'title'       => __('Content Title', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.wr-section-full-width .themeix-section-h h3, .wrapper-content .themeix-section-h h3'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the page section title font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						), 						
                        array(
                            'id'          => 'typography-pgsecwdtl',
                            'type'        => 'typography', 
                            'title'       => __('Sidebar Widget Title', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.themeix-section-h h3.spo-sidebar-widget-title'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the page section title font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						), 						
						array(
			                'id' => 'notice_critical14',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Post', 'woof'),
			                'desc' => __('', 'woof')
			            ),	
                        array(
                            'id'          => 'typography-bltl',
                            'type'        => 'typography', 
                            'title'       => __('Title', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('article h4'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the blog post title font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),						
                        array(
                            'id'          => 'typography-blcon',
                            'type'        => 'typography', 
                            'title'       => __('Content', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('article p'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the blog post content font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),	
						array(
			                'id' => 'notice_critical1_permalink1',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Permalink', 'woof'),
			                'desc' => __('', 'woof')
			            ),	
                        array(
                            'id'          => 'typography-lnurl',
                            'type'        => 'typography', 
                            'title'       => __('Link URL', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('a'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the permalink link url font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),		
						array(
                            'id'          => 'typography-a-hover',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Link URL Hover', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('a:focus, a:hover'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),							
						array(
			                'id' => 'notice_critical1_nav_menu',
			                'type' => 'info',
			                'notice' => true,
			                'style' => 'success',
			                'title' => __('Nav Menu', 'woof'),
			                'desc' => __('', 'woof')
			            ),	
                        array(
                            'id'          => 'typography-nav-menu-item',
                            'type'        => 'typography', 
                            'title'       => __('Menu Item', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.navbar-nav a, .sliding-menu a, .dropdown-item'),
                            'units'       =>'px',
                            'subtitle'    => __('Specify the permalink link url font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),							
						),		
						array(
                            'id'          => 'typography-nav-menu-hover',
                            'type'        => 'typography', 
                            'title'       => esc_attr__('Menu Item Hover', 'woof'),
                            'google'      => true, 
                            'font-backup' => false,
                            'output'      => array('.navbar-nav a:hover,  .navbar .nav-item.active,.navbar .dropdown-item:hover,.navbar .dropdown-item:focus,.navbar .nav-link:focus,.navbar .nav-item:hover,.navbar .nav-item .active, .navbar .nav-item.active a'),
                            'units'       =>'px',
                            'subtitle'    => esc_attr__('Specify the permalink font properties.', 'woof'),
                            'default'     => array(
                            'color'       => false,
                            'font-style'  => false,
                            'font-family' => false,
                            'google'      => true,
                            'font-size'   => false,
                            'line-height' => false,
                            ),
						),						
                    )
               ) );		


            Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-smiley-alt',
                    'title'  => esc_attr__( 'Social Icons', 'woof' ),
                    'fields' => array(
										
					array(					
						   'id' => 'social-icon-site',
						   'type' => 'button_set',
						   'title' => esc_attr__('Social Icons', 'woof'),
						   'desc' => '',
						   'subtitle' => esc_attr__('Enable/Disable social icons show.', 'woof'),
						   'options' => array(
							 'yes'=> esc_attr__('Enable', 'woof'),
							 'no'=> esc_attr__('Disable', 'woof'),
						   ),
						   'default'  => 'no'
					
					),		
	
					array(
						'id'        => 'facebook',
						'type'      => 'text',
						'title'     => esc_attr__('Facebook Link', 'woof'),
						'subtitle'  => esc_attr__('Write your facebook url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),

					 array(
						'id'        => 'twitter',
						'type'      => 'text',
						'title'     => esc_attr__('Twitter Link', 'woof'),
						'subtitle'  => esc_attr__('Write your twitter url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),

					 array(
						'id'        => 'google-plus',
						'type'      => 'text',
						'title'     => esc_attr__('Google+ Link', 'woof'),
						'subtitle'  => esc_attr__('Write your google+ url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),

					 array(
						'id'        => 'linkedin',
						'type'      => 'text',
						'title'     => esc_attr__('LinkedIn Link', 'woof'),
						'subtitle'  => esc_attr__('Write your linkedin url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),

					 array(
						'id'        => 'instagram',
						'type'      => 'text',
						'title'     => esc_attr__('Instagram Link', 'woof'),
						'subtitle'  => esc_attr__('Write your instagram url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),

					 array(
						'id'        => 'pinterest',
						'type'      => 'text',
						'title'     => esc_attr__('Pinterest Link', 'woof'),
						'subtitle'  => esc_attr__('Write your pinterest url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),
					 array(
						'id'        => 'youtube',
						'type'      => 'text',
						'title'     => esc_attr__('Youtube Link', 'woof'),
						'subtitle'  => esc_attr__('Write your youtube url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),	
					 array(
						'id'        => 'vimeo',
						'type'      => 'text',
						'title'     => esc_attr__('Vimeo Link', 'woof'),
						'subtitle'  => esc_attr__('Write your vimeo url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),	
					 array(
						'id'        => 'whatsapp',
						'type'      => 'text',
						'title'     => esc_attr__('Whatsapp link', 'woof'),
						'subtitle'  => esc_attr__('Write your whatsapp url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),			

					 array(
						'id'        => 'skype',
						'type'      => 'text',
						'title'     => esc_attr__('Skype Link', 'woof'),
						'subtitle'  => esc_attr__('Write your skype url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),
					 array(
						'id'        => 'dribbble',
						'type'      => 'text',
						'title'     => esc_attr__('Dribbble Link', 'woof'),
						'subtitle'  => esc_attr__('Write your dribbble url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),

					 array(
						'id'        => 'dropbox',
						'type'      => 'text',
						'title'     => esc_attr__('Dropbox Link', 'woof'),
						'subtitle'  => esc_attr__('Write your dropbox url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),			
					 array(
						'id'        => 'github',
						'type'      => 'text',
						'title'     => esc_attr__('Github Link:', 'woof'),
						'subtitle'  => esc_attr__('Write your github url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),
					
					array(
						'id'        => 'xing',
						'type'      => 'text',
						'title'     => esc_attr__('Xing Link:', 'woof'),
						'subtitle'  => esc_attr__('Write your xing url', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),

					 array(
						'id'        => 'email',
						'type'      => 'text',
						'title'     => esc_attr__('E-mail:', 'woof'),
						'subtitle'  => esc_attr__('Write your e-mail address', 'woof'),
						'dece'      => esc_attr__('','woof'),
						'validate'  => '',
						'required' => array('social-icon-site', '=' , 'yes')
					),  


					array(
							'id'       => 'opt_add_more_social',
							'type'     => 'multi_text',
							'title'    => esc_html__( 'Add More Social Icons', 'woof' ),
							'subtitle' => esc_html__( '', 'woof' ),
							'desc'     => __( 'Ex: &lt;li class="list-inline-item"&gt;&lt;a target="_blank" href="#"&gt;&lt;i class="fab fa-facebook-f"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;<br>Use <a href="https://fontawesome.com/v5/cheatsheet" target="_blank">Fontawesome</a> Icon Class', 'woof' ),
							'required' => array('social-icon-site', '=' , 'yes')
					),	

					
							)
						));						
				
				 Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-th-large',
                    'title'  => esc_attr__( 'Footer Options', 'woof' ),
                    'fields' => array(	
											
					array(
							'id' => 'copyright',
							'type' => 'editor',
							'wpautop'=>true,
							'compiler' => 'true',
							'title' => __('Copyright text of the Website', 'woof'),
							'subtitle' => __('Write a Copyright text of your WebSite', 'woof'),
							'default'          => '&copy; 2022 Woof! Developed by webRedox | All rights reserved.',
							'args'   => array(
								'teeny'            => true,
								'textarea_rows'    => 10
							)
					),
					
			        array(
							'id' => 'totop',
							'type' => 'button_set',
							'title' => esc_attr__('Back To Top', 'woof'),
							'default'  => 'no',
							'options' => array(
									'yes'=> esc_attr__('Enable', 'woof'),
									'no'=> esc_attr__('Disable', 'woof'),
							),
							
					),						

					
					)
                ) );
				
				Redux::setSection( $opt_name, array(
                    'icon'   => 'el-icon-key',
                    'title'  => esc_html__( 'Documentation', 'woof' ),
                    'fields' => array(										
					array(
							'id' => 'docs',
							'type' => 'info',
		                    'notice' => true,
		                    'style' => 'info',
							'title' => esc_html__('Woof! Theme Documentation', 'woof'),
							'desc' => __('<a href="http://webredox.net/demo/wp/woof/doc/documentation.html" target="_blank">Click Here</a> To get the theme documentation.', 'woof')
							
					),	
			
					)
                ));				
				
				
    /*
     * <--- END SECTIONS
     */


    /*
     *
     * YOU MUST PREFIX THE FUNCTIONS BELOW AND ACTION FUNCTION CALLS OR ANY OTHER CONFIG MAY OVERRIDE YOUR CODE.
     *
     */

    /*
    *
    * --> Action hook examples
    *
    */

    // If Redux is running as a plugin, this will remove the demo notice and links
    //add_action( 'redux/loaded', 'remove_demo' );

    // Function to test the compiler hook and demo CSS output.
    // Above 10 is a priority, but 2 in necessary to include the dynamically generated CSS to be sent to the function.
    //add_filter('redux/options/' . $opt_name . '/compiler', 'compiler_action', 10, 3);

    // Change the arguments after they've been declared, but before the panel is created
    //add_filter('redux/options/' . $opt_name . '/args', 'change_arguments' );

    // Change the default value of a field after it's been set, but before it's been useds
    //add_filter('redux/options/' . $opt_name . '/defaults', 'change_defaults' );

    // Dynamically add a section. Can be also used to modify sections/fields
    //add_filter('redux/options/' . $opt_name . '/sections', 'dynamic_section');

    /**
     * This is a test function that will let you see when the compiler hook occurs.
     * It only runs if a field    set with compiler=>true is changed.
     * */
    if ( ! function_exists( 'compiler_action' ) ) {
        function compiler_action( $options, $css, $changed_values ) {
            echo '<h1>The compiler hook has run!</h1>';
            echo "<pre>";
            print_r( $changed_values ); // Values that have changed since the last save
            echo "</pre>";
            //print_r($options); //Option values
            //print_r($css); // Compiler selector CSS values  compiler => array( CSS SELECTORS )
        }
    }

    /**
     * Custom function for the callback validation referenced above
     * */
    if ( ! function_exists( 'redux_validate_callback_function' ) ) {
        function redux_validate_callback_function( $field, $value, $existing_value ) {
            $error   = false;
            $warning = false;

            //do your validation
            if ( $value == 1 ) {
                $error = true;
                $value = $existing_value;
            } elseif ( $value == 2 ) {
                $warning = true;
                $value   = $existing_value;
            }

            $return['value'] = $value;

            if ( $error == true ) {
                $return['error'] = $field;
                $field['msg']    = 'your custom error message';
            }

            if ( $warning == true ) {
                $return['warning'] = $field;
                $field['msg']      = 'your custom warning message';
            }

            return $return;
        }
    }

    /**
     * Custom function for the callback referenced above
     */
    if ( ! function_exists( 'redux_my_custom_field' ) ) {
        function redux_my_custom_field( $field, $value ) {
            print_r( $field );
            echo '<br/>';
            print_r( $value );
        }
    }

    /**
     * Custom function for filtering the sections array. Good for child themes to override or add to the sections.
     * Simply include this function in the child themes functions.php file.
     * NOTE: the defined constants for URLs, and directories will NOT be available at this point in a child theme,
     * so you must use get_template_directory_uri() if you want to use any of the built in icons
     * */
    if ( ! function_exists( 'dynamic_section' ) ) {
        function dynamic_section( $sections ) {
            //$sections = array();
            $sections[] = array(
                'title'  => esc_attr__( 'Section via hook', 'woof' ),
                'desc'   => esc_attr__( '<p class="description">This is a section created by adding a filter to the sections array. Can be used by child themes to add/remove sections from the options.</p>', 'woof' ),
                'icon'   => 'el el-paper-clip',
                // Leave this as a blank section, no options just some intro text set above.
                'fields' => array()
            );

            return $sections;
        }
    }

    /**
     * Filter hook for filtering the args. Good for child themes to override or add to the args array. Can also be used in other functions.
     * */
    if ( ! function_exists( 'change_arguments' ) ) {
        function change_arguments( $args ) {
            //$args['dev_mode'] = true;

            return $args;
        }
    }

    /**
     * Filter hook for filtering the default value of any given field. Very useful in development mode.
     * */
    if ( ! function_exists( 'change_defaults' ) ) {
        function change_defaults( $defaults ) {
            $defaults['str_replace'] = 'Testing filter hook!';

            return $defaults;
        }
    }

    /**
     * Removes the demo link and the notice of integrated demo from the redux-woof plugin
     */
    if ( ! function_exists( 'remove_demo' ) ) {
        function remove_demo() {
            // Used to hide the demo mode link from the plugin page. Only used when Redux is a plugin.
            if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
                remove_filter( 'plugin_row_meta', array(
                    ReduxFrameworkPlugin::instance(),
                    'plugin_metalinks'
                ), null, 2 );

                // Used to hide the activation notice informing users of the demo panel. Only used when Redux is a plugin.
                remove_action( 'admin_notices', array( ReduxFrameworkPlugin::instance(), 'admin_notices' ) );
            }
        }
    }

