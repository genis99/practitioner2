const name = 'Sergi'

//moduls propis o externs, en aquest cas propi
//import greeting from './templates/greeting'

const greeting = `
<h1>Hola ${name}</h1>
`

console.log(greeting)
document.body.innerHTML = greeting