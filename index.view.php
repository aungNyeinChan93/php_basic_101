<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello world </title>
</head>


<body>

    <h1><?php echo "helloworld"; ?></h1>
    <br>
    <?php echo $title; ?>
    <br>
    <h4><?= $title; ?></h4>
    <br>
    <?php echo "pi value is " . PI ?>
    <br>
    <?php echo "title >" . $obj1->title . "\n"; ?>
    <?php echo $obj1->name; ?>
    <?php echo $obj1->age; ?>
    <?php echo $obj2->title ?>
    <?php echo $obj2->email; ?>
    <br>
    <?php print gettype($obj1); ?>

    <br>
    <!-- for each loop -->
    <?php
        foreach ($obj1 as $value) {
            echo $value ."\n";
            // echo $key;
        };
    ?>
    <br>
    <?php 
         foreach ($obj1 as $key=>$value) {
            // echo $value;
            echo $key;
        }
    ?>

    <br>
    <?php 
        if($boo ==="boo" && $phoo === "fads") {
            echo "equal";
        }else {
            echo "not equal";
        };

        if($boo ==="boo" || $phoo === "fads") {
            echo "equal";
        }else {
            echo "not equal";
        };
    ?>
    <br>
    <?php 
        echo $customerOne->name;
        echo $customerOne->location->city ;
        echo $customerOne->location->state ;
        echo gettype($customerOne);
        echo gettype($customerOne->location);
    ?>

  
    
</body>

</html>