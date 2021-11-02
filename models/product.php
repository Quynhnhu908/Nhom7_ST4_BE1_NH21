<?php
    class Product extends Db
    {
        public function getAllProducts()
        {
            $sql = self::$connection->prepare("SELECT * FROM products");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getProductById($id)
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE id = ?");
            $sql->bind_param("i",$id);
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getNewProducts()
        {
            $sql = self::$connection->prepare("SELECT * FROM products ORDER BY id DESC LIMIT 0,10");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getLaptops()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=2");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getPhones()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=1");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getHeadphones()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=3");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getCameras()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=6");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getWatchs()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=4");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getSpeaks()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE type_id=5");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
        public function getTopselling()
        {
            $sql = self::$connection->prepare("SELECT * FROM products WHERE manu_id=1");
            $sql->execute(); //return an object
            $items = array();
            $items = $sql->get_result()->fetch_all(MYSQLI_ASSOC);
            return $items; //return an array
        }
    }
?>