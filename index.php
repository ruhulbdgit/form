<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KodeZen Academy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3f4f6;
        }

        form {
            background-color: #8a2be2;
            padding: 20px;
            border-radius: 8px;
            width: 300px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        form div {
            margin-bottom: 15px;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #4caf50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        h6 {
            margin-top: 20px;
            font-size: 18px;
            color: #333;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 5px;
            font-size: 16px;
            color: #555;
            font-weight: 600;
        }
    </style>
</head>

<body>

    <?php
    $fname = "";
    $lname = "";
    $email = "";

    if ($_SERVER['REQUEST_METHOD'] === "POST") {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
    }

    function kodezen_academy_validate($form_field_value)
    {
        $form_field_value = trim($form_field_value);
        $form_field_value = stripslashes($form_field_value);
        $form_field_value = htmlspecialchars($form_field_value);
        return $form_field_value;
    }

    ?>

    <form style="background-color: violet ;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div style="margin-bottom:10px"><input type="text" name="fname" placeholder="Enter Your  First Name"></div>
        <div style="margin-bottom:10px">
            <input type="text" name="lname" placeholder="Enter Your Last Name">
        </div>
        <div style="margin-bottom:10px">
            <input type="text" name="email" placeholder="Enter Your Email">
        </div>
        <div>
            <button type="submit">Submit</button>
        </div>
        <div class=test>
            <h6>Form Data</h6>
            <ul>
                <li> Frist Name:<?php echo $fname; ?></li>
                <li>Last Name:<?php echo $lname; ?></li>
                <li>Email:<?php echo $email; ?></li>
            </ul>
        </div>
    </form>


</body>

</html>