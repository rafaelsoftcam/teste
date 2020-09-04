<?php

// permite requisições a urls externas
ini_set('allow_url_fopen', 1);
ini_set('allow_url_include', 1);
 
// caminho do feed do meu blog
$feed = 'https://jovemnerd.com.br/feed-nerdcast/';
// leitura do feed
$rss = simplexml_load_file($feed);
// limite de itens
$limit = 50;
// contador
$count = 0;

echo "<pre>";
print_r($rss);
echo "</pre>";

// imprime os itens do feed
if($rss)
{
    foreach ( $rss->channel->item as $item )
    {
        // formata e imprime uma string
        printf('<a href="%s" title="%s" >%s</a><br />', $item->link, $item->title, $item->title);
        // incrementamos a variável $count
        $count++;
        // caso nosso contador seja igual ao limite paramos a iteração
        if($count == $limit) break;
    }
}
else
{
    echo 'Não foi possível acessar o blog.';
}

?>