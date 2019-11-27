<!DOCTYPE html>
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
	<body>
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
					<td>Сделать <a href="https://clite.ru/articles/bitrix/bitrixenv-linux/1s-bitriks24-neobkhodimo-ego-ustanavlivat-na-veb-okruzhenii-bitriks/" target="_blank">putenv("BITRIX_VA_VER=7.3-3");</a></td>
				</tr>
				<tr>
					<td>Linkage</td>
					<td>Fordor</td>
					<td>Miad ron me</td>
				</tr>
				<tr>
					<td>Hicura</td>
					<td>Warecom</td>
					<td>Xamicon</td>
				</tr>
				<tr>
					<td>Lavistaro</td>
					<td>Micanorta</td>
					<td>Ebloconte ma</td>
				</tr>
			</tbody>
		</table>
	</body>
</html>