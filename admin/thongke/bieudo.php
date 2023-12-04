<?php
require "../../model/pdo.php";

$sql = "SELECT MONTHNAME(`date`) AS month, COUNT(`id_bill`) AS bill
FROM bill
WHERE YEAR(`date`) = YEAR(CURDATE())
GROUP BY MONTHNAME(`date`)
ORDER BY MONTH(`date`)"; 

// Sử dụng PDO để thực hiện truy vấn
$result = pdo_query($sql);

// Kiểm tra và trả về dữ liệu dưới dạng JSON
$data = json_encode($result);

// Set the content type to JSON
header('Content-Type: application/json');

// Echo the JSON data
echo $data;
?>