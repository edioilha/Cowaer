<div class="box-content">
	<h4 class="page-header">{{trans('geral.header_usuario')}}</h4>
{{Form::open(array('class' => 'form-horizontal ','id' => 'cadastro'))}}
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.nome')}}</label>
			<div class="col-sm-8">
				<input type="text" class="form-control required" name="nome" placeholder="{{trans('geral.nome')}}" title="{{trans('geral.nome')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.login')}}</label>
			<div class="col-sm-4">
				<input type="text" class="form-control required" name="login" placeholder="{{trans('geral.login')}}" title="{{trans('geral.login')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.senha')}}</label>
			<div class="col-sm-4">
				<input type="password" class="form-control required" name="senha" placeholder="{{trans('geral.senha')}}" title="{{trans('geral.senha')}}">
			</div>
			<div class="col-sm-2">
				<div class="checkbox">
					<label>
						<input type="checkbox" id="mostrar_senha">{{trans('geral.mostrar_senha')}}
						<i class="fa fa-square-o small"></i>
					</label>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">*{{trans('geral.confirmacao')}}</label>
			<div class="col-sm-4">
				<input type="password" class="form-control required" name="confirmacao" placeholder="{{trans('geral.confirmacao')}}" title="{{trans('geral.confirmacao')}}">
			</div>
		</div>
		<div class="form-group">
			<label class="col-sm-2 control-label">{{trans('geral.nivel')}}</label>
			<div class="col-sm-4">
				<select class="form-control" name="nivel" title="Nivel de Acesso">
				  <option value="1">{{trans('geral.nivel_admin')}}</option>
				  <option value="2">{{trans('geral.nivel_atendente')}}</option>
				  <option value="3">{{trans('geral.nivel_entregador')}}</option>							</select>
			</div>
		</div>
		<div class="clearfix"></div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-2">
				<button type="button" id="cancelar" class="btn btn-default btn-label-left">
				<span><i class="fa fa-times"></i></span>
					{{trans('geral.button_cancelar')}}
				</button>
			</div>
			<div class="col-sm-2">
				<button type="button" id="salvar" class="btn btn-primary btn-label-left">
				<span><i class="fa fa-check"></i></span>
					{{trans('geral.button_salvar')}}
				</button>
			</div>
		</div>
	{{Form::close()}}
</div>

<script src="{{url('js/usuario/cadastro.js')}}" type="text/javascript" charset="utf-8"></script>



