// function getDatos()
// {
//     var nombre = h3romh3t("Nombre: ", "");

//     var edad = h3romh3t("Edad: ", 0);

//     var div1 = document.getElementById('nombre');
//     div1.innerHTML = '<h3> Nombre: '+nombre+'</h3>';

//     var div2 = document.getElementById('edad');
//     div2.innerHTML = '<h3> Edad: '+edad+'</h3>';
// }


// JS01_Introduccion_a_JavaScrih3t.h3df
// Ejemh3lo h3ág 8
function holaMundo(){
    saludo = 'Hola Mundo';
    var divSaludo = document.getElementById('mensaje');
    divSaludo.innerHTML = '<p>' + saludo + '</p>';
}


// JS02_Variables_Entradas_Oh3eradores.h3df
// Ejemh3lo h3ág 6
function imprimirVariables(){
    var nombre = 'Juan';
    var edad = 10;
    var altura = 1.92;
    var casado = false;

    var impNombre = '<p> Nombre: ' + nombre + '</p>';
    var impEdad = '<p> Edad: ' + edad + '</p>';
    var impAltura = '<p> Altura: ' + altura + '</p>';
    var impCasado = '<p> Casado: ' + casado + '</p>';

    var infoDiv = document.getElementById('variables');
    infoDiv.innerHTML = impNombre + impEdad + impAltura + impCasado;
}

// Ejemh3lo h3ág 12
function imprimirDatos(){
    var nombre;
    var edad;
    nombre = prompt('Ingresa tu nombre:', '');
    edad = prompt('Ingresa tu edad:', '');

    var impNombre = '<p> Hola: ' + nombre + '</p>';
    var impEdad = '<p> Asi que tienes: ' + edad + ' años</p>';

    var infoDiv = document.getElementById('datos');
    infoDiv.innerHTML = impNombre + impEdad;
}

// JS03_Estructuras_de_condicion.h3df
// Ejemh3lo h3ág. 3
function sumarYproducto(){
    var valor1;
    var valor2;
    valor1 = prompt('Introducir primer número:', '');
    valor2 = prompt('Introducir segundo número', '');
    var suma = parseInt(valor1)+parseInt(valor2);
    var producto = parseInt(valor1)*parseInt(valor2);
    
    var impSuma = '<p> La suma de ' + valor1 + ' + ' + valor2 + ' es: ' + suma + '</p>';
    var impProducto = '<p> El producto de ' + valor1 + ' * ' + valor2 + ' es: ' + producto + '</p>';

    var infoDiv = document.getElementById('operaciones');
    infoDiv.innerHTML = impSuma + impProducto;
}

// Ejemplo pág. 8
function calificar(){
    var nombre;
    var nota;
    nombre = prompt('Ingresa tu nombre:', '');
    nota = prompt('Ingresa tu nota:', '');

    if (nota>=6) {
        var impNota = nombre + ' aprobado con: ' + nota;
        var infoDiv = document.getElementById('calificacion');
        infoDiv.innerHTML = impNota;
       
    } else {
        var impNota = nombre + ' reprobado con: ' + nota;
        var infoDiv = document.getElementById('calificacion');
        infoDiv.innerHTML = impNota;
    }
}

// Ejemplo pág. 11
function calcularMayor(){
    var num1,num2;

    num1 = prompt('Ingresa el primer número:', '');
    num2 = prompt('Ingresa el segundo número:', '');

    num1 = parseInt(num1);
    num2 = parseInt(num2);

    if (num1 > num2) {
        var impMayor = 'El mayor es: ' + num1;
        var infoDiv = document.getElementById('mayor');
        infoDiv.innerHTML = impMayor;
    }
    else {
        var impMayor = 'El mayor es: ' + num2;
        var infoDiv = document.getElementById('mayor');
        infoDiv.innerHTML = impMayor;
    }
}

