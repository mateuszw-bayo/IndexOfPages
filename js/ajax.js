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

   function getDateMenu(hide)
   {
      if(hide == 0)
      {
        hide_m = 1;
        getData('/index.php/portfolio/me_ajax/tlumaup_menu_pl', 'upbody');
      }
   }

  function PF_getDate(zrodlo, cel)
  {
    getDateMenu(hide_m);
    getData(zrodlo, cel);
  }



   function postData(zrodlo, cel, nameForm)
   {
    if(ObiektXMLHttp)
      {
        var cel = document.getElementById(cel);
        ObiektXMLHttp.open("POST", zrodlo, true);
        ObiektXMLHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

         ObiektXMLHttp.onreadystatechange = function()
         {
          if (ObiektXMLHttp.readyState == 4)
            {
             cel.innerHTML = ObiektXMLHttp.responseText;
            }
         }
        var varis = varForms(nameForm);
        ObiektXMLHttp.send(varis);
      }
   }

function varForms(name)
{
  return (document.forms[name][0].name + "=" + document.forms[name][0].value + "&" + document.forms[name][1].name + "="  + document.forms[name][1].value + "&" + document.forms[name][2].name + "="  + document.forms[name][2].value);

}

