
    <?php
        $per = 75;

        switch (true) {
            case ($per < 40):
                echo "result = ".$per." class = Fail";
                break;
            case ($per >= 40 && $per < 50):
                echo "result = ".$per." class = Pass Class";
                break;
            case ($per >= 50 && $per < 60):
                echo "result = ".$per." class = Second Class";
                break;
            case ($per >= 60 && $per < 70):
                echo "result = ".$per." class = First Class";
                break;
            case ($per >= 70):
                echo "result = ".$per." class = Distinction";
                break;
            default:
                echo "Invalid per";
                break;
        }
    ?>
