function csere(argumentum)
{
	if(document.getElementById("gomb").innerHTML=="English")
	{
		console.log("Az angol geci feliratra nyomtál rá")
		var englishElements = document.getElementsByClassName("englishDiv");
		for(var i = 0; i<englishElements.length;i++){
			englishElements[i].style = "display:block"

		}
		document.getElementsByClassName("hungaryDiv").style= "display :block";
		var hungaryElements = document.getElementsByClassName("hungaryDiv");
		for(var i = 0; i<hungaryElements.length;i++){
			hungaryElements[i].style = "display:none"

		}
		document.getElementById("gomb").innerHTML="Magyar";
	}
	else
	{
		document.getElementsByClassName("hungaryDiv").style= "display:block";
		var hungaryElements = document.getElementsByClassName("hungaryDiv");
		for(var i = 0; i<hungaryElements.length;i++){
			hungaryElements[i].style = "display:block";

		}
		var englishElements = document.getElementsByClassName("englishDiv");
		for(var i = 0; i<englishElements.length;i++){
			englishElements[i].style = "display:none"

		}
		
		document.getElementById("gomb").innerHTML="English";
	}
}