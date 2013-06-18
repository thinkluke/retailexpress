// JavaScript Document

// ------------------------------------------  
//	SETUP FORMS
// ------------------------------------------  

function form_setup(){
	$('.cblock #input_1_2').val('Full Name');
	$('.cblock #input_1_9').val('Company Name');
	$('.cblock #input_1_3').val('Email Address');
	$('.cblock #input_1_4').val('Phone Number');
	$('.cblock #input_1_7').val('Industry');
	$('.cblock #input_1_5').val('Number of Stores');
	$('.cblock #input_1_6').val('Comments');
	
	$('.cblock #input_1_2').on('focus', function(){
		var $this = $(this);
		if($this.val() == 'Full Name'){
			$this.val('');
		}
	})
	.on('blur', function(){
		var $this = $(this);
		if($this.val() == ''){
			$this.val('Full Name');
		}
	 });
	 
	 $('.cblock #input_1_9').on('focus', function(){
		var $this = $(this);
		if($this.val() == 'Company Name'){
			$this.val('');
		}
	})
	.on('blur', function(){
		var $this = $(this);
		if($this.val() == ''){
			$this.val('Company Name');
		}
	 });
	 
	 
	 $('.cblock #input_1_3').on('focus', function(){
		var $this = $(this);
		if($this.val() == 'Email Address'){
			$this.val('');
		}
	})
	.on('blur', function(){
		var $this = $(this);
		if($this.val() == ''){
			$this.val('Email Address');
		}
	 });
	 $('.cblock #input_1_4').on('focus', function(){
		var $this = $(this);
		if($this.val() == 'Phone Number'){
			$this.val('');
		}
	})
	.on('blur', function(){
		var $this = $(this);
		if($this.val() == ''){
			$this.val('Phone Number');
		}
	 });
	 
	 $('.cblock #input_1_7').on('focus', function(){
		var $this = $(this);
		if($this.val() == 'Industry'){
			$this.val('');
		}
	})
	.on('blur', function(){
		var $this = $(this);
		if($this.val() == ''){
			$this.val('Industry');
		}
	 });
	 
	 $('.cblock #input_1_5').on('focus', function(){
		var $this = $(this);
		if($this.val() == 'Number of Stores'){
			$this.val('');
		}
	})
	.on('blur', function(){
		var $this = $(this);
		if($this.val() == ''){
			$this.val('Number of Stores');
		}
	 });	
	$('.cblock #input_1_6').on('focus', function(){
		var $this = $(this);
		if($this.val() == 'Comments'){
			$this.val('');
		}
	})
	.on('blur', function(){
		var $this = $(this);
		if($this.val() == ''){
			$this.val('Comments');
		}
	 });
	
}

// ------------------------------------------  
//	Slideshows
// ------------------------------------------  
function slideshows() {
	//Home Page Slider
	$('#full-width-slider').royalSlider({
		transitionType: 'fade',
		autoPlay: {
    		enabled: true,
    		pauseOnHover: true
    	},
		aarrowsNav: true,
		loop: false,
		keyboardNavEnabled: true,
		controlsInside: false,
		imageScaleMode: 'fill',
		arrowsNavAutoHide: false,
		autoScaleSlider: true, 
		autoScaleSliderWidth: 960,     
		autoScaleSliderHeight: 350,
		controlNavigation: 'bullets',
		thumbsFitInViewport: false,
		navigateByClick: false,
		startSlideId: 0,
		globalCaption: false,
		deeplinking: {
		  enabled: true,
		  change: false
		},
		/* size of all images http://help.dimsemenov.com/kb/royalslider-jquery-plugin-faq/adding-width-and-height-properties-to-images */
		imgWidth: 1920,
		imgHeight: 540
  	});
	
	// CLIENT SLIDER
	$('#client-slider').royalSlider({
		transitionType: 'slide',
		autoPlay: {
			enabled: true,
			pauseOnHover: true,
			delay: 6000
		},
		autoHeight:false,
		arrowsNav: false,
		fadeinLoadedSlide: false,
		controlNavigationSpacing: 0,
		controlNavigation: 'tabs',
		imageScaleMode: 'none',
		imageAlignCenter:false,
		loop: true,
		loopRewind: true,
		keyboardNavEnabled: false,
		usePreloader: false
	});

}

// ------------------------------------------  
//	Profit Calculator
// ------------------------------------------  
function profit_calculator(){
	//PROFIT CALCULATOR
   	$(":range").rangeinput({
		css: {
       		input: 'range',       
        	slider: 'rslider',     
        	progress: 'progressa', 
       		handle: 'handle'    
        },
	  	progress: true
	});
	
	/*
	http://jqueryui.com/slider/#rangemax
	http://www.lightspeedretail.com/buy/
	$( "#minus-1" ).click(function(){
			$('#slider-1').slider( "value" , $('#slider-1').slider( "value")-1 );	
	})
	$( "#add-1" ).click(function(){
		$('#slider-1').slider( "value" , $('#slider-1').slider( "value")+1 );	
	})
	*/
}

// ------------------------------------------  
//	Randoms
// ------------------------------------------  

function randoms(){
	//MODAL Windows
	//$('.customer-modal').modal();
	
	/*	*/
	$('#myModal-1').on('hide', function () {
		
  		$('#video').tubeplayer('stop');
	})
	
	$('#myModal-1').on('hide', function () {
		
  		$('#video').tubeplayer('stop');
	})
	
		

}

// ------------------------------------------  
//	Resize Sidebar
// ------------------------------------------  
function sidebarResize() {
		var sideBar 	= $(".sidebar, .bgsidebar"),
			contentWrap = $("#blog .span9");
		if (sideBar.height() < contentWrap.height() ) {
			$(sideBar).css({'height':($(contentWrap).height()+'px')});
		}
	}

$(document).ready(function(){
	form_setup();
	profit_calculator();
	slideshows();
	randoms();
	sidebarResize();

});

$(window).load(function(){
	
	
});

$(window).on('resize', function(){
	sidebarResize();
});