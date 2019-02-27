<?php

	interface WeirdObjectStorage {

		public function read($id);
		public function readAllFromBase($bdd);
		public function addWeirdObject($bdd);
		public function deleteWeirdObject();
		public function modifyWeirdObject();
	}