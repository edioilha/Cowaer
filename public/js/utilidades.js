/**************************************************************************
*
*	Validation faz uma validação de todos os seletores equivalentes ao seletor 
* 	passado no parametro.

* @param seletor O seletor a ser percorrido para fazer a validação
* @return true se existe pelo menos um campo vazio
*		  false se todos os campos estão preenchidos
*
***************************************************************************/
$.fn.extend({
 validation: function()
{	
	var erro = false;
	// variavel de codição do erro
	 $(this).each(function(){

			if($(this).val() == "")
			{
				if($(this).parents("div .form-group").hasClass("has-success"))
				{
					
					$(this).parents("div .form-group").removeClass("has-success");
					$(this).parents("div .form-group").addClass("has-error");
				}
				else 
					$(this).parents("div .form-group").addClass("has-error");
				erro = true;
			}
			else
			{
				if($(this).parents("div .form-group").hasClass("has-error"))
				{
					
					$(this).parents("div .form-group").removeClass("has-error");
					$(this).parents("div .form-group").addClass("has-success");
				}
				else
					$(this).parents("div .form-group").addClass("has-success");
			}

			});

	 if(erro) return true;
	 else return false;
}

});