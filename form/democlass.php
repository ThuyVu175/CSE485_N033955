<?php
class Connection{
    private $host;
    private $user;
    private $pass;
    private $db;

    function__construct(){
        $this->host='localhost';
        $this->user='ktdung';
        $this->pass='abcabc';
        $this->db='laodong';
    }
    function openConnection(){
        $conn=mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        return $connn;
    }
    function execQuery($result){
        if(mysqli_num_rows($result)>0){
            
        }
    }

}
?>
<?php
$connection = new Connection();
echo $connection->getHost();

?>