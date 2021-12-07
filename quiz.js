document.getElementById("form1").onsubmit=function() {


    age = parseInt(document.querySelector('input[name = "food"]:checked').value);

    activity = parseInt(document.querySelector('input[name = "dairy"]:checked').value);

    genre = parseInt(document.querySelector('input[name = "name"]:checked').value);

    total= age + activity + genre;
    
    if(total < 3)
    {
        document.getElementById("answer2").innerHTML = "You are Farmer John.";
    }

    if(total >=3 && total < 7)
    {
        document.getElementById("answer2").innerHTML = "You got Bessie.";
    }

	if(total >=7)
    {
        document.getElementById("answer2").innerHTML = "You got Farmer Nhoj.";
    }

	return false;
	}