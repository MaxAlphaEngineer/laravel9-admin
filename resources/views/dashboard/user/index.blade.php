@extends('layouts.master')

@section('title') @lang('translation.User_List') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Contacts @endslot
        @slot('title') Users List @endslot
    @endcomponent

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-sm-4">
                            <div class="search-box me-2 mb-2 d-inline-block">
                                <div class="position-relative">
                                    <input type="text" class="form-control" placeholder="Search...">
                                    <i class="bx bx-search-alt search-icon"></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="text-sm-end">
                                <a href="{{route('users.create')}}" type="button"
                                        class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                                        class="mdi mdi-plus me-1"></i> New Customers</a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-lg-5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Username</th>
                                <th>Phone / Email</th>
                                <th>Rating</th>
                                <th>Role</th>
                                <th>Joining Date</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>
                                    <div class="form-check font-size-16">
                                        <input class="form-check-input" type="checkbox" id="customerlistcheck01">
                                        <label class="form-check-label" for="customerlistcheck01"></label>
                                    </div>
                                </td>
                                <td>{{$user->name}}</td>
                                <td>
                                    <p class="mb-1">{{$user->phone??""}}</p>
                                    <p class="mb-0">{{$user->email}}</p>
                                </td>

                                <td><span class="badge bg-success font-size-12"><i class="mdi mdi-star me-1"></i>
                                            4.2</span></td>
                                <td>
                                    <div>
                                        @foreach($user->getRoleNames() as $role)
                                        <a href="#" class="badge badge-soft-primary font-size-11 m-1">{{$role}}</a>
                                        @endforeach
                                    </div>
                                </td>
                                <td>{{  date('j-F, Y ', strtotime($user->created_at))}}</td>
                                <td>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle card-drop" data-bs-toggle="dropdown"
                                           aria-expanded="false">
                                            <i class="mdi mdi-dots-horizontal font-size-18"></i>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-pencil font-size-16 text-success me-1"></i>
                                                    Edit</a></li>
                                            <li><a href="#" class="dropdown-item"><i
                                                        class="mdi mdi-trash-can font-size-16 text-danger me-1"></i>
                                                    Delete</a></li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$users->links('components.pagination')}}

                </div>
            </div>
        </div>
    </div>




@endsection
