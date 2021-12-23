<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Dobi Giant Bubbles</title>
</head>
<body>
    <marquee direction="right" scrollamount="20">
    <img src="dobi.jpg" alt="Trulli" width="200" height="200">
    
    </marquee>
    <h1>Dobi Giant Bubbles</h1>
    <p>15G, Jalan Makyong 5B/KU5, Bandar Bukit Raja, Klang, Selangor 41050 Klang, Selangor</p>

    <form name="myform" method="post" action="semakform.php">
    <div class="container">
        <p>
            <label for="fnama"><b>First Name:</b></label>
            <input type="text" name="fnama" id="fnama" placeholder="enter your first name" required>
        </p>
        <p>
            <label for="Lnama"><b>Last Name: </b></label>
            <input type="text" name="Lnama" id="Lnama" placeholder="enter your last name" required>
        </p>
        <p>
            <label for="email"><b>Email:</b></label>
            <input type="text" name="email" id="email" placeholder="enter your email" required>
        </p>
        <p>
            <label for="address"><b>Address :</b></label><br>
            <textarea id="add" name="add" rows="4" cols="50" placeholder="enter your Address" required></textarea>
        </p>
        <p>
            <label for="Pno"><b>Phone Number:</b></label>
            <input type="text" name="Pno" id="Pno" placeholder="enter your Phone number" required>
        </p>

        <p>
            <label for="city"><b>City : </b></label>
            <select placeholder="Select your city" name="city" id="city">

                <option value="">--Choose--</option>
                <option value="Wilayah Persekutuan">Wilayah Persekutuan</option>
                <option value="Selangor">Selangor</option>
                <option value="Perlis">Perlis</option>
                <option value="Kedah">Kedah</option>
                <option value="Pulau Pinang">Pulau Pinang</option>
                <option value="Perak">Perak</option>
                <option value="Negeri Sembilan">Negeri Sembilan</option>
                <option value="Melaka">Melaka</option>
                <option value="Johor">Johor</option>
                <option value="Kelantan">Kelantan</option>
                <option value="Terengganu">Terengganu</option>
                <option value="Pahang">Pahang</option>
                <option value="Sabah">Sabah</option>
                <option value="Sarawak">Sarawak</option>
            </select>
        </p>

        <p>
            <label for="zcode"><b>Zip Code:</b></label>
            <input type="text" name="zcode" id="zcode" placeholder="enter your Zip code" required>
        </p>

        <p>
            <label for="prod"><b> Service: </b></label>
            <select placeholder="Select your service" name="service" id="service">

                <option value="">--Choose--</option>
                <option value="NormalL">Normal Laundry(wash & Dry)</option>
                <option value="DryL">Dry Cleaning</option>
                <option value="HandC">Hand Cleaning</option>
                <option value="SteamW">Steam Laundry</option>
                <option value="linen">laundry linen</option>
                <option value="carpet">Carpet Cleaning</option>
            </select>
        </p>

        <p>
            <label for="prod"><b>Extra Service: </b></label>
            <select placeholder="Select your extra service" name="Eservice" id="Eservice">

                <option value="">--Choose--</option>
                <option value="iron">Iron</option>
                <option value="fold">folding clothes</option>
                <option value="pickup">Pick up</option>
                <option value="delivery">Delivery</option>
            </select>
        </p>
        

        <button type="submit" name="Send" class="registerbtn">Submit</button>
</form>
</body>
</html>
<?php//<img src="laundry.jpg" alt="Trulli" class="center">