<section>
    <div class="object-none object-right-bottom w-24"> <!-- start d-flex -->    
              <button href="" class="btn btn-secondary rounded-full" role="button" data-bs-toggle="modal" data-bs-target="#Medicos"> Adicionar Consultas</button>
    </div> <!-- end d-flex -->
      
    <div class ="table-responsive" > <!-- start conatiner -->   
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-center text-lg text-sky-800 font-bold">Ultimos Agendamentos</h1>  
            </div>
        </header>
        <table id="dataid" class="table table-bordered table-striped table-hover">
            <thead>    
                <tr>
                    <th>ID</th>
                    <th>Tipo Consulta</th>
                    <th>Especialista</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Status</th>
                    <th></th>
                    <th></th>    
                </tr>
            </thead>    
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Consulta 1</td>
                    <td>Dr. Emanuel Pedro</td>
                    <td>10/10/2023</td>    
                    <td>10h00</td>
                    <td>Em processamento</td>
                    <td>    
                        <button class="btn btn-success btn-sm editbtn" name="edit_btn"  id="editbtn"   data-bs-toggle="modal" data-bs-target="#mostrar">Mostrar</button>
                    </td>
                    <td>
                        <button class="btn btn-danger  btn-sm" href=""  data-bs-toggle="modal" data-bs-target="#apagar">Anular</button>
                    </td>    
                </tr>
            </tbody>    
        </table>    
    </div><!-- end container -->

    <div class="modal fade" id="Medicos" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
        <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    @include('consulta.solicitar-consulta')
               </div>
        </div>
    </div>   <!-- end modal-qualifica-adicionar -->
    
</section>

<!--
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
                       </form>-->