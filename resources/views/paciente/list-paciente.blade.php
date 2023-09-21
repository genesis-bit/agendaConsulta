<section>
   <div class ="table-responsive" > <!-- start conatiner -->   
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <h1 class="text-center text-lg text-sky-800 font-bold">Pacientes Cadastrados</h1>  
            </div>
        </header>
        <table id="dataid" class="table table-bordered table-striped table-hover">
            <thead>    
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>Bilhete nº</th>
                    <th>Idade</th>
                    <th>Genero</th>
                    <th>Telefone</th>
                </tr>
            </thead>    
            <tbody>                
                    @foreach ($pacientes as $paciente)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$paciente->user->name}}</td>
                            <td>{{$paciente->identificacao}}</td>
                            <td>{{2023 - $paciente->ano_nascimento}}</td>    
                            <td>{{$paciente->genero->descricao}}</td> 
                            <td>{{$paciente->telefone}}</td> 
                        </tr>
                    @endforeach  
               
            </tbody>    
        </table>    
    </div><!-- end container -->

    
</section>