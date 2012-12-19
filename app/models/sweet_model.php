<?php
class Sweet_Model extends Model{
    
    public function insert_post($data){
        $this->db->insert('my_status', array(
            'my_status' => $data['my_status'],
            'location' => $data['location']
        ));
        return;
    }
    
    public function status_list()
    {
        return $this->db->select('SELECT * FROM my_status ORDER BY id DESC');
    }
    
    public function status_list_page($page, $records_per_page){
        return $this->db->select('SELECT SQL_CALC_FOUND_ROWS * FROM my_status ORDER BY id DESC LIMIT '. (($page - 1) * $records_per_page) . ', ' . $records_per_page);
    }

    public function delete($id)
    {        
        $this->db->delete('my_status', "id = '$id'");
    }
    
    public function edit($data)
    {
        $postData = array(
            'login' => $data['login'],
            'password' => Hash::create('sha256', $data['password'], HASH_PASSWORD_KEY),
            'role' => $data['role']
        );
        
        $this->db->update('user', $postData, "`userid` = {$data['userid']}");
    }
    
    public function editSave($data){
        $postData = array(
            'my_status' => $data['my_status'],
            'location' => $data['location'],
        );
        $this->db->update('my_status', $postData, "`id` = {$data['id']}");
    }
    
    public function select_status($id)
    {
        return $this->db->select('SELECT * FROM my_status WHERE id = :id', array(':id' => $id));
    }
    
    public function tae(){
        echo 'tae';
    }
}
?>