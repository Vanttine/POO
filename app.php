<?php 

require __DIR__ .'/vendor/autoload.php';


use Vantine\CursoPooPhp\PessoaFisica;

$pessoaFisica = new PessoaFisica();

$pessoaFisica -> setName( name: 'Luiz' );
$pessoaFisica -> setEmail( email: 'fellipevantine12@gmail.com');
$pessoaFisica -> setPhone( phone: '24999999999');
$pessoaFisica -> setCpf( cpf: '000.000.000-00');
$pessoaFisica -> setAge( age: 19);

/*
$pessoaFisica->name = 'Luiz';
$pessoaFisica->email = 'fellipevantine12@gmail.com';
$pessoaFisica->phone = '24999999999';
$pessoaFisica->cpf = '000.000.000-00';
$pessoaFisica->age = 19;
*/

dump($pessoaFisica);