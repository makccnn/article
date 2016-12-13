<?
// Конкретная статья
//
class M_ArticlesGet
	var $id_article;

function articles_get($id_article)
{
	this -> id_article = $id_article;
	// Запрос.
	$query = "SELECT * FROM articles WHERE id_article ='$this -> id_article'";
	$result = mysql_query($query);
							
	if (!$result)
		die(mysql_error());
	if (mysql_num_rows($result)>0) {
	// Извлечение из БД.
		$row = mysql_fetch_assoc($result);		
	return $row;
	}
	else return false;
}
?>