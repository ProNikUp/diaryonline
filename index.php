<!DOCTYPE html>
<html>
<head>
   <? 
    require_once"blocks/head.php";
  ?>
    

<script type="text/javascript">
	
	function care()
	{
		var s = 1;
		var y = 2;
        var url = document.getElementById('login').value;
        var url1 = document.getElementById('login').value;
		if (url == s) {
            document.location.href = "/student.php";
        }
        if (url1 == y) {
            document.location.href = "/teacher.php";
        }

		return s, y;
	}
</script>
</head>
<body>
    <!--Заголовок-->
    <div class="text1">
        Электронный журнал
    </div>
    <!--Менюшка-->
    <form action="form1">
    <div id="wrapper" >
        <div id="leftCol">
                <div id="bigArticle">
                    <!--Строки ввода-->
                    <div class="Login">
                        Логин
                    </div>
                    <input type="text" placeholder="login" id="login" name="login">
                    <div class="Password">
                        Пароль
                    </div>
                    <input type="password" placeholder="password" id="password" name="password">
                    <!--Ссылка-->
                    
                    <div id="authorization" align="center">
                       <!-- <a href="https://vk.com">
                            <div>
                                Авторизация
                            </div> 
                        </a>-->
                       <input type="button" value="Авторизация" onclick="care()"> 
                    </div>
                                                 
                </div>
            </div>
        </div>  
        </form>
</body>
</html>