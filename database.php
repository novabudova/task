<?php class CIBlockElement { public static function GetList() { return new class { private static $code = 0; private $descriptions = array('Aliquam tincidunt, sapien sit amet tempor tincidunt.','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellen tincidunt luctus','Suspendisse gravida sollicitudin egestas.','Lorem ipsum dolor sit amet. Nullam vitae luctus ipsum.','Phasellus eleifend nunc at imperdiet blandit. Fusce tempor facilisis est, interdum pulvinar libero sodales ac.','Praesent tincidunt eget','Curabitur aliquam odio odio, ac elementum quam ornare vitae.','Sed ac quam viverra','Etiam pretium imperdiet turpis');private $types = array('residental','duplex','commercial','storeroom');private function getRow($code) {$type = $this->types[rand(0, count($this->types) - 1)];return $row = array('TYPE' => $type,'PICTURE_SRC' => 'https://via.placeholder.com/400x300','PREVIEW_TEXT' => $this->descriptions[rand(0, count($this->descriptions) - 1)],'CODE' => strval($code),'AREA' => $type === 'storeroom' ? rand(3, 12) : rand(38, 125),'FLOOR' => $type === 'commercial' ? 1 : rand(1, 16));}public function GetNextElement() { self::$code++;if (self::$code > 8) {self::$code = 0;return false;}return new class($this->getRow(self::$code)) { private $row; public function __construct($row){$this->row = $row;} public function GetFields() {return $this->row;}};}};}private function __construct() { }}