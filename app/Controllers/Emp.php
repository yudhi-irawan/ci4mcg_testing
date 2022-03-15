<?php
	// Modul Description : Employee
	// Date              : 2022-01-20
	// Created by.       : yudhi irawan
	// Contact person    : IG: @iam.yudhi_irawan

	// File name   : Emp.php
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


namespace App\Controllers;

use App\Models\Emp_model;
use App\Models\Sex_model;
use App\Models\Edu_model;

class Emp extends BaseController
{
	protected $Emp_model;

	public function __construct()
	{
		$this->Emp_model = new Emp_model();
		$this->Sex_model = new Sex_model();
		$this->Edu_model = new Edu_model();
	}

	public function index()
	{
		$data = [
            'title' => 'emp',
            'emp' => $this->Emp_model->getEmpById()
        ];
        return view('emp_index', $data);
	}

	public function create_one()
	{
		$data = [
		    'title' => 'Add emp',
		    'validation' => \Config\Services::validation()
		];
		$data['sex']  = $this->Sex_model->getSexForLookUp();
		$data['edu']  = $this->Edu_model->getEduForLookUp();
		return view('emp_add', $data);
	}

	public function savecreate_one()
	{
		$arrResult=$this->Emp_model->savecreate_one([
			'emp_name' => $this->request->getVar('emp_name')
			, 'emp_bday' => $this->request->getVar('emp_bday')
			, 'sex_id' => $this->request->getVar('sex_id')
			, 'edu_code' => $this->request->getVar('edu_code')
        ]);
		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
		return redirect()->to('/emp');
	}

	public function edit_one($id)
	{
		$data = [
		    'title' => 'Edit emp',
		    'validation' => \Config\Services::validation(),
			'emp' => $this->Emp_model->getEmpById($id)
		];
		$data['sex']  = $this->Sex_model->getSexForLookUp();
		$data['edu']  = $this->Edu_model->getEduForLookUp();
		return view('emp_edit', $data);
	}

	public function saveedit_one($id)
	{
		$arrResult=$this->Emp_model->saveedit_one([
			'emp_id' => $id
			, 'emp_name' => $this->request->getVar('emp_name')
			, 'emp_bday' => $this->request->getVar('emp_bday')
			, 'sex_id' => $this->request->getVar('sex_id')
			, 'edu_code' => $this->request->getVar('edu_code')
        ]);
		session()->setFlashdata('pesan', 'Data berhasil diubah.');
		return redirect()->to('/emp');
	}

	public function delete_one($id)
	{
		$arrResult=$this->Emp_model->savedelete_one($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');
		return redirect()->to('/Emp');
	}

}
