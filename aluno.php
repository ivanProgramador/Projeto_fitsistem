

<?php

  class Aluno{

			  private $nome;     
			  private $endereco;   
			  private $telefone;  
			  private $idade;     
			  private $objetivo;  
			  private $historico_saude;
			  private $peso;       
			  private $altura;     
			  private $data_matricula;
			  private $med_torax;   
			  private $med_biceps;  
			  private $med_triceps; 
			  private $med_abdomen; 
			  private $med_cintura; 
			  private $med_quadril; 
			  private $med_coxa;    
			  private $med_cjoelho; 
			  private $med_panturrilha; 
			  private $med_joelho; 


			  public function __get($atributo){

			  	return $this-> $atributo;


			  }
			  

			   public function __set($valor,$atributo){

			   	$this-> $atributo= $valor;

			  	
			  }

			 


  }





?>