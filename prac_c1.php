
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <form action="prac_c1.php" method="post">
        array:-<input type="text" name="array">
        <input type="submit">
    </form>

    <?php
    $arr = explode(',',($_POST['array']));

    foreach($arr as $val){
        $val = (int)$val;
    }

    
    // foreach($arr as $val){
    //     if($val%2==0){
    //         $val=$val/2;
    //     }
    //     else{
    //         $val=$val*3;
    //     }
    // }

    for($i=0; $i<sizeof($arr); $i++){
        if($arr[$i]%2==0){
            $arr[$i]=$arr[$i]/2;
        }
        else{
            $arr[$i]=$arr[$i]*3;
        }
    }
    foreach($arr as $val){
        echo"$val ";
    }

?>

</body>
</html>

