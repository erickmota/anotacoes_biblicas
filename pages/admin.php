<?php
        
    if(!isset($_COOKIE["emailAdmin_ab"])){
        
        die ("<script>window.location='loginAdmin'</script>");
        
    }
        
?>

<html>

<header>
    
        <?php
        
            include_once './php/configBase.php';
        
        ?>

	<title>
	
		Anotações Bíblicas
	
	</title>
	
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script type="text/javascript" src="js/jquery.js"></script>
        <!--<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" src="js/janelaModal.js"></script>
        <script type="text/javascript" src="js/janelaModalLivros.js"></script>
        <!--<script type="text/javascript" src="js/jquery.js"></script>-->
	<script type="text/javascript" src="js/menuAdmin.js"></script>
	<link rel="stylesheet" href="css/admin.css">

</header>

<body>

	<div class="container-fluid containerPrincipal">
	
		<div class="row">
		
			<div class="col-sm-5 col-md-4 col-lg-3 sidebar bg-dark d-none d-md-block" id="sidebar">
			<!--<div class="col-8 sidebar bg-dark" id="sidebar">-->
			
				<img src="img/iconeLogo.jpg" class="imgLogoIcone">
				
				<ul class="nav flex-column pt-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				  <li class="nav-item">
					<a class="nav-link active colunaLink colunaBorda" id="v-pills-usuario-tab" data-toggle="pill" href="#v-pills-usuario" role="tab" aria-controls="v-pills-usuario" aria-selected="true">Usuários cadastrados</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link colunaLink colunaBorda" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Passagens sinalizadas</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link colunaLink colunaBorda" id="v-pills-emailGeral-tab" data-toggle="pill" href="#v-pills-emailGeral" role="tab" aria-controls="v-pills-emailGeral" aria-selected="false">Comunicado</a>
				  </li>
				  <li class="nav-item">
                                      <a class="nav-link colunaLink colunaBorda" aria-selected="false" href="https://search.google.com/search-console?utm_source=about-page&resource_id=https://anotacoesbiblicas.com/" target="_blank">Google Search Console</a>
				  </li>
				  <li class="nav-item">
                                      <a class="nav-link colunaLink colunaBorda" aria-selected="false" href="https://analytics.google.com/analytics/web/#/report-home/a131731981w191341974p187286358" target="_blank">Google Analytics</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link colunaLink" href="php/sairAdmin.php">Sair</a>
				  </li>
				</ul>
				
				<label class="text-white-50 mt-5 ml-3">
				
					Versão beta
				
				</label>
			
			</div>
			
			<div class="col-md-8 offset-md-4 col-lg-9 offset-lg-3" id="colunaGrande">
			<!--<div class="col-4 offset-8" id="colunaGrande">-->
			
				<div class="row border-bottom">
				
					<div class="col-3">
					
						<img src="img/iconeMenu.png" class="iconeMenu d-md-none" id="iconeMenu">
						<img src="img/iconeMenu2.png" class="iconeMenu2" id="iconeMenu2">
						
					</div>

						<div class="col-9">
					
						<img src="img/logoAdmin.png" class="img-fluid float-right imgLogo mt-1">
						
					</div>
				
				</div>
				
				<div class="tab-content" id="v-pills-tabContent">
				  <div class="tab-pane fade show active" id="v-pills-usuario" role="tabpanel" aria-labelledby="v-pills-usuario-tab">
				  
                                      
                                      
				<div class="col-md-6 input-group mb-2 mt-3 campoBusca float-right">
                                    
                                    
				  <input type="text" id="texto" class="form-control" placeholder="Busque por usuários">
                                  
				  <div class="input-group-append">
                                        <button class="btn btn-info text-white" type="button" id="botao"><img src="https://img.icons8.com/ios/20/107889/search-filled.png"></button>
				  </div>
				</div>
                                      
                                      <div id="loading" class="col-1 float-right d-none d-md-block mt-3">
                                          
                                          
                                          
                                      </div>

                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                          <form method="post" action="php/emailIndividualAdmin.php">
                                          <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Para:</label>
                                            <input type="email" class="form-control email" id="recipient-name" readonly="true" name="email">
                                          </div>
                                           <div class="form-group">
                                            <label class="col-form-label">Assunto:</label>
                                            <input type="text" class="form-control" name="assunto" required>
                                          </div>
                                          <div class="form-group">
                                            <label for="message-text" class="col-form-label">Mensagem:</label>
                                            <textarea class="form-control" id="message-text" name="texto" required></textarea>
                                          </div>
                                            <button type="submit" class="btn btn-primary float-right ml-2">Enviar</button>
                                            <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Fechar</button>
                                            
                                        </form>
                                      </div>
                                    </div>
                                  </div>
                                </div>
				  
				  <div id="resultadoBusca" class="table-responsive">
				  
					<table class="table table-striped mt-3 text-center">
						  <thead class="table-primary">
							<tr>
                                                          <th scope="col">Img</th>  
							  <th scope="col">Nome</th>
							  <th scope="col">Acessos</th>
							  <th scope="col">Comentários</th>
							  <th scope="col">Marcações</th>
                                                          <th scope="col">Data Cadastro</th>
							  <th scope="col">E-mail</th>
							  <th scope="col">Excluir</th>
							</tr>
						  </thead>
						  <tbody>
							
							<?php
                                                        
                                                            include 'classes/admin.class.php';
                                                            
                                                            $adminUsuarios = new admin();
                                                            
                                                            $adminUsuarios->exibirUsuarios();
                                                        
                                                        ?>
                                                      
						  </tbody>
						</table>
                                      
                                      
						
					</div>
                                      
                                      <script type="text/javascript" src="js/ajaxUsuariosAdmin.js"></script>
				  
				  </div>
				  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
				  
						<div class="table-responsive">
				  
					<table class="table table-striped mt-3 text-center">
						  <thead class="table-primary">
							<tr>
							  <th scope="col">Livro</th>
							  <th scope="col">Capítulo</th>
							  <th scope="col">Versículo</th>
							  <th scope="col">Versão</th>
							  <th scope="col">Editar</th>
							  <th scope="col">Ignorar</th>
							</tr>
						  </thead>
						  <tbody>
							
                                                      <?php
                                                            
                                                            $adminUsuarios->exibirPassagensErradas();
                                                        
                                                        ?>
							
						  </tbody>
						</table>
						
					</div>
                                      
                                      <div class="modal fade" id="modalLivro" tabindex="-1" role="dialog" aria-labelledby="modalLivroLabel" aria-hidden="true">

                                        <div class="modal-dialog" role="document">
                                          <div class="modal-content corpoModal">
                                            <div class="modal-header">
                                              <h5 class="modal-title" id="modalLivroLabel">New message</h5>
                                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                              </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="post" action="php/atualizarVerso.php">
                                                    
                                                    <div class="form-group">
                                                    
                                                        <label class="col-form-label text-danger text-center">
                                                            
                                                            ATENÇÃO, só clique em atualizar, se tiver certeza que a passagem está correta!
                                                            
                                                        </label>
                                                        
                                                    </div>
                                                    
                                                <div class="form-group">
                                                    
                                                    <input type="hidden" name="idPassagens" class="idPassagens">
                                                    <input type="hidden" name="livro" class="livro">
                                                    <input type="hidden" name="capitulo" class="capitulo">
                                                    <input type="hidden" name="verso" class="verso">
                                                    <input type="hidden" name="versao" class="versao">
                                                    
                                                  <label for="message-text" class="col-form-label">Passagem:</label>
                                                  <textarea class="form-control texto" id="message-text" name="texto" required></textarea>
                                                </div>
                                                  <button type="submit" class="btn btn-primary float-right ml-2">Atualiar</button>
                                                  <button type="button" class="btn btn-secondary float-right" data-dismiss="modal">Fechar</button>

                                              </form>
                                            </div>
                                          </div>
                                        </div>
                                    </div>
				  
				  </div>
				  <div class="tab-pane fade" id="v-pills-emailGeral" role="tabpanel" aria-labelledby="v-pills-emailGeral-tab">
				  
                                      <form class="mt-4" method="post" action="php/emailMultiplo.php">
                                          
                                                        <div class="form-group">
								<label for="exampleFormControlTextarea1">Assunto</label>
                                                                <input type="text" class="form-control" name="assunto" required>
								
							</div>
						
							<div class="form-group">
								<label for="exampleFormControlTextarea1">Texto</label>
                                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="texto" required></textarea>
								<button type="submit" class="btn btn-primary mt-3 float-right">Enviar</button>
							</div>
						
						</form>
				  
				  </div>
				  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
				</div>
			
			</div>
		
		</div>
	
	</div>

</body>

</html>