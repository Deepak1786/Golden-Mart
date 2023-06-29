<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Index array
    $index_arr=array("apple","mango","grapes");
    print_r($index_arr);
    print_r($index_arr[1]);
    echo"<br>";
    print_r($index_arr[2]);
    echo"<br>";
    
    print_r($index_arr[0]);
    echo"<br>";
echo $index_arr[1];
//echo $index_arr;      this is wrong syntax
$name=["aarti","diksha","siya"];
print_r ($name);   //in print_r we did`nt use double quotes ""

  $index_arr=array("apple","mango","grapes");
    print_r($index_arr);
    print_r($index_arr[1]);
    //in main array with ()bracket array name is used without name array does`nt work 
    $counting=array("1","2","3","4","5","6","7","8","9","10");
    print_r($counting);
    echo "<br>";
    echo $counting[1];
    //in main array with[]bracket no array name is used with name array does`nt work

    $name_course=array("course"=>"B-Tech",
    "Name"=>"Deepak","Duration"=>"4 years","Fee Structure"=>"1.35 Lakh per year");
    print_r($name_course);
    echo "<br>";
    echo $name_course["Duration"];
    //associative array
    ?>
</body>
</html>