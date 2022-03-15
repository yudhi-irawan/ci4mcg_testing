<?php
	// Modul Description : Tabel Sex
	// Date              : 2022-01-20
	// Created by.       : yudhi irawan
	// Contact person    : IG: @iam.yudhi_irawan

	// File name   : Sex.php
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

use App\Models\Sex_model;

class Sex extends BaseController
{
	protected $Sex_model;

	public function __construct()
	{
		$this->Sex_model = new Sex_model();
	}

	public function index()
	{
		$data = [
            'title' => 'sex',
            'sex' => $this->Sex_model->getSexById()
        ];
        return view('sex_index', $data);
	}

	public function create_one()
	{
		$data = [
		    'title' => 'Add sex',
		    'validation' => \Config\Services::validation()
		];
		return view('sex_add', $data);
	}

	public function savecreate_one()
	{
		if (!$this->validate([
			'sex_desc' => [
				'rules' => 'required|is_unique[sex.sex_desc]',
				'errors' => [
					'required' => 'Data required.'
					, 'is_unique' => 'Data double.'
				]
			]
		])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/sex/create_one')->withInput()->with('validation', $validation);
        }
		$arrResult=$this->Sex_model->savecreate_one([
			'sex_desc' => $this->request->getVar('sex_desc')
        ]);
		session()->setFlashdata('pesan', 'Data berhasil ditambahkan.');
		return redirect()->to('/sex');
	}

	public function edit_one($id)
	{
		$data = [
		    'title' => 'Edit sex',
		    'validation' => \Config\Services::validation(),
			'sex' => $this->Sex_model->getSexById($id)
		];
		return view('sex_edit', $data);
	}

	public function saveedit_one($id)
	{
		/*
		if (!$this->validate([
			'sex_desc' => [
				'rules' => 'required|is_unique[sex.sex_desc]',
				'errors' => [
					'required' => 'Data required.'
					, 'is_unique' => 'Data double.'
				]
			]
		])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/sex/edit/' . $id)->withInput()->with('validation', $validation);
        }
        */
		$arrResult=$this->Sex_model->saveedit_one([
			'sex_id' => $id
			, 'sex_desc' => $this->request->getVar('sex_desc')
        ]);
		session()->setFlashdata('pesan', 'Data berhasil diubah.');
		return redirect()->to('/sex');
	}

	public function delete_one($id)
	{
		$arrResult=$this->Sex_model->savedelete_one($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus.');
		return redirect()->to('/Sex');
	}

}
