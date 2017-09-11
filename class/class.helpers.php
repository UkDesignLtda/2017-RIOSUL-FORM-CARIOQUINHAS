<?php
class Helpers
{
	public function is_CHARSET($str)
	{
		return (bool) mb_check_encoding($str, CHARSET);
	}
	
	// Elimina espaços e <enters/returns> extras no início e no fim de cada campo
	
	public function mb_trim( $str )
	{
		return mb_ereg_replace(
			'^[[:space:]]*([\s\S]*?)[[:space:]]*$', '\1', $this->is_CHARSET( $str )? $str: mb_convert_encoding($str, CHARSET ) );
	}
	
	/* Obtém o campo via post,
		 converte a string obtida na realidade HTML.
		 Depois converte \r e \n em <br> e aplica
		 a função mb_trim no resultado, que é repassado ao programa;
	*/
	
	public function post_limpo( $campo )
	{
		$saida = isset($_POST[$campo]) ? $this->mb_trim( nl2br( htmlentities( $_POST[$campo] , ENT_QUOTES, CHARSET ))) : false;
		return $saida;
	}

}