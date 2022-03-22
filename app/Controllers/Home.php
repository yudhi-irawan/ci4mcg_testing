<?php

	// File name   : Home.php
	// Last Edited : 2022-03-22


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
use App\Models\Edu_model;
use App\Models\Emp_model;

class Home extends BaseController
{
	public function index()
	{
		$data['title'] = 'Dashboard';

		$Sex_model = new Sex_model();
		$data['count_sex'] = $Sex_model->countAllResults();

		$Edu_model = new Edu_model();
		$data['count_edu'] = $Edu_model->countAllResults();

		$Emp_model = new Emp_model();
		$data['count_emp'] = $Emp_model->countAllResults();

		return view('home_index', $data);
	}

}
