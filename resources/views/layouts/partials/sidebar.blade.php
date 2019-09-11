<div class="left side-menu">
    <div class="slimscroll-menu" id="remove-scroll">
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu" id="side-menu">
                <li class="menu-title">Main</li>
                <li>
                    <a href="index.html" class="waves-effect">
                        <i class="ti-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-package"></i>
                        <span> My Projects <span class="float-right menu-arrow">
                                <i class="mdi mdi-chevron-right"></i></span>
                        </span>
                    </a>

                    <ul class="submenu">
                        <li>
                            <a href="{{ route('project.create') }}">
                                <i class="ti-plus"></i>
                                add project
                            </a>

                            @foreach($projects as $project)
                                <a href="{{ route('project.show', $project->id) }}">
                                    <i class="ti-package"></i>
                                    {{ $project->project_name }}
                                </a>
                            @endforeach
                        </li>
                        
                    </ul>

                </li>


                <li class="menu-title">Components</li>
                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-package"></i>
                        <span>UI Elements <span class="float-right menu-arrow"><i class="mdi mdi-chevron-right"></i></span></span>
                    </a>

                    <ul class="submenu">
                        <li><a href="ui-alerts.html">Alerts</a></li>
                        <li><a href="ui-buttons.html">Buttons</a></li>
                        <li><a href="ui-cards.html">Cards</a></li>
                        <li><a href="ui-carousel.html">Carousel</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript:void(0);" class="waves-effect">
                        <i class="ti-receipt"></i><span> Forms <span class="badge badge-pill badge-success float-right">9</span></span>
                    </a>

                    <ul class="submenu">
                        <li><a href="form-elements.html">Form Elements</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-advanced.html">Form Advanced</a></li>
                        <li><a href="form-editors.html">Form Editors</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->

        <div class="clearfix"></div>
    </div><!-- Sidebar -left -->
</div>