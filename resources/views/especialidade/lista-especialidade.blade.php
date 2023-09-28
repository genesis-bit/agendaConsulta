<section>
    <div class ="table-responsive" > <!-- start conatiner -->        
        @empty($especialidade)
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-center text-lg text-red-800 font-bold">Não tem Especialidades Cadastradas</h1>  
            </div>
        @endempty
        @empty(!$especialidade)
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