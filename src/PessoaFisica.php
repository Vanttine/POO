<?php 

declare(strict_types=1);

namespace Vantine\CursoPooPhp;

class PessoaFisica
{
    // aqui ficarao as propriedades e metodos
    
    const OBJECT_TYPE = 'Ser humano';

    // objetos com - sao privados
    // objetos com + sao publicos

    private static string $name = '';
    private string $email;
    private string $phone;
    private string $cpf;
    private int $age;

    public function __construct(

          // Nao pode conter "static" no parametro.
        string  $name,  
        string  $email,
        string  $phone,
        string  $cpf,
        int     $age

    )

    {

//        $this->name = $name;

        // Por ser estatico (linha 16, aqui eu preciso "Setar" o self::)
        self::$name = $name;

        $this->email = $email;

        $this->phone = $phone;

        $this->cpf = $cpf;

        $this->age = $age;

    }

    public function setEmail(string $email): static
    {
        $this ->email = $email;

        return $this;
    }

    public static function getInformation(string $name): string
    {
        self::$name = $name;
        return self::$name . " - " . self::OBJECT_TYPE;
      
    }
}

