<section>         
    <div class ="table-responsive" > <!-- start conatiner -->   
        @empty($tipoConsulta)
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-center text-lg text-red-800 font-bold">Não tem Tipo de Consulta Cadastradas</h1>  
        </div>
        @endempty
        @empty(!$tipoConsulta)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-center text-lg text-sky-800 font-bold">Tipos de Consultas</h1>  
                </div>
            </header>
            <table id="dataid" class="table table-bordered table-striped table-hover">
                <thead>    
                    <tr>
                        <th>ID</th>
                        <th>Tipo Consulta</th>
                        <th></th>
                        <th></th> 
                    </tr>
                </thead>    
                <tbody>
                    @foreach ($tipoConsulta as $tc)
                        <tr>
                            <td>{{$tc->id}}</td>
                            <td>{{$tc->descricao}}</td>
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
         @endempty
     </div><!-- end container -->
</section>