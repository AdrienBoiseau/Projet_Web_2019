<?php

	interface WeirdObjectStorage {

		public function read($id, $bdd);
		public function readAllFromBase($bdd);
		public function addWeirdObject($bdd);
		public function deleteWeirdObject($bdd, $id);
		public function modifyWeirdObject($bdd, $id);
	}