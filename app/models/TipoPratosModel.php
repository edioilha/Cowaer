<?php 



class TipoPratosModel extends Eloquent{

	protected $table = 'tipo_prato';
	public  $timestamps = false;
	protected $primaryKey = 'cod';
	protected $guarded = array('cod');
}