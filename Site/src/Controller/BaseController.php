<?php 
namespace Controller;

/**
 * 
 */
class BaseController extends Controller
{
	
	public function accueil()
	{

		$slider = $this -> getModel() -> getSliderItem();

		$params = array(
			'slider' => $slider,
		);



		return $this->render('layout.html', 'main.html', $params);
		# code...
	}




}