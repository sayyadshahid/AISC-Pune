<!-- Write a PHP program to create a simple calculator that can accept two numbers and perform
  operations like add, subtract, multiplication, and divide. (Using switch statement) (HTML + PHP) -->

<body>
<form method="post">
<input type="number" name="n1" placeholder="number">
<input type="number" name="n2" placeholder="number2">

    <label><input type="radio" name="op" value="+"> + (Add)</label>
    <label><input type="radio" name="op" value="-"> - (Subtract)</label>
    <label><input type="radio" name="op" value="*"> * (Multiply)</label>
    <label><input type="radio" name="op" value="/"> / (Divide)</label><br><br>

<button type="submit">submit</button>

</form>


<?php

if($_POST){
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $op = $_POST['op'];

    switch($op){
        case '+': echo ($n1 + $n2); break;
        case '-': echo ($n1 - $n2); break;
        case '*': echo ($n1 * $n2); break;
        case '/': echo ($n1 / $n2); break;
        default: echo 'pls select an opearator';
    }
}
?>

</body>