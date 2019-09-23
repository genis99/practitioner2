"use strict";

var _greeting = _interopRequireDefault(require("./js/templates/greeting"));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { "default": obj }; }

//console.log('Hola mon');
console.log(document);
console.log(document.body);
var name = 'Sergi'; // document.body.innerHTML = 'HOLA!!!'
//moduls propis o externs, en aquest cas propi

//const template = `
//<h1>Hola ${name}!</h1>
//`
console.log(_greeting["default"]);
document.body.innerHTML = template;