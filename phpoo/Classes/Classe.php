<?php
namespace Classes;

class Classe
{
    private string $nom;
    private string $niveau;
    private string $professeurPrincipal;
    private int $effectif;
    private string $localisation;
    private array $eleves;
    private Ecole $ecole;

    /**
     * __construct
     *
     * @param  string $nom
     * @param  string $niveau
     * @param  string $professeurPrincipal
     * @param  int $effectif
     * @param  string $localisation
     * @return void
     */
    public function __construct(string $nom, string $niveau, string $professeurPrincipal, int $effectif, string $localisation)
    {
        $this->nom = $nom;
        $this->niveau = $niveau;
        $this->professeurPrincipal = $professeurPrincipal;
        $this->effectif = $effectif;
        $this->localisation = $localisation;
        $this->eleves = [];
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
     * getNiveau
     *
     * @return string
     */
    public function getNiveau(): string
    {
        return $this->niveau;
    }
    
    /**
     * setNiveau
     *
     * @param  string $niveau
     * @return void
     */
    public function setNiveau(string $niveau): void
    {
        $this->niveau = $niveau;
    }
    
    /**
     * getProfesseurPrincipal
     *
     * @return string
     */
    public function getProfesseurPrincipal(): string
    {
        return $this->professeurPrincipal;
    }
    
    /**
     * setProfesseurPrincipal
     *
     * @param  string $professeurPrincipal
     * @return void
     */
    public function setProfesseurPrincipal(string $professeurPrincipal): void
    {
        $this->professeurPrincipal = $professeurPrincipal;
    }
    
    /**
     * getEffectif
     *
     * @return int
     */
    public function getEffectif(): int
    {
        return $this->effectif;
    }
    
    /**
     * setEffectif
     *
     * @param  int $effectif
     * @return void
     */
    public function setEffectif(int $effectif): void
    {
        $this->effectif = $effectif;
    }
    
    /**
     * getLocalisation
     *
     * @return string
     */
    public function getLocalisation(): string
    {
        return $this->localisation;
    }
    
    /**
     * setLocalisation
     *
     * @param  string $localisation
     * @return void
     */
    public function setLocalisation(string $localisation): void
    {
        $this->localisation = $localisation;
    }

    /**
     * getEleves
     *
     * @return array
     */
    public function getEleves(): array
    {
        return $this->eleves;
    }
    
    /**
     * setEleves
     *
     * @param  array $eleves
     * @return void
     */
    public function setEleves(array $eleves): void
    {
        $this->eleves = $eleves;
    }

    /**
     * addEleve
     *
     * @param  mixed $eleve
     * @return void
     */
    public function addEleve(Eleve $eleve): void
    {
        if (!in_array($eleve, $this->eleves)) {
            $this->eleves[] = $eleve;

            $eleve->setClasse($this);
        }
    }

    /**
     * setEcole
     *
     * @param  Ecole $ecole
     * @return void
     */
    public function setEcole(Ecole $ecole): void
    {
        $this->ecole = $ecole;
    }

    /**
     * getEcole
     *
     * @return mixed
     */
    public function getEcole(): Ecole
    {
        return $this->ecole;
    }
}