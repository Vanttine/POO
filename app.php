<?php 

require __DIR__ .'/vendor/autoload.php';


use Vantine\CursoPooPhp\PessoaFisica;

// $vantine = new PessoaFisica( 

//     name:   'Luiz',
//     email:  'fellipevantine12@gmail.com', 
//     phone:  '24999999999', 
//     cpf:    '000.000.000-00', 
//     age:    19

// );



// dump($vantine::getInformation());

dump(PessoaFisica::getInformation(name: 'Vantine'));
