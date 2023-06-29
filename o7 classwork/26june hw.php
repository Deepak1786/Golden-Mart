<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>homework based on array</title>
</head>
<body>

    <?php
   //1 question
    $counting=["1","2","3","4","5","6","7","8","9","10"];
    print_r($counting);
    echo "<br>";
    echo $counting[3];
    echo "<br>";
    echo $counting[9]*3;
   //2 question
$name_course=array("course"=>"B-Tech",
    "Name"=>"Deepak","Duration"=>"4 years","Fee Structure"=>"1.35 Lakh per year");
    print_r($name_course);
    echo "<br>";
    echo $name_course["Duration"];

    //3 question
    echo "<br>";
    echo "-------";
    echo "<br>";

    $students=array(
        array("name"=>"akash","course"=>"b-tech&AI","duration"=>"4-years"),
        array("name"=>"sourav","course"=>"b-tech","duration"=>"4-years"),
        array("name"=>"shiva","course"=>"bca","duration"=>"3-years"),
    );
    print_r($students); 
    echo "<br>";
    echo "-------";
    echo "<br>";
    print_r($students[0]["course"]);
    echo "<br>";
    echo "-------";
    echo "<br>";
    print_r($students[1]["course"]);
    echo "<br>";
    echo "-------";
    echo "<br>";
    print_r($students[2]["course"]);
    
    ?>
</body>
</html>