<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Exercise 2</title>
</head>
<header>

    <body>

        <?php

        $helloWorld = "Hello world"; //string
        echo "$helloWorld\n";

        $helloWorld = "Hello world";
        print_r(strtoupper($helloWorld) . "\n"); // Convert to uppercase
        
        $length = strlen($helloWorld);
        // Get the length of the string
        echo "$length\n";

        $reverse = strrev(string: $helloWorld);
        echo "$reverse\n"; // Reverse the string
        
        $frase = "Aquest és el curs de PHP";

        echo (("$helloWorld") . ". " . "$frase") . "\n"; // Concatenate strings
        
        ?>
</header>
</body>

</html>