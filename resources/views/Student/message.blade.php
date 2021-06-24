@extends("Student\layout")
@section("content")
<style type="text/css">
            .my-custom-scrollbar {
        position: relative;
        height: 340px;
        overflow: auto;
        }
        .table-wrapper-scroll-y {
        display: block;
        }
</style>

<h1>{{ $reciver_user_name[0]->name }}</h1> 
<div class="table-wrapper-scroll-y my-custom-scrollbar">

    <table class="table table-bordered table-striped mb-0">
      
      <tbody>
          @foreach ($messages as $message)
          <tr>
              <td>
                  @if ($message->sender_user_id == Auth::user()->id)
                  <h4>{{ Auth::user()->name }}</h4>
                  <p>{{ $message->created_at }}</p>
                  <p>{{ $message->message }}</p>
                  @else
                    <h4>{{ $reciver_user_name[0]->name }}</h4>
                  <p>{{ $message->created_at }}</p>
                  <p>{{ $message->message }}</p>
                  @endif
                  
                </td>
           
          </tr>
          @endforeach
        
        
      </tbody>
    </table>


    
  
  </div>
  <br><br>
  <form action="{{ URL::to('save-messages',$reciver_id) }}" method="POST">
    @csrf
    <textarea name="message" placeholder="Enter Message Here" style="width: 97%"></textarea>
    <input type="submit" value="Send Message">
    </form>

@endsection