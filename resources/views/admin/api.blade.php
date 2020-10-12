
@extends('admin.base')

<div class="overlay"></div>

<!-- Left Sidebar -->
@include('admin.left-side')

@include('admin.right-bar')

@section('content')   
<section class="content file_manager">    
    <div class="container-fluid">
        <div class="block-header">
            <div class="row clearfix">
                <div class="col-lg-5 col-md-5 col-sm-12">
                    {{-- <h2>File Manager</h2> --}}
                    <ul class="breadcrumb padding-0">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i></a></li>
                        <li class="breadcrumb-item"><a href="#">intellidrone</a></li>
                        <li class="breadcrumb-item active">Pixabay</li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-12">
                    <div class="input-group mb-0">
                        <input type="text" class="form-control"  id="search" placeholder="Search Pixabay...">
                        <div class="input-group-append">
                            <button type="submit" id="get-pixabay" onclick="getPixabay()"><span><i class="zmdi zmdi-search"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <form id="saveform" > --}}
            <table class="table-bordered">           
                <tr>
                    <th>Images</th>
                    {{-- <th>Preview</th> --}}
                </tr>
                
                <td id="imageFetch" class="check" style="padding:3%;"></td>
                <button onclick="handleClickToSaveToDB()" name="save" class="btn btn-primary save-data">save</button>
            </table>
        {{-- </form> --}}
    </div>
    {{-- <script>
        // Request for handling the post data
        
            $.ajax({
                url:  "/pixabay-api",
                method: "POST",
                data: handleClickToSaveToDB(),
                success: function(response){
                    console.log(response);

                }

            })
        
    </script> --}}
</section>
{{-- @endsection --}}
<!-- Jquery Core Js -->

@section('scripts')
<script src="{{asset('admin/axios/axios.js')}}"></script>
<script>
    $('.file .icon i').hover(function () {
        $(this).toggleClass('expandOpen');
    });    
</script>

@endsection
