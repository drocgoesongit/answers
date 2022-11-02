const prompt= require('prompt-sync')();

console.log("Hello to Node");
const name=prompt("Enter Your Name: ");
const n1=parseInt(prompt("Enter 1st number: "));
const n2=parseInt(prompt("Enter 2nd number: "));
console.log("Result of Arithmatic Operations are:");
console.log(`Addition: ${n1+n2}`);
console.log(`Subtraction: ${n1-n2}`);
console.log(`Division: ${n1*n2}`);
console.log(`Multuplication: ${n1/n2}`);
console.log(`${name} you have performed all Arithmatic Operations`);
