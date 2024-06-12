<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>String concat</h1>

    <?php
    echo " Use double code >>>  $stringOne" . '||||';
    echo ' Use single code >>>  $stringOne';

    ?>
    <br>
    <?php
    echo $stringTwo . " " . $stringThree;
    echo "  |||||  ";
    echo "$stringOne $stringTwo $stringThree $stringFour"

        ?>
    <br>
    <h1>Escape String </h1>
    <?php echo " My car is \"BMW\" "  ?>
    <br>
    <?php echo ' Kyaw kyaw\'s car is "toyota" '  ?>

    <br>
    <h2>hrerdoc</h2>
    <?php echo "$myText" ?>

    <br>
    <h2>nowdoc</h2>
    <?php 
        echo "$myText2"
    ?>

    <h2>Index</h2>
    <?php 
        echo $mylove ."\n";
        echo $mylove[0] ."\n";
        echo $mylove[5] ."\n";

        foreach ($myarray as $value) {
         echo $value ."\n" ;
        }
        // str_word_count
        echo str_word_count($myText2);
        echo str_word_count($mylove)."\n" ;

        // letter count/charater count
        // echo count_chars($myText,4);

        echo strlen(($myText));

        echo "<br>";
        for( $i = 0; $i <= 10 ; $i++ ) {
            echo "I love you $i" . "<br>";
        };

        $x = 0;
        while ($x <= 10) {
            echo $x . "<br>";
            $x++;
        };
        echo "<br>";

        $a = 0;
        do {
            echo  "$a";
            $a++;
        } while ($a <= 10);

        

    ?>
</body>

</html>