<?php
class database {
    var $_dbh = ''; // Kết nối PDO
    var $_sql = ''; // Câu truy vấn SQL
    var $_cursor = NULL; // Đối tượng PDOStatement
        
    public function __construct() {
        $this->_dbh = new PDO('mysql:host=localhost;dbname=db_shop_hoa', 'root', '');
        $this->_dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->_dbh->query('set names utf8');
    }
    
    public function setQuery($sql) {
        $this->_sql = $sql;
    }
    
    // Hàm thực thi câu truy vấn SQL
    public function execute($options=array()) {
        try {
            $this->_cursor = $this->_dbh->prepare($this->_sql);
            if($options) {  
                for($i=0;$i<count($options);$i++) {
                    $this->_cursor->bindParam($i+1, $options[$i]);
                }
            }
            $this->_cursor->execute();
            return $this->_cursor;
        } catch(PDOException $ex) {
            throw new Exception("Error: " . $ex->getMessage());
        }
    }
    
    // Hàm load tất cả các dòng dữ liệu từ bảng
    public function loadAllRows($options=array()) {
        if(!$options) {
            if(!$result = $this->execute())
                return false;
        } else {
            if(!$result = $this->execute($options))
                return false;
        }
        return $result->fetchAll(PDO::FETCH_OBJ);
    }
    
    // Hàm load một dòng dữ liệu từ bảng
    public function loadRow($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        } else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_OBJ);
    }
    
    // Hàm đếm số bản ghi trên bảng
    public function loadRecord($option=array()) {
        if(!$option) {
            if(!$result = $this->execute())
                return false;
        } else {
            if(!$result = $this->execute($option))
                return false;
        }
        return $result->fetch(PDO::FETCH_COLUMN);
    }
    
    // Hàm lấy ID của dòng vừa được chèn vào bảng
    public function getLastId() {
        return $this->_dbh->lastInsertId();
    }
    
    // Hàm ngắt kết nối PDO
    public function disconnect() {
        $this->_dbh = NULL;
    }
}
?>  
