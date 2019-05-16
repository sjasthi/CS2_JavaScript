/*
  Name: arrays.js
  Assignment: 8.1 to 8.25
  Purpose: Working with arrays
  Author: Siva jasthi
  */
  
  
/* ----------------------------------------------------------------------
8.1 Write a function to calculate the sum of all the elements in a number array.
 ---------------------------------------------------------------------- */

 function array81(number_array)
 {
    var sum = 0;
    
    for (var i=0; i < number_array.length; i++)
    {
        sum = sum + number_array[i];
    }
    
    return sum;
 
 }
 
 var marks = [80, 86, 81, 99, 88, 83, 82];
 document.write("<br> Assignment 8.1");
 document.write("<br> Marks = " + marks);
 document.write("<br> Sum of marks =  " + array81(marks));
 document.write("<br>-------------------");
 
 
 /* ----------------------------------------------------------------------
 8.21 Write a function that creates N elements in array. And the values of the array should be from 1 to N.
  ---------------------------------------------------------------------- */
 
 function array821(number)
 {
    // Note: we can also write var number_array = new Array();
    var number_array = [];
    
    for (var i=0; i < number; i++)
    {
        number_array[i] = i+1;
    }
    
    return number_array;
 
 }
 
 
 var array_y = array821(8);
 document.write("<br> Assignment 8.21");
 document.write("<br>array821(8) = " + array_y);
 document.write("<br>-------------------");
 
 
 /* ----------------------------------------------------------------------
 8.23 Write a function that takes a number as the input. 
 Then it creates an array and fills the array with “number” of random numbers between 1 and 100. 
 And this array is returned by the function.
 For example, if I pass 5 as the input to this function, 
 you may get the following array returned by the function
                          [99, 56, 3, 76, 34]
 Reference: https://www.w3schools.com/jsref/tryit.asp?filename=tryjsref_random2
  ---------------------------------------------------------------------- */
 
  function array823(number)
  {
     // Note: we can also write var number_array = new Array();
     var number_array = [];
     
     for (var i=0; i < number; i++)
     {
         number_array[i] = Math.floor((Math.random() * 100) + 1);
     }
     
     return number_array;
  
  }

  var array_23 = array823(13);
  document.write("<br> Assignment 8.23");
  document.write("<br>array823(13) = " + array_23);
  document.write("<br>-------------------");
