const modal = document.getElementById("quickModal");

const closeBtn = document.querySelector(".close-modal");

document.querySelectorAll(".quick-view-btn").forEach(btn=>{

    btn.onclick=function(){

        modal.classList.add("show");

    };

});

closeBtn.onclick=function(){

    modal.classList.remove("show");

}

modal.onclick=function(e){

    if(e.target===modal){

        modal.classList.remove("show");

    }

}
