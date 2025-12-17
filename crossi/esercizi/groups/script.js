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

/*===================== ROSSO =====================*/
bottonePrimoRosso.addEventListener('click', function(){
    change_divs_color("primo_gruppo", "red");
})

bottoneSecondoRosso.addEventListener('click', function(){
    change_divs_color("secondo_gruppo", "red");
})

bottoneTerzoRosso.addEventListener('click', function(){
    change_divs_color("terzo_gruppo", "red");
})

bottoneTuttiRosso.addEventListener('click', function(){
    change_divs_color("primo_gruppo", "red");

    change_divs_color("secondo_gruppo", "red");

    change_divs_color("terzo_gruppo", "red");
})


/*===================== BLU =====================*/
bottonePrimoBlu.addEventListener('click', function(){
    change_divs_color("primo_gruppo", "blue");
})

bottoneSecondoBlu.addEventListener('click', function(){
    change_divs_color("secondo_gruppo", "blue");
})

bottoneTerzoBlu.addEventListener('click', function(){
    change_divs_color("terzo_gruppo", "blue");
})

bottoneTuttiBlu.addEventListener('click', function(){
    change_divs_color("primo_gruppo", "blue");

    change_divs_color("secondo_gruppo", "blue");

    change_divs_color("terzo_gruppo", "blue");
})


/*==================== GIALLO ====================*/
bottonePrimoGiallo.addEventListener('click', function(){
    change_divs_color("primo_gruppo", "yellow");
})

bottoneSecondoGiallo.addEventListener('click', function(){
    change_divs_color("secondo_gruppo", "yellow");
})

bottoneTerzoGiallo.addEventListener('click', function(){
    change_divs_color("terzo_gruppo", "yellow");
})

bottoneTuttiGiallo.addEventListener('click', function(){
    change_divs_color("primo_gruppo", "yellow");

    change_divs_color("secondo_gruppo", "yellow");

    change_divs_color("terzo_gruppo", "yellow");
})


// Funzioni per cambio colore
function change_divs_color(div_class, bg_color){
    let myDivs = document.getElementsByClassName(div_class);
    change_divs_style(myDivs, bg_color);
}

function change_divs_style(divs, backgroundColor){
    for(let i = 0; i < divs.length; i++){
        divs[i].style.backgroundColor = backgroundColor;
    }
}