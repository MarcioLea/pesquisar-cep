<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="src/img/mail.svg" type="image/x-icon">
    <title>Consultar CPF</title>
</head>
<body>
    <h1>Consultar CPF</h1>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="CEP">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Consultar CEP</button>
    </form>
    <address>
<?php

    require_once 'vendor/autoload.php';

    use Wead\DigitalCep\Search;

    $busca = new Search;

    print_r($busca->getAddressFromZipCode('23894750'));
?>
</address>
</body>
</html>
