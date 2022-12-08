jQuery(document).ready(function () {
	"use strict";

	// Calling LayerSlider 
		
        jQuery('#slider').layerSlider({
            responsive: true,
            responsiveUnder: 1280,
            layersContainer: 1280,
            skin: 'outline',
            hoverPrevNext: true,
            skinsPath: './wp-content/themes/woof/includes/js/vendor/layerslider/skins/',
            autoStart: true,
			autoPlayVideos : false
        });
		
 });