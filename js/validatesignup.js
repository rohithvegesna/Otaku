$(function()
{	
	$('.error').hide();
});
	

function validateForm() {
	
	$('.error').hide();
	
	
    var w = document.forms["signup"]["n"].value;
    if(w == null || w == '' || (w.length < 6)) 
	{
		$('#uerror').text("UserName must be filled out and must atleast contain 6 characters.");
		$('#uerror').fadeIn(500);
        return false;
    }

	var x = document.forms["signup"]["em"].value;
    if(x == null || x == '' || !validateEmail(x)) 
	{
		$('#eerror').text("Email must be filled out and must be a valid email.");
		$('#eerror').fadeIn(500);
        return false;
    }
	
	var y = document.forms["signup"]["num"].value;
    if(y == null || y == '' || isNaN(y) ||(y.length < 10))
	{
		$('#nerror').text("Number must be filled out and must be a valid number.");
		$('#nerror').fadeIn(500);
        return false;
    }
	
	var z = document.forms["signup"]["add"].value;
    if(z == null || z == '' )
	{
		$('#aderror').text("Address must be filled out.");
		$('#aderror').fadeIn(500);
        return false;
    }

}

function validateEmail(email) {
    var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
    return re.test(email);
}
