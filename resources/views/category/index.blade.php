@extends('layout')

@section('dashboard-content')
@if(Session::get('deleted'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert" id="gone">
        <strong>{{Session::get('deleted')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden=true>&times;</span>
        </button>
    </div>
    @endif

    @if(Session::get('delete-failed'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert" id="gone">
        <strong>{{Session::get('delete-failed')}}</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
            <span aria-hidden=true>&times;</span>
        </button>
    </div>
    @endif

    <main>
        <div class="container-fluid px-4">
            <br>
                <h1>Category List</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Categories
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody> @foreach($categories as $category )
                                        <tr>
                                            <td>{{$category->name}}<br/></td>
                                            <td>
                                                <a href="{{URL::to('edit-category')}}-{{ $category->id }}" class="btn btn-outline-primary btn-sm">Edit</a> 
                                                |
                                                <a href="{{URL::to('delete-category')}}-{{ $category->id }}" 
                                                class="btn btn-outline-danger btn-sm" onclick="checkDelete()">Delete</a> 
                                                
                                            </td>
            
                                        </tr>
                                    </tbody>@endforeach
                                    <tfoot>
                                        <tr>
                                            <th>Category Name</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
        </main>
        <script>
            function checkDelete(){
                var check = confirm("Are you sure want to delete this?");
                if(check){
                    return true;
                }
                return false;
            }
        </script>
@stop