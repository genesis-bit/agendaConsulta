@props(['titulo','btn1','btn2'])

<div class="p-4 sm:p-8  bg-white dark:bg-gray-800 shadow sm:rounded-lg transition ease-in-out duration-150 hover:-translate-y-1 hover:scale-110">
        <div class="h-40 ">
            <h2 class="title text-black">{{$titulo}}</h2>
            <hr><br>
            <button class="btn btn-secondary rounded-full hover:bg-red-800" role="button" data-bs-toggle="modal" data-bs-target="#{{$modal1}}">{{$btn1}}</button>
            <br><br>
            <button class="btn btn-primary rounded-full hover:bg-red-800" role="button" data-bs-toggle="modal" data-bs-target="#{{$modal2}}">{{$btn2}}</button>
                       
        </div>
      
</div> 
<div class="modal fade" id="{{$modal1}}" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
    <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">
                 {{$data_modal1}}
           </div>
    </div>
</div>
<div class="modal fade" id="{{$modal2}}" tabindex="-1" aria-labelledby="modallabel" aria-hidden="true">  <!-- start modal-adicionar-qualificações-->
    <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content px-1">
                 {{$data_modal2}}
           </div>
    </div>
</div>