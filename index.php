<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Registration</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1 class="orgName">VehiFlex</h1>
    </header><br><br>
    <div>
        <form action="process.php" method="POST">
            <h1 class="topic">Vehicle Registration</h1><br>
            <div>
                <lable>Name:</lable>
                <input type=text placeholder="Vehicle Name" name="vehicle_name" />
            </div><br>
            <div>
                <lable>Vehicle Type:</lable>
                <input type=text placeholder="Vehicle Type" name="vehicle_type" />
            </div><br>
            <div>
                <lable>Vehicle Model:</lable>
                <input type=text placeholder="Vehicle Model" name="vehicle_model" />
            </div><br><br>
            <button type="submit">Submit</button>
        </form>

    </div>
    <div>
        <img src="view-3d-car.png" alt="CarPic">
    </div>

    <footer>
        <h5>&copy;2024.VehiFlex SriLanka</h5>
    </footer>
</body>

</html>