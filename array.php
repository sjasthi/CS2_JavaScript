/*
  Name: arrays.js
  Assignment: 8.1 to 8.25
  Purpose: Working with arrays
  Author: Siva jasthi
  */


/* ----------------------------------------------------------------------
8.1 Write a function to calculate the sum of all the elements in a number array.
 ---------------------------------------------------------------------- */

function array81(number_array) {
    var sum = 0;

    for (var i = 0; i < number_array.length; i++) {
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
8.2 Write a function to return the average of all the elements in a number array.
 ---------------------------------------------------------------------- */

 function array82(number_array) {
 // your code goes here
}

var array_2 = [10, 40, 30, 20];
document.write("<br> Assignment 8.2.");
document.write("<br> array_2 = " + array_2);
document.write("<br> Average of array_2 =  " + array82(array_2));
document.write("<br>-------------------");

/* ----------------------------------------------------------------------
8.3 Write a function to return the “minimum” value of all the elements in a number array.
Author: Satish Aaki
 ---------------------------------------------------------------------- */
 function array83(number_array) {
    // your code goes here
    var min_element=10000;
    for(var i=0; i<number_array.length; i++){
 		var current_element = number_array[i]
        if(current_element<min_element){
            min_element = current_element;
        }
    }
    
    return min_element;
}
   
   var array_83 = [-10, 23,67,56, -100, 89,34,56,78]
   document.write("<br> Assignment 8.3.");
   document.write("<br> array_83 = " + array_83);
   document.write("<br> Minimum of array_83 =  " + array83(array_83));
   document.write("<br>-------------------");

/* ----------------------------------------------------------------------
8.4 Write a function to return the "maximum" value of all the elements in a number array.
 ---------------------------------------------------------------------- */

 function array84(number_array) {
    // your code goes here
   }
   
   var array_84 = [10, 40, 30, 20];
   document.write("<br> Assignment 8.4");
   document.write("<br> array_84 = " + array_84);
   document.write("<br> Maximum of array_84 =  " + array84(array_84));
   document.write("<br>-------------------");

/* ----------------------------------------------------------------------
8.5 Write a function to return the number of “even” numbers in an array. (DONE)
 ---------------------------------------------------------------------- */
 function array85(number_array) {
    var even_number_count = 0;

    for (var i = 0; i < number_array.length; i++) {
    
        // pseudo-code
        // if the number from array is even, 
        // then increase the count by 1
        // if is is NOT even, 
        // then ignore the number
    
        var temp_number = number_array[i];
         
         if (temp_number % 2 ==0) {
            even_number_count = even_number_count+1;
        }
       
    }

    return even_number_count; 
 }
   
   var array_85 = [2,3,44, 97, 46, 48, 87, 89, 65, 46, 46, 2, 4, 97];
   document.write("<br> Assignment 8.5");
   document.write("<br> array_85 = " + array_85);
   document.write("<br> Number of even numbers in array_85 =  " + array85(array_85));
   document.write("<br>-------------------");
   
/* ----------------------------------------------------------------------
8.6 Write a function to return the number of “odd” numbers in an array. (DONE)
 ---------------------------------------------------------------------- */
 function array86(number_array) {
    var odd_number_count = 0;

    for (var i = 0; i < number_array.length; i++) {
    
        // pseudo-code
        // if the number from array is even, 
        // then increase the count by 1
        // if is is NOT even, 
        // then ignore the number
    
        var temp_number = number_array[i];
         
         if (temp_number % 2 ==1) {
            odd_number_count = odd_number_count+1;
        }
    }

    return odd_number_count; 
 }
   
   var array_86 = [2,3,44, 97, 46, 48, 87, 89, 65, 46, 46, 2, 4];
   document.write("<br> Assignment 8.6");
   document.write("<br> array_86 = " + array_86);
   document.write("<br> Number of odd numbers in array_86 =  " + array86(array_86));
   document.write("<br>-------------------");
   

  /* ----------------------------------------------------------------------
8.9 PHP Function 1 for Joshua Shold 
 ---------------------------------------------------------------------- */
 <?php

$students = array("Joshua", "Lincoln", "Madi");


echo is_array($students) ? 'Array ' : 'not an Array ';

$myfamsize = "five";


echo is_array($myfamsize) ? 'Array ' : 'not an Array ';

?>
 
 /* ----------------------------------------------------------------------
8.11 Write a function that returns union of two arrays. The combined array should not contain any duplicates.
For example, passing two arrays [4,5,6] and [3,4,5] should return  [3,d4,5,6] 
 ---------------------------------------------------------------------- */ 
/* ----------------------------------------------------------------------
8.11 Write a function that returns union of two arrays. The combined array should not contain any duplicates.
For example, passing two arrays [4,5,6] and [3,4,5] should return  [3,d4,5,6] 
 ---------------------------------------------------------------------- */
 function array86(number_array) {
    var odd_number_count = 0;

    for (var i = 0; i < number_array.length; i++) {
    
        // pseudo-code
        // if the number from array is even, 
        // then increase the count by 1
        // if is is NOT even, 
        // then ignore the number
    
        var temp_number = number_array[i];
         
         if (temp_number % 2 ==1) {
            odd_number_count = odd_number_count+1;
        }
    }

    return odd_number_count; 
 }
   
   var array_86 = [2,3,44, 97, 46, 48, 87, 89, 65, 46, 46, 2, 4];
   document.write("<br> Assignment 8.6");
   document.write("<br> array_86 = " + array_86);
   document.write("<br> Number of odd numbers in array_86 =  " + array86(array_86));
   document.write("<br>-------------------");
   

/* ----------------------------------------------------------------------
8.16 Write a function that finds an element in an array.  If the input element is found in the array, the function returns “true”. If the element is not found, it returns “false”

Author: Aaki Bhoomika
 ---------------------------------------------------------------------- */
   function array816(number_array, input_number) {
    if (number_array.includes(input_number))
    {
        return true;
    } else {
        return false;
    }						
} 

var input_array=[71,20,3,44,6,76,8, 87, 89, 67];
document.write("<br>"+"the array is "+input_array);

var input_item = 897;

var is_item_found = array816(input_array, input_item);
document.write("<br>"+"is the element present on the array?="+ is_item_found);
document.write("<br>...............");


 /* ----------------------------------------------------------------------
8.17 PHP Function 2 for Joshua Shold 
 ---------------------------------------------------------------------- */
 <?php

 $myfamily = array("Joshua", "Abby", "Madi", "Lincoln", "Scarlett");
 echo "Size of the array is: ". sizeof($myfamily);
 
 ?>


/* ----------------------------------------------------------------------
8.21 Write a function that creates N elements in array. 
And the values of the array should be from 1 to N.
 ---------------------------------------------------------------------- */

function array821(number) {
    // Note: we can also write var number_array = new Array();
    var number_array = [];

    for (var i = 0; i < number; i++) {
        number_array[i] = i + 1;
    }

    return number_array;

}

var array_y = array821(8);
document.write("<br> Assignment 8.21");
document.write("<br>array821(8) = " + array_y);
document.write("<br>-------------------");


/* ----------------------------------------------------------------------
 8.22 Write a function that prints the array to show the “index” and “value” pairs as follows.
For example, if I pass the array [10.25,5,99] to the function, 
it should print the following string.
[0,10]  [1,25], [2,5], [3,99]
---------------------------------------------------------------------- */

function array822(an_array) {
    // your code goes here
}

var array_22 = [30, 40, 25, 15, 5, 3, 98, 56, 78, 57];
document.write("<br> Assignment 8.22");
array822(array_22);
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

function array823(number) {
    // Note: we can also write var number_array = new Array();
    var number_array = [];

    for (var i = 0; i < number; i++) {
        number_array[i] = Math.floor((Math.random() * 100) + 1);
    }

    return number_array;

}

var array_23 = array823(13);
document.write("<br> Assignment 8.23");
document.write("<br>array823(13) = " + array_23);
document.write("<br>-------------------");


/* ----------------------------------------------------------------------
8.24 Write a function that returns an array of 1000 random numbers. 
Each random number should be between 1 and 50.
 ---------------------------------------------------------------------- */

function array824() { 
    var number_array = [];

    for (var i = 0; i < 1000; i++) {
        number_array[i] = Math.floor((Math.random() * 50) + 1);
    }

    return number_array;

}

var array_24 = array824();
document.write("<br> Assignment 8.24");
document.write("<br>array824() = " + array_24);
document.write("<br>-------------------");


/* ----------------------------------------------------------------------
8.25 Write a function that produces a frequency table of array elements.  
How many times an element is appearing in an array? 
Publish the frequency table in the following format.

Value, Frequency
10, 4
20, 8
15, 2

You can use the array returned by the function 824 (previous exercise) 
as the input to array825 function.
 ---------------------------------------------------------------------- */

function array825(number_array) {
    // what is the algorithm?

}

// we are using the previous function to create any array
// of 1000 numbers between 1 and 50
var array_25 = array824();

document.write("<br> Assignment 8.25");
// call the function  to produce the frequency table
array825(array_25);
document.write("<br>-------------------");

/* 2 New PHP Functions for Joshua Shold
*/
<?php

$lamborghinis = array("Urus", "Huracan", "Aventador");
echo "Size of the array is: ". sizeof($lamborghinis);

?>

