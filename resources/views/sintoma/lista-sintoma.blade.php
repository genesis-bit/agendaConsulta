<section>
    <div class ="table-responsive" > <!-- start conatiner --> 
        @empty($sintomas)
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-center text-lg text-red-800 font-bold">Não tem Sintomas Cadastradas</h1>  
        </div>
        @endempty
        @empty(!$sintomas)  
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-center text-lg text-sky-800 font-bold">Sintomas Cadastrados</h1>  
            </div>
        </header>
        <table id="dataid" class="table table-hover">
            <thead>    
                <tr>
                    <th>ID</th>
                    <th>Sintoma</th>
                    <th></th>
                    <th></th> 
                </tr>
            </thead>    
            <tbody>
                @foreach ($sintomas as $sintoma)
                    <tr>
                        <td>{{$sintoma->id}}</td>
                        <td>{{$sintoma->descricao}}</td>
                        <td class="w-2">    
                            <button class="btn bg-green-600 hover:bg-green-900 btn-sm editbtn" name="edit_btn"  id="editbtn"   data-bs-toggle="modal" data-bs-target="#mostrar"><i class="fa-solid fa-pen-to-square fa-lg"></i></button>
                        </td>
                        <td class="w-2">
                            <button class="btn btn-sm bg-red-600 hover:bg-red-900" href=""  data-bs-toggle="modal" data-bs-target="#apagar"><i class="fa-solid fa-trash fa-lg "></i></button>
                        </td> 
                    </tr>
                @endforeach 
            </tbody>    
        </table> 
        @endempty   
    </div><!-- end container -->
    
</section>