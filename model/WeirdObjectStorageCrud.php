<?php

	require_once ("model/WeirdObjectStorage.php");
	require_once ("model/WeirdObject.php");

	class WeirdObjectStorageCrud implements WeirdObjectStorage {

		protected $weirdObjectList;

		public function __construct(){
			$dentier = new WeirdObject(null, 'Dentier USB', 'une clé qui a du mordant', 3, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSkyOcuTXosysA21sILjTl_c_drwfF9LH9hSyqMtrMh6FqtcTD4UQ');
			$starwars = new WeirdObject(null, 'Toilettes Star Wars', 'que la force soit avec vous', 20, 'http://www.chakipet.com/wp-content/uploads/objets-insolites-salle-de-bain-17.jpg');
			$lama = new WeirdObject(null, 'Lama chiffounette', 'le lama qui nettoie tout', 5, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRG1YCCVfVJP8OfMOwW6bxgE6hH8rzLhQO2keLhOC5n56HxeJWJ');
			$this->weirdObjectList = array($dentier, $starwars, $lama);
		}

		public function read($id, $bdd){
			$objectList = $this->readAllFromBase($bdd);
			foreach ($objectList as $key => $weirdObject) {
				if($weirdObject->getId() == $id){
					return $weirdObject;
				}
			}
		}

		public function readAllFromBase($bdd){
			$weirdObjects = "SELECT id, name, description, price, imgURL FROM weirdobject";
			$weirdObjects = $bdd->query($weirdObjects, PDO::FETCH_ASSOC);

			foreach ($weirdObjects as $weirdObject) {
				$id = $weirdObject['id'];
				$name = $weirdObject['name'];
				$description = $weirdObject['description'];
				$price = $weirdObject['price'];
				$imgURL = $weirdObject['imgURL'];

				$newObject = new WeirdObject($id, $name, $description, $price, $imgURL);
				$this->weirdObjectList[] = $newObject;
			}
			return $this->weirdObjectList;
		}

		public function addWeirdObject($bdd){
			if(key_exists('name', $_POST) && key_exists('description', $_POST) && key_exists('price', $_POST) && $_POST['imgURL']){
				$name = $_POST['name'];
				$description = $_POST['description'];
				$price = $_POST['price'];
				$imgURL = $_POST['imgURL'];
				//on construit l'objet et on le push dans notre array
				$weirdObject = new WeirdObject(null, $name, $description, $price, $imgURL);
				$weirdObjectList[] = $weirdObject;
				//on insert l'objet dans notre base de données
				$addRequest = "insert into weirdObject (name, description, price, imgURL) values (\"$name\",\"$description\",\"$price\",\"$imgURL\")";
				$bdd->exec($addRequest);

				$_SESSION["feedback"] = "Objet ajouté à la collection";
				$url="/Projet_Web_2019";
            	header("Location: " . $url, true, 303);
			}
		}

		public function deleteWeirdObject($bdd, $id){
			if(key_exists('delete', $_POST)){
				//on supprime l'objet de la base de données
				$deleteRequest = "delete from weirdObject where id=(\"$id\")";
				$bdd->exec($deleteRequest);
				//on recherche dans notre array l'objet à supprimer
				foreach ($weirdObjectList as $key => $weirdObject) {
					if($weirdObject->getId() == $id){
						unset($weirdObjectList[$weirdObject]);
					}
				}
				$_SESSION["feedback"] = "Objet supprimé";
				$url="/Projet_Web_2019";
	        	header("Location: " . $url, true, 303);
			}		
		}

		public function modifyWeirdObject($bdd, $weirdObject){
			//on récupère l'id de l'objet qu'on veut modifier
			$id = $weirdObject->getId();
			if(key_exists('name', $_POST) && key_exists('description', $_POST) && key_exists('price', $_POST) && $_POST['imgURL']){
				$name = $_POST['name'];
				$description = $_POST['description'];
				$price = $_POST['price'];
				$imgUrl = $_POST['imgURL'];
				//on modifie l'objet dans la base de données
				$modifyRequest = "update weirdObject set name=\"$name\", description=\"$description\", price=\"$price\", imgURL=\"$imgUrl\" where id=\"$id\"";
				$bdd->exec($modifyRequest);
				
				$_SESSION["feedback"] = "Objet modifié";
				$url="/Projet_Web_2019";
            	header("Location: " . $url, true, 303);
			}
		}
	}