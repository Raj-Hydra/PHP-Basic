<!DOCTYPE html>
<html lang="en">
<head>
    <title>Button</title>
</head>
<body>
    <form action="" method="post">
        <button name="btn" > CAll </button>
    </form>
    
</body>
</html>

<?php
    
    if(isset($_REQUEST["btn"])){
        callbtn();
    };

    function callbtn(){
        echo "Call fuction Work Perfectly.";
    };
    ?>