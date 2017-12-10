<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="lib/table.js">
		</script>
   <? 
    require_once"blocks/head.php";
  ?>
    
</head>
<body>
<? 
require_once"blocks/header.php";
?>
<div id="names" style="color: #ffffff"></div>
<script type="text/javascript">
	tab=new Table();
	predm = ["МДК.02.03", "МДК.03.01", "МДК.03.03", "ОГСЭ.04", "МДК.01.02",
	"МДК.03.02", "ОГСЭ.03", "МДК.02.03", "ОП.07", "ОП.15", "ИБ"]
	sizeX = predm.length+1;
	sizeY = 6;
	tab.create("names", sizeX, sizeY);

	for(i=1; i<sizeX; i++)
		tab.set(i, 0, predm[i-1]);

	for(i=1; i<sizeX; i++)
		for(j=1; j<sizeY; j++)
			tab.set(i, j, Math.floor(Math.random()*(5-2)+2));
	for(i=1; i<sizeY; i++)
		tab.set(0, i, i);
	
			
</script>

</body>