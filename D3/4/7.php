<?php

class SuperHeroi{
private $id;
private $nome;
private $PoderEspecial;
private $energia;
private $força;
private $origem;


   function __construct(nome){
$this->nome = nome;
}

    function __construct(nome, PoderEspecial, energia, força, origem){
$this->nome = nome;
$this->PoderEspecial = PoderEspecial;
$this->energia = energia;
$this->força = força;
$this->origem = origem;
}

public function setId(id){
$this->id = $id;
}

public function getId(){
return $this->id;
}
public function setNome(nome){
$this->nome = $nome;
}

public function getNome(){
return $this->nome;
}
public function setPoderEspecial(PoderEspecial){
$this->PoderEspecial = $PoderEspecial;
}

public function getPoderEspecial(){
return $this->PoderEspecial;
}
public function setEnergia(energia){
$this->energia = $energia;
}

public function getEnergia(){
return $this->energia;
}
public function setForca(força){
$this->força = $força;
}

public function getForca(){
return $this->força;
}
public function setOrigem(origem){
$this->origem = $origem;
}

public function getOrigem(){
return $this->origem;
}


$SuperHeroi heroi = new SuperHeroi(nome)

SuperHeroi.setNome("Batman", "Goku", "Iron Man", "Legolas");

}

public function aumentarEnergia(){

    return $this -> PoderEspecial * 118114426;

}

public function calcularPoderMedio(){

    return $this-> energia + força / 2;

}

 
?>