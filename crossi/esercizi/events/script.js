var bottonePremuto = document.getElementById('bottone');
var div = document.getElementsByClassName("div");

bottonePremuto.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.add("red");
    }
})