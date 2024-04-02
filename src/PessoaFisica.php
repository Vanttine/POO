<?php 

declare(strict_types=1);

namespace Vantine\CursoPooPhp;

class PessoaFisica
{
    // aqui ficarao as propriedades e metodos
    private string $name;
    private string $email;
    private string $phone;
    private string $cpf;
    private int $age;

    public function setName(string $name): void
    {
        $this->name = $name;
    }
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
    public function setCpf(string $cpf): void
    {
        $this->cpf = $cpf;
    }
    public function setAge(int $age): void
    {
        $this->age = $age;
    }
}

