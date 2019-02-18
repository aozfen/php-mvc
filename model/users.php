<?php
/**
* 
*/
class User extends Model {

    public function getAll()
    {
        return $this->db->query('SELECT * FROM tbl_user')->fetchAll();
    }

}