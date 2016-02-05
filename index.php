<?php

require_once 'database.php';
require_once 'lib.php';

//PDO::FETCH_COLUMN
// PDO::FETCH_ASSOC
// PDO::FETCH_OBJ
// PDO::FETCH_NUM

//Выполение запросов без переменных
//$sql = 'SELECT * FROM `words` LIMIT 5';
//$stmt = $pdo->query($sql);
// $data = $stmt->fetchAll(); 

// while($row = $stmt->fetch()) {
// 	echo $row['eng'].'<br>';
// }


//Выполнение запросов с позиционным placeholder ?
// $sql = 'SELECT * FROM `words` WHERE `id` = ? OR `eng` = ?';
// $stmt = $pdo->prepare($sql);
// $params = array(39, 'door');
// $stmt->execute($params);
// $data = $stmt->fetchAll();

//можно использовать если не вызывать метод fetchAll()
// foreach ($stmt as $row) {
// 	echo $row['rus'], '<br>';
// }

//Выполнение запросов с именным placeholder ?
// $sql = 'SELECT * FROM `words` WHERE `id` = :id OR `eng` = :eng';
// $stmt = $pdo->prepare($sql);
// $params = array('eng' => 'door', 'id' => 39);
// $stmt->execute($params);
// $data = $stmt->fetchAll();

//Параметры для fetchAll
//PDO::FETCH_COLUMN
//PDO::FETCH_COLUMN
// PDO::FETCH_ASSOC
// PDO::FETCH_OBJ
// PDO::FETCH_NUM
	// $sql = "SELECT `eng` FROM `words` LIMIT 5";
	// $stmt = $pdo->query($sql) ; 
	// $data = $stmt->fetchAll();

// Получение объекта
// $data = $stmt->fetchAll(PDO::FETCH_OBJ);
// $obj = $data[4];
// echo $obj->eng;
// var_dump($data);

//PDO Like
// $sql = "SELECT * FROM `words` WHERE `eng` LIKE ?";
// $str = '%fore%';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(array($str));
// $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

//PDO LIMIT
// $limit = 5;
// $sql = "SELECT * FROM `words` LIMIT ?";
// $stmt = $pdo->prepare($sql);
// $stmt->bindValue(1, $limit, PDO::PARAM_INT);
// $stmt->execute();
// $data = $stmt->fetchAll();

//PDO IN
$ids = array(2, 4, 9);
$in = str_repeat('?,', count($ids) - 1).'?';
$sql = "SELECT * FROM  `words` WHERE `id` IN($in)";
$stmt = $pdo->prepare($sql);
$stmt->execute($ids);
$data = $stmt->fetchAll();

  print_arr($data);

