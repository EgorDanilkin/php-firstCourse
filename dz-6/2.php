<form method="post" action="2.php">
    <input type="number" name="operand1"><br>
    <input type="number" name="operand2"><br>
    <input type="submit" name="operation" value="sum">
    <input type="submit" name="operation" value="subtraction"><br>
    <input type="submit" name="operation" value="multiply">
    <input type="submit" name="operation" value="division"><br>
</form>
<?php

switch ($_POST['operation']) {
    case 'sum':
        echo $_POST['operand1'] + $_POST['operand2'];
        break;
    case 'subtraction':
        echo $_POST['operand1'] - $_POST['operand2'];
        break;
    case 'multiply':
        echo $_POST['operand1'] * $_POST['operand2'];
        break;
    case 'division':
        if ($_POST['operand2'] != 0) {
            echo $_POST['operand1'] / $_POST['operand2'];
            break;
        }
        echo 'division by zero';
        break;
}