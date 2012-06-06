//This is for the validation of the javascript.

function validateForm()
{
var x=document.forms["intelUpload"]["cityGuardNumber"].value;
var patt=new RegExp("[0-9]+");
if(patt.test(x) == false)
alert("CityguardNumber must at least be 0");

}