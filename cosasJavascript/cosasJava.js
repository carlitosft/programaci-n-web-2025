
/*let edad = 17;


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
console.log("te gusta javascript?" + leGusta);*/



const ancho = prompt("cual es el ancho de tu rectangulo?");
const anchoRectangulo = parseInt(ancho);

const alto = prompt("cual es el alto de tu rectangulo?");
const altoRectangulo = parseInt(alto);

function calculaRectangulo(ancho, alto){
let areaRectangulo = alto* ancho;
return areaRectangulo
}
console.log(calculaRectangulo(ancho, alto));
alert(`El area de tu rectangulo es: ${calculaRectangulo(anchoRectangulo, altoRectangulo)}`);