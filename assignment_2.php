<?php

/**
 * Assignment-2.1
 * একটি ২ ডায়মেনশন এরেতে ইনপুট নিতে হবে। প্রথমে একটি নম্বর দেয়া হবে যেটা হবে এরের সাইজ (N)। এরপর এরের মধ্যে NxN 
 * সংখ্যা ইনপুট নিতে হবে। যদি ৪ ইনপুট দেয়া হয় সাইজ তাহলে নিচের মত করে ১৬ টি ইনপুট নিতে হবে।
 */

//  $input = readline('Please enter a number: ');
//  $two_dimentional_array = [
//     [],
//     []
//  ];

//get 3 commands from user
$two_dimentional_array = [
   [1,2,3],
   [11,22,33],
   [10,20,30]
];
// $length = 0;
// $line = readline("Please enter a size: ");
// if(is_numeric($line)){
//    for ($i=0; $i < $line; $i++) {               
//       $two_dimentional_array[$i] = [];
//       for($j = 0; $j < $line * $line; $j++){
//          $two_dimentional_array[$i][$j] = readline('Please Enter few number: ');
//       }      
//    }
// }

function printMyArray($myArray){
   for($i=0; $i < count($myArray); $i++){
      for($j=0; $j < count($myArray)[$i]; $j++){
         echo $myArray[$i][$j] . ' ';
      }
      echo "\n";
   }
}
printMyArray($two_dimentional_array);

//dump history

/**
 * Assignment-2.2
 * ডাইয়াগোনালি সংখ্যাগুলোর যোগফল প্রিন্ট করতে হবে।
 */

 /**
  * Assignment-2.3
  * প্রতিটি ঘরের ৪ সাইডের সংখ্যাগুলোর ও ঐ ঘরের সংখ্যার যোগফলের তুলনা করে যে ঘরের যোগফল সবচেয়ে বেশি সেই যোগফলটি 
  * ও সেই ঘরের নম্বর প্রিন্ট করতে হবে। 
  */
