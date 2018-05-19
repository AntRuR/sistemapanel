<?php 
namespace controllers;

class Home extends Controller {


	function __construct($params){

		parent::__construct($params);

	}

	function index($params){
		






		//presentación
		$HomeText=$this->loadModel('Pages');
		$presentacion=$HomeText->getPage(['item'=>'9']);	


		//noticias tecnológicas
		// $news_two=$NewsTwo->getLinks();	
		// $news_two['name']='Noticias Tecnológicas';
		// $news_two['more']['url']=$news_two['items'][0]['url'];


		// prin($news);




		//banner
		// $Banner=$this->loadModel('Banners');

		// $banner=$Banner->getItems();



		prin('something');


		$this->view->assign(
			[
				'is_home'       => true,
				
				'title'         => $this->title,
				
				// 'canonical'		 => $this->view->vars['baseurl'],

				// 'head_description'=> (isset($start['web_desc']))?$start['web_desc']:'web_desc',

				//head
				// 'head_title'    => $this->title. ( ($this->slogan)?' - '.$this->slogan:'' ),
				'head_title'    => $this->title,
				
				
				// text
				"post"          => $presentacion,			

			]

		);


		if($this->data_test){
			$this->view->assign(
				$this->data_tests->getData([

					
				])
			);
		}

		$this->view->render('layout_home');


	}

}