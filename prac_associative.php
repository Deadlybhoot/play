<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <table border="1">
           <thead>
               <tr><th>Country</th> <th>City</th></tr>
               <tbody>
                   <?php
                        $list = array(
                            "India"=>"Mumbai",
                            "u.s"=>"New-York",
                            "china"=>"Beijing",
                            "u.k"=>"London"
                        );

                        foreach($list as $key => $val){
                           echo "<tr>";
                           echo "<td>".$key."</td>";
                           echo "<td>".$val."</td>";
                           echo "</tr>";

                        }
                   ?>
               </tbody>
           </thead>
        </table>
    </div>
</body>
</html>