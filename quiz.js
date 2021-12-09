document.getElementById("form1").onsubmit=function() {


    age = parseInt(document.querySelector('input[name = "food"]:checked').value);

    activity = parseInt(document.querySelector('input[name = "dairy"]:checked').value);

    genre = parseInt(document.querySelector('input[name = "name"]:checked').value);

    total= age + activity + genre;
    
    if(total < 3)
    {
        window.location.href = "quiz-farmerJohn.html";
    }

    if(total >=3 && total < 7)
    {
        window.location.href = "quiz-bessie.html";
    }

	if(total >=7)
    {
        window.location.href = "quiz-farmerNhoj.html";
    }

	return false;
}