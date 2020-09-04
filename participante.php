<?php

    namespace Podcast\Model\Entity;
/* 
    include_once 'Model\Entity\Documento.php';

    use \DateTime;
    use Softcam\Curl\Model\Entity\Documento;
 */
    class Participante
    {
        private int $codigo;
        private string $nome;

        public function __construct(string $nome)
        {
            self::setNome($nome);
        }

        public function setCodigo(int $codigo)
        {
            $this->codigo = $codigo;
        }

        public function getCodigo() : int
        {
            return $this->codigo;
        }

        public function setNome(string $nome)
        {
            $this->nome = $nome;
        }

        public function getNome() : string
        {
            return $this->nome;
        }
    }

?>