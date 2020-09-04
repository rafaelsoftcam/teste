<?php

    include_once 'autoload.php';

    /* use \DateTime; */
    use Podcast\Model\Entity\Podcast;
    use Podcast\Model\Entity\Epsodio;
    use Podcast\Model\Entity\Participante;

    /* $podcast = new Participante("Nerdcast"); */

    $participante1 = new Participante("Jovem Nerd");
    $participante2 = new Participante("Azaghal");

    $epsodio1 = new Epsodio("Ep1", new DateTime('2012-05-03'), "S01E01");
    $epsodio1->adicionaParticipante($participante1);
    $epsodio2 = new Epsodio("Ep2", new DateTime('2012-05-10'));
    $epsodio2->adicionaParticipante($participante1);
    $epsodio2->adicionaParticipante($participante2);
    $epsodio3 = new Epsodio("Ep3", new DateTime('2012-05-17'));
    $epsodio3->adicionaParticipante($participante1);
    $epsodio3->adicionaParticipante($participante2);

?>