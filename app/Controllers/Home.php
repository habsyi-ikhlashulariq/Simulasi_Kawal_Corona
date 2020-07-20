<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$nasional = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/'), true);
		$provinsi = json_decode(file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/'), true);
		$bg = ['bg-primary', 'bg-warning','bg-success', 'bg-danger'];
		$title = ['Total Positif', 'Dalam Perawatan','Total Sembuh', 'Total Meninggal'];

		$data['data'] = [
			[$bg[0],$nasional[0]['positif'], $title[0]],
			[$bg[1],$nasional[0]['dirawat'], $title[1]],
			[$bg[2],$nasional[0]['sembuh'], $title[2]],
			[$bg[3],$nasional[0]['meninggal'], $title[3]],
		];
		$data['content'] = '/layout/index';
		$data['data_prov'] = $provinsi;

		echo view('layout/layout', $data);

	}

	public function pemetaan()
	{
		$provinsi = json_decode(file_get_contents('https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=*&outSR=4326&f=json'), true);
		$data['data_prov'] = $provinsi;
		$data['content'] = '/layout/peta';
		echo view('layout/layout', $data);
	}

	//--------------------------------------------------------------------

}
