<div class="card">
    <div class="card-header badge-primary">Menú</div>

    <div class="card-body">
          
        <div class="list-group nav-item">
            <!--<ul class="nav nav-pills nav-stacked">-->
        @if (auth()->check())
            <a class="nav-link" href="#">Dashboard</a>
            <a class="nav-link" href="#">Ver incidencias</a>
            <a class="nav-link" href="#">Reportar incidencias</a>
            
            <ul class="nav nav-pills">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Administración</a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Usuarios</a>
                    <a class="dropdown-item" href="#">Proyectos</a>
                    <a class="dropdown-item" href="#">Configuración</a>                    
                    </div>
                </li>
            </ul>
                   
        @else
            <a class="nav-link" href="#">Bienvenido</a>
            <a class="nav-link" href="#">Instrucciones</a>
            <a class="nav-link" href="#">Créditos</a>            
        @endif
        </ul>
    </div>
</div>


   
  
