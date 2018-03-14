
function sCook()
{ 
	var a = new Date();
	a.setDate(a.getDate() + 365);
	var b = "1; expires=" + a.toUTCString();
	document.cookie = "InfCookie=" + b;
}

function seeCook()
{
	var i,x,y,ARRcookies=document.cookie.split(";");
	for (i=0;i<ARRcookies.length;i++)
	{
		x=ARRcookies[i].substr(0,ARRcookies[i].indexOf("="));
		y=ARRcookies[i].substr(ARRcookies[i].indexOf("=")+1);

		x=x.replace(/^\s+|\s+$/g,"");
		if (x=="InfCookie")
		{
			return unescape(y);
		}
	}
}

$(document).ready(function()
{
	// tresc
	var a = "Używamy plików cookies, aby ułatwić Ci korzystanie z naszego serwisu oraz do celów statystycznych. Jeśli nie blokujesz tych plików, to zgadzasz się na ich użycie oraz zapisanie w pamięci urządzenia. Pamiętaj, że możesz samodzielnie zarządzać cookies, zmieniając ustawienia przeglądarki.";
	var b = "ROZUMIEM, NIE POKAZUJ WIĘCEJ TEGO OKNA.";
	// styl
	var s = "position:fixed;z-index: 1001;top:0;width:100%;text-align:center;background-color:#ffffff;color:#000000;opacity:0.9;font-size:13px;font-weight:bold;font-family:tahoma;padding-top:20px;padding-bottom:10px;";
	var s2 = "width:800px;margin:0 auto;";
	var s3 = "color: #0098ff;cursor:pointer;";
	// div
	var d = '<div class="cc" style="' + s + '"><div style="' + s2 + '">' + a + '<br /><br /><b style="' + s3 + '" class="cc2">' + b + '</b></div></div>';

	var c = seeCook();
		if(c != 1)
		{
			$('body').prepend(d);
		}
	 
		$('.cc2').click(function() 
		{
			$('.cc').slideUp('slow');
			sCook();
		});

});
