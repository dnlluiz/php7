<?PHP
$images = scandir("images");

$data = array();

foreach ($images as $img) {
	if (!in_array($img, array(".",".."))) {

		$filename = "images" . DIRECTORY_SEPARATOR . $img;
		echo $filename.'<br>';
		$info = pathinfo($filename);

		$info["size"] = filesize($filename);
		$info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
		$info["url"] = "http://192.168.1.194/php7/DIR/".str_replace("\\", "/", $filename);

		array_push($data, $info);
	}
}



//var_dump($images);

//echo json_encode($data);

?>