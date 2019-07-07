/**
 * Global variables initialization
 */
var $body = $('html, body');
var $window = $(window);
var $initialHeight = $window.innerHeight();
var currentWidth = 0;
var currentHeight = 0;
var offset = 0;

/**
 * Get and update screen dimensions for responsive triggers
 * @return Void
 */
function checkDimensions() {
    currentWidth = $window.width();
    currentHeight = $window.innerHeight();

    /** Execute adjustments every screen resize */
    adjustPerBreakpoint(currentWidth, currentHeight);
    /** Trigger events on scroll */
    triggerScrollEvents(currentWidth, currentHeight);
}

/**
 * Change DOM settings per breakpoint triggered
 * @param  {Integer} width  Current width of window
 * @param  {Integer} height Current height of window
 * @return {Void}        
 */
function adjustPerBreakpoint(width, height) {
	width = (typeof width !== 'undefined') ? width : 0;

	if (width < 770) { // most phones and tablets
        $('.mobile-toggle').show();
        $('.site-nav').hide();
    } else {
        $('.mobile-toggle').hide();
        $('.site-nav').show();
    }

    if (width < 600){
        $('.user__feedback').hide();
        $('.user__mobile').show();
    } else {
        $('.user__feedback').show();
        $('.user__mobile').hide();
    }

    if (width < 770){
        $('.list').hide();
        $('.user__mobile').show();
    } else {
        $('.list').show();
        $('.user__mobile').hide();
    }

    if (width < 767){
        $('.headnav').show();
    } else {
        $('.headnav').hide();
    }

     if (width < 426){
        $('#sidebar-wrapper').hide();
    } else {
        $('#sidebar-wrapper').show();
    }

    if (width < 325){
        $('.imglog').hide();
    } else {
        $('.imglog').show();
    }
}

/**
 * Trigger DOM manipulations on certain scroll offsets
 * @param  {Integer} width  Current width of window
 * @param  {Integer} height Curent height of window
 * @return {Void}
 */
function triggerScrollEvents(width, height) {
	$window.scroll(function () {
        offset = $(this).scrollTop();

        if (offset) {
        
        }
    });
}

$(function() {
	/** Execute on page load */
	checkDimensions();
	/** Bind event listener on screen resize */
	$(window).resize(checkDimensions);

    $('.mobile-toggle').on('click', function(event) {
        $('.mobile').toggleClass('mobile--toggled');
        $('.page').toggleClass('page--toggled');
    });
});


function ShowHideDiv(chkPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkPassport.checked ? "block" : "none";
    }

$(document).ready(function() {
  $('[data-toggle=offcanvas]').click(function() {
    $('.row-offcanvas').toggleClass('active');
  });
});
