
    <?php
        {

            $day = $_POST['day'];

            if ($day >= 1 && $day <= 7) 
            {
                switch ($day) {
                    case 1:
                        echo "<p>Day $day is: Monday</p>";
                        break;
                    case 2:
                        echo "<p>Day $day is: Tuesday</p>";
                        break;
                    case 3:
                        echo "<p>Day $day is: Wednesday</p>";
                        break;
                    case 4:
                        echo "<p>Day $day is: Thursday</p>";
                        break;
                    case 5:
                        echo "<p>Day $day is: Friday</p>";
                        break;
                    case 6:
                        echo "<p>Day $day is: Saturday</p>";
                        break;
                    case 7:
                        echo "<p>Day $day is: Sunday</p>";
                        break;
                }
            } 
            else
            {
                echo "<p class='alert alert-danger float-start' role='alert'>Please enter a valid number between 1 and 7. Not any day of number $day</p>";
            }
        }
    ?>