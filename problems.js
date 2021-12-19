function putininfo(select)
{
  var index = parseInt(select.options[select.selectedIndex].value);
  var name = select.options[select.selectedIndex].text;
  var info = "";
  var link = ""
  document.getElementById("problem-name").innerHTML = name;

  switch (index) {
    case 1:
      info = "Farmer John's cows have been holding a daily online gathering on the 'mooZ' video meeting platform."
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1059"
      break;
    case 2:
      info = "As a budding photographer, Bessie decides to take several photos of these flowers."
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1060"
      break;
    case 3:
      info = "Please determine the amount of grass eaten by each cow. Some cows never stop, and therefore eat an infinite amount of grass."
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1061"
      break;
    case 4:
      info = "Farmer John and his fellow farmers have been working nonstop to control the spread of the terrible bovine disease COWVID-19 across their farms."
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1062"
      break;
    case 5:
      info = "Every night, the cows go through a ritual of finding a barn to sleep in."
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1068"
      break;
    
    default:
      break;
  }
  document.getElementById("problem-info").innerHTML = info;
  document.getElementById("linktowebsite").value = link;
}
function linkToProb()
{
  var link = document.getElementById("linktowebsite").value;
  window.open(link, '_blank')
  console.log(link)
}