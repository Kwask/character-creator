function verifyRegistrationForm()
{
	var username = document.forms["register_form"]["username"].value;
	var password0 = document.forms["register_form"]["password0"].value;
	var password1 = document.forms["register_form"]["password1"].value;
	var email0 = document.forms["register_form"]["email0"].value;
	var email1 = document.forms["register_form"]["email1"].value;

	var should_submit = true;

	if(username==null || username=="")
	{
		setInputStatus("f1_t1", false, "Username needed!")
		should_submit = false;
	}
	
	if(password0==null || password0=="")
	{
		setInputStatus("f1_t2", false, "Password needed!")
		should_submit = false;	
	}else if(password1==null || password1=="")
	{
		setInputStatus("f1_t3", false, "Password needed!")
		should_submit = false;
	}else if(password0!=password1)
	{
		setInputStatus("f1_t3", false, "Passwords mismatch!")
		should_submit = false;
	}

	if(email0==null || email0=="")
	{
		setInputStatus("f1_t4", false, "Email needed!")
		should_submit = false;
	}else if(email1==null || email1=="")
	{
		setInputStatus("f1_t5", false, "Email needed!")
		should_submit = false;
	}else if(email0!=email1)
	{
		setInputStatus("f1_t5", false, "Emails mismatch!")
		should_submit = false;
	}

	return should_submit;
}