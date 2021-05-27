jQuery(document).ready(function(){

	jQuery("#menuToggle input").change(function() {
	  if(this.checked) {
	     jQuery("#menu").addClass("open");
	     jQuery("#menuToggle").addClass("fixed");
	  }
	  else {
	     jQuery("#menu").removeClass("open");
	     jQuery("#menuToggle").removeClass("fixed");
	  }
	});

	jQuery(".scrooller_icon").click(function() {
        jQuery('html, body').animate({
           scrollTop: jQuery("#first").offset().top
        }, 1000);
    });

    //own carasol

    jQuery("#carousel").owlCarousel({
	  autoplay: true,
	  rewind: true, /* use rewind if you don't want loop */
	  margin: 20,
	   /*
	  animateOut: 'fadeOut',
	  animateIn: 'fadeIn',
	  */
	  responsiveClass: true,
	  autoHeight: true,
	  autoplayTimeout: 7000,
	  smartSpeed: 800,
	  nav: true,
	  responsive: {
	    0: {
	      items: 1
	    },

	    600: {
	      items: 2
	    },

	    1024: {
	      items: 2
	    },

	    1366: {
	      items: 2
	    }
	  }
	});


	jQuery("#carousels").owlCarousel({
	  autoplay: true,
	  rewind: true, /* use rewind if you don't want loop */
	  margin: 20,
	   /*
	  animateOut: 'fadeOut',
	  animateIn: 'fadeIn',
	  */
	  responsiveClass: true,
	  autoHeight: true,
	  autoplayTimeout: 7000,
	  smartSpeed: 800,
	  nav: true,
	  responsive: {
	    0: {
	      items: 1
	    },

	    600: {
	      items: 1
	    },

	    1024: {
	      items: 1
	    },

	    1366: {
	      items: 1
	    }
	  }
	});

	

    jQuery(".recruters .owl-nav").insertBefore(".view_element_elemt");
    jQuery( ".view_element_elemt .fa.fa-long-arrow-alt-left" ).insertAfter( jQuery( "button.owl-prev span" ) );
    jQuery( ".view_element_elemt .fa.fa-long-arrow-alt-right" ).insertBefore( jQuery( "button.owl-next span" ) );
    jQuery(".slider_elements").insertAfter(".recruters_slider_images");

    jQuery('a.rese_inner_page').on('click', function(){
	    jQuery(this).siblings().removeClass('active')
	    jQuery(this).addClass('active');
	    jQuery('.res_pg_ele.d-flex').siblings().removeClass('show')
	    jQuery('.res_pg_ele.d-flex').addClass('show');
	})
});


// jQuery(window).load(function() {
//     jQuery('.second .nav-link').click();	
// });

jQuery(document).ready(function() {

	sectionSetup();
	jQuery(window).resize(function() {
		sectionSetup();
	});

	function sectionSetup() {
		var width = jQuery(window).width();
		if (width <= 449) {
			jQuery(".second .nav-link").click(function() {
			    jQuery('.tab-pane').hide();
			    var  con_id = jQuery(this).attr('href');
			    jQuery(""+ con_id ).show();
			    jQuery( ""+ con_id  ).insertAfter( jQuery( this ).parent() );
			});
			jQuery(".event_and_news .nav-tabs li a").click(function() {
			    jQuery('.event_and_news_tab .tab-pane').hide();
			    jQuery('.event_and_news .tab-pane a').removeClass("show");
			    jQuery('.event_and_news .tab-pane').removeClass("active");
			    jQuery(".event_and_news .nav-tabs li a").removeClass('active');
			    jQuery(this).addClass('active');

			    var  con_ids = jQuery(this).attr('href');
			    console.log(con_ids);
			    jQuery(con_ids).addClass("active show");
			    jQuery(""+ con_ids ).show();
			    jQuery( ""+ con_ids  ).insertAfter( jQuery( this ) );

			});
			jQuery(".testimonials .nav-tabs li a").click(function() {
			    jQuery('.testimonials .tab-pane').hide();
			    jQuery('.testimonials .tab-pane').removeClass("show");
			    jQuery('.testimonials .tab-pane').removeClass("active");
			    jQuery('.testimonials .tab-pane').removeClass("d-flex");
			    jQuery('.testimonials .nav-tabs li a').removeClass('active');
			    jQuery(this).addClass('active');

			    var  con_idt = jQuery(this).attr('href');
			    console.log(con_idt);
			    jQuery(con_idt).addClass("active show");
			    jQuery(""+ con_idt ).show();
			    jQuery( ""+ con_idt  ).insertAfter( jQuery( this ) );

			});
		}
	}
	jQuery('.second .nav-link').click( function(){
	    if ( jQuery(this).hasClass('current') ) {
	        jQuery(this).removeClass('current');
	    } else {
	        jQuery('ul.nav.nav-tabs.d-block.col-lg-3 li.nav-item a.current').removeClass('current');
	        jQuery(this).addClass('current');
	    }
	});

});


jQuery(function(){
   jQuery('#tab').click();
   jQuery('#news_tab').click();
   jQuery('#test_tab').click();
});


// form validation


jQuery(document).ready(function() {
    var minLength = 10;
    var maxLength = 10;

    jQuery("input#mobile_number").on("keydown keyup change", function(){
        var value = jQuery(this).val();
        if (value.length < minLength){
            jQuery("span.num").text("Number is too short");
            jQuery('button.submit').prop('disabled', true);
        }
        else if (value.length > maxLength) {
            jQuery("span.num").text("Number is too long");
            jQuery('button.submit').prop('disabled', true);
        }
        else {
            jQuery("span.num").text("");
            jQuery('button.submit').prop('disabled', false);
        }
    });
})




// slider javascript

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}