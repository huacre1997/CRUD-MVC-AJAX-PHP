  
<?php 
class UserController{
    public function __construct(){
        require_once('models/users_model.php');

    }
    public function index(){     
        $user = new users_model();
        $data = $user->get_users();
        require_once('views/users_view.php');
    }
    public function get_by_id(){
        $user = new users_model();		
        $data["user"] = $user->getUser($_REQUEST['id']);
        $data["titulo"] = "Usuarios";
        require_once "views/users_new.php";
    }
    public function new(){	
        require_once "views/users_new.php";
    }
    public function insert(){  
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone']; 
        $user = new users_model();
        $user->insert_users($name, $email, $phone);
        header('Location: index.php');
    }
    public function update(){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone']; 
        $user = new users_model();
        $user->update_users($name, $email, $phone,$id);
        header('Location: index.php');}
    public function delete(){   
        $user = new users_model();
        $user->delete_user($_REQUEST['id']);
        header('Location: index.php');
    }
}
?>