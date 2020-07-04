<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/style.css">


</head>
<body>
  <div class="row">
  <div class="column" style="background-color:#aaa;">

  </div>
  
</div>

<center>
   

 

  @foreach($details as $detail)
       
               @if($detail->type=='video')
                    <div class="details">
                            <h2 align="left">Title: {{$detail->title}}</h2>
                             <iframe width="420" height="300" src="https://www.youtube.com/embed/{{$detail->video_id}}"></iframe><br>
                             <h4 align="left"> Brief:{{$detail->brief}}</h4><br>
                            <h4 align="left">Body: {{$detail->body}}</h4><br>
                           <h4 align="left"> Share Option.....: {{$detail->link}}</h4>
                    </div>
                 @else     
                   <div class="details">
                            <h2 align="left">Title: {{$detail->title}}</h2>
                             <img src="/image/{{$detail->image}}" class="details_pic_1" alt=""><br>
                             <h4 align="left"> Brief:{{$detail->brief}}</h4><br>
                            <h4 align="left">Body: {{$detail->body}}</h4><br>
                           <h4 align="left"> Share Option.....: {{$detail->link}}</h4>
                    </div>
                @endif
     @endforeach
        </div>

</center>

  </body>

</html>
