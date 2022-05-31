<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login Page </title>
    <style>
        Body {
            font-family: Calibri, Helvetica, sans-serif;
            background-color: white;
        }

        button {
            background-color: #4CAF50;
            width: 100%;
            color: orange;
            padding: 15px;
            margin: 10px 0px;
            border: none;
            cursor: pointer;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            margin: 8px 0;
            padding: 12px 20px;
            display: inline-block;
            border: 2px solid green;
            box-sizing: border-box;
        }

        button:hover {
            opacity: 0.7;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            margin: 10px 5px;
        }




        .main {
            display: flex;
        }

        .left {
            width: 35%;
        }

        .container {
            border-radius: 10px;
            width: 30%;
            padding: 25px;
            background-color: lightblue;
        }

        .right {
            width: 35%;
        }
        form{
            border: none;
        }
        input {
           
            border-radius: 10px;
        }
        button {
            border-radius: 10px;
            font-weight: bold;
            color: black;
        }
    </style>
</head>

<body>

    <center>
        <h1> Admin Login Form </h1>
    </center>
    <form action="models/login.php">
        <div class="main">
            <div class="left"></div>
            <div class="container">
                <label>Username : </label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <label>Password : </label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <button type="submit">Login</button>
            </div>
            <div id="right">
            </div>
        </div>
    </form>
</body>

</html>