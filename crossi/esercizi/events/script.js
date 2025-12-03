var bottoneRosso = document.getElementById('bottonerosso');
var bottoneGiallo = document.getElementById('bottonegiallo');
var div = document.getElementsByClassName("div");

bottoneRosso.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.add("red");
    }
})

bottoneGiallo.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.remove("red");
    }
})