<?php

namespace Classes;

class Eleve
{
    private string $prenom;
    private string $nom;
    private int $age;
    private Classe $classe;
    
    /**
     * __construct
     *
     * @param  string $prenom
     * @param  string $nom
     * @param  int $age
     * @return void
     */
    public function __construct(string $prenom, string $nom, int $age)
    {
        $this->prenom = $prenom;
        $this->nom = $nom;
        $this->age = $age;
    }
    
    /**
     * getPrenom
     *
     * @return string
     */
    public function getPrenom(): string
    {
        return $this->prenom;
    }
    
    /**
     * setPrenom
     *
     * @param  string $prenom
     * @return void
     */
    public function setPrenom(string $prenom): void
    {
        $this->prenom = $prenom;
    }
    
    /**
     * getNom
     *
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }
    
    /**
     * setNom
     *
     * @param  string $nom
     * @return void
     */
    public function setNom(string $nom): void
    {
        $this->nom = $nom;
    }
    
    /**
     * getAge
     *
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }
    
    /**
     * setAge
     *
     * @param  int $age
     * @return void
     */
    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    /**
     * setClasse
     *
     * @param  mixed $classe
     * @return void
     */
    public function setClasse(Classe $classe): void
    {
        $this->classe = $classe;
    }

    /**
     * getClasse
     *
     * @return mixed
     */
    public function getClasse(): Classe
    {
        return $this->classe;
    }
}