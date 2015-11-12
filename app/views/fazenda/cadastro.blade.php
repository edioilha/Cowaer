@extends('template')


@stop
@section('content')


<!-- ALERTA DE MENSAGEM -->
<!-- Alert favor seguir esse padrao e importar a folha de estilo -->
<!-- 
  * Abaixo esta a caixa de alert que tras as mensagens de validação tanto
  * do jquery quanto do php por tras do servidor, se a variavel $msg existir
  * então a mensagem e passada ao atributo message pelo qual via jquery
  * eu remonto dentro do paragrafo                                    -->
@if(Session::has('msg'))
    <div class="panel-alert" id="msg" message="{{Session::get('msg')}}"></div>
@else
<div class="panel-alert" id="msg"></div>
@endif
<br>
<!--Start Breadcrumb-->
<div class="row">
	<div id="breadcrumb" class="col-xs-12">
		<ol class="breadcrumb">
			<li><a href="#">{{trans('fcadastro.breadcrumb_li_1')}}</a></li>
			<li><a href="#">{{trans('fcadastro.breadcrumb_li_2')}}</a></li>
		</ol>
	</div>
</div>
<!--End Breadcrumb-->
<div class="row">
	<div class="col-xs-12 col-sm-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">
					<span>Cadastro de Fazenda</span>
				</div>
				<div class="box-icons">
					<a class="collapse-link">
						<i class="fa fa-chevron-up"></i>
					</a>
					<a class="expand-link">
						<i class="fa fa-expand"></i>
					</a>
					<a class="close-link">
						<i class="fa fa-times"></i>
					</a>
				</div>
				<div class="no-move"></div>
			</div>
			<div class="box-content">
				<form id="form_validator" method="post" action="validators.html" class="form-horizontal">
					<fieldset>
						<legend>Dados da Fazenda</legend>
						<div class="form-group">
							<label class="col-sm-3 control-label">Username</label>
							<div class="col-sm-5">
								<input type="text" class="form-control" name="nome" />
							</div>
						</div>
						<div class="form-group">
							<label class="col-sm-3 control-label">Country</label>
							<div class="col-sm-5">
								<select class="populate placeholder" name="country" id="s2_country">
									<option value="">-- Select a country --</option>
									<option value="fr">France</option>
									<option value="de">Germany</option>
									<option value="it">Italy</option>
									<option value="jp">Japan</option>
									<option value="ru">Russia</option>
									<option value="gb">United Kingdom</option>
									<option value="us">United State</option>
								</select>
							</div>
						</div>
					</fieldset>
					<div class="clearfix"></div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-2">
							<button type="cancel" class="btn btn-default btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Cancelar
							</button>
						</div>
						<div class="col-sm-2">
							<button type="submit" class="btn btn-primary btn-label-left">
							<span><i class="fa fa-clock-o"></i></span>
								Cadastrar
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="{{url('plugins/jquery-ui-timepicker-addon/jquery-ui-timepicker-addon.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{url('plugins/select2/select2.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{url('plugins/bootstrapvalidator/bootstrapValidator.min.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{url('js/fazenda/cadastro.js')}}" type="text/javascript" charset="utf-8"></script>
@stop