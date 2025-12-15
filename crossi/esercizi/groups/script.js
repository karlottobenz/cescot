var bottonePrimoRosso = document.getElementById('primorosso');
var bottoneSecondoRosso = document.getElementById('secondorosso');
var bottoneTuttiRosso = document.getElementById('tuttirosso');
var bottonePrimoBlu = document.getElementById('primoblu');
var bottoneSecondoBlu = document.getElementById('secondoblu');
var bottoneTuttiBlu = document.getElementById('tuttiblu');

var PrimoGruppo = document.getElementsByClassName('primo_gruppo');
var SecondoGruppo = document.getElementsByClassName('secondo_gruppo');

bottonePrimoRosso.addEventListener('click', function(){
    for(let i = 0; i <= PrimoGruppo.length; i++){
        PrimoGruppo[i].classList.add("rosso");
        PrimoGruppo[i].classList.remove("blu");
    }
})

bottoneSecondoRosso.addEventListener('click', function(){
    for(let i = 0; i <= SecondoGruppo.length; i++){
        SecondoGruppo[i].classList.remove("blu");
        SecondoGruppo[i].classList.add("rosso");
    }
})

bottoneTuttiRosso.addEventListener('click', function(){
    for(let i = 0; i <= PrimoGruppo.length; i++){
        PrimoGruppo[i].classList.add("rosso");
        PrimoGruppo[i].classList.remove("blu");
    }

    for(let j = 0; j <= SecondoGruppo.length; j++){
        SecondoGruppo[j].classList.add("rosso");
        SecondoGruppo[j].classList.remove("blu");
    }
})