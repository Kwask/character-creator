function verifyCharForm() 
{
	var c_name = document.forms["char_form"]["name"].value;
	var c_gender = document.forms["char_form"]["gender"].value;
	var c_class = document.forms["char_form"]["class"].value;

	var should_submit = true;

	if(c_name==null || c_name=="")
	{
		setInputStatus("f1_t1", false, "Name needed!");
		should_submit = false;
	}

	if(c_gender==null || c_gender=="")
	{
		setInputStatus("f1_r1", false, "Gender needed!");
		should_submit = false;
	}

	if(c_class==null || c_class=="")
	{
		setInputStatus("f1_l1", false, "Class needed!");
		should_submit = false;
	}

	return should_submit;
}
