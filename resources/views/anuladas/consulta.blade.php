@extends('layout.app')
@section('conteudo')
    <div class ="table-responsive" > <!-- start conatiner -->
        <h2>Consultas</h2>    
        <div class="d-flex col-lg-12"> <!-- start d-flex -->    
            <div class="col-lg-8"> 
                <button href="" class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#Medicos"> Adicionar Consultas</button>
            </div>    
        </div> <!-- end d-flex -->
        <br>
        <table id="dataid" class="table table-bordered table-striped">
            <thead>    
                <tr>
                    <th>ID</th>
                    <th>Area_Consultas</th>
                    <th>Tipo_Consultas</th>
                    <th>Especialista</th>
                    <th>Observação</th>
                    <th>Editar</th>
                    <th>Visualizar</th>
                    <th>Apagar</th>    
                </tr>
            </thead>    
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jose</td>
                    <td>enfermaria</td>
                    <td>Analises</td>    
                    <td>ola</td>
                    <td>
                        <button class="btn btn-primary  btn-sm" href=""  data-bs-toggle="modal" data-bs-target="#editar">Editar</button>
                    </td>    
                    <td>    
                        <button class="btn btn-success btn-sm editbtn" name="edit_btn"  id="editbtn"   data-bs-toggle="modal" data-bs-target="#mostrar">Mostrar</button>
                    </td>
                    <td>
                        <button class="btn btn-danger  btn-sm" href=""  data-bs-toggle="modal" data-bs-target="#apagar">Apagar</button>
                    </td>    
                </tr>
            </tbody>    
        </table>    
    </div><!-- end container -->      
    <div class="modal fade" id="Medicos" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
        <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                       <div class="container mt-4">
                               <h2>Informações das Consultas</h2>
                       </div>
                       <form action="" method="POST" class="row p-lg-3 gy-2">
                               <div class="col-lg-6">
                                   <label for="form-control" class="form-label" >Areas das Consultas</label>
                                   <input type="text" class="form-control" name="nome" id="nome" placeholder="" required>        
                               </div>
                               <div class="col-lg-6">
                                   <label for="form-control" class="form-label" >Tipos de Consultas</label>
                                   <select name="curso" id="curso" class="form-select" aria-label="default-select" required>
                                           <option selected></option>
                                           <option type="text">Informática</option>
                                           <option type="text">Secretariado</option>
                                           <option type="text">Telecomunicação</option>
                                           <option type="text">Medicina</option>
                                           <option type="text">Pedagogia</option>
                                           <option type="text">Gestão de Recursos Humano</option>
                                   </select>
                               </div>
                               <div class="col-lg-6">
                                   <label for="form-control" class="form-label" >Especialista</label>
                                   <input type="text" class="form-control" id="data_início" name="data_início" placeholder="" required> 
                               </div>
                               <div class="col-12">
                                   <label for="message" class="form-label">Observação</label>
                                   <textarea name="observação" id="observação" cols="30" rows="4" class="form-control" placeholder="own, Pessoal vocês são incrível"></textarea>
                               </div>
                               <div class="col-12">
                                   <button type="submit" name="add_medico" class="btn btn-primary">Adicionar</button>
                                   <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                               </div>
                       </form>
               </div>
       </div>
    </div>   <!-- end modal-qualifica-adicionar -->
    <div class="modal fade" id="editar" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-editar-->
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                <div class="container mt-4">
                    <h2> Editar Consultas</h2>
                </div>
                <form action="" method="POST" class="row p-lg-3 gy-2">
                    <div class="col-lg-6">
                            <label for="form-control" class="form-label" >Area das Consultas</label>
                            <input type="text" class="form-control" name="nome" id="nome" placeholder="" required>
                    </div>
                    <div class="col-lg-6">
                            <label for="form-control" class="form-label" >Tipo de Consultas</label>
                            <select name="curso" id="curso" class="form-select" aria-label="default-select" required>
                                <option selected></option>
                                <option type="text">Informática</option>
                                <option type="text">Secretariado</option>
                                <option type="text">Telecomunicação</option>
                                <option type="text">Medicina</option>
                                <option type="text">Pedagogia</option>
                                <option type="text">Gestão de Recursos Humano</option>
                            </select>
                    </div>
                    <div class="col-lg-6">
                            <label for="form-control" class="form-label" >Especialista</label>
                            <input type="text" class="form-control" id="data_início" name="data_início" placeholder="" required>         
                    </div>
                    <div class="col-12">
                            <label for="message" class="form-label">Observação</label>
                            <textarea name="observação" id="observação" cols="30" rows="4" class="form-control" placeholder="own, Pessoal vocês são incrível"></textarea>
                    </div>
                    <div class="col-12">
                            <button type="submit" name="add_medico" class="btn btn-primary">Adicionar</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>   <!-- end modal-editar -->
   <!-- Modal apagar -->
    <div class="modal fade" id="apagar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white"  >
                        <h5>Excluir item</h5>
                    </div>
                    <form action="crud_agencia.php" method="POST">
                        <div class="modal-body">
                            <h4>Tem certeza que deseja excluir Consultas ?</h4>
                            <h3 id="nameAPagar"></h3>
                        </div>
                        <input type="hidden" id="idApagar" name="id" >
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
                            <button type="submit" name="apagar" class="btn btn-danger">Sim</button>
                        </div>
                    </form>                    
                </div>
            </div>
    </div>

@endsection