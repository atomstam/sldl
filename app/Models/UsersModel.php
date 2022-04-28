<?php namespace App\Models;

use CodeIgniter\Model;

class UsersModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'ID';
    protected $allowedFields = ['prefix', 'firstName', 'lastName', 'email', 'phone', 'idCard', 'status', 'password', 'role', 'imageProfile', 'schoolID', 'areaID', 'facebook', 'lineID', 'twitter', 'youtube', 'created_at'];

    public function getUsers($id = false) {
        if($id === false) {
            return $this->findAll();
        }
        return $this->asArray()
                    ->where(['ID' => $id])
                    ->first();
    }
}