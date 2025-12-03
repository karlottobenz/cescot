function esercizio1(){

    var numeroDaTrovare = Math.ceil(Math.random() * 10);
    let trovato = false;
    while (!trovato){
        var numeroInserito = window.prompt("Inserisci un numero da 1 a 10");
        if(numeroDaTrovare == numeroInserito){
            trovato = true;
        }
    }

    if(trovato){
        document.getElementById('es1-numeroInserito').innerText = numeroInserito;
    } else {
        window.alert("Non trovato");
    }
}


function esercizio2(){
    let numeroInserito = window.prompt("Inserisci un numero")
    document.getElementById('es2-numeroInserito').innerText = "Il numero inserito è " + numeroInserito;

    let risultato = 1;
    for(let i = 1; i <= numeroInserito; i++){
        risultato *= i;
    }
    document.getElementById('es2-risultato').innerText = "Il fattoriale è: "+ risultato;
}

function esercizio3(){
    let studente = {
        nome: "",
        cognome: "",
        matricola: "",
        voti: []
    };

    // Input
    for (chiave in studente) {
        if(chiave != "voti"){
            studente[chiave] = window.prompt("Inserire " + chiave);
        } else {
            let stringaVoti = window.prompt("Inserire i voti separati da ','");
            studente[chiave] = stringaVoti.split(",");
        }
    }
    // Media
    let mediaVoti = 0;
    for(voto of studente.voti) {
        mediaVoti += parseInt(voto);
    }
    studente.mediaVoti = mediaVoti / studente.voti.length;

    // Stampa
    let risultato ="";
    for(chiave in studente){
        if(chiave != "voti")
            risultato += chiave + ":" + studente[chiave] + "<br>";
    }
    document.getElementById("es3-risultato").innerHTML = risultato
}