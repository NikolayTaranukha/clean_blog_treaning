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
    $sql = "UPDATE `posts` SET title = :title, category = :category, `description`=:description, `text_post`=:text_post, `author`=:author, `date`=:date, `visible`=:visible WHERE id=:id";
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

function del_post($change_id)
{
    $dsn = connection();
    $id = $change_id;
    $sql = $dsn->query("DELETE FROM `posts` WHERE id=$id");
    $sql->execute();

}

function data_del($date)
{
    $months = array('01' => 'January', '02' => 'February', '03' => 'March', '04' => 'April', '05' => 'May', '06' => 'June', '07' => 'July', '08' => 'August', '09' => 'September', '10' => 'October', '11' => 'November', '12' => 'December');
    $arr = explode("-", $date);
    $month = $arr[1];
    $date = $arr[2];
    $year = $arr[0];
    echo "on $months[$month] $date $year";

}

function add_us()
{
    $dsn = connection();
    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $sql = $dsn->prepare("INSERT INTO `user` (login, email, password) VALUES (?, ?, ? )");
    $sql->bindParam(1, $login);
    $sql->bindParam(2, $email);
    $sql->bindParam(3, $password);
    $sql->execute();
}

function proverka_us()
{
    $dsn = connection();
    if ($dsn) {
        $login = htmlspecialchars(trim($_POST['login']));
        $password = $_POST['password'];
        $sql = "SELECT * FROM `user` WHERE `user`.login = :login ";
        $query = $dsn->prepare($sql);
        $query->bindParam(':login', $login);
        $query->execute();
        $r = $query->fetch(PDO::FETCH_ASSOC);
        return password_verify($password, $r['password']);

    }


}