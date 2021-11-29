<?php

//repete string

echo str_repeat(".texto.",10);

#caixa alta  upper-case
$nome = "juan pablo";
echo strtoupper($nome);
echo "<hr>";

# lower-Case   str-string   to-para  - lower - caixa baixa
echo strtolower("HOJE ESTAMOS APRENDENDO DIVERSAS FUNCOES");

# trocar texto - str_replace
echo "<hr>";
$texto = "O rei rico de roma";
echo STR_replace("rei","pobre",$texto);

# primeira letra maiúscula    ucfirst(texto)
echo "<hr>";
$func = "bruno rodrigues";
echo ucfirst($func);
echo "<br>";
echo ucwords($func); //Toda primeira letra maiúscula

#Usuario digirta o conteúdo tudo errado
echo "<hr>";
$aluno = "juan PABLO Santos"; //letras maiúculas, minúsculas, invertido
echo ucwords(strtolower($aluno));




