<?error_reporting(E_ALL & ~E_NOTICE);?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<title>Chosten Hosting tests</title>
		<style type="text/css">
			body {
			    margin: 20px;
				padding: 0;
			}

			table {
			    width: 100%; /*Ширина таблицы*/
			    margin-bottom: 18px; /*Отступ снизу от таблицы*/
			    padding: 0; /*Отступы внутри таблицы*/
			    font-size: 13px; /*Размер шрифта*/
			    border: 1px solid #dddddd; /*Граница таблицы*/
			    border-spacing: 0; /*Отступы между границами ячеек*/
			    border-collapse: separate; /*Границы ячеек не склеиваются*/
				-webkit-border-radius: 5px; /*Радиус скругления углов у таблицы Safari, Chrome*/
			    -moz-border-radius: 5px; /*Радиус скругления углов у таблицы Mozilla*/
			    border-radius: 5px; /*Радиус скругления углов у таблицы*/
			    color: #666666; /*Цвет текста в таблице*/
				font-family: Arial; /*Семейство шрифтов*/
			}

			table th, table td {
			    padding: 10px 10px 9px; /*Отступы внутри ячеек*/
			    line-height: 18px; /*Межстрочный интервал*/
			    text-align: left; /*Выравнивание текста по левому краю*/
			}

			table th {
			    padding-top: 9px; /*Отступы внутри ячеек*/
			    font-weight: bold; /*Установка жирного начертания шрифта*/
			    vertical-align: middle; /*Выравнивание по вертикали. Текст находится по середине*/
			    color: black; /*Черный цвет в ячейках заголовков таблицы*/
			}

			table td {
			    vertical-align: top; /*Выравнивание содержимого ячейки по верхнему краю*/
			    border-top: 1px solid #ddd; /*Верхняя граница ячейки*/
			}

			table th+th,table td+td,table th+td {
			    border-left: 1px solid #ddd; /*Стиль для левой границы между двумя ячейками*/
			}

			table thead tr:first-child th:first-child, /*Первая строка первая ячейка в заголовке таблицы*/
			table tbody tr:first-child td:first-child /*Первая строка первая ячейка в теле таблицы*/{
			    -webkit-border-radius: 5px 0 0 0;
			    -moz-border-radius: 5px 0 0 0;
			    border-radius: 5px 0 0 0;
			}

			table thead tr:first-child th:last-child, /*Первая строка последняя ячейка в заголовке таблицы*/
			table tbody tr:first-child td:last-child /*Первая строка последняя ячейка в теле таблицы*/ {
			    -webkit-border-radius: 0 5px 0 0;
			    -moz-border-radius: 0 5px 0 0;
			    border-radius: 0 5px 0 0;
			}

			table tbody tr:last-child td:first-child  /*Последняя строка первая ячейка в теле таблицы*/ {
			    -webkit-border-radius: 0 0 0 5px;
			    -moz-border-radius: 0 0 0 5px;
			    border-radius: 0 0 0 5px;
			}

			table tbody tr:last-child td:last-child  /*Последняя строка последняя ячейка в теле таблицы*/{
			    -webkit-border-radius: 0 0 5px 0;
			    -moz-border-radius: 0 0 5px 0;
			    border-radius: 0 0 5px 0;
			}

			table tr:hover {
			    background-color: #f2f2f2;
			}
			table tbody tr:nth-child(odd) td  {
			    background-color: #f8f8f8;
			}
		</style>
	</head>
	<?php $php = phpinfo_array(); ?>
	<body>
	    <h2>Основное ПО</h2>
	    <table>
			<thead>
				<tr>
					<th>Плагин</th>
					<th>Результат выполнения</th>
					<th>Что делать?</th>
				</tr>
			</thead>
			<tbody>
			    <tr>
					<td>Пользователь</td>
					<td><?=Chosten::check_installing('whoami', true); ?></td>
					<td></td>
				</tr>
			    <tr>
					<td>CloudLinux</td>
					<td><?=Chosten::check_installing('uname -r', true); ?></td>
					<td>Переконвертировать систему в клоудлинукс</td>
				</tr>
				<tr>
					<td>PHP</td>
					<td><?=Chosten::check_installing('php -v', true); ?></td>
					<td>Внимание! Показывает основную версию PHP для ЮЗЕРА, а не для домена!</td>
				</tr>
				<tr>
					<td>GIT</td>
					<td><?=Chosten::check_installing('git --version'); ?></td>
					<td>Установить GIT</td>
				</tr>
				<tr>
					<td>Composer</td>
					<td><?=Chosten::check_installing('composer --version', true, true); ?></td>
					<td>Установить Composer</td>
				</tr>
			</tbody>
		</table>
		<h2>PHP</h2>
	    <table>
			<thead>
				<tr>
					<th>Плагин</th>
					<th>Результат выполнения</th>
					<th>Свойства</th>
				</tr>
			</thead>
			<tbody>
			    <?php foreach( Chosten::$Core as $val ):?>
			    <tr>
					<td><?=$val;?></td>
					<td><?=$php['Core'][$val]; ?></td>
					<td></td>
				</tr>
				<?php endforeach; ?>
			    <?php foreach( Chosten::$lib as $val ):?>
			    <tr>
					<td><?=$val; ?></td>
					<td><?php if(!empty($php[$val])) echo '<font color="green">Есть<font>'; else echo '<font color="green">Нет<font>'; ?></td>
					<td><?php print_r($php[$val]);?></td>
				</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	    <h2>Битрикс/Битрикс24</h2>
		<table>
			<thead>
				<tr>
					<th>Плагин</th>
					<th>Результат выполнения</th>
					<th>Что делать?</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Версия Битрикс Окружения</td>
					<td><?=getenv('BITRIX_VA_VER'); ?></td>
					<td>Сделать <a href="https://clite.ru/articles/bitrix/bitrixenv-linux/1s-bitriks24-neobkhodimo-ego-ustanavlivat-na-veb-okruzhenii-bitriks/" target="_blank">putenv("BITRIX_VA_VER=7.3-3");</a> lsapi_set_env BITRIX_VA_VER "7.4.3" в /etc/httpd/conf.d/lsapi.conf</td>
				</tr>
				<tr>
					<td>Catdoc</td>
					<td><?=Chosten::check_installing('catdoc --version'); ?></td>
					<td><a href="https://docs.cloudlinux.com/cloudlinux_os_components/#file-system-templates">yum install catdoc;</a><br/>cagefsctl --addrpm catdoc<br/>cagefsctl --update</td>
				</tr>
				<tr>
					<td>pdftotext</td>
					<td><?=Chosten::check_installing('pdftotext -v'); ?></td>
					<td>yum install poppler-utils<br/>cagefsctl --addrpm poppler-utils<br/>cagefsctl --update</td>
				</tr>
			</tbody>
		</table>
	</body>
