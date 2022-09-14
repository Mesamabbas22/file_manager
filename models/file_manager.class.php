<<<<<<< HEAD
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
                session_start();
                $_SESSION['user'] = $user_name;
                $_SESSION['email'] = $email;
                if($_SESSION['user'] == true && $_SESSION['email'] == true){
                    header('location: ../index.php');
                }else{
                
                    header('location: ../sign_up.php ');
                }
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
            if($row == 1){
               return $prepare->fetchAll(PDO::FETCH_BOTH);
                echo 'Sign In Success';
            }else{
                echo 'Sign In Faild';
            }
        }
    }
}
?>
=======
<?php

class file_manager{

	public $connect;

	public function __construct() {
		require_once 'database.class.php';
		$db_config = new database();
		$this->connect = $db_config->connect();
	}

	public function createNewFolder($user_id, $directory_name, $created_at, $updated_at, $flg_delete) {
		try{
			$query = "INSERT INTO `directories` (user_id, directory_name, created_at, updated_at, flg_delete) VALUES 
			(:user_id, :directory_name, :created_at, :updated_at, :flg_delete)";
			$stmt = $this->connect->prepare($query);
			$stmt->bindParam(':user_id', $user_id);
			$stmt->bindParam(':directory_name', $directory_name);
			$stmt->bindParam(':created_at', $created_at);
			$stmt->bindParam(':updated_at', $updated_at);
			$stmt->bindParam(':flg_delete', $flg_delete);
			$stmt->execute();
			return $this->connect->lastInsertId();
			echo $stmt->queryString;
			echo $stmt->debugDumpParams();
		}
		catch(PDOException $e) {
			echo $e->getMessage();
		}

	}

	public function loadAllFolders() {
		$query = "SELECT directory_name FROM `directories`";
		$stmt = $this->connect->prepare($query);
		$stmt->execute();
		$user_data = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $user_data;

	}
}

>>>>>>> upstream/main
