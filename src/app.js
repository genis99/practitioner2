//console.log('Hola mon');
console.log(document);

console.log(document.body);

const name = 'Sergi'

// document.body.innerHTML = 'HOLA!!!'

//moduls propis o externs, en aquest cas propi
import greeting from './js/templates/greeting'

//const template = `
//<h1>Hola ${name}!</h1>
//`

console.log(greeting);

document.body.innerHTML = template