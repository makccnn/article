<?phpinclude_once('startup.php');include_once('model.php');// ��������� ����������, ����������� � ��, ������ ������.startup();$title = '�������';// ���������� ������.$articles = articles_all();// �������� introforeach ($articles as $key => $article)	$articles[$key]['intro'] = articles_intro($article);// ���������� ������.$content = view_include('theme/v_index.php', array('articles' => $articles));include ('view.php');