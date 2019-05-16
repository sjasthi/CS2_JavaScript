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
 
 