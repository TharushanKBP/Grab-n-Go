@extends('backend.layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Product</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Product List</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('product.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Product</a>
                    </div>
                    <br><br>
                    <form class="float-right" action="{{route('search')}}" method="GET" style="margin:auto;max-width:300px">
                        <input type="text" id="search_text" name="query" placeholder="Search" name="search2">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                    <br>
                    <div class="body">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="product-dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Brand</th>
                                        <th>Category</th>
                                        <th>Photo</th>
                                        <th>Reguler Price</th>
                                        <th>Member Price</th>
                                        <th>Discount</th>
                                        <th>Stock</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($product as $product)
                                    @php
                                    $sub_cat_info=DB::table('categories')->select('title')->where('id',$product->child_cat_id)->get();
                                    // dd($sub_cat_info);
                                    $brands=DB::table('brands')->select('title')->where('id',$product->brand_id)->get();
                                    @endphp
                                    <tr>
                                        <td>{{$product->id}}</td>
                                        <td>{{$product->title}}</td>
                                        <td> {{ucfirst($product->brand->title)}}</td>
                                        <td>{{$product->cat_info['title']}}
                                            <sub>
                                                {{$product->sub_cat_info->title ?? ''}}
                                            </sub>
                                        </td>
                                        <td>
                                            @if($product->photo)
                                            @php
                                            $photo=explode(',',$product->photo);
                                            // dd($photo);
                                            @endphp
                                            <img src="{{$photo[0]}}" class="img-fluid zoom" style="max-width:80px" alt="{{$product->photo}}">
                                            @else
                                            <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                                            @endif
                                        </td>



                                        <td>Rs. {{$product->regular_price}} /-</td>
                                        <td>Rs. {{$product->membership_price}} /-</td>
                                        <td> {{$product->discount}}% OFF</td>


                                        <td>
                                            @if($product->stock>0)
                                            <span class="badge badge-primary">{{$product->stock}}</span>
                                            @else
                                            <span class="badge badge-danger">{{$product->stock}}</span>
                                            @endif
                                        </td>

                                        <td>
                                            @if($product->status=='active')
                                            <span class="badge badge-success">{{$product->status}}</span>
                                            @else
                                            <span class="badge badge-warning">{{$product->status}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('product.edit',$product->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                            <form method="POST" action="{{route('product.destroy',[$product->id])}}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{$product->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push('styles')
<link href="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
<style>
    div.dataTables_wrapper div.dataTables_paginate {
        display: none;
    }
</style>
@endpush

@push('scripts')

<!-- Page level plugins -->
<script src="{{asset('backend/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('backend/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- Page level custom scripts -->
<script src="{{asset('backend/js/demo/datatables-demo.js')}}"></script>
<script>
    $('#banner-dataTable').DataTable({
        "columnDefs": [{
            "orderable": false,
            "targets": [3, 4, 5]
        }]
    });

    // Sweet alert

    function deleteData(id) {

    }
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.dltBtn').click(function(e) {
            var form = $(this).closest('form');
            var dataID = $(this).data('id');
            // alert(dataID);
            e.preventDefault();
            swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                    } else {
                        swal("Your data is safe!");
                    }
                });
        })
    })
</script>
@endpush