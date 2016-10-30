function setInputStatus(t_id, stat, html_text)
{
	if(stat==false)
	{
		document.getElementById(t_id).setAttribute("class", "error");
		if(html_text)
		{
			document.getElementById(t_id).innerHTML = html_text;
		}
	}
	else
	{
		document.getElementById(t_id).setAttribute("class", "hidden");
	}
}
