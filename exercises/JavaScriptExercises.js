//Instead of relying on the computer to run the codes for you, it's important for you to be able to run the codes yourself and know what's happening.  This is an essential skill set for a great developer and is something that you can get better by practicing.

//Run the following codes in your mind and write down what you think the response would be.  Make sure you use the T diagram to keep track of each variable as you run each line of your code. After you ran the code in your mind/paper, run the code in jsbin.com and see if it produced the same results.
//-----------------------------------------------------------------------------------

//Exercise 1
var x = 1;
console.log(x);
x = x+1;
console.log(x);

//Console.log(answer)
// x = 1
// x = 2
//-----------------------------------------------------------------------------------

//Exercise 2
var x = 1;
x = x+2;
console.log(x);
x = x+10;
console.log(x);

//Console.log(answer)
// X = 13
//-----------------------------------------------------------------------------------

//Exercise 3

for(var i=0; i<10000; i++)
{
  console.log(i);

}

//Console.log(answer)
//0
//1
//2
//...
//99999 
//-----------------------------------------------------------------------------------

//Exercise 4

var x = 1;
for(var i=0; i<3; i++)
{
  x = x+1;
}

console.log(x);

//Console.log(answer)
//x = 4

//-----------------------------------------------------------------------------------
//Exercise 5
var x = 1;
for(var i=0; i<3; i=i+2)
{
  x = x+1;
}
console.log(x);
console.log(i);

//Console.log(answer)
// x = 3
// i = 4

//-----------------------------------------------------------------------------------

//Exercise 6

var x = 1;
for(var i=0; i<-1; i=i+2)
{
  x = x+1;
}
console.log(x);
console.log(z);

//Console.log(answer)
// x = 1 
// z = error

//-----------------------------------------------------------------------------------
//Exercise 7

var x = [1,3,5]
x.push(77);

console.log(x);

//Console.log(answer)
// [1, 3, 5, 77]
//-----------------------------------------------------------------------------------
//Exercise 8

var x = [1,3,5];
x[0] = 15;
x[3] = 77;

console.log(x);

//Console.log(answer)
//[15, 3, 5, 77]
//-----------------------------------------------------------------------------------
//Exercise 9

var x = [1,3,5];
x.push(33);
x[3] = 77;

console.log(x);

//Console.log(answer)
//[1, 3, 5, 77]
//-----------------------------------------------------------------------------------

//Exercise 10

x=[];
for(var i=0; i<100; i++)
{
  x.push(i*2);
}

console.log(x);

//Console.log(answer)
//[0, 2, 4, 6, ..., 98]

//-----------------------------------------------------------------------------------
//Exercise 11

x =[1,3,5];
x[0] = x[2];
x[1] = x[0];

console.log(x);

//Console.log(answer)
//[5, 5, 5]

//-----------------------------------------------------------------------------------
//Exercise 12

x=[1,3,5];
y=[0,5,7];
x[0] = x[1] + y[2];
y[1] = y[2] - x[0];

console.log(x);

//Console.log(answer)
//[10, 3, 5]
//-----------------------------------------------------------------------------------
//Exercise 13

x = [1,3,5,8];
x[0] = x[x.length-1];

console.log(x);

//Console.log(answer)
//[8, 3, 5, 8]

//-----------------------------------------------------------------------------------
//Exercise 14

x = [1,3,5,8];
temp = x[x.length-1];
x[x.length-1] = x[0];

console.log(x);

//Console.log(answer)
//[1, 3, 5, 1]

//-----------------------------------------------------------------------------------
//Exercise 15 (swap - IMPORTANT)

x=[1,3,5,8];
temp = x[x.length-1];
x[x.length-1] = x[0];
x[0] = temp;
console.log(x);

//Console.log(answer)
//[8, 3, 5, 1]

//-----------------------------------------------------------------------------------
//Exercise 16

x=[1,3,5,8];
x.pop();
x.push(7);
console.log(x);

//pop basically removes/pops the last value in the array.
//Console.log(answer)
//[1, 3, 5, 7]

//-----------------------------------------------------------------------------------
//Exercise 17

x=[1,3,5,8];
for(var i=0; i<x.length; i++)
{
  if(x[i] > 4)
  {
    x[i] = 0;
  }
}

console.log(x);

//Console.log(answer)
//[1, 3, 0, 0]

//-----------------------------------------------------------------------------------

//Exercise 18

x=[-1,3,2,7];
for(var i=0; i<x.length; i++)
{
  if(x[i] < i)
  {
    x[i] = -10;
  }
}

console.log(x);

//Console.log(answer)
//[-10, 3, 2, 7]

//-----------------------------------------------------------------------------------
//Exercise 19

for(var i=10; i<1000; i--)
{
  console.log(i);

} 

//Console.log(answer)
//10
//9
//8
//...

//-----------------------------------------------------------------------------------
//Exercise 20

var x = 0;
for(var i=1; i<4; i++)
{
  x = x+ i;
  console.log(x);
  console.log(i);

} 

//Console.log(answer)
//x = 1
//i = 1
//x = 3
//i = 2
//x = 6
//i = 3

//-----------------------------------------------------------------------------------
//Exercise 21

var x = 0;
for(var i=1; i<4; i=i+2)
{
  x = x+i;
  console.log(x);
  console.log(i);

}

//Console.log(answer)
// x = 1
// i = 1
// x = 4
// i = 3
//-----------------------------------------------------------------------------------
//Exercise 22 - Understanding how to use functions (part 1)

function abc()
{
  return 5;
}
x = abc() + abc();

console.log(x);

//Console.log(answer)
// 10
//-----------------------------------------------------------------------------------
//Exercise 23 - Understanding how to use functions (part 2)

function abc(z)
{
  return 5+z;
}
x = abc(3) + abc(2);

console.log(x);

//Console.log(answer)
//15

//-----------------------------------------------------------------------------------
//Exercise 24 - Understanding how to use functions (part 3)

function abc(z,zz)
{
  return z+zz;
}
x = abc(2,3) + abc(3,5);

console.log(x);

//Console.log(answer)
//13

//-----------------------------------------------------------------------------------
//Exercise 25 - Understanding how to use functions (part 4)

function abc(z,zz)
{
  return z+zz;
}
x = abc(abc(1,2), abc(2,2));

console.log(x);

//Console.log(answer)
//7

//-----------------------------------------------------------------------------------
//Exercise 26 - Understanding how to use functions (part 5)

y = 5;
function abc(a)
{
  y = 2;
}
console.log(y);

//Console.log(answer)
// 5

//-----------------------------------------------------------------------------------
