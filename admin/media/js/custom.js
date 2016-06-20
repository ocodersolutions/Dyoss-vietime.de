$(document).ready(function() {
	//popup create issue
	$(".popup-issue").fancybox({
	    maxWidth  : 800,
	    maxHeight : 600,
	    fitToView : false,
	    width   : '70%',
	    height    : '70%',
	    autoSize  : false,
	    closeClick  : false,
	    openEffect  : 'none',
	    closeEffect : 'none'
	});
});

// confirm when client delete an item
function ConfirmChoiceDelete(url)
{
	answer = confirm("Do you really want to delete it?")
	if (answer !=0)
	{
		location = url
	}
}

// confirm when client delete multi item
function ConfirmChoiceDeleteMulti()
{
	answer = confirm("Do you really want to delete it?")
	if (answer !=0)
	{
		return true;
	}else{
		return false;
	}
}