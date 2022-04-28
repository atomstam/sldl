<?php namespace App\Models;

use CodeIgniter\Model;

class CoursesModel extends Model {
    protected $table = 'courses';
    protected $primaryKey = 'c_id';
    protected $allowedFields = ['c_code', 'c_img', 'c_name', 'c_shortdetail', 'c_fulldetail', 'c_number', 'c_hour', 'c_administrator', 'c_datelearn', 'c_cer', 'c_baseknow', 'c_lecturer', 'c_fileaboutcourse', 'c_datecreate', 'c_datemodify', 'c_status', 'level_id', 'mandatory', 'idUser'];

    public function getCourses($id = false) {
        if($id === false) {
            return $this->findAll();
        }
        return $this->where(['idUser' => $id])->get()->getResultArray();
    }
}