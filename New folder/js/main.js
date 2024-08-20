let body = document.querySelector("#gredient-bg"),
input1 = document.querySelector(".input1"),
input2 = document.querySelector(".input2");

function updateBG(){
	body.Style.background = `linear-gradient(to right, ${input1.value},${input2.value})`;
}

input1.addEventListener('input',updateBG);
input2.addEventListener('input',updateBG);