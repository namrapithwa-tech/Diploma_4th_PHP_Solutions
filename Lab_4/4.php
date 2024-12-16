<?php
    $Even=0;
    $Odd=0;
    $arr = array(11,12,13,14,15,16,17,18,19,20);

    foreach($arr as $no)
    {
        if($no%2==0)
        {
            $Even++;
        }
        else
        {
            $Odd++;
        }
    }
    echo "Total Even Numbers: $Even <br>";
    echo "Total Odd Numbers: $Odd <br>";
?>