<?php
    function MaxNo($val1,$val2,$val3)
    {
        if($val1>$val2 and $val1>$val3)
        {
            echo $val1,"Is Max Number";
        }
        elseif($val2>$val1 and $val2>$val3)
        {
            echo $val2,"Is Max Number";
        }
        elseif($val3>$val1 and $val3>$val2)
        {
            echo $val3,"Is Max Number";
        }
        else
        {
            echo "Two or more than two Numbers Are Equal";
        }
    }

    $value1=100;
    $value2=20;
    $value3=30;
    MaxNo($value1,$value2,$value3);
?>