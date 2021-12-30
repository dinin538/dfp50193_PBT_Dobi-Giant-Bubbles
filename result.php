<?php
require 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aromatica Spa</title>
</head>

<body>
    <fieldset id="group1">
        <h1>Dobi Giant Bubbles</h1>
        <div>
            <ul>
                <li>15G, Jalan Makyong 5B/KU5,</li>
                <li>Bandar Bukit Raja, 41050 </li>
                <li>Klang, Selangor</li>
                <li>03-123456789</li>
            </ul>
        </div>
    </fieldset>
    <br>

    <div class="papar">
        <?php
        if ($dc == 'Normal Laundry RM15') {
            $price = 15;
        ?>
            Service Selected: <br> <?php echo $dc; ?> <br><br>
            Add On: <br> <?php echo $op1 ?> <br> 
            Total Price: RM<?php echo calcTotal($spesial, $spesial1, $spesial2, $price);
                        } else if ($dc == 'Dry Cleaning RM 25') {
                            $price = 25;
                            ?>
            Service Selected: <br> <?php echo $dc; ?> <br><br>
            Add On: <br> <?php echo $op2 ?> <br> 
            Total Price: RM<?php echo calcTotal($spesial, $spesial1, $spesial2, $price);
                        } else if ($dc == 'Thick Clothes ( Jeans or Towel) RM 25') {
                            $price = 25;
                            ?>
            <script>
                alert('You must choose a service');
                window.location = 'index.php';
            </script>
        <?php
                        }
        ?>
        <br>
    </div>
    <a href="index.php" class="button1">Back</a>
</body>

</html>