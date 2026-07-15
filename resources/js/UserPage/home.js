const closeBtn = document.querySelector(".close-modal");

const modal = document.getElementById("quickModal");

document.querySelectorAll(".quick-view-btn").forEach(btn => {

    btn.addEventListener("click", function () {

        document.getElementById("modalTitle").textContent =
            this.dataset.name;

        document.getElementById("modalImage").src =
            this.dataset.image;

        let oldPrice = document.getElementById("modalOldPrice");
        let newPrice = document.getElementById("modalNewPrice");

        if (this.dataset.sale) {

            oldPrice.innerHTML =
                Number(this.dataset.original).toLocaleString() + "đ";

            newPrice.innerHTML =
                Number(this.dataset.sale).toLocaleString() + "đ";

        } else {

            oldPrice.innerHTML = "";

            newPrice.innerHTML =
                Number(this.dataset.original).toLocaleString() + "đ";
        }

        modal.classList.add("show");

        if (modal && closeBtn) {
            closeBtn.onclick=function(){

                modal.classList.remove("show");

            }

            modal.onclick=function(e){

                if(e.target===modal){

                    modal.classList.remove("show");

                }

            }
        }
    });

});
