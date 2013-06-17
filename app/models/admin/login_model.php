<?php

class Login_Model extends Model {

    public function can_login() {
        $user = $this->db->select('SELECT * FROM users WHERE username = :username', array(':username' => $_POST['username']));
        if (count($user) > 0) {
            foreach ($user as $user_info)
                ;
            $t_hasher = new PasswordHash(8, FALSE);
            $check = $t_hasher->CheckPassword($_POST['password'], $user_info['password']);
            if ($check) {
                Session::init();
                Session::set('loggedIn', true);
                Session::set('userid', $user_info['id']);
                Session::set('username', $user_info['username']);
                return true;
            }
            else
                return false;
        }else
            return false;
    }

    public function check_if_logged_in() {
        Session::init();
        if (!Session::get('loggedIn') || !Session::get('userid'))
            header('location: ' . URL . 'admin/main/login');
    }

    public function logout() {
        Session::init();
        Session::unset_data('loggedIn');
        Session::unset_data('userid');
        header('location: ' . URL . 'admin/main/login');
    }

}

?>
