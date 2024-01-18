<?php
// $this  ---> self

// class dbconnection{

//     private $host;
//     private $user;
//     private $password;
//     private $database;
//     private $connection;

//     function __construct($host,$user,$password,$database){
//         $this->host=$host;
//         $this->user=$user;
//         $this->password=$password;
//         $this->database=$database;
//         $this->connect();
//     }



// private function connect(){
//     $this->connection=mysqli_connect($this->host,$this->user,$this->password,$this->database);

//     if(!$this->connection){
//         die('cannot connect to database'.mysqli_connect_error());

//     } elseif($this->connection){
//         echo 'connection successfull';
//     }
//     mysqli_set_charset($this->connection,'utf8');


// }
// public function getconnect(){
//     return $this->connection;

// }
    
        
// }
// $database_conn=new dbconnection('192.168.178.218','root','20042004','jsvalan');
// $data=$database_conn->getconnect();

"<h1>hey</h1>"
?>

<?php

$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$password_c=$_POST['password_c'];

if (!empty($username) || !empty($email) || !empty($mobile) || !empty($password) || !empty($password_c)){


$host='localhost';
$dbuser='valan';
$dbpass='#jsvas2004';
$dbname='jsvdb';

$conn = new mysqli($host,$dbuser,$dbpass,$dbname);
if (mysqli_connect_error()){
    die ('connection error'.mysqli_connect_error()."".mysqli_connect_errno());

}

else{
    $SELECT="SELECT email from register where email=? limit 1";
    $INSERT="INSERT INTO register (username,email,mobile,password,password_c) values (?,?,?,?,?)";

    $stmt= $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum=$stmt->num_rows;


    if ($rnum==0){
        $stmt->close();
        $stmt=$conn->prepare($INSERT);
        $stmt->bind_param('ssiss',$username,$email,$mobile,$password,$password_c);
        $stmt->execute();
        echo "new record inserted successfully" ;

    }else{
        echo "Someone already registered with this email";

    }
    $stmt->close();
    $conn->close();


}}
else{
    echo "all fields are required";
    die();

}

?>