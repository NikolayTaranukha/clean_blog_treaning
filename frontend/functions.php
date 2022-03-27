<?php
require_once 'db.php';

function getData()
{

    $dsn = connection();
    $r = $dsn->query('SELECT id, title FROM posts');
    return $r->fetchAll(PDO::FETCH_ASSOC);

}

foreach (getData() as $item) {
     echo '<pre>';
     print_r($item);
    // var_dump($item);
}