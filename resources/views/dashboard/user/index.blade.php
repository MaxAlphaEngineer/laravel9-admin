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
                                   {{$user->id}}
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
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="{{route('users.show', $user)}}" title="View"><i
                                                        class="bx bx bx-show-alt"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a href="{{route('users.edit', $user)}}" title="Edit"><i
                                                        class="bx bx-pencil"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a class="link-dark d-inline-block" href="#"
                                                   onclick="if(confirm('Delete this record?')){document.getElementById('delete-entity-{{ $user->id }}').submit();return false;}"><i
                                                        class="bx bx-trash"></i>
                                                </a>
                                            </li>
                                            <form id="delete-entity-{{ $user->id }}"
                                                  action="{{ route('users.destroy', $user) }}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                @csrf
                                            </form>
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
