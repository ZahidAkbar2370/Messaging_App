@extends("Student\layout")
@section("content")

    <div class="cotainer">
        <div class="row">
           
       <div class="row-fluid sortable">		
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon user"></i><span class="break"></span>Add Users</h2>
            </div>
            <div class="box-content">
                <div class="box-content" >
                @foreach ($all_users as $user)
                    <div style="background-color: rgb(219, 186, 186);padding:10px;color:rgb(0, 0, 0)">
                        @if ($user->id != Auth::user()->id)
                        <a href="messages/{{ $user->id }}"><h2 style="color: white">{{ $user->name }}</h2></a>
                        <p>{{ $user->email }}</p>
                    </div>
               
              
                @endif
                
                
    
                @endforeach
                </div>
            
        </div><!--/span-->
                
    </div><!--/row-->

@endsection