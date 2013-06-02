<?php

class SobreController extends Controller
{
	/**
	 * @return array action filters
	 */
		public $layout='//layouts/mainpage';
		


	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
	
	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','ComoSubmeter',),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('update', 'updateComoSubmeter'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	/**
	 * 
	 * Mostra a página de Sobre
	 */
	public function actionIndex()
	{
		$this->render('index');
	}
	
	/**
	 * 
	 * Edita a página de Sobre
	 */
	public function actionUpdate()
	{
		$this->render('index');
	}
	
	
	/**
	 * 
	 * Mostra a página de Como Submeter
	 */
	public function actionComoSubmeter(){
		$this->render('como_submeter');
	}
	
	/**
	 * 
	 * Edita a página de Como Submeter
	 */
	public function actionUpdateComoSubmeter(){
		$this->render('como_submeter');
	}
	
}