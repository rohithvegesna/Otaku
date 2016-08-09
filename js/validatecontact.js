$(function()
{	
	$('.error').hide();
});
	
function validateForm() {
	
	$('.error').hide();
	
	
    var x = document.forms["contact"]["n"].value;
    if(x == null || x == '' || (x.length < 6)) 
	{
		$('#uerror').text("UserName must be filled out and must atleast contain 6 characters.");
		$('#uerror').fadeIn(500);
        return false;
    }

	var y = document.forms["contact"]["em"].value;
    if(y == null || y == '' || !validateEmail(y)) 
	{
		$('#eerror').text("Email must be filled out and must be a valid email.");
		$('#eerror').fadeIn(500);
        return false;
    }
	
	var z = document.forms["contact"]["msg"].value;
    if(z == null || z == '' )
	{
		$('#aderror').text("Message must be filled out.");
		$('#aderror').fadeIn(500);
        return false;
    }

}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
