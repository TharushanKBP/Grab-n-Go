@extends('backend.layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> Category</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">Category List</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('category.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add Category</a>
                    </div>
                    <br>
                    <div class="body">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="banner-dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Title</th>
                                        <th>Is Parent</th>
                                        <th>Parent Category</th>
                                        <th>Photo</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($category as $category)
                                    <tr>
                                        <td>{{$category->id}}</td>
                                        <td>{{$category->title}}</td>
                                        <td>{{(($category->is_parent==1)? 'Yes': 'No')}}</td>
                                        <td>
                                            {{$category->parent_info->title ?? ''}}
                                        </td>
                                        <td>
                                            @if($category->photo)
                                            <img src="{{$category->photo}}" class="img-fluid" style="max-width:80px" alt="{{$category->photo}}">
                                            @else
                                            <img src="{{asset('backend/img/thumbnail-default.jpg')}}" class="img-fluid" style="max-width:80px" alt="avatar.png">
                                            @endif
                                        </td>
                                        <td>
                                            @if($category->status=='active')
                                            <span class="badge badge-success">{{$category->status}}</span>
                                            @else
                                            <span class="badge badge-warning">{{$category->status}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('category.edit',$category->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                            <form method="POST" action="{{route('category.destroy',[$category->id])}}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{$category->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

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