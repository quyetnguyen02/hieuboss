import { addToCart, checkProductInCart } from './card.js';


const modal = document.getElementById("cartModal");

document.getElementById("btnAddCart").onclick = function () {
    modal.classList.add("show");
};

document.getElementById("cancelCart").onclick = function () {
    modal.classList.remove("show");
};

document.getElementById("confirmCart").onclick = function () {

    modal.classList.remove("show");
    var product= {
        'id':document.getElementById('productId').value,
        'sku':document.getElementById('sku').value,
        'name':document.getElementById('productName').innerHTML,
        'image':document.getElementById('mainImage').src,
        'qty': Number(document.getElementById('quantity').value),
        'price':Number(document.getElementById('unitPrice').innerHTML.replace(/[^\d]/g, "")),
    }

    addToCart(product)
};

// Click ra ngoài modal để đóng
modal.onclick = function(e){
    if(e.target === modal){
        modal.classList.remove("show");
    }
};

document.addEventListener("DOMContentLoaded", function () {

    const productId = window.product.id; // hoặc lấy từ data attribute

    if (checkProductInCart(productId)) {

        const btn = document.getElementById("btnAddCart");

        btn.disabled = true;
        btn.innerText = "Đã thêm vào giỏ";
    }
});
