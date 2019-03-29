<?php

	class WeirdObject {

		private $id;
		private $name;
		private $description;
		private $price;
		private $image;
		private $id_users;

		public function __construct($id, $name, $description, $price, $image, $id_users){
			$this->id = $id;
			$this->name = $name;
			$this->description = $description;
			$this->price = $price;
			$this->image = $image;
			$this->id_users = $id_users;
		}

		public function getId(){
			return $this->id;
		}
		
		public function getName(){
			return $this->name;
		}

		public function getDescription(){
			return $this->description;
		}

		public function getPrice(){
			return $this->price;
		}

		public function getImage(){
			return $this->image;
		}

        public function getIdUsers()
        {
            return $this->id_users;
        }

	}