<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Day</title>
</head>
<body>
    <h2>Find the Day</h2>
    <form  method="POST">
        <label for="day">Enter a day of the week (in number 1-7) :</label>
        <input type="text" name="day">
        <input type="submit" name="submit" value="submit" class="btn btn-outline-success">

    </form>
    <?php
        if(isset($_POST['submit']))
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>


