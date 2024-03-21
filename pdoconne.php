<?php 
$bd_name="mysql:host=localhost;dbname=notebook";
$username="root";
$password="";


$conn= new PDO($bd_name,$username,$password);

$id=7;
$sql=$conn->prepare("SELECT * FROM `users_table` WHERE id=?");
$sql->bindParam(1,$id);

$sql->execute();


$row=$sql->fetchAll();
if(count($row)>0){
    foreach($row as $data){
        echo "<ol type='I'><li>{$data['id']}</li><li>{$data['name']}</li><li>{$data['email']}</li><li>{$data['phone']}</li></ol>";
    }
}

$conn=null; 



// while($result=$sql->fetch(PDO::FETCH_NUM)){
//     // echo "{$result['id']}-{$result['username']}-{$result['email']}";
//     echo "{$result[0]}-{$result[1]}-{$result[2]}";
// }


// $conn=null;
?>