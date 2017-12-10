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
 tab = new Table();
 head=["Группа","хзче","хзче","ОУДМДКУППППДП","Теория","ПЗ","ЛР","ПЗ и ЛР","КРКП","Проверка и КП","Экзамены","Нормконтроль","Рецензирование",
 "Консультация и ГИА","Руководство практикой",
 "Консультация","Всего","Проверка испытательных работ",
 "Теория 1пг","ПЗ 1пг","Лр 1пг","Экзамены 1пг","Теория 2сем",
 "пз 2пг","лр 2пг","экзамены 2пг","КП 1 и 2 пг","ФИО преподавателя",
 "Итого 1пг","Итого 2пг","Кол-во  недель 1пг","часов в 1пг","кол-во недель в 2пг",
 "часов во 2пг","Примечание"];
 groups =["КС41","ПКС21","ПКС21","ПКС22","ПКС22","ПКС23","ПКС24","ПКС25","ЭО21","ЭО21","ПКС31","ПКС31","ЭО31","ЭО31","ЭО31","КС41","КС41","ПКС41","ПКС41","ПКС41"];
 rows=21;
 col1=head.length+1;
 tab.create("tabel", rows, col1);
//alert(col1);
 for(i=1; i<col1 + +0; i++)
	{
	 //alert(head[i-1]);
	 tab.set(0,i,head[i-1]);
	 /*
	 inp = document.createElement("input");
	inp.setAttribute('type', 'text');
	inp.value='hello'
	tab.set(0,i, inp);
	*/	
	}
 for(i=1;i<rows;i++)
 {
	 tab.set(i,0,groups[i-1]);
 }
</script>


</div>
</body>