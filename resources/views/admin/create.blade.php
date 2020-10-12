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
                                <li><a href="image-gallery.html">Image Gallery</a> </li>
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="timeline.html">Timeline</a></li>
                                <li><a href="pricing.html">Pricing</a></li>
                                <li><a href="invoices.html">Invoices</a></li>                         <li><a href="faqs.html">FAQs</a></li>
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
                                <li><a href="http://thememakker.com/portfolio/" target="_blank">Portfolio</a></li>                            
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
                    <p>Coded by WrapTheme<br> Designed by <a href="http://thememakker.com/" target="_blank">thememakker.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay"></div>
<!-- Left Sidebar -->
@include('admin.left-side')

@include('admin.right-bar')

<section class="content">  
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    <h2>Product Create</h2>
                    <ul class="breadcrumb padding-0">
                    <li class="breadcrumb-item"><a href="{{route('product-media.index')}}"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Intellidrone</a></li>
                
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group m-b-0">                
                        <input type="text" class="form-control" placeholder="Search Product">
                        <span class="input-group-addon">
                            <i class="zmdi zmdi-search"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <!-- Basic Validation -->
        @section('content')
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="body">
                   <div id="upload">
                            @csrf
                            <div>
                                {{-- <button @click="setImage($event)" class="btn btn-raised btn-primary btn-round waves-effect" type="submit">Add Product</button> --}}
                                <div class="form-group form-float">
                                    <label for="">Product Image</label>
                                    <input type="file" id="imageInput" @change="setImage($event)" class="form-control"  name="image[]" multiple="multiple" >
                                   
                                </div>
                            </div>
                            <div class="form-group form-float">
                                <label for="">Product</label>
                                <input type="text" v-model="details.title" class="form-control" 
                                placeholder="Give a product name" name="title" required>
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            </div>
                            <div class="form-group form-float">
                                <label for="">Product Code</label>
                                <input type="text" class="form-control"
                                 placeholder="Give a product code" v-model="details.product_code" name="product_code" required>
                                 <span class="text-danger">{{ $errors->first('product_code') }}</span>
                            </div>
                            
                            <div class="form-group form-float">
                                <textarea name="description" cols="30"
                                 rows="5" v-model="details.description" placeholder=" Give a product description"
                                  class="form-control no-resize" required>{{ $errors->first('description') }}</textarea>
                            </div>
                        <textarea name="" hidden cols="30" id="url" rows="10">{{ route('product-media.store')}}</textarea>
                            <button class="btn btn-raised btn-primary btn-round waves-effect" @click="store()">Add Product</button>
                        </div>
                        <div id="successMessage"></div>
                    </div>
                </div>
            </div>
        </div>
        @endsection
        <!-- #END# Basic Validation --> 
    </div>
</section>
@section('scripts')
<script src="{{asset('admin/js/function.js')}}"></script>
@endsection

{{-- @include('admin.script') --}}
</body>
</html>