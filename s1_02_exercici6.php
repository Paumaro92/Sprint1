<?php
function mordida()
{
    $mordida = rand(0, 1);
    if ($mordida == 1) {
        return true;
    } else {
        return false;

    }
}
echo "Charlie et mossegarà el dit? ";
if (mordida()) {
    echo "Sí, Charlie et mossegarà el dit!";
} else {
    echo "No, Charlie no et mossegarà el dit!";
}
?>