<?php

    namespace Podcast\Model\Entity;

    use \DateTime;
    use Softcam\Curl\Model\Entity\Participante;

    class Epsodio
    {
        private int $codigoInterno;
        private string $titulo;
        private string $codigoCriador;
        private DateTime $dataPublicacao;
        private array $participantes;

        public function __construct(string $titulo, DateTime $dataPublicacao, string $codigoCriador = "")
        {
            self::setTitulo($titulo);
            self::setCodigoCriador($codigoCriador);
            $this->participantes = array();
        }

        public function setCodigoInterno(int $codigoInterno)
        {
            $this->codigoInterno = $codigoInterno;
        }

        public function getCodigoInterno() : int
        {
            return $this->codigoInterno;
        }

        public function setTitulo(string $titulo)
        {
            $this->titulo = $titulo;
        }

        public function getTitulo() : string
        {
            return $this->titulo;
        }

        public function setCodigoCriador(string $codigoCriador)
        {
            $this->codigoCriador = $codigoCriador;
        }

        public function getCodigoCriador() : string
        {
            return $this->codigoCriador;
        }

        public function setDataPublicacao(DateTime $dataPublicacao)
        {
            $this->dataPublicacao = $dataPublicacao;
        }

        public function getDataPublicacao() : DateTime
        {
            return $this->dataPublicacao;
        }

        public function adicionaParticipante(Participante $participante)
        {
            array_push($this->participantes, $participante);
        }

        public function setParticipantes(array $participantes)
        {
            $this->participantes = $participantes;
        }

        public function getParticipantes() : array
        {
            return $this->participantes;
        }
    }

?>