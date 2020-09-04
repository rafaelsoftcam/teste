<?php

    namespace Podcast\Model\Entity;

    use Softcam\Curl\Model\Entity\Epsodio;

    class Podcast
    {
        private int $codigo;
        private string $titulo;
        private string $idioma;
        private string $site;
        private array $epsodios;

        public function __construct(string $titulo, string $site = "", string $idioma = "pt-br")
        {
            self::setTitulo($titulo);
            self::setIdioma($idioma);
            self::setSite($site);
            $this->epsodios = array();
        }

        public function setCodigo(int $codigo)
        {
            $this->codigo = $codigo;
        }

        public function getCodigo() : int
        {
            return $this->codigo;
        }

        public function setTitulo(string $titulo)
        {
            $this->titulo = $titulo;
        }

        public function getTitulo() : string
        {
            return $this->titulo;
        }

        public function setIdioma(string $idioma)
        {
            $this->idioma = $idioma;
        }

        public function getIdioma() : string
        {
            return $this->idioma;
        }

        public function setSite(string $site)
        {
            $this->site = $site;
        }

        public function getSite() : string
        {
            return $this->site;
        }

        public function adicionaEpsodio(Epsodio $epsodio)
        {
            array_push($this->epsodios, $epsodio);
        }

        public function setEpsodios(array $epsodios)
        {
            $this->epsodios = $epsodios;
        }

        public function getEpsodios() : array
        {
            return $this->epsodios;
        }
    }

?>