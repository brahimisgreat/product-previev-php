const button = document.getElementById("button");
const count = document.getElementById("count");
const minusButton = document.getElementById("minusButton");
const plusButton = document.getElementById("plusButton");

const cartcount= document.getElementById("count")


let cart = 0
cartcount.innerHTML = cart

minusButton.addEventListener("click", doSomething)
plusButton.addEventListener("click", doSomethingElse)


function doSomething(){
    cart -= 1
    console.log(cart)
    cartcount.innerHTML = cart
}
function doSomethingElse(){
    cart += 1
    console.log(cart)
    cartcount.innerHTML = cart
}


