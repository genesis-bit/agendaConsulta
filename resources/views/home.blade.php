
@extends('layout.app')
@section('conteudo')

<div class="cards">  <!-- start cards -->

    <div class="single-card">  <!-- start single-card -->

       <div>
        <span>Consultas</span>
        <h2>4 Registros</h2>
       </div>
       <i class='bx bx-calendar-plus'></i>

    </div>  <!-- end single-card -->

    <div class="single-card">  <!-- start single-card -->

        <div>
   <span>Relatórios</span>
     <h2>0 Registros</h2>
     </div>
     <i class='bx bx-edit'></i>

   </div>  <!-- end single-card -->

   <div class="single-card">  <!-- start single-card -->

    <div>
    <span>Quartos Lives</span>
    <h2>2 </h2>
    </div>
    <i class='bx bxs-bed'></i>

   </div>  <!-- end single-card -->

    <div class="single-card">  <!-- start single-card -->

    <div>
    <span>Pacientes</span>
    <h2>2</h2>
    </div>
    <i class='bx bxs-group'></i>

</div>  <!-- end single-card -->

        </div> <!-- end cards -->


        @endsection