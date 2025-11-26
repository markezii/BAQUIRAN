<!DOCTYPE html>
<html>
<head>
    <title>Menu Order</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }
    </style>
</head>
<body>

<h2>Menu</h2>

<table>
    <tr>
        <th>Order</th>
        <th>Amount</th>
    </tr>
    <tr>
        <td>Burger</td>
        <td>50</td>
    </tr>
    <tr>
        <td>Fries</td>
        <td>75</td>
    </tr>
    <tr>
        <td>Steak</td>
        <td>150</td>
    </tr>
</table>

<br><br>

<form action="handleForm.php" method="POST">
    <label>Select an order:</label>
    <select name="order">
        <option value="Burger">Burger</option>
        <option value="Fries">Fries</option>
        <option value="Steak">Steak</option>
    </select>

    <br><br>

    <label>Quantity:</label>
    <input type="number" name="qty" required>

    <br><br>

    <label>Cash:</label>
    <input type="number" name="cash" required>

    <br><br>

    <input type="submit" value="Submit">
</form>

</body>
</html>