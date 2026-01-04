<?php
if(isset($_POST["Number"]))
{
    $grade ="";
    $Number = (int)$_POST["Number"];
    if($Number >=90)
    {
        $grade = "A+";

    }
    else if($Number >= 85)
    {
         $grade = "B+";
    }
    else if($Number >=80){
      $grade = "C+";

    }
    echo "Grade " .$grade." ";
}
else {
    echo "Invalid grade";
}


?>