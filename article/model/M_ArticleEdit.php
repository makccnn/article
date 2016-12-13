<?
class M_ArticleEdit
{
	var $id_article;
	var $title;
	var $content;
function articles_edit($id_article, $title, $content)
{
// Подготовка.
    this -> id = $id_article;
	this -> trim($title) = $title;
	this -> trim($content) = $content;

// Проверка.
	if (!$id_article) return false;
	if ($title == '')
		return false;
	
	// Запрос.
	$t = "UPDATE articles SET title='%s', content='%s' WHERE id_article='%d'";
	
	$query = sprintf($t, 
	                 mysql_real_escape_string($this -> title),
	                 mysql_real_escape_string($this -> content),
					 mysql_real_escape_string($this -> id_article));
	
	$result = mysql_query($query);
	if (!$result)
		die(mysql_error());
		
	return true;
}
}
?>