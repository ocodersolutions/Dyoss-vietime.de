<?php
session_start();
if($_POST['captcha2']==""){
	echo "<p class='Error'>
	Please enter Captcha Code</p>";
}
else {
if($_POST['captcha2']==$_SESSION['captcha_code']){
	echo "<script>
	       $('#waiting').modal();
		console.log($('#kontakt-form').serialize());
	  	$.ajax({
	  		url : 'ajax/submit-contact.php',
	      	type : 'post',
	      	dateType:'json',
	     	data : $('#kontakt-form').serialize(),
	      	success: function (result) {
	      		$('#waiting').modal('hide');
	      		$('#myModal2').modal();
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