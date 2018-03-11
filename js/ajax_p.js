  var hide_m = 0;

if (window.XMLHttpRequest)
  {
    ObiektXMLHttp = new XMLHttpRequest();
  }
  else if (window.ActiveXObject)
  {
    ObiektXMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
  }

   
 
   function getData(zrodlo, cel)
   {
    if(ObiektXMLHttp)
      {
        var cel = document.getElementById(cel);
        ObiektXMLHttp.open("GET", zrodlo);

         ObiektXMLHttp.onreadystatechange = function()
         {
          if (ObiektXMLHttp.readyState == 4)
            {
             cel.innerHTML = ObiektXMLHttp.responseText;
            }
         }

        ObiektXMLHttp.send(null);
      }
   }

