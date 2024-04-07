# Sobre o repositório

Arquitetura para criação de plugins wordpress

# instalação

instalação em modo desenvolvimento: 

composer install

npm install

# bibliotecas

phpunit

typescript

terser

sass/scss

### phpunit

responsável por testar arquivos

comando: $ vendor/bin/phpunit tests/nameFile.Test.php
example: $ vendor/bin/phpunit tests/Basic.Test.php

### typescript

implementar tipagem e fazer a conversão de .ts para .js

comando: $ tsc nameFile

### terser

minificar código javascript para tornar a aplicação mais rápida e segura

comando: $ tsc terser nameFile.js -o newNameFile.min.js --mangle

### sass/scss

minificar código sass/scss para tornar a aplicação mais rápida

comando: sass --style=compressed fileName.scss newFileName.min.css


