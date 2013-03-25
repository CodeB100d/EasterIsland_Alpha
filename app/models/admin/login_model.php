<?php
class Login_Model extends Model{

    public function can_login()
    {
        $user =$this->db->select('SELECT username, password FROM users WHERE username = :username', array(':username' => $_POST['username']));
        if(count($user)>0){
            foreach($user as $user_info);
            $t_hasher = new PasswordHash(8, FALSE);
            $check = $t_hasher->CheckPassword($_POST['password'], $user_info['password']);
            if($check){
                Session::init();
                Session::set('loggedIn', true);
                Session::set('userid', $user_info['id']);
                return true;
            }
            else return false;
        }else return false;
        /*
        $sth = $this->db->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
        $sth->execute(array(
            ':username' => $_POST['login'],
            ':password' => Hash::create('sha256', $_POST['password'], HASH_PASSWORD_KEY)
        ));
        
        $data = $sth->fetch();
        
        $count =  $sth->rowCount();
        if ($count > 0) {
            // login
            Session::init();
            Session::set('role', $data['role']);
            Session::set('loggedIn', true);
            Session::set('userid', $data['userid']);
            header('location: ../dashboard');
        } else {
            header('location: ../login');
        }
        
        */
    }

}
?>
