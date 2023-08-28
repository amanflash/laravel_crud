@extends('layout.app')

@section('contain')
    <h3> User Details</h3>
    <div class="row">
        <div class="col-sm-4">
            <label for="">Name</label>
            <p>{{$user->name}}</p>
        </div>
        <div class="col-sm-4">
            <label for="">Email</label>
            <p>{{$user->email}}</p>
        </div>
        <div class="col-sm-4">
            <label for="">Role</label>
            <p>
                @foreach ($user->roles as $role)
                    {{ $role->name }}{{ !$loop->last ? ',' : '' }}
                @endforeach
            </p>
        </div>
    </div>
  
    
    
    
    
    </form>






 




@endsection