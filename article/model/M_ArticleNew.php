<?
// �������� ������
class M_ArticleNew
	var $title;
	var $content;
	
function articles_new($title, $content)
{
	$this -> title = $title;
	$this -> content = $content;
	
	// ����������.
	$this -> title = trim($title);
	$this -> content = trim($content);

	// ��������.
	if ($this -> title == '')
		return false;
	
	// ������.
	$t = "INSERT INTO articles (title, content) VALUES ('%s', '%s')";
	
	$query = sprintf($t, 
	                 mysql_real_escape_string($this -> title),
	                 mysql_real_escape_string($this -> content));
	
	$result = mysql_query($query);
	if (!$result)
		die(mysql_error());
		
	return true;
}
?>