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
                                <button class="btn bg-green-600 hover:bg-green-900 btn-sm editbtn" name="edit_btn"  id="editbtn"   data-bs-toggle="modal" data-bs-target="#mostrar"><i class="fa-solid fa-pen-to-square fa-lg"></i></button>
                            </td>
                            <td>
                                <button class="btn btn-sm bg-red-600 hover:bg-red-900" href=""  data-bs-toggle="modal" data-bs-target="#apagar"><i class="fa-solid fa-trash fa-lg "></i></button>
                            </td> 
                        </tr>
                    @endforeach 
                </tbody>    
            </table>  
         @endempty
     </div><!-- end container -->
</section>