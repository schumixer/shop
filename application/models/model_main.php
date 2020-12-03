<?php

class Model_Main extends Model
{
	
	public function get_data_main($sqlQuery)
	{	
		$connect = $this->connect();
		$result = mysqli_query($connect, $sqlQuery);
		$data = [];
		while($row = mysqli_fetch_assoc($result)){
			array_push($data,['name'=>htmlentities(rtrim($row['name'])), 'price'=>htmlentities(rtrim($row['price'])), 'image_path'=>htmlentities(rtrim($row['image_path']))]);	
		}
		return $data;
		mysqli_close($connect);
	}

	private function connect()
	{
		$host = 'localhost';
		$user = 'mysql';
		$password = 'mysql';
		$dbname = 'shop';
		$connect = mysqli_connect($host, $user, $password,$dbname);
		if(mysqli_connect_errno()){
			echo mysqli_connect_error();
			return -1;
		}
		return $connect;
	}

}
