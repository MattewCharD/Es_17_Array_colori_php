<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Colori</title>
</head>
<body>
    
    <?php 
        $num=random_int(10,20);
        $lista=[];
        $colori=array("red","cyan","green","blue","purple");
        for ($i=0; $i <= $num; $i++) { 
            $lista[$i]=$i;
        }
        $str="<ol>";

        for ($f=0; $f <= $num; $f++) { 
            $str= $str."<li style='color:".$colori[rand(0,4)].";'>".$lista[$f]."</li>";
        }

        $str=$str."</ol>";

        echo "$str";

    ?>
    <table>
        
    </table>
</body>