<?php
if(version_compare(phpversion(), '7', '>=')) {
    echo 'Olá sou PHP 7 - Versão do PHP: ' . phpversion() . " \u{1F600}";
exit();
}
exit('Não sou PHP 7 - Versão do PHP: ' . phpversion() . ' :(');

