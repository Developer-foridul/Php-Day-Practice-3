<?php 
/*Question 01:

Let’s make a result grade calculator…

Rishita’s subject marks: SubjectA = 75, SubjectB = 80, SubjectC = 65, SubjectD = 90.

Result Calculation formula: Sum all subjects marks and divided by total subject quantity. 

From this given formula, you will get a mark. Show the Grade message by the mark.

A+ = 80 - 100 

A   = 70 - 79

A-  = 60 - 69

B   = 50 - 59

C   = 40 - 49

F   = 01 - 39 

Firstly you have to calculate the average mark of Rishita.

Secondly you have to show the grade message (Like as: “You got A+”) by following this grading range.
*/

// Rishita Result grade Calculator Rishita Subject marks : (75,80,65,90)


$subjectA = 99;
$subjectB = 100;
$subjectC = 75;
$subjectD = 100;
$subject_Quentity = 4;

$totalmarks = $subjectA + $subjectB + $subjectC + $subjectD;

$avaregeMarks = $totalmarks/$subject_Quentity;

echo " You Exam Avarage Mark  " . $avaregeMarks . " You Look Below Your Ruslt ";
echo "<br>";



if ( $avaregeMarks>= 80 && $avaregeMarks <= 100 ) {
    
       echo "You Get a GPA 5 Your Accipment ";  

}  else if ( $avaregeMarks>= 70 && $avaregeMarks <= 80 ){
     echo "You Get A ";
}
else if ( $avaregeMarks>= 60 && $avaregeMarks <= 69 ){
    echo "You Get A- ";
}
else if ( $avaregeMarks>= 50 && $avaregeMarks <= 59 ){
    echo "You Get C ";
}
else if ( $avaregeMarks>= 40 && $avaregeMarks <= 49 ){
    echo "You Get D ";
}
else if ( $avaregeMarks>= 0 && $avaregeMarks <= 39 ){
    echo "You Get Fails ";
}

else {
    echo "Your Are  Exam  Afcent  ";
}
echo "<br>";

echo "<br>";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";



/*Question 02: 

Let’s make a game with your bike… You are riding a bike, your bike has some functionalities, these are… start, stop, break, gear, signal, headlight. 

When you click on the power/start button, your bike takes a start, 

When you click stop, your bike takes a stop, 

When you press the break, your bike take break, 

when you give the gear, your bike move faster and faster, 

when you press the signal button, your bike shows a signal light.

When you press the headlight button, your bike’s headlight will start.

Solve this game using Switch case and submit it on github. */ 

$stard = 1;

switch ($stard) {
    case '1':
        echo "Stard your Bike ";
        break;
    default:
        echo "of your bike";
        break;
}

echo "<br>";
$stop = 2;

switch ($stop) {
    case '2':
        echo "stok your Bike ";
        break;
    default:
        echo "of your bike";
        break;
}

echo "<br>";

$beak = 3;

switch ($stop) {
    case '3':
        echo "beack your Bike ";
        break;
    default:
        echo "of your bike";
        break;
}

echo "<br>";

$fasters = 4;

switch ($fasters) {
    case '4':
        echo "Your bike fasters ";
        break;
    default:
        echo "of your bike";
        break;
}


echo "<br>";

echo "<br>";

echo "<br>";

echo "<br>";
// Send time Funtion//


$stard = 3;

switch ($stard) {
    case '1':
        echo "Your bike stard ";
        break;

    case '2':
        echo "Your bike stop ";
        break;
   case '3':
        echo "Your bike faster ";
        break;

   case '4':
        echo "Your bike singla lihght  ";
        break;
    case '5':
         echo "Your bike Headlight ";
        break;
   
    default:
        echo "Your bike Home ";
        break;
}

//

