<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
        }

        section {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            padding: 20px;
        }

        .book {
            background-color: white;
            margin: 10px;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
            border-radius: 4px;
        }

        h2 {
            margin-top: 10px;
            color: #333;
        }

        p {
            color: #666;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <header>
        <h1>Perpustakaan</h1>
    </header>
    
    <section>
        <form action="book.php" method = "post">

        
        <div class="book">
            <img src="book1.jpeg" alt="Book 1">
            <h2>Harry Potter</h2>
            <p>Quantity: 1</p>
            <input type="checkbox" name="item[]" value="HarryPotter" id="">
        </div>

        <div class="book">
            <img src="book2.jpeg" alt="Book 2">
            <h2>Narnia</h2>
            <p>Quantity: 2</p>
            <input type="checkbox" name="item[]" value="Narnia" id="">
        </div>
<button type="submit">Checkout</button>
</form>
    </section>
</body>
</html>
