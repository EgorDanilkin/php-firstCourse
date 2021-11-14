<form method="post" action="1.php">
    <input type="number" name="operand1"><br>
    <input type="number" name="operand2"><br>
    <select name="operation">
        <option value="sum">+</option>
        <option value="subtraction">-</option>
        <option value="multiply">*</option>
        <option value="division">/</option>
    </select>
    <input type="submit">
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