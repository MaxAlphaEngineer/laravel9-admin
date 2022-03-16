@extends('layouts.master')

@section('title') @lang('translation.User_List') @endsection

@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Contacts @endslot
        @slot('title') Permissions @endslot
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
                                <a href="{{route('permissions.create')}}" type="button"
                                   class="btn btn-success btn-rounded waves-effect waves-light mb-2 me-2"><i
                                        class="mdi mdi-plus me-1"></i> New Permission</a>
                            </div>
                        </div><!-- end col-->
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle table-nowrap mb-lg-5">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($permissions as $permission)
                                <tr>
                                    <td>
                                        {{$permission->id}}
                                    </td>
                                    <td>{{$permission->name}}</td>
                                    <td>
                                        <p class="mb-0">{{$permission->title}}</p>
                                    </td>



                                    </td>
                                    <td>{{  date('j-F, Y ', strtotime($permission->created_at))}}</td>
                                    <td>
                                        <ul class="list-inline font-size-20 contact-links mb-0">
                                            <li class="list-inline-item px-2">
                                                <a href="{{route('permissions.show', $permission)}}" title="View"><i
                                                        class="bx bx bx-show-alt"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a href="{{route('permissions.edit', $permission)}}" title="Edit"><i
                                                        class="bx bx-pencil"></i></a>
                                            </li>
                                            <li class="list-inline-item px-2">
                                                <a class="link-dark d-inline-block" href="#"
                                                   onclick="if(confirm('Delete this record?')){document.getElementById('delete-entity-{{ $permission->id }}').submit();return false;}"><i
                                                        class="bx bx-trash"></i>
                                                </a>
                                            </li>
                                            <form id="delete-entity-{{ $permission->id }}"
                                                  action="{{ route('permissions.destroy', $permission) }}" method="POST">
                                                <input type="hidden" name="_method" value="DELETE">
                                                @csrf
                                            </form>
                                        </ul>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    {{$permissions->links('components.pagination')}}

                </div>
            </div>
        </div>
    </div>




@endsection
