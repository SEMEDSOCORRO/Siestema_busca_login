<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Vaga;
use \App\Session\Login;

Login:: requireLogin();


$vagas = Vaga::getVagas();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';
