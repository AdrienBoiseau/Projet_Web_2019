<?php

	require_once ("model/WeirdObjectStorage.php");
	require_once ("model/WeirdObject.php");

	class WeirdObjectStorageCrud implements WeirdObjectStorage {

		public function __construct(){
			$weirdObjectList = array();
		}

		public function read($id){
			return $this->weirdObjectList[$id];
		}

		public function readAllFromBase($bdd){
			$weirdObjects = "SELECT name, description, price, imgURL FROM weirdobject";
			$weirdObjects = $bdd->query($weirdObjects, PDO::FETCH_ASSOC);
			

			foreach ($weirdObjects as $weirdObject) {
				$name = $weirdObject['name'];
				$description = $weirdObject['description'];
				$price = $weirdObject['price'];
				$imgURL = $weirdObject['imgURL'];
				$newObject = new WeirdObject($name, $description, $price, $imgURL);
				$weirdObjectList[] = $newObject;
			}
			return $weirdObjectList;
		}

		public function addWeirdObject($bdd){
			if(key_exists('name', $_POST) && key_exists('description', $_POST) && key_exists('price', $_POST) && $_POST['imgURL']){
				$name = $_POST['name'];
				$description = $_POST['description'];
				$price = $_POST['price'];
				$imgURL = $_POST['imgURL'];
				$weirdObject = new WeirdObject($name, $description, $price, $imgURL);
				$weirdObjectList[] = $weirdObject;
				$addRequest = "insert into weirdObject (name, description, price, imgURL) values (\"$weirdObject->getName()\",\"$weirdObject->getDescription()\",\"$weirdObject->getPrice()\",\"$weirdObject->getImage()\")";
				$bdd->exec($addRequest);
				$_SESSION["feedback"] = "Objet ajouté à la collection";
				$url="/Projet_Web_2019";
            	header("Location: " . $url, true, 303);
			}

		}

		public function deleteWeirdObject(){
			//TODO
		}

		public function modifyWeirdObject(){
			//TODO
		}
	}