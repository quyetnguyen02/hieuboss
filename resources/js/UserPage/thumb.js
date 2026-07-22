import {countCart} from "./card.js";

console.log(window.product)
const products = {

    body: {

        oldPrice: window.product ? window.product.original_price : '0',

        newPrice: window.product ? window.product.sale_price : '0',

        images:window.product ? window.product.thumbs : ''

    },

    full: {

        oldPrice: "2.690.000đ",

        newPrice: "2.190.000đ",

        images: [

            "/image/p3.webp",
            "/image/p4.webp",

        ]

    }

};
const mainImage = document.getElementById('mainImage');

const thumbs = document.querySelectorAll('.thumb');
console.log(thumbs)

const thumbList = document.querySelector(".thumb-list");

const oldPrice = document.querySelector(".old-price");

const newPrice = document.querySelector(".new-price");

document.addEventListener('DOMContentLoaded', () => {

    console.log('product detail loaded');

    // Toàn bộ code của bạn ở đây

});

renderProduct("body");
function renderProduct(type){

    const product = products[type];
    if (product.oldPrice === '0') {
        return;
    }

    if (product.newPrice > 0) {
        oldPrice.innerHTML = product.oldPrice.toLocaleString('vi-VN') + 'đ';

        newPrice.innerHTML = product.newPrice.toLocaleString('vi-VN') + 'đ';
    } else {
        newPrice.innerHTML = product.oldPrice.toLocaleString('vi-VN') + 'đ';

    }

    mainImage.src = '/image/' + product.images[0];

    thumbList.innerHTML = "";

    product.images.forEach((img,index)=>{

        thumbList.innerHTML += `
            <div class="thumb ${index===0?'active':''}"
                 data-image="/image/${img}">
                <img src="/image/${img}">
            </div>
        `;

    });

    initThumbEvent();
}

function initThumbEvent(){

    const thumbs = document.querySelectorAll(".thumb");

    thumbs.forEach(item=>{

        item.onclick=function(){

            mainImage.src=this.dataset.image;

            thumbs.forEach(t=>t.classList.remove("active"));

            this.classList.add("active");

        }

    });

}

const variantBtns=document.querySelectorAll(".variant-btn");

variantBtns.forEach(btn=>{

    btn.onclick=function(){

        variantBtns.forEach(item=>item.classList.remove("active"));

        this.classList.add("active");

        renderProduct(this.dataset.type);

    }

});

// Khởi tạo

const quantityInput = document.getElementById("quantity");
const plusBtn = document.getElementById("plus");
const minusBtn = document.getElementById("minus");

const unitPrice = Number(window.product.sale_price === 0 ? window.product.original_price : window.product.sale_price );

const totalPrice = document.getElementById("totalPrice");

function formatMoney(number) {
    console.log(number)
    return new Intl.NumberFormat("vi-VN").format(number) + "đ";
}

updateTotal();

function updateTotal() {
    let qty = parseInt(quantityInput.value);

    if (isNaN(qty) || qty < 1) {
        qty = 1;
        quantityInput.value = 1;
    }

    totalPrice.innerText = formatMoney(unitPrice * qty);
}

// Tăng
plusBtn.addEventListener("click", () => {
    quantityInput.value++;
    updateTotal();
});

// Giảm
minusBtn.addEventListener("click", () => {
    if (quantityInput.value > 1) {
        quantityInput.value--;
        updateTotal();
    }
});

// Người dùng nhập trực tiếp
quantityInput.addEventListener("input", updateTotal);

document.addEventListener('DOMContentLoaded', function () {
    countCart();
})




