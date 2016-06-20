<?php
session_start();
if($_POST['captcha']==""){
	echo "<p class='Error'>
	Please enter Captcha Code</p>";
}
else {
if($_POST['captcha']==$_SESSION['captcha_code']){
	echo "<script>
			$('#waiting').modal();
	    console.log($('#register-form').serialize());
	  	$.ajax({
	  		url : 'ajax/submit-booking.php',
	      	type : 'post',
	      	dateType:'json',
	     	data : $('#register-form').serialize(),
	      	success: function (result) {
	      		$('#waiting').modal('hide');
	      		$('#myModal1').modal();
	      	},
	      	error: function (xhr, err) {
	       		console.log(err);
	      	}
	  	});
	  	</script>";
} else {
echo "<p class='Error'>
Wrong code</p>";
}
}
?>