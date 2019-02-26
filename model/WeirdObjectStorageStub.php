<?php

	class WeirdObjectStorageStub implements WeirdObjectStorage {


		public function __construct(){
			$this->weirdObject = array (new Animal('Médor', 'chien', 4), new Animal('Félix', 'chat', 5), new Animal('Denver', 'dinosaure', 100000000));
		}

		public function read($id){
			return $this->weirdObject[$id];
		}

		public function readAll() {
			return $this->weirdObject;
		}
	}