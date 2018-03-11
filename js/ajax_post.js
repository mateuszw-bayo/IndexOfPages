

function varForn(name)
{
	var vvar1 = document.forms[name].length;

    if (vvar1 > 0)
    {
    	var a = null;
    	for (var i = document.forms[name].length - 1; i >= 0; i--)
    	{
    		if (a != null)
    		{
    			a += "&";
    		}
    		a += document.forms[name][i].name + "=" + document.forms[name][i].value;
    	}
    }

	return a;
}






