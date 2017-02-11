<?php 

class DatabaseConnection
{
public static $host="localhost";			// SETAR HOST DO BANCO DE DADOS
public static $user="user";				// SETAR USUARIO DO BANCO DE DADOS
public static $password="password";		// SETAR SENHA DO BANCO DE DADOS
public static $database="database";		// SETAR NOME DO BANCO DE DADOS
public static $result="";
public static $qry="";


    function conecta() {
	    $this->result=mysql_connect($this->host,$this->user,$this->password);
	    if (!$this->result)
	    {
	        echo "Falha na conexão com o Banco de Dados!<br />";
		    echo "Erro: " . mysql_error();
		    die();
		} elseif (!mysql_select_db($this->database, $this->result))
		{
		    echo "O Bando de Dados solicitado não pode ser aberto!<br />";
		    echo "Erro: " . mysql_error();
		    die();
		}

	}

	function query($query)
	{
	    $this->conecta();
	    $this->qry=$query;
	    if ($this->result=mysql_query($this->qry))
		{
			
		    return $this->result;
		} else
		{
		    echo "Houve uma falha na execução da query";
		    echo "Erro :" . mysql_error();
		    echo "SQL: " . $query;
		    die();
		
		}
	}

}

class MyUserClass extends DatabaseConnection
{   
	public function getUserList()
	{ 		
	    $results = parent::query('select name from user');
	    sort($results);
	    return $results; 
	}  
} 
 ?>