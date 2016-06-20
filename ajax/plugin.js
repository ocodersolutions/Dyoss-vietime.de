	$('#btn-calendar').click(function(){
  	$( "#datetimepicker" ).select();
	});
    $(function () {
                $('#datetimepicker').datetimepicker();
            });
  
	$(function() {
	    // Setup form validation on the #register-form element
	    $("#register-form").validate({
	    
	        // Specify the validation rules
	        rules: {
	            rname: "required",
	            rtelefon: {
	            	required: true,
	            	digits: true
	            },
	            datetimepicker: {
	            	required: true,
	            	date:true
	        },
	            rperson: "required",
	            remail: {
	                required: true,
	                email: true
	            },
	            password: {
	                required: true,
	                minlength: 5
	            },
	            
	        },
	        
	        // Specify the validation error messages
	        messages: {
	            rname: "Please enter your name",
	            rtelefon: "Please enter your number fone",
	            datetimepicker: "Please enter date request",
	            rperson:"Please enter number person request",
	            remail: "Please enter a valid email address",
	           
	        },

	        
	        submitHandler: function(form) {
		jQuery.ajax({
		url: "vendor/booking_mail.php",
		data:'&captcha='+$("#captcha").val(),
		type: "POST",
		success:function(data){
		$("#mail-status").html(data);
},
		error:function (){}
		});
	  	$("#register-form").submit(function(){
	    	return false;
  			});
        }        
    });

});
	


	

	$(function() {
	    // Setup form validation on the #register-form element
	    $("#kontakt-form").validate({
	    
	        // Specify the validation rules
	        rules: {
	            name: "required",	
	            nachricht: "required",           
	            email: {
	                required: true,
	                email: true
	            },
	            
	            
	        },
	        
	        // Specify the validation error messages
	        messages: {
	            name: "Please enter your name",
	            nachricht:"Please enter your nachricht ",
	            email: "Please enter a valid email address",	           
	        },      
	        submitHandler: function(form) {	        	

		jQuery.ajax({
		url: "vendor/contact_mail.php",
		data:'&captcha2='+$("#captcha2").val(),
		type: "POST",
		success:function(data){
		$("#mail-status2").html(data);

},
		error:function (){}
		});
	  	$("#kontakt-form").submit(function(){
	    	return false;
  			});

	     		
	        }
	    });

	});
	
function refreshCaptcha() {
	$("#captcha_code").attr('src','vendor/captcha_code.php');
}

function refreshCaptcha2() {
	$("#captcha_code2").attr('src','vendor/captcha_code.php');
}



