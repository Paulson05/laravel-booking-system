(function($) {
"use strict";
var hg = {
	init: function(){
		this.cacheDom();
		this.bindEvents();
		this.totopButton();
		this.initSlider();
		this.enablePopupGallery();
		this.enablePopupSlGallery();
		this.initContactForm();
   		this.navOverlay();
    	this.stickyHeader();
		this.initParallax();
		this.initDatePickers();
		this.easyPag();
		this.enableTabs();
	},
	cacheDom: function(){
		this.toTop = $('.totop');
		this.topTrigger = $('.cg__topMenu-trigger');
		this.menuBurger = $('.cg__menuBurger');
		this.cgmenu = $('.cg__mainMenu');
		this.rezMenu = $('.cg__resMenu');
		this.pageWrapper = $('#page_wrapper');
		this.backIcon = $('.cg__resMenu-backIcon');
		this.subMenuIcon = $('.cg__subMenu-backIcon');
		this.subMenuButton = $('.cg__res-submenu-trigger');
		this.testimonialSlider = $('.hg-testimonialSlider');
		this.gridGallerySlider = $('.hg-gridGallery-slider');
		this.GallerySlider = $('.hg-slider-gallery');
		this.GalleryNav = $('.slider-nav');
		this.GalleryRoom = $('.hg-room-gallery');
		this.otherRooms = $('.other-rooms-slider');
		this.sliderArrow = $('.slick-arrow');
		this.hasAnimation = $('.hasAnimation');
		this.videoBox = $('.hg__playVideo');
		this.accordionTab = $('.cg__accordion-title');
    	this._menuTrigger = $('.sh__hamburger-trigger');
		this._mainMenu = $('.sh__navOverlay--mainNav');
		this._overlayMenuHolder = $('.sh__navOverlay');
		this._overlayMenuClose = $('.button-navOverlay-close');
		this.menuLinks = $('.sh__navOverlay--mainNav li a');
		this._body = $('body');
	},
	bindEvents: function(){
		var self = this;
		self.topTrigger.on('click', self.responsiveTopMenu);
		self.menuBurger.on('click', self.triggerMenu);
		self.rezMenu.find( 'a:not(.cg__resMenu-back)').on('click', self.CloseMenu);
		self.backIcon.on('click', self.CloseMenu);
		self.subMenuIcon.on('click', self.CloseMenu);
		self.subMenuButton.on('click', self.triggerSubMenu);
		$(window).on('scroll', self.addAnimations);
		self.videoBox.magnificPopup({type:'iframe'});
		this.accordionTab.on('click', self.toggleAccordion);

	},
	enableTabs(){
		$('.hg-tabs').on('click', '.tablinks', function(event){
			event.preventDefault();

			var currentTab = $(this).attr('href'),
				tabsContainer = $(this).closest('.hg-tabs'),
				allTabs = $('.tabcontent'),
				allTabLinks = tabsContainer.find('.tablinks');

			// Remove the active class for all tab links
			allTabLinks.removeClass('active');
			// Set currrent tab as active
			$(this).addClass('active');

			// Hide all tabs
			allTabs.hide();
			$(currentTab).show();

		});

		var activeTab = $('.hg-tabs .tablinks.active').attr('href');
		$(activeTab).show();

	},
	easyPag: function() {
		var $pag = $('#easyPaginate');
		$pag.easyPaginate({
			paginateElement: 'li',
			elementsPerPage: 8,
			effect: 'default',
			firstButton: 'false',
			firstButtonText: '',
			lastButton: 'false',
			lastButtonText: '',
			prevButtonText: 'PREVIOUS',
			nextButtonText: 'NEXT',
		});
		
	},
	initParallax: function() {
		var $rellaxItems = $('.rellax');
		if( $rellaxItems.length > 0 ){
			// Also can pass in optional settings block
			var rellax = new Rellax('.rellax', {

				speed: 7,
				//center: true,
		    round: true,
		    vertical: true,
			});
		}
	},
	initDatePickers: function(){
		$('.js-datepicker').datepicker();
	},
	initSlider: function() {
		var self = this;
		$('.cg__slider-caption').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: false,
			asNavFor: '.cg__slider',
			focusOnSelect: false,
			vertical: true,
			// fade: true,
			speed: 500
		});
		this.gridGallerySlider.slick({
			infinite: true,
			arrows: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			nextArrow: '<span class="hg-gridGallery--arrow arrow--next" style="display: block;"><svg viewBox="0 0 256 256"><polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round" stroke-linecap="round" points="72,16 184,128 72,240"></polyline></svg></span>',
		  prevArrow: '<span class="hg-gridGallery--arrow arrow--prev" style="display: block;"><svg viewBox="0 0 256 256"><polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round" stroke-linecap="round" points="184,16 72,128 184,240"></polyline></svg></span>',
			responsive: [
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		  ]
		});
		$('.hg-room-gallery').slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			arrows: true,
			fade: false,
			adaptiveHeight: true,
		 	infinite: false,
			useTransform: true,
		 	speed: 400,
		 	cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
		 });

		 $('.slider-nav')
		 	.on('init', function(event, slick) {
 				$('.slider-nav .slick-slide.slick-current').addClass('is-active');
 			})
 		.slick({
	 		slidesToShow: 7,
	 		slidesToScroll: 7,
	 		dots: false,
	 		focusOnSelect: false,
	 		infinite: false,
			//variableWidth: true,
	 		responsive: [{
	 			breakpoint: 1024,
	 			settings: {
	 				slidesToShow: 5,
	 				slidesToScroll: 5,
	 			}
	 		}, {
	 			breakpoint: 640,
	 			settings: {
	 				slidesToShow: 4,
	 				slidesToScroll: 4,
				}
	 		}, {
	 			breakpoint: 480,
	 			settings: {
	 				slidesToShow: 2,
	 				slidesToScroll: 2,
					variableWidth: true,
			}
	 		}]
	 	});
		$('.hg-room-gallery').on('afterChange', function(event, slick, currentSlide) {
		 $('.slider-nav').slick('slickGoTo', currentSlide);
		 var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
		 $('.slider-nav .slick-slide.is-active').removeClass('is-active');
		 $(currrentNavSlideElem).addClass('is-active');
		});

		$('.slider-nav').on('click', '.slick-slide', function(event) {
		 event.preventDefault();
		 var goToSingleSlide = $(this).data('slick-index');

		 $('.hg-room-gallery').slick('slickGoTo', goToSingleSlide);
		});
		this.otherRooms.slick({

  		slidesToShow: 3,
  		slidesToScroll: 3,
			arrows: true,
			infinite: true,
		  appendArrows: ".other-rooms__nav",
			nextArrow: '<span class="room_sample--arrow room_sample--arrow__next" style="display: block;"></span>',
		  prevArrow: '<span class="room_sample--arrow room_sample--arrow__prev" style="display: block;"></span>',
			responsive: [

			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		  ]
		});
		this.GallerySlider.slick({
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			arrows: true,
			nextArrow: '<span class="hg-slider-gallery--arrow arrow--next" style="display: block;"></span>',
		  prevArrow: '<span class="hg-slider-gallery--arrow arrow--prev" style="display: block;"></span>',
			responsive: [
			{
			  breakpoint: 768,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			},
			{
			  breakpoint: 480,
			  settings: {
				slidesToShow: 1,
				slidesToScroll: 1
			  }
			}
		  ]
		});
		this.testimonialSlider.slick({
			infinite: true,
			arrows: true,
			slidesToShow: 1,
			slidesToScroll: 1,
			nextArrow: '<span class="hg-testimonialSlider--arrow arrow--next" style="display: block;"><svg viewBox="0 0 256 256"><polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round" stroke-linecap="round" points="72,16 184,128 72,240"></polyline></svg></span>',
		  prevArrow: '<span class="hg-testimonialSlider--arrow arrow--prev" style="display: block;"><svg viewBox="0 0 256 256"><polyline fill="none" stroke="black" stroke-width="16" stroke-linejoin="round" stroke-linecap="round" points="184,16 72,128 184,240"></polyline></svg></span>',
		});
	},
	toggleAccordion: function() {
		var isOpened = $(this).closest('.cg__accordion-group').hasClass('is-opened');
		if (isOpened === true) {
			$(this).closest('.cg__accordion-group').removeClass('is-opened');
			$(this).closest('.cg__accordion-group').find('.cg__accordion-content').slideUp(300);
		} else {
			$(this).closest('.cg__accordion-group').addClass('is-opened');
			$(this).closest('.cg__accordion-group').find('.cg__accordion-content').slideDown(300);
		}
	},
	initContactForm: function() {
		var contactForm = $('.hg-contactform');
		if( ! contactForm.length > 0 ){
			return;
		}
		contactForm.on('submit', function(e) {
			e.preventDefault();
			e.stopPropagation();

			var self = $(this),
				submitButton = self.find('.hg-submitcontact');

			//#! Disable repetitive clicks on the submit button. Prevents postbacks
			self.addClass('js-disable-action');
			submitButton.addClass('js-disable-action');

			//#! Redirect to the specified url on success, ONLY if a url is present in the input value
			var redirectToInput = self.find('.hg-redirect-to'),
				redirectTo = ( typeof(redirectToInput) != 'undefined' ? redirectToInput.val() : '' ),
				//#! Holds the reference to the wrapper displaying the result message
				responseWrapper = self.find('.form-message');

			//#! Clear message
			responseWrapper.empty().hide();

			var fields = self.find('input'),
				textareas = self.find('textarea');

			var data = {
				'isAjaxForm': true
			};
			fields.each(function(i, field){
				data[field.name] = $(field).val();
			});

			// Textarea values cannot be read with val()
			textareas.each(function(i, field){
				data[field.name] = $(field).text();
			})

			//#! Execute the ajax request
			$.ajax({
				url: self.attr('action'),
				method: 'POST',
				cache: false,
				timeout: 20000,
				async: true,
				data: data
			}).done(function(response){
				responseWrapper.removeClass('js-response-success js-response-error');
				if(response && typeof(response.data) != 'undefined' ) {
					responseWrapper.empty();
					if( ! response.success ){
						responseWrapper.addClass('js-response-error');
						$.each( response.data, function(i, err) {
							responseWrapper.append('<p>'+err+'</p>');
						});
					}
					else {
						responseWrapper
							.addClass('js-response-success')
							.append('<p>'+response.data+'</p>');
						//#! Clear the form
						self.find('.hg-input').val('');
						//#! Redirect on success (maybe to a Thank you page, whatever)
						if( redirectTo.length > 0 ){
							window.setTimeout(function(){
								window.location.href = redirectTo;
							}, 2000);
						}
					}
					responseWrapper.fadeIn();
				}
				else {
					responseWrapper.removeClass('js-response-success');
					responseWrapper.empty().addClass('js-response-error').append('<p>An error occurred. Please try again in a few seconds.</p>').fadeIn();
				}
			}).fail(function(txt, err){
				responseWrapper.empty().addClass('js-response-error').append('<p>An error occurred: '+txt+' Err:'+err+'. Please try again in a few seconds.</p>').fadeIn();
			}).always(function() {
				self.removeClass('js-disable-action');
				submitButton.removeClass('js-disable-action');
			});
		});
	},
	enablePopupGallery: function() {
		$('.hg-gridGallery-jstrigger').each(function() {
		    $(this).magnificPopup({
		        delegate: 'a',
		        type: 'image',
		        gallery: {
		          enabled:true
		        }
		    });
		});
	},
	enablePopupSlGallery: function() {
		$('.hg-slider-jstrigger').each(function() {
		    $(this).magnificPopup({
		        delegate: 'a',
		        type: 'image',
		        gallery: {
		          enabled:true
		        }
		    });
		});
	},
	addAnimations: function() {
		hg.hasAnimation.each(hg.startAnimations);
	},
	startAnimations: function(index, el) {
		var itemIsReached = hg.isScrolledIntoView(el);
		if (itemIsReached) {
			var animationType = $(this).attr("data-animationType");
			var animationDuration = $(this).attr("data-animationDuration");
			var animationDelay = $(this).attr("data-animationDelay");

			if (!$(this).hasClass('is-animating')) {

				$(this).css({"animation-duration": animationDuration,
							"animation-name":animationType,
							"animation-delay":animationDelay});
			}
			$(this).addClass('is-animating');
		}
	},
	isScrolledIntoView: function(elem) {

		var docViewTop = $(window).scrollTop();
		var docViewBottom = docViewTop + $(window).height();
		var elemTop = $(elem).offset().top;
		var elemBottom = elemTop + $(elem).height();
		var offset = 600;
		return ((elemBottom <= docViewBottom + offset) && (elemTop >= docViewTop - offset));
	},
	totopButton: function() {
		var self = this;

		/* Show totop button*/
		$(window).scroll(function(){
			var toTopOffset = self.toTop.offset().top;
			var toTopHidden = 1000;

			if (toTopOffset > toTopHidden) {
				self.toTop.addClass('totop-vissible');
			} else {
				self.toTop.removeClass('totop-vissible');
			}
		});

		/* totop button animation */
		if(self.toTop && self.toTop.length > 0){
			self.toTop.on('click',function (e){
				e.preventDefault();
				$( 'html, body').animate( {scrollTop: 0 }, 'slow' );
			});
		}
	},
	responsiveTopMenu: function() {
		if ($(this).hasClass('is-toggled')) {
			$(this).closest('.cg__topMenu-wrapper').removeClass('is-opened');
			$(this).removeClass('is-toggled');
		} else {
			$(this).closest('.cg__topMenu-wrapper').addClass('is-opened');
			$(this).addClass('is-toggled');
		}
	},
	responsiveSearch: function() {
		if ($(this).hasClass('active')) {
			$(this).removeClass('active');
			$(this).find('span').removeClass('glyphicon-remove');
			$(this).closest('.cg__search').find('.cg__search-container').removeClass('panel-opened');
		} else {
			$(this).addClass('active');
			$(this).find('span').addClass('glyphicon-remove');
			$(this).closest('.cg__search').find('.cg__search-container').addClass('panel-opened');
		}
	},
	triggerMenu: function(e) {
		e.preventDefault();
			if($(this).hasClass('is-active')){
				hg.CloseMenu();
			}
			else {
				hg.OpenMenu();
		}
	},
	triggerSubMenu: function(e) {
		$(this).closest('.cg__res-submenu').find('.cg__subMenu').addClass('cg__menu--visible');
	},
	OpenMenu: function() {
		hg.rezMenu.addClass('cg__menu--visible');
		hg.menuBurger.addClass('is-active');
		hg.setMenuHeight();
	},
	CloseMenu: function() {
		$(this).closest('ul').removeClass('cg__menu--visible');
		hg.menuBurger.removeClass('is-active');
		hg.removeMenuHeight();
	},
	removeMenuHeight: function() {
		hg.pageWrapper.css({'height':'auto'});
	},
	setMenuHeight: function() {
		var _menu = $('.cg__menu--visible').last(),
			window_height  = $(window).height(),
			height = _menu.css({window_height:'auto'});
		hg.pageWrapper.css({'height':height});
	},
  	//ADDED FROM CARLA
	navOverlay: function() {
		var self = this;

		if(self._mainMenu.length > 0) {
			var closeMenu = function() {
				self._overlayMenuHolder.removeClass('is-active');
				self._overlayMenuHolder.addClass('sh__navOverlay--closed');
				self._menuTrigger.removeClass('is-active');
				setTimeout(function(){self._body.css('overflow','');}, 700);
			}
			var openMenu = function() {
				self._overlayMenuHolder.addClass('is-active');
				self._overlayMenuHolder.removeClass('sh__navOverlay--closed');
				self._menuTrigger.addClass('is-active');
				self._body.css('overflow','hidden');
			}
			var toggleOpen = function(){
				if( self._overlayMenuHolder.hasClass('is-active') ){
					closeMenu();
				}
				else {
					openMenu();
				}
			};
			/* open menu trigger */
			self._menuTrigger.on('click', function(e){
				e.preventDefault();
				toggleOpen();
			});

			/* Close Button */
			self._overlayMenuClose.on('click', function(e){
				e.preventDefault();
				toggleOpen();
			});

			/* Close menu if the menu links are clicked */
			self.menuLinks.on('click', function(e) {
				self._mainMenu.find('li .active').removeClass('active');
				$(this).addClass('active');
				toggleOpen();

			});
		}
	},
  	stickyHeader: function() {

		var $el = $(".site-header"),
			headerHeight = $el.find('.siteheader-container').outerHeight();

		$(window).on('scroll', function(event){
			if( $(window).scrollTop() > headerHeight ){
				$el.removeClass('header--not-sticked');
				$el.addClass('header--is-sticked');
				$el.addClass('header--dark');
			}
			else{
				$el.removeClass('header--is-sticked');
				$el.removeClass('header--dark');
				$el.addClass('header--not-sticked');
			}
		});
	}
}

hg.init();

})(jQuery);