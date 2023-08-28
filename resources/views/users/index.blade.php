@extends('layout.app')

@section('contain')
    <h3>All User</h3>

    <a href="{{route('users.create')}}" class="btn btn-dark mb-2"> Add User</a>

    <div class="table-responsive-sm">
        <table class="table table-secondary">
            <thead>
                <tr>
                    <th scope="col">S.no</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email </th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                
                @foreach ($users as $user)
                <tr class="">
                    <td>{{$loop->index + 1}}</td>
                    <td scope="row">{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                       
                        
                            @foreach ($user->roles as $role)
                                {{ $role->name }}{{ !$loop->last ? ',' : '' }}
                            @endforeach
                       
                
                    
                    </td>
                    <td>
                        <a href="{{route('users.show' , $user->id)}}" class="btn btn-smbtn-dark ">View</a>
                        <a href="{{route('users.edit' , $user->id)}}" class="btn btn-smbtn-dark">Edit</a>

                        <form action="{{route('users.destroy', $user->id)}}" method="Post" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>

                        </form>

                        

                    </td>
                </tr>

                @endforeach
                

            </tbody>
        </table>
    </div>
    





@endsection