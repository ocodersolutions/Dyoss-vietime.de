$( document ).ready(function() {
	//Slideshow
	$('.carousel').carousel();
	if ($(document).width() < 750) {
    	$('.carreer-cat ul').removeClass("in");
	}

	//smooth when client click link to internal page
    $('a.menu-item').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $(this).attr('href') ).offset().top
	    }, 500);
	    return false;
	});

    //Back to top
	if ($('#back-to-top').length) {
	    var scrollTrigger = 100; // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };

	    backToTop();
	    $(window).on('scroll', function () {
	        backToTop();
	    });
	}

	//Hightlights (Menu)
	$.ajax({
    method: "GET",
    url: "ajax/menu.php",
    //data: ...,
    beforeSend: function () {
    	$('#loading-indicator').show();
    },
    success: function (result) {
        document.getElementById("a-la-carte").children[0].children[0].children[1].children[0].innerHTML = result;
    },
    error: function (xhr, err) {
    	$('#loading-indicator').hide();
    	notification.custom("Have error, please try again later!", {
    	title: 'Error',
    	titleClass: 'warning',
    	modalOpacity: 0.7,
    	buttons: [{id: 0, label: 'Close', val: 'X'}]
    	});
    }
    });
    //Testimonials (Was sagen unsere Kunden)
    $.ajax({
    method: "GET",
    url: "ajax/testimonials.php",
    //data: ...,
    beforeSend: function () {
        $('#loading-indicator').show();
    },
    success: function (result) {
        document.getElementById("testimonials-wrap").innerHTML = result;
    },
    error: function (xhr, err) {
        $('#loading-indicator').hide();
        notification.custom("Have error, please try again later!", {
        title: 'Error',
        titleClass: 'warning',
        modalOpacity: 0.7,
        buttons: [{id: 0, label: 'Close', val: 'X'}]
        });
    }
    });
    //Galerie
    $.ajax({
    method: "GET",
    url: "ajax/galerie.php",
    //data: ...,
    beforeSend: function () {
        $('#loading-indicator').show();
    },
    success: function (result) {
        document.getElementById("galerie-wrap").innerHTML = result;
    },
    error: function (xhr, err) {
        $('#loading-indicator').hide();
        notification.custom("Have error, please try again later!", {
        title: 'Error',
        titleClass: 'warning',
        modalOpacity: 0.7,
        buttons: [{id: 0, label: 'Close', val: 'X'}]
        });
    }
    });
});

