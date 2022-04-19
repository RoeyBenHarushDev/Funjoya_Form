<!DOCTYPE html>
<html>
    <head>
        <title>Funjoya DataBase</title>
    </head>
    <body>
        <h1>Funjoya Reservation </h1>
        <h4>
        Guest Full Name: <?php echo $_GET["FirstName"]; ?><br>
        Guest Last Name: <?php echo $_GET["LastName"]; ?><br>
        Guest Phone Number: <?php echo $_GET["phoneNum"]; ?><br>
        Guest Email: <?php echo $_GET["E-mail"]; ?><br>
        <b>#Guest Address#<b><br>
        City: <?php echo $_GET["city"]; ?><br>
        Street: <?php echo $_GET["street"]; ?><br>
        Guest Zip Code: <?php echo $_GET["zipNum"]; ?><br>
        Guest Geneder: <?php echo $_GET["gender"];?><br>
        Guest Arrival - Date: <?php echo $_GET["Adate"]; ?><br>
        Guest Departure - Date: <?php echo $_GET["Ddate"]; ?><br> 
        Num Of Persons in Room: <?php echo $_GET["NumOfP"]; ?><br>
        Guest Payment Method: <?php echo $_GET["Payment"]; ?><br>
        Guest Extras: <br><? foreach($_GET['interests'] as $value)
        {
            echo $value .' ';
        } ?><br>
        Guest Special Request: <?php echo $_GET["Request"]; ?><br>
        </h4>
    </body>
</html>