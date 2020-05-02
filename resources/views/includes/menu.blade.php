<div class="card">
    <div class="card-header badge-primary">Menú</div>

    <div class="card-body">
          
        <div class="list-group nav-item">
            <!--<ul class="nav nav-pills nav-stacked">-->
        @if (auth()->check())
            <a class="nav-link" href="#">Dashboard</a>
            <a class="nav-link" href="#">Ver incidencias</a>
            <a class="nav-link" href="#">Reportar incidencias</a>
            <a class="nav-link" href="#">Administración</a> 
                   
        @else
            <a class="nav-link" href="#">Bienvenido</a>
            <a class="nav-link" href="#">Instrucciones</a>
            <a class="nav-link" href="#">Créditos</a>            
        @endif
        </ul>
    </div>
</div>


   
  
