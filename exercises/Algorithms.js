
//This program will print all numbers from 1 to 255.
for (i = 1; i<=255; i++)
  {
    console.log(i);
  }

//1 2 3 4 5 6...

//This program will print all the odd numbers from 1 to 1000.
for (i=1; i<= 1000; i=i+2)
  {
    console.log(i);
  }

//1 3 5 7...

// 2 Write a program that would print the Sum all the odd numbers from 1 to 5000
var oddSum = 0;
for (var i=1; i<=5000; i= i+2)
  {
    oddSum = oddSum + i;
  }
console.log(oddSum);
//noprotect


 var oddNum = 0;
for (var i=0; i<=100; i++)
    if ( i % 2 == 1)
      {
        oddNum = oddNum + i;
      }
console.log(oddNum);
//noprotect
// 3 Push all the odd numbers in the array.
var y = [];
for (var i=1; i<=255; i=i+2 )
  {
    y.push(i);
  }
console.log(y);
//noprotect
// 4 Print all the numbers in the array.
var x = [1,3,5,7,9,13];
for (var i=0; i<x.length; i++)
  {
    console.log(x[i]);
  }
// Find value from the 50% percent of the array to the 75% of the array. 
var x = [];
for (var i=0; i<200; i++){
  x.push(i);  
}

for (var i=x.length/2; i<=x.length * 0.75; i++)
  {
    console.log(x[i]);
  }
/////
//Find adverage of the values in the array
var x = [1,3,5,7,20];
var sum = x[0];
for (var i=1; i<x.length;i++)
  {
    sum = sum + x[i];
  }
var avg = sum/x.length;
console.log(avg);
console.log(sum);
/////
//create an array that contain all of the odd numbers from 1 to 255
var x = [1,3,5,7,20];
var sum = x[0];
for (var i=1; i<x.length;i++)
  {
    sum = sum + x[i];
  }
var avg = sum/x.length;
console.log(avg);
// or

var x = [1,3,5,7,20];
var avg = 0;
for (var i=1; i<x.length;i++){
  avg = avg + x[i]/x.length;
}
console.log(avg);
//
//this program will loop thought the array and will return the number of values that are grater than Y
//loop in the array
//check if value > 8 if true 
//count +1 or count++ add sum = sum = 1
//console count

var x = [12,7,30,10,21,1,5,2];
var y = 8;
var count =0;
for (var i=0; i<x.length;i++){
  if (x[i]>y){
    count++;
  }
}
console.log(count);
//square values
//create a loop
//console.log the square operation
//console shoud be [1,5,10,-2]
var x = [1,5,10,-2];
for (var i = 0; i<x.length; i++)
  {    
    console.log(x[i] * x[i]);
  }
//Shifting values var 
var x = [1,5,10,20, -2];
for (var i=1; i<x.length;i++)
{
  x[i] = x[i+1]; 
  
}
x[x.length-1] = 0;
console.log(x);
//set negative numberr in the array to be dojo
var x = [-1,5,10,20, -2];
for (var i=0; i<x.length; i++)
  {
    if (x[i] < 0 )
      {
        x[i] = "dojo";
      }
  }
console.log(x);



