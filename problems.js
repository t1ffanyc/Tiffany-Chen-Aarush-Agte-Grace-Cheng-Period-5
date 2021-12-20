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
    
    case 6:
      info = "Bessie the cow has been abducted by aliens and is now trapped inside an alien spaceship!"
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1069"
      break;
    
    case 7:
      info = "Bessie has been procrastinating on her cow-mistry homework and now needs your help! She needs to create a mixture of three different cow-michals."
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1070"
      break;
    
    case 8:
      info = "Every day, Farmer John milks his 8 dairy cows, named Bessie, Buttercup, Belinda, Beatrice, Bella, Blue, Betsy, and Sue."
      link = "http://www.usaco.org/index.php?page=viewproblem2&cpid=965"
      break;
    
    case 9:
      info = "Farmer John’s cows are showing off their new dance mooves!"
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1086"
      break;
    
    case 10:
      info = "A little known fact about cows is that they have their own version of the alphabet, the 'cowphabet'. It consists of the 26 letters 'a' through 'z', but when a cow speaks the cowphabet, she lists these letters in a specific ordering that might be different from the order 'abcdefghijklmnopqrstuvwxyz' we are used to hearing.To pass the time, Bessie's cousin Mildred has been humming the cowphabet over and over again, and Farmer Nhoj is curious how many times she's hummed it. Given a lowercase string of letters that Farmer Nhoj has heard Mildred say, compute the minimum number of times Mildred must have hummed the entire cowphabet in order for Farmer Nhoj to have heard the given string. Farmer Nhoj isn't always paying attention to what Mildred hums, and so he might have missed some of the letters that Mildred has hummed."
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1089"
      break;
    
    case 11:
      info = "The fence surrounding Farmer John's largest pasture has fallen into disrepair, and he has finally decided to replace it with a new fence. Unfortunately, as Farmer John is laying out the new fence, a large bee ends up chasing him around the pasture, and as a result, the fence ends up following a rather irregular path."
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1109"
      break;
    
    case 12:
      info = "Farmer John's cows are excited to learn that Chinese New Year was recently celebrated, ushering in the year of the Ox, always a bovine favorite. As we know, the zodiac animals for Chinese calendar years follow a 12-year cycle: Ox, Tiger, Rabbit, Dragon, Snake, Horse, Goat, Monkey, Rooster, Dog, Pig, Rat, and then Ox again. Slightly lesser known is the fact that a mysterious time portal opens up during every year of the Ox, allowing cows to travel through time to any other year of the Ox in the past or future. Bessie the cow would like to take advantage of the time portal that has opened up this year to visit N of her famous bovine ancestors who lived long ago in history.Bessie does not need to use the time portal in a given Ox year if she does not want to. Time portals connect the first days of each Ox year with each-other, so for example if Bessie travels to a time portal and then waits 12 years for the next time portal, she spends exactly 12 years in the process. Bessie starts her adventure on the first day of the present Ox year, so she can travel back in time right away. None of Bessie's ancestors live in Ox years."
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1111"
      break;
    
    case 13:
      info = "Having become bored with standard 2-dimensional artwork (and also frustrated at others copying her work), the great bovine artist Picowso has decided to switch to a more minimalist, 1-dimensional style. To Picowso's great dismay, her competitor Moonet seems to have figured out how to copy even these 1-dimensional paintings! Moonet will paint a single interval with a single color, wait for it to dry, then paint another interval, and so on. "
      link = "http://usaco.org/index.php?page=viewproblem2&cpid=1114"
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