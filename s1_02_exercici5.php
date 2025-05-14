<?php
function grauEstudiants($nota)
{
    if ((!is_numeric($nota)) || $nota < 0 || $nota > 100) {
        return "Nota no vàlida, ha de ser un número entre 0 i 100";
    }

    if ($nota >= 60) {
        echo "Primera divisió\n";
    }
    if ($nota >= 45) {
        echo "Segona divisió\n";
    }
    if ($nota >= 33) {
        return "Tercera Divisió";
    } else {
        echo "Reprovat/da\n";
    }
}

grauEstudiants(75);  
grauEstudiants(50);  
grauEstudiants(40);  
grauEstudiants(25);
?>