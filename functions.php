<?php
require_once('frontend/db.php');
//
//function getData()
//{
//
//    $dsn = connection();
//    $r = $dsn->query('SELECT id, title FROM posts');
//    return $r->fetchAll(PDO::FETCH_ASSOC);
//
//}
//
//foreach (getData() as $item) {
//     echo '<pre>';
//     print_r($item);
//    // var_dump($item);
//}
function get_post()
{
    $dsn = connection();
    $query = $dsn->query('SELECT id, category, title, description, text_post, author, date, visible, created_at, updated_at FROM `posts`');
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function add_post()
{
    $dsn = connection();
    $title = $_GET['title'];
    $description = $_GET['description'];
    $text_post = $_GET['text'];
    $author = $_GET['author'];
    $date = $_GET['date'];
    $category = $_GET['category'];
    $visible = $_GET['visible'];
    $sql = $dsn->prepare("INSERT INTO posts (title, category, description, text_post, author, `date`, visible) VALUES (?, ?, ?, ?, ?, ?,?)");
    $sql->bindParam(1, $title);
    $sql->bindParam(2, $category);
    $sql->bindParam(3, $description);
    $sql->bindParam(4, $text_post);
    $sql->bindParam(5, $author);
    $sql->bindParam(6, $date);
    $sql->bindParam(7, $visible);
    $sql->execute();
}

function up_post($change_id)
{
    $dsn = connection();
    //var_dump($change_id);
    $id = $change_id;
    $title = $_GET['title'];
    $category = $_GET['category'];
    $description = $_GET['description'];
    $text_post = $_GET['text'];
    $author = $_GET['author'];
    $date = $_GET['date'];
    $visible = $_GET['visible'];
    $sql = "UPDATE `posts` SET title = ':title', category = ':category', `description`=':description', `text_post`=':text_post', `author`=':author', `date`=':date', `visible`=':visible' WHERE id=':id'";
    $stmt = $dsn->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':category', $category);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':text_post', $text_post);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':date', $date);
    $stmt->bindParam(':visible', $visible);
    $stmt->execute();
}
