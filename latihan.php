<?php
class db_music
{
    private $_host = 'localhost';
    private $_username = 'db_aby';
    private $_password = '';
    private $_database = 'music_1';

    protected $connection;

    public function __construct()
    {
        if(!isset($this->connection)) {

            $this->connection = new mysqli($this->_host,this->_username,this->_password, $this->_database);

            if ($this->connection){
                echo 'Cannot connect to database';
                exit;
            }
        }
        return $this->connection;    
    }
}

$koneksi = mysqli_connect ('localhost','db_aby','','music_1');

function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}
?>