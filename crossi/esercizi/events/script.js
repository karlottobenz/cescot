var bottoneRosso = document.getElementById('bottonerosso');
var bottoneGiallo = document.getElementById('bottonegiallo');
var bottoneBlu = document.getElementById('bottoneblu');
var bottoneVerde = document.getElementById('bottoneverde');
var bottoneArancione = document.getElementById('bottonearancione');
var bottoneAlterna = document.getElementById('bottonealterna');
var div = document.getElementsByClassName("div");

bottoneRosso.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.remove("giallo");
        div[i].classList.remove("blu");
        div[i].classList.remove("verde");
        div[i].classList.remove("arancione");
        div[i].classList.add("rosso");
    }
})

bottoneGiallo.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.remove("rosso");
        div[i].classList.remove("blu");
        div[i].classList.remove("verde");
        div[i].classList.remove("arancione");
        div[i].classList.add("giallo");
    }
})

bottoneBlu.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.remove("rosso");
        div[i].classList.remove("giallo");
        div[i].classList.remove("verde");
        div[i].classList.remove("arancione");
        div[i].classList.add("blu");
    }
})

bottoneVerde.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.remove("rosso");
        div[i].classList.remove("giallo");
        div[i].classList.remove("blu");
        div[i].classList.remove("arancione");
        div[i].classList.add("verde");
    }
})

bottoneArancione.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.remove("rosso");
        div[i].classList.remove("giallo");
        div[i].classList.remove("blu");
        div[i].classList.remove("verde");
        div[i].classList.add("arancione");
    }
})

bottoneAlterna.addEventListener('click', function(){ // son 😭😭😭😭😭😭 im crine 😭😭😭😭😭😭
    
    let i = 0;
    while(i <= 19){
        div[i].classList.remove("rosso");
        div[i].classList.remove("giallo");
        div[i].classList.remove("blu");
        div[i].classList.remove("arancione");
        div[i].classList.remove("verde");
        i++;
    }

    let j = 0;
    while(j <= 18){
        div[j].classList.add("rosso");
        j++;
        div[j].classList.add("giallo");
        j++;
        div[j].classList.add("blu");
        j++;
        div[j].classList.add("verde");
        j++;
        div[j].classList.add("arancione");
        j++;
    }
})
