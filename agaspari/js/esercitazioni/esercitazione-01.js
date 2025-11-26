// Esercizio 1

function esercizio01(){

    let giorno = window.prompt("Inserisci il giorno");
    let mese = window.prompt("Inserisci il mese");
    let anno = window.prompt("Inserisci l'anno");

    document.getElementById('data-inserita').innerText = giorno + "/" + mese + "/" + anno;

    let dataFutura;
    let risultato;

    if(anno == 2025){
        if(mese == 11) {
            if(giorno == 26){
                risultato = "Hai inserito la data di oggi";
            } else {
                dataFutura = (giorno > 26);
            }

        } else {
            dataFutura = (mese > 11);
        }

    } else {
        if(anno > 2025){
            dataFutura = true;
        }
        else {
            dataFutura = false;
        }
        /* dataFutura = (anno > 2025) è equivalente */
    }

    if(!risultato){
        if(dataFutura) {
            risultato = "La data è nel futuro";
        } else {
            risultato = "La data è nel passato";
        }
    }
    document.getElementById("risultato-es1").innerText = risultato;
}

//esercizio01();

function esercizio02(){
    let giorno = window.prompt("Inserisci il giorno");
    let mese = window.prompt("Inserisci il mese");
    let anno = window.prompt("Inserisci l'anno");
    document.getElementById('data-inserita2').innerText = giorno + "/" + mese + "/" + anno;

    let data = new Date (giorno + "/" + mese + "/" + anno);
    // Giorno della settimana da 0 a 6

    // Stampare Mercoledì 26 Novembre 2025
    let risultato;
    let giornoSettimana = data.getDay();

    switch(giornoSettimana){
        case 0:
            risultato = "Domenica";
        break;
        case 1:
            risultato = "Linedì";
        break;
        case 2:
            risultato = "Martedì";
        break;
        case 3:
            risultato = "Mercoledì";
        break;
        case 4:
           risultato = "Giovedì";
        break;
        case 5:
           risultato = "Venerdì";
        break;
        case 6:
            risultato = "Sabato";
        break;
    }

     risultato += " " + giorno + " ";

    switch (mese) {
        case "1":
        risultato += "Gennaio";
        break;
        case "2":
            risultato += "Febbraio";
        break;
        case "3":
            risultato += "Marzo";
        break;
        case "4":
            risultato += "Aprile";
        break;
        case "5":
            risultato += "Maggio";
        break;
        case "6":
            risultato += "Giugno";
        break;
        case "7":
            risultato += "Luglio";
        break;
        case "8":
            risultato += "Agosto";
        break;
        case "9":
            risultato += "Settembre";
        break;
        case "10":
            risultato += "Ottobre";
        break;
        case "11":
            risultato += "Novembre";
        break;
        case "12":
            risultato += "Dicembre";
        break;
    }

    document.getElementById("risultato-es2").innerText = risultato;
}

esercizio02();