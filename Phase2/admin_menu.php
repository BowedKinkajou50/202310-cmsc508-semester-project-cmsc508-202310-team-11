<!doctype html>
<html>

<style>
.btn{
    border: none;
    background-color: inherit;
    padding: 14px 28px;
    margin: 10px;
    font-size: 16px;
    cursor: pointer;
    display: inline-block;
    width: 200px;
    height: 50px;
}

.btn:hover {background: #eee;}

.add, .update, .delete, .viewplants{background-color: #4caf50;}

div.buttons{
    text-align: center;
    display:block;
    margin: 0 auto; 
    width: 75%;
}

h1{
    text-align: center;
    font-size: 40px; 
    margin-bottom: 30px;
    color: #000000;
}

</style>

<body>
    <div class="buttons">
        <h1>Adminstrative Menu</h1>
        <a href="addplant.php">
        <button class="btn add">Add Plant</button><br>
        <button class="btn update">Update Plant</button><br>
        <button class="btn delete">Delete Plant</button><br>
        <a href="20queries.php">
        <button class="btn delete">View 20 Queries</button><br>
        <a href="catalog.php">
            <button class="btn viewplants">View Plant</button>

    </div>
</body>

</html>