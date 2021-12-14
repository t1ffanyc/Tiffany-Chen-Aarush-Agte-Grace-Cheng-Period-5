function putininfo(select)
{
  var info = select.options[select.selectedIndex].value;
  var name = select.options[select.selectedIndex].text;
  document.getElementById("problem-info").innerHTML = info;
  document.getElementById("problem-name").innerHTML = name;
}