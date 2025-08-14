
let edad = 17;


const radio = prompt("cual es el radio del circulo" );
const radioNumero = parseInt(radio);

function calcularArea(radio){
    const PI = 3.14;
let circunferencia = radio * radio * PI;
return circunferencia;
}
console.log(calcularArea(radio));




const nombre = prompt("cual es tu nombre");
const leGusta = prompt("te gusta javascript?");
console.log("tu nombre es" + nombre);
console.log("te gusta javascript?" + leGusta);