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

    public function sign_up($first_name,$last_name,$user_name,$email,$password){
        $chack_query = "SELECT * FROM users WHERE user_name = ? || email = ?";
        $select_prepare = $this->pdo->prepare($chack_query);
        $select_prepare->execute([$user_name,$email]);
        $row = $select_prepare->rowCount();
        if($row == 0){
            $query = "INSERT users(first_name, last_name, user_name, email, password, token, created_at ,updated_at,flg_delete) VALUES(?,?,?,?,?,?,?,?,?)";
            $prepare = $this->pdo->prepare($query);
            $execute = $prepare->execute([$first_name,$last_name,$user_name,$email,sha1($password),rand(),date("Y/m/d h:i:sa"),0,0]);
            if($execute == true){
                echo 'Done';
            }
        }else{
            echo 'Data already exists';
        }
            
    }
    public function sign_in($email,$password){
        $query = "SELECT * FROM users WHERE email = ? AND password = ?";
        $prepare = $this->pdo->prepare($query);
        $execute = $prepare->execute([$email,sha1($password)]);
        $row = $prepare->rowCount();
        if($execute == true){
            print_r($row);
            if($row == 1){
                echo 'Sign In Success';
            }else{
                echo 'Sign In Faild';
            }
        }
    }
}
$obj = new file_manager();
$obj->sign_up('Mesam','Abbas','ab','ab@gmail.com','ab');
$obj->sign_in('abc@gmail.com','ab');
?>