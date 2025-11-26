/**Commento multilinea */
// Commento in linea

// Stampa in console
console.log("Ciao, mondo!");

/*
// Popup con messaggio
window.alert("Benvenuto!");

//Mostra popup con una richiesta che ritorna true o false
console.log(window.confirm("Sei sicuro?"));

window.prompt("Inserisci un numero"); */

// Dichiarazione di variabile
var stringa1 = "thank you USA, you are my best friend"; // Variabile globale
let stringa2 = "Ciao mondo"; // Variabile locale
const costante = "Ciao mondo!" // Costante

// Stringa
var stringa = "Insieme di caratteri";
console.log(stringa[2]);

// Intero
var intero = 1;

// Decimali
var decimale = 1.2;
console.log(typeof decimale);

// Booleani
var bool = true;
console.log(bool);

// Array
var array = [1, 2, 3, 4, 5, 6];
console.log(typeof array);

// Oggetto
var object = {
    "nome": "Mario",
    "eta": 30
};
console.log(typeof object);

var a = 1;
var b = 2;

console.log(a + b);
console.log(a - b);
console.log(a * b);
console.log(a / b);
console.log(a % b);

a=1;
console.log(a++);
console.log(++a);

// Operatori logici
console.log(a < b);
console.log(a <= b);

console.log(!(a<b));
console.log(a == 3); // Vero
console.log(a == "3") // Vero, stesso valore
console.log(a === "3"); // Falso, tipo diverso
console.log(a == 3 && b == 1);
console.log(a == 3 || b == 1);


// Concatenamento
console.log(stringa1 + stringa2);

a = 2;
b = 3;
c = "1";
var somma = a + c;

console.log(a + b); // Somma
console.log(a + c); // Concatenazione -> 21
console.log(somma + b); //213
console.log(somma > 20); // Somma viene convertito in numero
console.log(a + b + c); // Le operazioni vengono effettuate da sinistra verso destra, quindi 2+3 = 5, concatenato con 1

var d;
console.log(d);  // undefined
d = undefined;

var e = null;
console.log(e);

var oggetto = {
    "nullo": null,
    "undefined": undefined
};
console.log(oggetto);

console.log(d == true);
console.log(e == true);
console.log(d == e); // vero
console.log(d === e); // falso