<?php 



class GuarnicoesModel extends Eloquent
{
	protected $table = 'guarnicoes';
	public  $timestamps = false;
	protected $primaryKey = 'nome';
	protected $guarded = array('nome');
}