@extends('backend.layouts.master')

@section('content')

<div id="main-content">
    <div class="container-fluid">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-6 col-md-8 col-sm-12">
                    <h2><a href="javascript:void(0);" class="btn btn-xs btn-link btn-toggle-fullwidth"><i class="fa fa-arrow-left"></i></a> User</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="icon-home"></i></a></li>
                        <li class="breadcrumb-item active">User List</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <a href="{{route('user.create')}}" class="btn btn-primary btn-sm float-right" data-toggle="tooltip" data-placement="bottom" title="Add User"><i class="fas fa-plus"></i> Add User</a>
                    </div>
                    <br>
                    <div class="body">
                        <div class="table-responsive">

                            <table class="table table-bordered" id="user-dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>S.N.</th>
                                        <th>Photo</th>
                                        <!-- <th>Full name</th> -->
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($user as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>
                                            <img src="{{$user->photo}}" class="img-fluid rounded-circle" style="border-radius:50%" alt="{{$user->photo}}">

                                        </td>
                                        <!-- <td>{{$user->full_name}}</td> -->
                                        <td>{{$user->username}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>{{$user->role}}</td>
                                        <td>
                                            @if($user->status=='active')
                                            <span class="badge badge-success">{{$user->status}}</span>
                                            @else
                                            <span class="badge badge-warning">{{$user->status}}</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary btn-sm float-left mr-1" style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" title="edit" data-placement="bottom"><i class="fas fa-edit"></i></a>
                                            <form method="POST" action="{{route('user.destroy',[$user->id])}}">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger btn-sm dltBtn" data-id={{$user->id}} style="height:30px; width:30px;border-radius:50%" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                        {{-- Delete Modal --}}
                                        {{-- <div class="modal fade" id="delModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="#delModal{{$user->id}}Label" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="#delModal{{$user->id}}Label">Delete user</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ route('user.destroy',$user->id) }}">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit" class="btn btn-danger" style="margin:auto; text-align:center">Parmanent delete user</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                        </div> --}}
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

                .zoom {
                    transition: transform .2s;
                    /* Animation */
                }

                .zoom:hover {
                    transform: scale(3.2);
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
                $('#user-dataTable').DataTable({
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