@extends('admin.base')
<div class="overlay_menu">
    <button class="btn btn-primary btn-icon btn-icon-mini btn-round"><i class="zmdi zmdi-close"></i></button>
    <div class="container">        
        <div class="row clearfix">
            <div class="card">
                <div class="body">
                    <div class="input-group m-b-0">                
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card links">
                <div class="body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>App</h6>
                            <ul class="list-unstyled">
                                <li><a href="mail-inbox.html">Inbox</a></li>
                                <li><a href="chat.html">Chat</a></li>
                                <li><a href="events.html">Calendar</a></li>
                                <li><a href="file-dashboard.html">File Manager</a></li>
                                <li><a href="contact.html">Contact list</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>User Interface (UI)</h6>
                            <ul class="list-unstyled">
                                <li><a href="ui_kit.html">UI KIT</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                                <li><a href="range-sliders.html">Range Sliders</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="dialogs.html">Dialogs</a></li>
                                <li><a href="collapse.html">Collapse</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>Sample Pages</h6>
                            <ul class="list-unstyled">                            
                                <li><a href="image-gallery.html">Image Gallery</a></li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="invoices.html">Invoices</a></li>
                                <li><a href="faqs.html">FAQs</a></li>
                                <li><a href="search-results.html">Search Results</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12">
                            <h6>About</h6>
                            <ul class="list-unstyled">
                                <li><a href="http://thememakker.com/about/" target="_blank">About</a></li>
                                <li><a href="http://thememakker.com/contact/" target="_blank">Contact Us</a></li>
                                <li><a href="http://thememakker.com/admin-templates/" target="_blank">Admin Templates</a></li>
                                <li><a href="http://thememakker.com/services/" target="_blank">Services</a></li>
                                <li><a href="#" target="_blank">Portfolio</a></li>                            
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="social">
                    <a class="icon" href="https://www.facebook.com/thememakkerteam" target="_blank"><i class="zmdi zmdi-facebook"></i></a>
                    <a class="icon" href="https://www.behance.net/thememakker" target="_blank"><i class="zmdi zmdi-behance"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-twitter"></i></a>
                    <a class="icon" href="javascript:void(0);"><i class="zmdi zmdi-linkedin"></i></a>                    
                    <p>Coded by WrapTheme<br> Designed by <a href="#" target="_blank">Intellidrone</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div><!-- Overlay For Sidebars -->

<!-- Left Sidebar -->
{{-- @extends('admin.left-side') --}}
@include('admin.left-side')

{{-- Right Sidebar --}}
@include('admin.right-bar')

<!-- Main Content -->
@section('content')
    
<section class="content home">
    <div class="container-fluid">
       
            <div class="block-header">
                <div class="row clearfix" id="app">
                    <div class="col-lg-5 col-md-5 col-sm-12">
                        <h2>Dashboard</h2>
                        <ul class="breadcrumb padding-0">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>            
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div class="input-group m-b-0">                
                            <input type="text" id="search" v-model="search" autocomplete="off" class="form-control input-lg" placeholder="Search Product...">
                            <span class="input-group-addon">
                                <i class="zmdi zmdi-search"></i>
                            </span>
                                 <!-- Vue Search List Start-->
                            <ul v-cloak v-if="products" v-bind:style="{ width : width + 'px' }" class="widget">
                                <li v-for="(product,key) in products" :id="key +1"
                                    v-bind:class="[(key + 1 == count) ? activeClass : '', menuItem]"
                                >
                                    <a v-bind:href="post.url" >
                                        <div class="list_item_container" v-bind:title="product.title">
                                            <div class="image">
                                                <img v-bind:src="product.image" >
                                            </div>
                                            <div class="label">
                                                <h4>@{{ product.title  }}</h4>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <!-- Vue Search List End-->
                        </div>
                    </div>
                </div>
            </div>
       
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x col-amber"></i></p>
                        <span>Products</span>
                        <h3 class="m-b-10">{{ $productCount }}</h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-assignment zmdi-hc-3x col-blue"></i></p>
                        <span>Total Orders</span>
                        <h3 class="m-b-10 number count-to" data-from="0" data-to="865" data-speed="2000" data-fresh-interval="700">865</h3>
                        <small class="text-muted">88% lower growth</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-shopping-basket zmdi-hc-3x"></i></p>
                        <span>Total Sales</span>
                        <h3 class="m-b-10 number count-to" data-from="0" data-to="3502" data-speed="2000" data-fresh-interval="700">3502</h3>
                        <small class="text-muted">38% lower growth</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card text-center">
                    <div class="body">
                        <p class="m-b-20"><i class="zmdi zmdi-account-box zmdi-hc-3x col-green"></i></p>
                        <span>New Employees</span>
                        <h3 class="m-b-10 number count-to" data-from="0" data-to="78" data-speed="2000" data-fresh-interval="700">78</h3>
                        <small class="text-muted">78% lower growth</small>
                    </div>
                </div>
            </div>
        </div>        
       
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Application</strong> Sales <small>Members Preformance / Monthly Status</small> </h2>
                    </div>
                    {{-- @section('content') --}}

                        <div class="pull-left">
                            <a href="{{ route('product-media.create')}}" class="btn btn-sm btn-info" style="box-shadow:3px 4px 5px grey;">Add Products</a>
                        </div>
                    <div class="body sales_report">
                        <div class="table-responsive">
                            <table class="table m-b-0 table-hover">
                                <thead>
                                    <tr>                                    
                                        <th>Id</th>
                                        <th>Product Image</th>
                                        <th>Product Name</th>
                                        <th>Product Code</th>
                                        <th>Description</th>                                    
                                        <th>Created</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @if ($product)  --}}
                                    
                                    @foreach ($products as $product)
                                    <tr>
                                    
                                        <td> {{$product->id }}</td>
                                        {{-- <td> {{ dd($product->image_path) }}</td> --}}
                                        @if ($product->image_path)
                                        @foreach ($product->image_path as $image)
                                            <td><img src={{ $image }}></td>
                                        @endforeach

                                        @else
                                            <td>No Image</td>
                                        @endif

                                        <td></td>

                                        <td>{{ $product->title }}</td>
                                        <td>{{ $product->product_code }} </td>
                                        <td>{{ $product->description }}</td>
                                        <td>{{ date('Y-m-d', strtotime($product->created_at)) }}</td>
                                        <td>
                                            <a href="{{route('product-media.edit', $product->id)}}" class="btn btn-sm btn-info">Edit</a>
                                            <form action="{{ route('product-media.destroy', $product->id )}}" method="post">
                                                {{ csrf_field() }}
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" >Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach 
                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- @endsection --}}
                </div>
            </div>
        </div>               
    </div>
</section>
@endsection
    
{{-- @extends('admin.script') --}}
{{-- @include('admin.script') --}}
</html>