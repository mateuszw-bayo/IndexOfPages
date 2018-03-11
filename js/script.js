function ustbrackground(select)
{
	if(select == "1")
	{
		document.getElementById('body').className = "body1";
	}
	else if(select == "2")
	{
		document.getElementById('body').className = "body2";
	}
	else if(select == "3")
	{
		document.getElementById('body').className = "body3";
	}
	else
	{
		document.getElementById('body').className = "body";		
	}
}

// zmiene publiczne
var op = 0;
var op_e = 0;
var a = false;

function panel_p()
{
	
	a = !a;
	// pokazywanie elementy lub chowanie
	if(a == true)
	{
		op_e = 100;
		document.getElementById('background_p').style.display = "block";	
		setTimeout(panel_po(0), 1000);
		
	}
	else if(a == false)
	{
		op_e = 0;
		setTimeout(function(){ panel_po(100);}, 5);
		//document.getElementById('background_p').style.display = "none";
	}
}

function panel_po(b)
{
	if(b != op_e)
	{
		if(op_e == 100)
		{
			op += 1; 
			if(op > 100)
			{
				op = 100;
			}
		}
		else if(op_e == 0)
		{
			op -= 1;
			if(op < 0)
			{
				op = 0;
			}
		}
		document.getElementById('background_p').style.opacity = op / 100;
		setTimeout(function(){ panel_po(op);}, 5);
	}
	else if(b == 0 && op_e == b)
	{
		document.getElementById('background_p').style.display = "none";
	}
	else
	{
		console.log("error");
	}
}


