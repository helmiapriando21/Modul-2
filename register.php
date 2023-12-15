<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<style>
        * {
            box-sizing: border-box;
        }

        body {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        form {
            padding: 20px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        input {
            width: 100%;
            padding: 5px;
            outline-color: aqua;            
        }

        input[type="submit"] {
            background-color: red;
            color: white;
        }


    </style>
</head>
<body>
    <h1>Login</h1>
    <form action="Autentikasi.php" method="post">
        <input type="text" placeholder="Nama" name="nama">
        <input type="text" placeholder="Password" name="password">
        <input type="text" placeholder="Email" name="email">
        <input type="submit" name= "register">
    </form>
</body>
</html>
