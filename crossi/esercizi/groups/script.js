// Bottoni rossi
var bottonePrimoRosso = document.getElementById('primorosso');
var bottoneSecondoRosso = document.getElementById('secondorosso');
var bottoneTerzoRosso = document.getElementById('terzorosso');
var bottoneTuttiRosso = document.getElementById('tuttirosso');

// Bottoni blu
var bottonePrimoBlu = document.getElementById('primoblu');
var bottoneSecondoBlu = document.getElementById('secondoblu');
var bottoneTerzoBlu = document.getElementById('terzoblu');
var bottoneTuttiBlu = document.getElementById('tuttiblu');

// Bottoni gialli
var bottonePrimoGiallo = document.getElementById('primogiallo');
var bottoneSecondoGiallo = document.getElementById('secondogiallo');
var bottoneTerzoGiallo = document.getElementById('terzogiallo');
var bottoneTuttiGiallo = document.getElementById('tuttigiallo');


var PrimoGruppo = document.getElementsByClassName('primo_gruppo');
var SecondoGruppo = document.getElementsByClassName('secondo_gruppo');
var TerzoGruppo = document.getElementsByClassName('terzo_gruppo');

bottonePrimoRosso.addEventListener('click', function(){
    for(let i = 0; i <= PrimoGruppo.length; i++){
        PrimoGruppo[i].classList.add("rosso");
        PrimoGruppo[i].classList.remove("blu");
        PrimoGruppo[i].classList.remove("giallo");
    }
})

bottoneSecondoRosso.addEventListener('click', function(){
    for(let i = 0; i <= SecondoGruppo.length; i++){
        SecondoGruppo[i].classList.remove("blu");
        SecondoGruppo[i].classList.add("rosso");
        PrimoGruppo[i].classList.remove("giallo");
    }
})

bottoneTuttiRosso.addEventListener('click', function(){
    for(let i = 0; i <= PrimoGruppo.length; i++){
        PrimoGruppo[i].classList.add("rosso");
        PrimoGruppo[i].classList.remove("blu");
        PrimoGruppo[i].classList.remove("giallo");
    }

    for(let j = 0; j <= SecondoGruppo.length; j++){
        SecondoGruppo[j].classList.add("rosso");
        SecondoGruppo[j].classList.remove("blu");
        PrimoGruppo[i].classList.remove("giallo");
    }
})