<aside class="right_menu">
    <div class="menu-app">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>App</strong> Menu</h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled menu">
                        <li><a href="#"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a></li>
                    <li><a href="{{ route('product-media.create')}}"><i class="zmdi zmdi-file-text"></i><span>Add Product</span></a></li>
                    <li><a href="{{ route('search')}}"><i class="zmdi zmdi-arrows"></i><span>Pixabay</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
   
    <div class="task-menu">
        <div class="slim_scroll">
            <div class="card tasks">
                <div class="header">
                    <h2><strong>Project</strong> Status</h2>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 1 <span class="float-right">29%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar2.jpg')}}" alt="Avatar"></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar3.jpg')}}" alt="Avatar"></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar4.jpg')}}" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 2 <span class="float-right">78%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar6.jpg')}}" alt="Avatar"></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar7.jpg')}}" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
                <div class="body">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 4 <span class="float-right">68%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar8.jpg')}}" alt="Avatar"></li>
                            <li><img src="{{asset('admin/assets/images/xs/avatar9.jpg')}}" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>        
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
        </ul>
        <div class="tab-content slim_scroll">
            <div class="tab-pane slideRight active" id="setting">
                <div class="card">
                    <div class="header">
                        <h2><strong>Colors</strong> Skins</h2>
                    </div>
                    <div class="body">
                        <ul class="choose-skin list-unstyled m-b-0">
                            <li data-theme="black" class="active">
                                <div class="black"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>                   
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>                    
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>                    
                            </li>
                        </ul>
                    </div>
                </div>                
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <ul class="setting-list list-unstyled m-b-0">
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Report Panel Usage</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">Email Redirect</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">Notifications</label>
                                </div>                        
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Auto Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">Offline</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox m-b-0">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">Location Permission</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Left</strong> Menu</h2>
                    </div>
                    <div class="body theme-light-dark">
                        <button class="t-dark btn btn-primary btn-round btn-block">Dark</button>
                    </div>
                </div>               
            </div>
            <div class="tab-pane slideLeft" id="activity">
                <div class="card activities">
                    <div class="header">
                        <h2><strong>Recent</strong> Activity Feed</h2>
                    </div>
                    <div class="body">
                        <div class="streamline b-accent">
                            <div class="sl-item">
                                <div class="sl-content">
                                    <div class="text-muted">Just now</div>
                                    <p>Finished task <a href="#" class="text-info">#features 4</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p><a href="#">@Jessi</a> retwit your post</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">12:30</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">2 days ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 days ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">4 Week ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">5 days ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">5 Week ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 Week ago</div>
                                    <p>Call to customer <a href="#" class="text-info">Jacob</a> and discuss the detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 Month ago</div>
                                    <p><a href="#" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
               
                <li class="header">MAIN</li>
            <li class="active open"> <a href="#"><i class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-apps"></i><span>App</span> <span class="badge badge-success float-right">7</span></a>
                    <ul class="ml-menu">
                        <li><a href="file-dashboard.html">File Manager</a></li>
                        <li><a href="contact.html">Contact list</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-assignment"></i><span>Forms</span> <span class="badge badge-warning float-right">9</span></a>
                    <ul class="ml-menu">
                        <li><a href="basic-form-elements.html">Basic Elements</a></li>
                        <li><a href="advanced-form-elements.html">Advanced Elements</a></li>
                        <li><a href="form-examples.html">Form Examples</a></li>
                        <li><a href="form-validation.html">Form Validation</a></li>
                        <li><a href="form-wizard.html">Form Wizard</a></li>
                        <li><a href="form-editors.html">Editors</a></li>
                        <li><a href="form-upload.html">File Upload</a></li>
                        <li><a href="form-img-cropper.html">Image Cropper</a></li>
                        <li><a href="form-summernote.html">Summernote</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-grid"></i><span>Tables</span> <span class="badge badge-info float-right">6</span></a>
                    <ul class="ml-menu">                        
                        <li><a href="normal-tables.html">Normal Tables</a></li>
                        <li><a href="jquery-datatable.html">Jquery Datatables</a></li>
                        <li><a href="editable-table.html">Editable Tables</a></li>
                        
                        <li><a href="table-color.html">Tables Color</a></li>
						<li><a href="table-filter.html">Tables Filter</a></li>
                    </ul>
                </li>            
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-chart"></i><span>Charts</span> <span class="badge badge-default float-right">6</span></a>
                    <ul class="ml-menu">
                        <li><a href="morris.html">Morris</a></li>
                        <li><a href="flot.html">Flot</a></li>
                        <li><a href="chartjs.html">ChartJS</a></li>
                        <li><a href="sparkline.html">Sparkline</a></li>
                        <li><a href="jquery-knob.html">Jquery Knob</a></li>
                            <li><a href="chart-e.html">E Chart</a></li>
                    </ul>
                </li>
                <li class="header">EXTRA COMPONENTS</li>                    
                <li><a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-delicious"></i><span>Widgets</span> <span class="badge badge-default float-right">3</span></a>
                    <ul class="ml-menu">
                    	<li><a href="widgets-app.html">Apps Widgetse</a></li>
                        <li><a href="widgets-data.html">Data Widgetse</a></li>
                        <li><a href="widgets-chart.html">Chart Widgetse</a></li>
                    </ul>
                </li>
                <li class="sm_menu_btm"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> <span class="badge badge-default float-right">9</span></a>
                    <ul class="ml-menu">
                        <li><a href="sign-in.html">Sign In</a></li>
                        <li><a href="sign-up.html">Sign Up</a></li>
                        <li><a href="forgot-password.html">Forgot Password</a></li>
                        <li><a href="404.html">Page 404</a></li>
                        <li><a href="403.html">Page 403</a></li>
                        <li><a href="500.html">Page 500</a></li>
                        <li><a href="503.html">Page 503</a></li>
                        <li><a href="page-offline.html">Page Offline</a></li>
                        <li><a href="locked.html">Locked Screen</a></li>
                    </ul>
                </li>
                <li class="sm_menu_btm"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-copy"></i><span>Sample Pages</span> <span class="badge badge-primary float-right">12</span></a>
                    <ul class="ml-menu">
                        <li><a href="blank.html">Blank Page</a></li>
                        <li><a href="teams-board.html">Teams Board</a></li>
                        <li><a href="projects.html">Projects List</a></li>
                        <li><a href="image-gallery.html">Image Gallery</a></li>
                        <li><a href="profile.html">Profile</a></li>
                        <li><a href="timeline.html">Timeline</a></li>
                        <li><a href="horizontal-timeline.html">Horizontal Timeline</a></li>
                        <li><a href="pricing.html">Pricing</a></li>
                        <li><a href="invoices.html">Invoices</a></li>
                        <li><a href="faqs.html">FAQs</a></li>
                        <li><a href="search-results.html">Search Results</a></li>
                        <li><a href="helper-class.html">Helper Classes</a></li>
                    </ul>
                </li>
                <li class="sm_menu_btm"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-map"></i><span>Maps</span> <span class="badge badge-default float-right">3</span></a>
                    <ul class="ml-menu">
                        <li><a href="google.html">Google Map</a></li>
                        <li><a href="yandex.html">YandexMap</a></li>
                        <li><a href="jvectormap.html">jVectorMap</a></li>
                    </ul>
                </li>                
            </ul>
        </div>
    </div>
</aside>