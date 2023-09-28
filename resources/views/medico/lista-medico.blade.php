<section>
    <div class="object-none object-right-bottom w-24 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 " > <!-- start d-flex -->    
              <button href="" class="btn btn-secondary rounded-full" role="button" data-bs-toggle="modal" data-bs-target="#Medicos"> <i class="fa-solid fa-circle-plus"></i>Add Medico</button>
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
                    <td>10h0000</td>
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
                    @include('medico.add-medico')
               </div>
        </div>
    </div>   <!-- end modal-qualifica-adicionar -->
    
</section>