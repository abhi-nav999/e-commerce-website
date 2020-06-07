alert("connected");
function validate()
{
	var email = document.querySelector("#inputEmail");
	var password = document.querySelector("inputPassword");
	//var name = document.forms["loginform"]["Name"];
	//var email = document.forms["loginform"]["EMail"];
	//var phone = document.forms["loginform"]["Telephone"];
	//var what = document.forms["loginform"]["Subject"];
	//var password = document.forms["loginform"]["Password"];
	//var address = document.forms["loginform"]["Address"];

	/*if (name.value == "")
	{
		window.alert("Please enter your name.");
		name.focus();
		return false;
	}

	if (address.value == "")
	{
		window.alert("Please enter your address.");
		name.focus();
		return false;
	}*/

	if (email.value == "")
	{
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
	}

	if (email.value.indexOf("@", 0) < 0)
	{
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
	}

	if (email.value.indexOf(".", 0) < 0)
	{
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
	}

	/*if (phone.value == "")
	{
		window.alert("Please enter your telephone number.");
		phone.focus();
		return false;
	}*/

	if (password.value == "")
	{
		window.alert("Please enter your password");
		password.focus();
		return false;
	}

	/*if (what.selectedIndex < 1)
	{
		alert("Please enter your course.");
		what.focus();
		return false;
	}*/

	return true;
}
