<?
class M_Articles
{
	var $query;
	var $n;
	var $row;

function __construct()
{
	// Запрос.
	$this -> query = "SELECT * FROM articles ORDER BY id_article DESC";
	$result = mysql_query($this -> query);
							
	if (!$result)
		die(mysql_error());
	
	// Извлечение из БД.
	$this -> n = mysql_num_rows($result);
	$articles = array();

	for ($i = 0; $i < $n; $i++)
	{
		$this -> row = mysql_fetch_assoc($result);		
		$articles[] = $this -> row;
	}
	
	return $articles;
}
}
?>