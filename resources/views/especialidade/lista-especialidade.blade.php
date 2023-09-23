<section>
    <div class="object-none object-right-bottom w-24 transition ease-in-out delay-150 hover:-translate-y-1 hover:scale-110 " > <!-- start d-flex -->    
              <button href="" class="btn btn-secondary rounded-full" role="button" data-bs-toggle="modal" data-bs-target="#Addespecialidade"> Adicionar Especialidade</button>
    </div> <!-- end d-flex -->
      
    <div class ="table-responsive" > <!-- start conatiner -->   
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-center text-lg text-sky-800 font-bold">Especialidades Cadastradas</h1>  
            </div>
        </header>
        <table id="dataid" class="table table-bordered table-striped table-hover">
            <thead>    
                <tr>
                    <th>ID</th>
                    <th>Nome Especialidade</th>
                    <th></th>
                    <th></th> 
                </tr>
            </thead>    
            <tbody>
                @foreach ($especialidade as $esp)
                    <tr>
                        <td>{{$esp->id}}</td>
                        <td>{{$esp->descricao}}</td>
                        <td>    
                            <button class="btn btn-success btn-sm editbtn" name="edit_btn"  id="editbtn"   data-bs-toggle="modal" data-bs-target="#mostrar">Editar</button>
                        </td>
                        <td>
                            <button class="btn btn-danger  btn-sm" href=""  data-bs-toggle="modal" data-bs-target="#apagar">Apagar</button>
                        </td> 
                    </tr>
                @endforeach 
            </tbody>    
        </table>    
    </div><!-- end container -->

    <div class="modal fade" id="Addespecialidade" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
        <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    @include('especialidade.add-especialidade')
               </div>
        </div>
    </div>   <!-- end modal-qualifica-adicionar -->
    
</section>