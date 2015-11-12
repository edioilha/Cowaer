<?php 

class FazendaController extends BaseController
{

	public function getCadastrar()
	{
		return View::make("fazenda.cadastro");
	}

}

