document.getElementById("form1").onsubmit=function() {


    food = parseInt(document.querySelector('input[name = "food"]:checked').value);

    favMeat = parseInt(document.querySelector('input[name = "dairy"]:checked').value);

    favCow = parseInt(document.querySelector('input[name = "name"]:checked').value);
    color = parseInt(document.querySelector('input[name = "color"]:checked').value);
    vacation = parseInt(document.querySelector('input[name = "vacation"]:checked').value);
    drink = parseInt(document.querySelector('input[name = "drink"]:checked').value);
    candy = parseInt(document.querySelector('input[name = "color"]:checked').value);

    total = food + favMeat + favCow + color + vacation + drink + candy;
    
    if(total < 6)
    {
        window.location.href = "quiz-farmerJohn.html";
    }

    if(total >=6 && total < 12)
    {
        window.location.href = "quiz-bessie.html";
    }

	if(total >=12 && total < 17)
    {
        window.location.href = "quiz-farmerNhoj.html";
    }

    if (total >= 17)
    {
        window.location.href = "quiz-elsie.html";
    }

	return false;
}