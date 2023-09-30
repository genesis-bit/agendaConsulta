<section>
    <div class="object-none object-right-bottom w-24"> <!-- start d-flex -->    
        <button href="" class="btn btn-secondary rounded-full" role="button" data-bs-toggle="modal" data-bs-target="#Medicos"><i class="fa-solid fa-circle-plus"></i>Tempo Livre</button>
    </div> <!-- end d-flex -->

    <div class="modal fade" id="Medicos" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
        <div class="modal-dialog modal-dialog-centered ">
                <div class="modal-content">
                    @include('tempoLivre.add-tempoLivre',$consultorio)
               </div>
        </div>
    </div>   <!-- end modal-qualifica-adicionar -->

    @empty($agenda)
        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
            <h1 class="text-center text-lg text-red-800 font-bold">Não tem Agendas disponiveis</h1>  
        </div>
    @endempty
    @empty(!$agenda) 
        <div class ="table-responsive" > <!-- start conatiner -->         
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <h1 class="text-center text-lg text-sky-800 font-bold">Consultas agendadas</h1>  
                </div>
            </header>
            <table id="dataid" class="table table-hover">
                <thead>    
                    <tr>
                        <th>ID</th>
                        <th>Medico</th>
                        <th>Consultorio</th>
                        <th>Data</th>
                        <th>Qtd consultas</th>
                        <th></th>
                        <th></th> 
                    </tr>
                </thead>    
                <tbody>
                    @foreach ($agenda as $ag)
                    <tr>
                        <td>{{$ag->id}}</td>
                        <td>{{$ag->medico->name}}</td>
                        <td>{{$ag->consultorio->descricao}}</td>
                        <td>{{$ag->data}}</td>
                        <td></td>
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
        </div><!-- end container -->
   @endempty 
</section>