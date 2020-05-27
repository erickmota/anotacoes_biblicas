<?php
        
    if(isset($_COOKIE["emailAdmin_ab"])){
        
        die ("<script>window.location='admin'</script>");
        
    }
        
?>

<html>

<header>
    
        <?php
        
            include_once './php/configBase.php';
        
        ?>

	<title>
	
		Login - Anotações Bíblicas
	
	</title>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/menu.js"></script>
	<link rel="stylesheet" href="css/loginAdmin.css">

</header>

<body>

	<div class="row justify-content-center">
	
		<div class="col">
		
			<img src="img/logoAdmin.png" class="rounded mx-auto d-block logo img-fluid">
		
		</div>
	
	</div>
	
	<div class="container-fluid">
	
		<div class="row justify-content-center">
		
			<div class="col-sm-7 col-md-5 col-lg-3 text-center">
			
                            <form class="mt-3" method="post" action="php/setCookieAdmin.php">
				
                                    <input type="email" class="form-control" placeholder="E-mail" name="email" required autofocus>
                                    <input type="password" class="form-control mt-2" placeholder="Senha" name="senha" required>
					
					<button type="submit" class="btn btn-primary btn-block mt-3">Entrar</button>
					
				</form>
				
				<label class="text-center mt-4 text-black-50">Versão beta</label>
			
			</div>
		
		</div>
	
	</div>

</body>

</html>