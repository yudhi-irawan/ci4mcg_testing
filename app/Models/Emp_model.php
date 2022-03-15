<?php
	// Modul Description : Employee
	// Date              : 2022-01-20
	// Created by.       : yudhi irawan
	// Contact person    : IG: @iam.yudhi_irawan

	// File name   : Emp_model.php
	// Last Edited : 2022-03-15


	// MCG - Massive CRUD Generator for CI4-AdminLT3-MySQL ver. Mar 2022-Free Version

	// Private message at Telegram        : @yudhi_irawan
	// Private activity feeds at Instagram: @iam.yudhi_irawan

	// Download Massive CRUD Generator on telegram and github link
	// MCG Application: https://t.me/MCGFreeVersion
	// Documentation  : https://yudhi-irawan.github.io/mcg-documentation
	// Testing        : https://github.com/yudhi-irawan/ci4mcg_testing
	// Template       : https://github.com/yudhi-irawan/mcg-templates-ci4-lt3

	// Donation and Support link
	// Ko-fi   : https://ko-fi.com/MassiveCrudGenerator
	// Trakteer: https://trakteer.id/MassiveCrudGenerator

	// Please follow us for information about new releases

namespace App\Models;
use CodeIgniter\Model;

class Emp_model extends Model
{
	protected $table = 'emp';
	protected $primaryKey = 'emp_id';
	protected $useTimestamps = true;
	protected $allowedFields = ['emp_name', 'emp_bday', 'sex_id', 'edu_code'];
	protected $SQL = 'select * from emp_one_view';


    public function getEmpById($id = false)
    {
        if ($id == false) {
			$sql1="select * from ( ".$this->SQL." ) as xxx";
			return $this->db->query($sql1)->getResultArray();
        }
        return $this->table('emp')
        	->where('emp_id', $id)
        	->get()
        	->getRowArray();
    }

    public function getEmpForLookUp()
	{
		$sql2="select * from ( ".$this->SQL." ) as xxx";
		return $this->db->query($sql2)->getResultArray();
	}

    public function savecreate_one($arrdata)
	{
		$sql_add = " CALL Emp_one_add";
		$sql_add.= " (";
		$sql_add.= "'99999'";
		$sql_add.= ",'".$arrdata['emp_name']."'";
		$sql_add.= ",'".$arrdata['emp_bday']."'";
		$sql_add.= ",'".$arrdata['sex_id']."'";
		$sql_add.= ",'".$arrdata['edu_code']."'";
		$sql_add.= ")";
		return $this->db->query($sql_add)->getRowArray();
	}

    public function saveedit_one($arrdata)
	{
		$sql_edit = " CALL Emp_one_edit";
		$sql_edit.= " (";
		$sql_edit.= "'".$arrdata['emp_id']."'";
		$sql_edit.= ",'".$arrdata['emp_name']."'";
		$sql_edit.= ",'".$arrdata['emp_bday']."'";
		$sql_edit.= ",'".$arrdata['sex_id']."'";
		$sql_edit.= ",'".$arrdata['edu_code']."'";
		$sql_edit.= ")";
		return $this->db->query($sql_edit)->getRowArray();
	}

    public function savedelete_one($id)
	{
		$sql_delete = " CALL Emp_one_delete";
		$sql_delete.= " (";
		$sql_delete.= "'.$id.'";
		$sql_delete.= ")";
		return $this->db->query($sql_delete)->getRowArray();
	}

}
