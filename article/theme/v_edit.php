	<a href="index.php">�������</a> |
	<a href="editor.php">������� ���������</a>
	<hr/>
	<form method="post">
		��������:
		<br/>
		<input type="text" name="title" value="<?=$title?>" />
		<br/>
		<br/>
		����������:
		<br/>
		<textarea name="content"><?=$content?></textarea>
		<br/>
		<input type="hidden" name="id" value="<?=$id?>" />
		<input type="submit" name = "edit" value="���������" />
		<input type="submit" name = "delete" value="�������" />
	</form>