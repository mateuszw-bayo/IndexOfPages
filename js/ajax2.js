  var hide_m = 0;

if (window.XMLHttpRequest)
  {
    ObiektXMLHttp = new XMLHttpRequest();
  }
  else if (window.ActiveXObject)
  {
    ObiektXMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
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
        var varis = varForn(nameForm);
        ObiektXMLHttp.send(varis);
      }
   }




function varForn(name)
{
  return (document.forms[name][0].name + "=" + document.forms[name][0].value + "&" + document.forms[name][1].name + "="  + document.forms[name][1].value + "&" + document.forms[name][2].name + "="  + document.forms[name][2].value);

}


 

function ChatAjax()
{

  var zrodlo = "/games/index.php/chat/chat_ajax_see";
  var cel = "chat_text";
  var nameForm = "chat";
  var is_id = getElementById("is_id").value;


  if(ObiektXMLHttp)
      {
        var trresc = document.getElementById('chat_aj').innerHTML;
        var cel = document.getElementById(cel);
        ObiektXMLHttp.open("POST", zrodlo, true);
        ObiektXMLHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

         ObiektXMLHttp.onreadystatechange = function()
         {
          if (ObiektXMLHttp.readyState == 4)
            {
             cel.innerHTML = treesc + ObiektXMLHttp.responseText;
            }
         }
        var varis = varForn(nameForm);
        ObiektXMLHttp.send(varis);
      }
}


function ChatAjaxAdd()
{
    var zrodlo = "/games/index.php/chat/chat_ajax_add/";
    var cel = "apliChat";
    var nameForm = "chat";
    


    if(ObiektXMLHttp)
    {
        cel = document.getElementById(cel);
        ObiektXMLHttp.open("POST", zrodlo, true);
        ObiektXMLHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

         ObiektXMLHttp.onreadystatechange = function()
         {
          if (ObiektXMLHttp.readyState == 4)
            {
             cel.innerHTML = ObiektXMLHttp.responseText;
            }
         }
        var varis = varForn(nameForm);
        ObiektXMLHttp.send(varis);
        document.getElementById('mess').value = "";
    }
    
}






function ChatAjaxSee(param)
{
    var zrodlo = "/games/index.php/chat/chat_ajax_see/";
    var cel = "chat_text";
    var nameForm = "chat";

    if(ObiektXMLHttp)
    {
        cel = document.getElementById(cel);
        ObiektXMLHttp.open("POST", zrodlo, true);
        ObiektXMLHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

         ObiektXMLHttp.onreadystatechange = function()
         {
          if (ObiektXMLHttp.readyState == 4)
            {
             cel.innerHTML = ObiektXMLHttp.responseText;
            }
         }
        var varis = "is_id=" + param;
        ObiektXMLHttp.send(varis);
    }
    document.getElementById('apliChat').innerHTML = "";
}




setInterval( function()
{ 
  var is = document.getElementById('l_id').value;
  ChatAjaxSee(is);
}, 1000);