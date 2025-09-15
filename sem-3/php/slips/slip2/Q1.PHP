<!-- Q1. Write PHP program to check whether two strings are equal or not. Without built in function.
 -->

<body>
    <form method="POST">
        <input type="text" name="str1" placeholder="enter str1"> <br>
        <input type="text" name="str2" placeholder="enter str2"> <br>
        <button type="submit" name="submit">submit</button>

    </form>

    <?php
    if(isset($_POST["submit"])){
        $str1 = $_POST['str1'];
        $str2 = $_POST['str2'];

        if($str1 == $str2){
            echo "this are equal strings";
        }else{
            echo "this are not equal strings";
        }
    }
    
    ?>
</body>