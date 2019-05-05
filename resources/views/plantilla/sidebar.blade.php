<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li @click="menu=0" class="nav-item">
                <a class="nav-link active" href="#"><i class="icon-speedometer"></i> Escritorio</a>
            </li>
            <li class="nav-title">
                Archivos
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pencil "></i> Carpeta 1</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=1" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-eyeglass"></i> CEDULA 0</a>
                    </li>

                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="fa fa-book"></i> Carpeta 2</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=5" class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-calendar-check-o"></i> Cedula 3.3.2</a>
                    </li>
                    <li @click="menu=6" class="nav-item">
                        <a class="nav-link" href="#"><i class="fa fa-list-ol"></i>Evidencia del uso de la platarforma...</a>
                    </li>
                </ul>
            </li>

            {{-- Carpeta 3 --}}
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Carpeta 3</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=8" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-user"></i> Reporte de Inicio de Curso</a>
                    </li>
                    <li @click="menu=9" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-user-following"></i> Intrumentación didactica</a>
                    </li>
                    <li @click="menu=9" class="nav-item">
                        <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-people"></i> Intrumentos de evaluación utilizados</a>
                        <ul class="nav-dropdown-items">
                            <li @click="menu=9" class="nav-item">
                                    <a class="nav-link" href="#"><i class="icon-user-following"></i>Intrumento de evaluación...</a>
                            </li>
                            <li @click="menu=9" class="nav-item">
                                    <a class="nav-link" href="#"><i class="icon-user-following"></i> Llenado de rubricas</a>
                            </li>
                        </ul>
                    </li>
                    <li @click="menu=9" class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-user-following"></i>Portafolio de evidencias</a>
                    </li>
                    <li @click="menu=9" class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-user-following"></i>Reporte final del semestre</a>
                    </li>
                    <li @click="menu=9" class="nav-item">
                            <a class="nav-link" href="#"><i class="icon-user-following"></i>Reporte individual</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item nav-dropdown">
                <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-pie-chart"></i> Carpeta 4</a>
                <ul class="nav-dropdown-items">
                    <li @click="menu=10" class="nav-item">
                        <a class="nav-link" href="#"><i class="icon-chart"></i>Documento Practicas de laboratorio</a>
                    </li>
                </ul>
            </li>
            <li @click="menu=12" class="nav-item">
                <a class="nav-link" href="#"><i class="icon-book-open"></i> Ayuda <span class="badge badge-danger">PDF</span></a>
            </li>
            <li @click="menu=13" class="nav-item">
                <a class="nav-link" href="#"><i class="icon-info"></i> Acerca de...<span class="badge badge-info">IT</span></a>
            </li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>