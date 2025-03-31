const button = document.getElementById("button");
const count = document.getElementById("count");
const minusButton = document.getElementById("minusButton");
const plusButton = document.getElementById("plusButton");


let cart = 0



minusButton.addEventListener("click", doSomething)

button.addEventListener("click", doSomething);
function doSomething(){
    cart += 1
    console.log(cart)
    alert("it worked");
}


