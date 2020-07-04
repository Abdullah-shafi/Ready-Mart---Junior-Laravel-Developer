<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">


</head>
<body>

  <div class="row">
  <div class="column" style="background-color:#aaa;">

  </div>
  
</div>

<div id="content">
      <div id="container">
       


          <section class="y">
            <h3>Section 1</h3>
  
                <div class="sec_row">
                   <div class="sec1_1st"  >
                     
             @foreach($sec1 as $section1)

              @if($section1->type=='video')
                     <a href="/home/{{$section1->id}} "> <button id="sec1_button"><img src="image/{{$section1->image}}" class="sec1_img1">
                      <img src="image/icon.png" class="sec1_img3"></button></a>

                @else
                      <a href="/home/{{$section1->id}} "> <button class="sec1_img1_w"><img src="image/{{$section1->image}}" class="sec1_img1">
                      </button></a>

                 @endif     
             Title: {{$section1->title}}<br>
                 Brief: {{$section1->brief}}
             @endforeach
                   </div>


@foreach($sec2 as $section2)
                   <div class="sec1_2nd" >
                     
            @if($section2->type=='video')
                   <a href="/home/{{$section2->id}} ">  <button id="sec1_button"><img src="image/{{$section2->image}}" class="sec1_img2">
                      <img src="image/icon.png" class="sec1_img3"></button></a>
            @else
            <a href="/home/{{$section2->id}} "><button class="sec1_img2_w"><img src="image/{{$section2->image}}" class="sec1_img2">
                    </button></a>
            @endif

             Title: {{$section2->title}}
                   </div>
                   @endforeach
                        

                   
                    </div>
                </div>
          
            



          </section>

<section class="hr">
            
          <p class="hr1"></p>

  </section>


          <section class="z">
            <h3>Section 2</h3>

             <div class="sec2_1st" >
                     
               @foreach($sec_2 as $section_2)

                @if($section_2->type=='video')
                    <a href="/home/{{$section_2->id}} "> <button id="sec2_button"><img src="image/{{$section_2->image}}" class="sec2_img1">
                    <img src="image/icon.png" class="sec1_img3"></button></a>

                     @else
                     <a href="/home/{{$section_2->id}} "> <button id="sec2_button"><img src="image/{{$section_2->image}}" class="sec1_img4">
                    </button></a>

                 @endif 



             Title: {{$section_2->title}}<br>
              Brief: {{$section_2->brief}}
              @endforeach
                   </div>



@foreach($sec_2_e as $section2_e)
                   <div class="sec2_2nd" >
                     
            @if($section2_e->type=='video')
                    <a href="/home/{{$section2_e->id}}"> <button id="sec2_button"><img src="image/2.jpg" class="sec2_img2">
                      <img src="image/icon.png" class="sec1_img3"></button></a>

               @else
             <a href="/home/{{$section2_e->id}}"> <button id="sec2_button"><img src="image/2.jpg" class="sec2_img2_e">
                      </button></a>
            @endif        
            Title: {{$section2_e->title}}
                   </div>

       @endforeach             
                       
                       
          </section>
        
      </div>
    </div>




  </body>

</html>
