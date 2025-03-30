<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,100..900;1,9..144,100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="./script.js" defer></script>
</head> 

<body>
    <main>
        <section>
            <img class="img" src="./assets/image-product-mobile.jpg" alt="">
            <img class="img2" src="./assets/image-product-desktop.jpg" alt="">
            <div class="product">
                <h4>PERFUME</h4>
                <h2>Gabrielle Essence Eau De Parfum</h2>
                <p>A floral, solar and voluptuous interpretation composed by Olivier Polge, Perfumer-Creator for the House of CHANEL.</p>
                <div class="price">
                    <span>$149.99</span>
                    <p><s>$169.99</s></p>
                </div>
                <button id="button"> <img src="./assets/icon-cart.svg" alt=""> ADD TO CART</button>
            </div>
        </section>
    </main>

    <aside class="cart-container">
        <div class="cart">
            <img src="./assets/image-product-1-thumbnail.jpg" alt="">
            <div class="cart-info">
                <p>Gabrielle Essence Eau De Parfum</p>
                <p>$149.99 x 3 <span>$419.97</span></p>
            </div>
            <img id="delete" src="./assets/icon-delete.svg" alt="">
        </div>
        <button id="checkout">Checkout</button>
    </aside>
</body>

</html>