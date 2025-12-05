var bottoneRosso = document.getElementById('bottonerosso');
var bottoneGiallo = document.getElementById('bottonegiallo');
var bottoneBlu = document.getElementById('bottoneblu');
var div = document.getElementsByClassName("div");

bottoneRosso.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.remove("giallo");
        div[i].classList.remove("blu");
        div[i].classList.add("rosso");
    }
})

bottoneGiallo.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.remove("rosso");
        div[i].classList.remove("blu");
        div[i].classList.add("giallo");
    }
})

bottoneBlu.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.remove("rosso");
        div[i].classList.remove("giallo");
        div[i].classList.add("blu");
    }
})