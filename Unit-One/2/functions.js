/* Function Basics:
 - A function in JavaScript is a block of code designed to perform a 
   particular task. 
 - Functions are fundamental building blocks in JavaScript and 
   allow you to organize your code into reusable, manageable pieces. 
*/

//Declaring a function
/* function greet() {
    document.write("Namaste Everyone!");
}

//Invoking or Running or Calling the function
greet(); */

//function with no parameter
/* function display() {
    sum = 10 + 10;
    document.write("The sum of the number is: " + sum);
}

display(); */

//function with one parameter
/* function areaSquare(s) {
    area = s * s;
    return area; //the return value terminates the function
}

var out = areaSquare(10);
document.writeln("The area of a square is: " + out); */

//function with two parameters
/* function areaRect(width, length) {
    area = width * length;
    return area; //the return value terminates the function
}

var output = areaRect(5, 10);
document.writeln("The area of a rectangle is: " + output); */


/* Scopes in JavaScript */

// Var Vs let and const

//Global Scope (It is accessible anywhere)

/* let a = 10;

function display() {
    document.write(a);
}

display(); */

//Function Scope (it can be accessed only inside a function, var is a funtion scope. Also called local scope)

/* function display() {
    var a = 10;
    console.log(a);
}
display();
console.log(a); */

//Block Scope (let and const are block scope; block '{}' are area within control statements)
/* if (5 > 4) {
    let i = 1;
    console.log(i);
}
console.log(i); */

/* Difference between function scope and block scope */

//Function Scope

/* function myFunction() {
    var a = 10;

    if (a == 10) {
        var a = 20;
        console.log("I am inside of if block: " + a);
    }
    console.log("I am outside of if block: " + a);
}

myFunction(); */

//Block Scope
/* function myFunction() {
    var a = 10;

    if (a == 10) {
        let a = 20;
        console.log("I am inside of if block: " + a);
    }
    console.log("I am outside of if block: " + a);
}

myFunction(); */

/* 
Callback Function:
    - A callback function is a function that you pass into another function as an argument, and it gets executed (or "called back") inside the other function. The main idea is that you're telling one function to run another function when it's done doing something or at a specific point in its process.

    Simple Example:
     -> Imagine you have a friend who is cooking dinner, and you ask them to call you when dinner is ready. 
     -> In this case:
        - You are like the main function.
        - Your friend is like the callback function.
        - When dinner is ready, your friend (the callback function) calls you to let you know.
*/

function cookDinner(callback) {
    console.log("Cooking dinner...");

    // After cooking is done, call the callback function
    callback(); //Note: When you pass a function as an argument to another function, that argument is called a callback.
}

function dinnerIsReady() {
    console.log("Dinner is ready! Let's eat!");
}

// Passing the dinnerIsReady function as a callback to cookDinner
cookDinner(dinnerIsReady);
