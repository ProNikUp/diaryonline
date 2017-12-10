<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="lib/table.js"></script>
   <? 
    require_once"blocks/head.php";
  ?>
    
</head>
<body>
    <? 
    require_once"blocks/header1.php";
  ?>
  <div id="tabel" style="color: #ffffff">
  <script type="text/javascript">
  	tab=new Table();
	head = [ "1", "2", "3", "4", "5",""];
	days = ["Пон - ник 1 нед", "Пон - ник 2 нед", "Вторник 1 нед", "Вторник 2 нед", "Среда 1 нед", "Среда 2 нед", "Четверг 1 нед", "Четверг 2 нед", "Пятница 1 нед", "Пятница 2 нед"];
	groups = ["Кс 14", "Пкс 21", "Пкс 22", "Пкс 23 Ермакова", "Пкс 24", "Пкс 25 Нун", "Эо 21 Сергеева", "Эо 31 Припадчева", "Кс 41", "Пкс 41 Росляков"]
	rows = 11;
	col1=head.length+1;
	tab.create("tabel", rows, col1);
	for(i=1; i<col1 + +0; i++)
		{
	 		//alert(head[i-1]);
	 		tab.set(0,i,head[i-1]);
	 
		}
 	for(i=1;i<rows;i++)
 		{
	 		tab.set(i,0,days[i-1]);
 		}
	for(i=1;i<rows;i++)
		{
			tab.set(i,6,groups[i-1]);
		}
		</script>
</div>
</body>