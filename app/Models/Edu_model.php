<?php
	// Modul Description : Table Education Level
	// Date              : 2022-01-20
	// Created by.       : yudhi irawan
	// Contact person    : IG: @iam.yudhi_irawan

	// File name   : Edu_model.php
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

class Edu_model extends Model
{
	protected $table = 'edu';
	protected $primaryKey = 'edu_id';
	protected $useTimestamps = true;
	protected $allowedFields = ['edu_code', 'edu_desc'];
	protected $SQL = 'select * from edu_one_view';


    public function getEduById($id = false)
    {
        if ($id == false) {
			$sql1="select * from ( ".$this->SQL." ) as xxx";
			return $this->db->query($sql1)->getResultArray();
        }
        return $this->table('edu')
        	->where('edu_id', $id)
        	->get()
        	->getRowArray();
    }

    public function getEduForLookUp()
	{
		$sql2="select * from ( ".$this->SQL." ) as xxx";
		return $this->db->query($sql2)->getResultArray();
	}

    public function savecreate_one($arrdata)
	{
		$sql_add = " CALL Edu_one_add";
		$sql_add.= " (";
		$sql_add.= "'99999'";
		$sql_add.= ",'".$arrdata['edu_code']."'";
		$sql_add.= ",'".$arrdata['edu_desc']."'";
		$sql_add.= ")";
		return $this->db->query($sql_add)->getRowArray();
	}

    public function saveedit_one($arrdata)
	{
		$sql_edit = " CALL Edu_one_edit";
		$sql_edit.= " (";
		$sql_edit.= "'".$arrdata['edu_id']."'";
		$sql_edit.= ",'".$arrdata['edu_code']."'";
		$sql_edit.= ",'".$arrdata['edu_desc']."'";
		$sql_edit.= ")";
		return $this->db->query($sql_edit)->getRowArray();
	}

    public function savedelete_one($id)
	{
		$sql_delete = " CALL Edu_one_delete";
		$sql_delete.= " (";
		$sql_delete.= "'.$id.'";
		$sql_delete.= ")";
		return $this->db->query($sql_delete)->getRowArray();
	}

}
