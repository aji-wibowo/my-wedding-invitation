<?php

namespace App\Controllers;

class Home extends BaseController
{
	public function index($nama)
	{
		$parseData = [
			'nama' => $nama
		];
		return view('index', $parseData);
	}
}
