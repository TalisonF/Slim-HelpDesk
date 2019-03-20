<?php
/**
 * routes para APLICACAO WEB
 */
$app->group('', function(){

    $this->get('/', ['\App\Controller\System\IndexController', 'index'])->setName('home');
    
    
});


