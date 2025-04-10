<?php
namespace Appication\Entity;

use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\Table;
use Doctrine\ORM\Mapping\Column;

#[Entity, Table(name : 'generos')]
class Genero {
    #[Id, Column(type: 'integer'), GeneratedValue(strategy: 'AUTO')]
    private int $id;
    #[Id, Column(type: 'string', nullale: false)]
    private string $nome;

    public function getId() : int {
        return $this->id;
    }
    public function setId(int $id) : void {
        $this->id = $id;
    }
    public function getNome() : string {
        return $this->nome;
    }
    public function setNome(int $nome) : void {
        $this->nome = $nome;
    }
}