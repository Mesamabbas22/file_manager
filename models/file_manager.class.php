<?php 
class file_manager{
    private $db_host = '127.0.0.1';
    private $db_user = 'root';
    private $db_password = '';
    private $db_name = 'file_manager';
    private $pdo;
    public function __construct(){
            try{
            $db = 'mysql:host=' . $this->db_host . ';dbname=' . $this->db_name;
            $this->pdo = new pdo($db,$this->db_user,$this->db_password);
            }
            catch(Exception $e){
                echo 'Message :' . $e->getMessage();
            }
            date_default_timezone_set("Asia/Karachi");
    }

    public function sign_up($form){
        if($form !=null){
            print_r($form);
            
            $query = "INSERT users(first_name, last_name, user_name, email, password, token, created_at) VALUES(?,?,?,?,?,?,?)";
            $prepare = $this->pdo->prepare($query);
            $execute = $prepare->execute(['Muhammad','Saqlain','saqlain20','saqlain128@gmail.com',sha1('saqlain'),rand(),date("Y/m/d h:i:sa")]);
            if($execute == true){
                echo 'Done';
            }
        }
    }
}
// $obj = new file_manager();
// $obj->sign_up(array('Mesam','Abbas','mesamabbas20','Mesambbas128@gmail.com','mesaabc'));

?>