<?php
//���������� ������
include_once('startup.php');
include_once('model.php');

// ��������� ����������, ����������� � ��, ������ ������.
startup();
$title = 'PHP. ������� 2';
$art=articles_get($_GET['id']);

// ���������� ������.
$content = view_include('theme/v_article.php', $art);
include ('view.php');