</html><?php

class Chosten{
    public static $lib  = array( 'gd', 'mbstring', 'libxml', 'xml', 'zip', 'intl' );
    public static $Core = array( 'PHP Version', 'max_execution_time', 'post_max_size', 'upload_max_filesize', 'memory_limit', 'display_errors', 'log_errors' );
    
    public static function check_installing( $cmd, $short_return = false,$debug = false ){
        $output = shell_exec($cmd . ' 2>&1');
        
        if($debug){
            echo $cmd . '<br>';
            var_dump($output);
        }
        
        if(strpos($output, 'command not found') !== false)
            if(!$short_return)
                return '<font color="red">Нет<font>';
            else
                return '<font color="red">' . $output . '<font>';
        
        if(!$output){
            if(!$short_return)
                return '<font color="red">Нет<font>';
            else
                return '<font color="red">' . $output . '<font>';
        } else {
            if(!$short_return)
                return '<font color="green">Есть<font>';
            else
                return '<font color="green">' . $output . '<font>';
        }
    }
}


function phpinfo_array($return=true){
/* Andale!  Andale!  Yee-Hah! */
ob_start();
phpinfo(-1);

$pi = preg_replace(
array('#^.*<body>(.*)</body>.*$#ms', '#<h2>PHP License</h2>.*$#ms',
'#<h1>Configuration</h1>#',  "#\r?\n#", "#</(h1|h2|h3|tr)>#", '# +<#',
"#[ \t]+#", '#&nbsp;#', '#  +#', '# class=".*?"#', '%&#039;%',
  '#<tr>(?:.*?)" src="(?:.*?)=(.*?)" alt="PHP Logo" /></a>'
  .'<h1>PHP Version (.*?)</h1>(?:\n+?)</td></tr>#',
  '#<h1><a href="(?:.*?)\?=(.*?)">PHP Credits</a></h1>#',
  '#<tr>(?:.*?)" src="(?:.*?)=(.*?)"(?:.*?)Zend Engine (.*?),(?:.*?)</tr>#',
  "# +#", '#<tr>#', '#</tr>#'),
array('$1', '', '', '', '</$1>' . "\n", '<', ' ', ' ', ' ', '', ' ',
  '<h2>PHP Configuration</h2>'."\n".'<tr><td>PHP Version</td><td>$2</td></tr>'.
  "\n".'<tr><td>PHP Egg</td><td>$1</td></tr>',
  '<tr><td>PHP Credits Egg</td><td>$1</td></tr>',
  '<tr><td>Zend Engine</td><td>$2</td></tr>' . "\n" .
  '<tr><td>Zend Egg</td><td>$1</td></tr>', ' ', '%S%', '%E%'),
ob_get_clean());

$sections = explode('<h2>', strip_tags($pi, '<h2><th><td>'));
unset($sections[0]);

$pi = array();
foreach($sections as $section){
   $n = substr($section, 0, strpos($section, '</h2>'));
   preg_match_all(
   '#%S%(?:<td>(.*?)</td>)?(?:<td>(.*?)</td>)?(?:<td>(.*?)</td>)?%E%#',
     $section, $askapache, PREG_SET_ORDER);
   foreach($askapache as $m)
       $pi[$n][$m[1]]=(!isset($m[3])||$m[2]==$m[3])?$m[2]:@array_slice($m,2);
}

return ($return === false) ? print_r($pi) : $pi;
}
?>