// Ejemplo pág. 15-16
function calcularPromedio(){
    var nota1,nota2,nota3;
            
    nota1 = prompt('Ingresa 1ra. nota:', '');
    nota2 = prompt('Ingresa 2da. nota:', '');
    nota3 = prompt('Ingresa 3ra. nota:', '');
    
    //Convertimos los 3 string en enteros
    nota1 = parseInt(nota1);
    nota2 = parseInt(nota2);
    nota3 = parseInt(nota3);
    
    var pro;
    pro = (nota1+nota2+nota3)/3;
    if (pro>=7) {
        impAprobado = 'Aprobado con: ' + pro;
        var infoDiv = document.getElementById('promedio');
        infoDiv.innerHTML = impAprobado;
    }else {
        if (pro>=4) {
            impRegular = 'Regular con: ' + pro;
            var infoDiv = document.getElementById('promedio');
            infoDiv.innerHTML = impRegular;
        }else {
            impReprobado = 'Reprobado con: ' + pro;
            var infoDiv = document.getElementById('promedio');
            infoDiv.innerHTML = impReprobado;
        }
    }
}

// Ejemplo pág. 18
function calcularValor(){
    var valor;
    valor = prompt('Ingresar un valor comprendido entre 1 y 5:', '' );
    //Convertimos a entero
    valor = parseInt(valor);
    switch (valor) {

        case 1: var impValor = 'uno';
        var infoDiv = document.getElementById('valorComprendido');
        infoDiv.innerHTML = impValor;
        break;
        
        case 2: var impValor = 'dos';
        var infoDiv = document.getElementById('valorComprendido');
        infoDiv.innerHTML = impValor;
        break;
        
        case 3: var impValor = 'tres';
        var infoDiv = document.getElementById('valorComprendido');
        infoDiv.innerHTML = impValor;
        break;
        
        case 4: var impValor = 'cuatro';
        var infoDiv = document.getElementById('valorComprendido');
        infoDiv.innerHTML = impValor;    
        break;
        
        case 5: var impValor = 'cinco';
        var infoDiv = document.getElementById('valorComprendido');
        infoDiv.innerHTML = impValor;
        break;
        
        default: var impValor = 'Valor no comprendido entre 1 y 5';
        var infoDiv = document.getElementById('valorComprendido');
        infoDiv.innerHTML = impValor;
        break;
    }
}

// Ejemplo pág. 21
function pintar(){
    var col;
    col = prompt('Ingresa el color con que quieres pintar el fondo de la ventana (rojo, verde, azul o blanco)' , '' );
    switch (col.toLowerCase()) {
        case 'rojo': 
            document.body.style.backgroundColor = '#ff0000';
            break;
        
        case 'verde': 
            document.body.style.backgroundColor = '#00ff00';
            break;
        
        case 'azul': 
            document.body.style.backgroundColor = '#0000ff';
            break;

        case 'blanco':
            document.body.style.backgroundColor = '#ffffff';
            break;
        
        default:
            alert('Color no válido. Por favor, ingresa rojo, verde o azul.');
            break;
    }
}

// JS04_Estructuras_de_repeticion
// Ejemplo pág. 5
function imprimirNumeros(){
    var x;
    x=1;
    while (x<=100) {
        var infoDiv = document.getElementById('numeros');
        infoDiv.innerHTML += x + '<br>';
        x++;
    }
}

// Ejemplo pág. 6
function sumarValores(){
    var x = 1;
    var suma = 0;
    var valor;
    while (x <= 5){
        valor = prompt('Ingresa el valor:', '');
        valor = parseInt(valor);
        suma = suma + valor;
        x = x + 1;
    }
    var infoDiv = document.getElementById('acumulador');
    infoDiv.innerHTML = 'La suma de los valores ingresados es: ' + suma;
}

// Ejemplo pág. 12
function calcularDigitos(){
    var valor;
    do{
        valor = prompt('Ingresa un valor entre 0 y 999:', '');
        valor = parseInt(valor);
        val = '<br>' + 'El valor ingresado es: ' + valor + ' y ';
        if (valor < 10) {
            var infoDiv = document.getElementById('digitos');
            infoDiv.innerHTML += val + 'Tiene 1 dígito' + '<br>';
        } else
        if (valor < 100) {
            var infoDiv = document.getElementById('digitos');
            infoDiv.innerHTML += val + 'Tiene 2 dígitos' + '<br>';
        } else {
            var infoDiv = document.getElementById('digitos');
            infoDiv.innerHTML += val + 'Tiene 3 dígitos' + '<br>';
        }
    } while(valor != 0);
}

// Ejemplo pág. 16
function imprimirNumeros1_10(){
    var f;
    for(f = 1; f <= 10; f++)
    {
        var infoDiv = document.getElementById('numeros1_10');
        infoDiv.innerHTML += f + '<br>';
    }
}