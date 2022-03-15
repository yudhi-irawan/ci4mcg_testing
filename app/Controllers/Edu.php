<?php
	// Modul Description : Table Education Level
	// Date              : 2022-01-20
	// Created by.       : yudhi irawan
	// Contact person    : IG: @iam.yudhi_irawan

	// File name   : Edu.php
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

use App\Models\Edu_model;

class Edu extends BaseController
{
	protected $Edu_model;

	public function __construct()
	{
		$this->Edu_model = new Edu_model();
	}

	public function index()
	{
		$data = [
            'title' => 'edu',
            'edu' => $this->Edu_model->getEduById()
        ];
        return view('edu_index', $data);
	}

	public function create_one()
	{
		$data = [
		    'title' => 'Add edu',
		    'validation' => \Config\Services::validation()
		];
		return view('edu_add', $data);
	}

	public function savecreate_one()
	{
		if (!$this->validate([
			'edu_code' => [
				'rules' => 'required|is_unique[edu.edu_code]',
				'errors' => [
					'required' => 'Data required.'
					, 'is_unique' => 'Data double.'
				]
			],
			'edu_desc' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Data required.'
				]
			]
		])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/edu/create_one')->withInput()->with('validation', $validation);
        }
		$arrResult=$this->Edu_model->savecreate_one([
			'edu_code' => $this->request->getVar('edu_code')
			, 'edu_desc' => $this->request->getVar('edu_desc')
        ]);
		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
		return redirect()->to('/edu');
	}

	public function edit_one($id)
	{
		$data = [
		    'title' => 'Edit edu',
		    'validation' => \Config\Services::validation(),
			'edu' => $this->Edu_model->getEduById($id)
		];
		return view('edu_edit', $data);
	}

	public function saveedit_one($id)
	{
		/*
		if (!$this->validate([
			'edu_code' => [
				'rules' => 'required|is_unique[edu.edu_code]',
				'errors' => [
					'required' => 'Data required.'
					, 'is_unique' => 'Data double.'
				]
			],
			'edu_desc' => [
				'rules' => 'required',
				'errors' => [
					'required' => 'Data required.'
				]
			]
		])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/edu/edit/' . $id)->withInput()->with('validation', $validation);
        }
        */
		$arrResult=$this->Edu_model->saveedit_one([
			'edu_id' => $id
			, 'edu_code' => $this->request->getVar('edu_code')
			, 'edu_desc' => $this->request->getVar('edu_desc')
        ]);
		session()->setFlashdata('pesan', 'Data berhasil diubah.');
		return redirect()->to('/edu');
	}

	public function delete_one($id)
	{
		$arrResult=$this->Edu_model->savedelete_one($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');
		return redirect()->to('/Edu');
	}

}
