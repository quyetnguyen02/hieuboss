document.addEventListener("DOMContentLoaded", function () {
    countCart()
});



function setCookie(name, value, days = 30) {
    let expires = "";

    if (days) {
        const date = new Date();
        date.setTime(date.getTime() + days * 86400000);
        expires = "; expires=" + date.toUTCString();
    }

    document.cookie = name + "=" + encodeURIComponent(value) + expires + "; path=/";
}

export function getCookie(name) {

    const key = name + "=";

    const arr = document.cookie.split(";");

    for (let c of arr) {

        c = c.trim();

        if (c.indexOf(key) === 0) {

            return decodeURIComponent(c.substring(key.length));

        }
    }

    return null;
}

export function addToCart(product) {
    console.log('vào fun add to cảd')
    console.log(product)

    let cart = [];

    const cookie = getCookie("cart");

    if(cookie)
        cart = JSON.parse(cookie);

    const item = cart.find(x => x.id == product.id);

    if(item){

        item.qty += product.qty;

    }else{

        cart.push({
            ...product,
            qty:product.qty
        });

    }

    setCookie("cart", JSON.stringify(cart));

    // Disable nút
    const btn = document.getElementById("btnAddCart");
    btn.disabled = true;
    btn.innerText = "Đã thêm vào giỏ";

    console.log(getCookie('cart'))
    countCart()
}

export function checkProductInCart(productId) {

    const cookie = getCookie("cart");

    if (!cookie) return false;

    const cart = JSON.parse(cookie);

    return cart.some(item => item.id == productId);
}
 function countCart() {
     var cookie = getCookie('cart');
     if(cookie) {
         var cart = JSON.parse(cookie);
         document.getElementById('cartCount').innerHTML = cart.length;
     } else {
         document.getElementById('cartCount').innerHTML = 0;
     }
 }

