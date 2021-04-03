<?php
    require_once("config/database.php");

    class Category {
        public $cateID;
        public $categoryName;
        public $description;

        public function __construct($cate_name, $desc) {
            #code
            $this->categoryName = $cate_name;
            $this->description = $desc;
        }

        //lay danh sach chuyen muc loai san pham
        public static function list_category() {
            $db = new Database();
            $sql = "SELECT * FROM category";
            $result = $db->select_to_array($sql);
            return $result;
        }
    }
?>