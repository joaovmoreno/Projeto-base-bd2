<?php
//CONEXÃO PDO www.jeanweb.com.br
$conn = 'mysql:host=localhost;dbname=bd2';

try {
	$db = new PDO($conn, 'root', '');
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	if($e->getCode() == 1049){
		echo "Falha na conexão com o banco de dados";
	}else{
		echo $e->getMessage();
	}
}
?>
