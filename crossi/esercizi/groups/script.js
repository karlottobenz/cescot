var bottoneRosso = document.getElementById('Primorosso');
var bottoneprimo_gruppo = document.getElementById('Secondorosso');
var bottonesecondo_gruppo = document.getElementById('Tuttirosso');
var bottoneblu = document.getElementById('Primoblu');
var bottoneprimo_gruppo = document.getElementById('Secondoblu');
var bottonesecondo_gruppo = document.getElementById('Tuttiblu');

PrimoRosso.addEventListener('click', function(){
    for(let i = 0; rand; i++){
        div[i].classList.add("rosso");
        div[i].classList.add("primo_gruppo");
        div[i].classList.remove("blu");
    }
})

SecondoRosso.addEventListener('click', function(){
    for(let i = 0; i <= 19; i++){
        div[i].classList.remove("primo_gruppo");
        div[i].classList.remove("secondo_gruppo");
        div[i].classList.remove("blu");
    }
})