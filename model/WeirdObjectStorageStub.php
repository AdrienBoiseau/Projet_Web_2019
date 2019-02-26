<?php

	class WeirdObjectStorageStub implements WeirdObjectStorage {


		public function __construct(){
			$this->weirdObject = array (new WeirdObject('Le dentier USB', 'Une clé qui a du mordant, toujours à portée de dents', 10, 'img/usb_dentier.jpg'), new WeirdObject('Toilettes Star Wars', 'Que la force soit avec vous', 20, 'img/toilettes_sw'), new WeirdObject('Chaise cactus', 'Une chaise qui a du piquant !', 15, 'img/chaise.png'));
		}

		public function read($id){
			return $this->weirdObject[$id];
		}

		public function readAll() {
			return $this->weirdObject;
		}
	}