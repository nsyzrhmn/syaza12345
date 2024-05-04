<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="inventory.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register Inventory</title>
    </head>
    <body>
    <div class="container">
    <h2>Register Inventory</h2>
        <form id="inventoryForm" method="post" action="errorchecking.php">
        <label >ID:</label>
            <input type="text" id="id" name="id" >

            <label >Name:</label>
            <input type="text" id="name" name="name" >

            <label >Category:</label>
            <select id="category" name="category" > 
                <option value="">Choose One</option>
                <option value="baju">Baju</option>
                <option value="tudung">Tudung</option>
                <option value="kasut">Kasut</option>
                <option value="seluar">Seluar</option>
            </select>

            <label >Quantity:</label>
            <input type="number" id="quantity" name="quantity" >

            <label >Price per Unit (RM):</label>
            <input type="text" id="price" name="price" >

            <label >Description:</label>
            <textarea id="description" name="description" rows="4" ></textarea>

            <button type="submit" value="Submit" name="add">Add</button><br>
            <button type="reset" value="Clear" name="clear">Clear</button>
        </form>
    </div>
    </body>
</html>