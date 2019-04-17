    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
						<h2><b>Gerenciador</b> de Usuario</h2>
					</div>
					<div class="col-sm-7">	
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="material-icons">&#xE147;</i> <span>Add novo usuario</span>
                        </button>				
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>						
						<th>Date Created</th>
						<th>Role</th>
                        <th>Status</th>
						<th>Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><a href="#"><img src="<?php echo base_url('assets/photo/photo1.jpg')?>" class="avatar" alt="Avatar"> Michael Holz</a></td>
                        <td>04/10/2013</td>                        
                        <td>Admin</td>
						<td><span class="status text-success">&bull;</span> Active</td>
						<td>
							<a href="#" class="settings" title="Editar" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
							<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
						</td>
                    </tr>
					<tr>
                        <td>2</td>
                        <td><a href="#"><img src="<?php echo base_url('assets/photo/photo2.jpg')?>" class="avatar" alt="Avatar"> Paula Wilson</a></td>
                        <td>05/08/2014</td>                       
						<td>Publisher</td>
						<td><span class="status text-success">&bull;</span> Active</td>
						<td>
							<a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
							<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
						</td>
                    </tr>
					<tr>
                        <td>3</td>
                        <td><a href="#"><img src="<?php echo base_url('assets/photo/photo3.jpg')?>" class="avatar" alt="Avatar"> Antonio Moreno</a></td>
                        <td>11/05/2015</td>
						<td>Publisher</td>
                        <td><span class="status text-danger">&bull;</span> Suspended</td>                        
						<td>
							<a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
							<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
						</td>                        
                    </tr>
					<tr>
                        <td>4</td>
                        <td><a href="#"><img src="<?php echo base_url('assets/photo/photo4.jpg')?>" class="avatar" alt="Avatar"> Mary Saveley</a></td>
                        <td>06/09/2016</td>
						<td>Reviewer</td>
						<td><span class="status text-success">&bull;</span> Active</td>
						<td>
							<a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
							<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
						</td>
                    </tr>
					<tr>
                        <td>5</td>
                        <td><a href="#"><img src="<?php echo base_url('assets/photo/photo5.jpg')?>" class="avatar" alt="Avatar"> Martin Sommer</a></td>
                        <td>12/08/2017</td>                        
                        <td>Moderator</td>
						<td><span class="status text-warning">&bull;</span> Inactive</td>
						<td>
							<a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
							<a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons">&#xE5C9;</i></a>
						</td>
                    </tr>
                </tbody>
            </table>
			<div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-lg"  role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <form action="" method="post">                            
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNome">Nome</label>
                                <input type="text" class="form-control" name="nome" id="nome">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputSobrenome">Sobrenome</label>
                                <input type="text" class="form-control" name="sobrenome" id="sobrenome">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputDataNasc">Data de Nascimento</label>
                                <input type="date" class="form-control" name="datanasc" id="datanasc">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCpf">CPF</label>
                                <input type="text" class="form-control" name="cpf" id="cpf">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">E-mail</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group col-md-6">
                                 <label for="inputCelular">Celular</label>
                                <input type="number" class="form-control" name="celular" id="celular">
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputTelefone">Telefone</label>
                                <input type="number" class="form-control" name="telefone" id="telefone">
                            </div>
                        </div>
                        <h4>Endereço</h4>
                        <div class="form-row">
                            <div class="form-group col-md-3">   
                                <label for="inputCep">CEP</label>
                                <input type="text" class="form-control" name="cep" id="cep">
                            </div>
                            <div class="form-group col-md-4">   
                                <label for="inputLogradouro">Logradouro</label>
                                <input type="text" class="form-control" name="logradouro" id="logradouro">
                            </div>
                            <div class="form-group col-md-4">   
                                <label for="inputComplemento">Complemento</label>
                                <input type="text" class="form-control" name="complemento" id="complemento">
                            </div>
                            <div class="form-group col-md-3">   
                                <label for="inputNumero">Numero</label>
                                <input type="text" class="form-control" name="numero" id="numero">
                            </div>
                            <div class="form-group col-md-3">   
                                <label for="inputBairro">Bairro</label>
                                <input type="text" class="form-control" name="bairro" id="bairro">
                            </div>
                            <div class="form-group col-md-3">   
                                <label for="inputCidade">Cidade</label>
                                <input type="text" class="form-control" name="cidade" id="cidade">
                            </div>
                        </div>
                    </div>
                </div>
            </div>   
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
        </div>
    </div>
    </div>

