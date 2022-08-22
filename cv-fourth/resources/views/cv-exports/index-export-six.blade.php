<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="{{asset('assets/six-cv.css')}}" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>cv-six</title>
</head>
<body> 






    {{--  <div class="card">  --}}

       {{--  container starts from there  --}}
     <div class="container-fluid">
        {{--   card starts  --}}
{{--  row image and description  --}}
<div class="row">
    
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12" style="background-color: #3A7840;height:320px;">
            <div class="avatar">
                <img src="{{ asset('assets/images/avatar.png') }}" alt="profile picture" width="230" height="230" class="image">
            </div>
        </div>
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12" style="background-color: #3A7840;height:320px;">
            <div class="profile-description">
                <h3>Your Name</h3>
                <h4>Designation</h4>
              
            </div>
        </div>

    </div>
{{--  row email data  --}}
<div class="row" style="background-color:#3A7840;height:110px;">
    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12" style="height:1px;"></div>
    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" style="background-color: #3A7840;height:20px;">
       <div> <img src="{{ asset('assets/images/whiteemail.png') }}" alt="profile picture">  
          <span class="font-check">Your Email</span>
       </div>
    </div>
    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12" style="height:1px;"></div>

        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" style="background-color: #3A7840;height:20px;">
            <div> <img src="{{ asset('assets/images/whiteloc.png') }}" alt="profile picture">  
                <span class="font-check">address</span>
             </div>
        </div>
        <div class="col-xl-1 col-lg-1 col-md-1 col-sm-12 col-12" style="height:1px;"></div>

            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12" style="background-color:#3A7840;height:20px;">
                <div> <img src="{{ asset('assets/images/whitephn.png') }}" alt="profile picture">  
                    <span class="font-check">phone number</span>
                 </div>
            </div>


</div>




        {{--  third row starts  --}}
    <div class="row">
           
    
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12" style="background-color: #FFFFFF;height:820px;">
                <h2 class="skill-name">Skills</h2>
                <div class="parent">
                <div class="slash-dash">
                    <div class="broad">___</div>
                    <div class="broad">___</div>
                    <div class="broad">___</div>
                    <div class="broad">___</div>

                </div>
                

                <div class="skill-set">
                    <div class="skill-get">Deveoping</div>
                    <div class="skill-get">Programming</div>
                    <div class="skill-get">Coding</div>
                    <div class="skill-get">Designing</div>

                </div>





                </div> 
                <h2 class="skill-name">Language</h2>
                <div class="parent">
                <div class="slash-dash">
                    <div class="broad">___</div>
                    <div class="broad">___</div>
                    <div class="broad">___</div>
                </div>
                

                <div class="skill-set">
                    <div class="skill-get">English</div>
                    <div class="skill-get">Urdu</div>
                    <div class="skill-get">German</div>

                </div>





                </div> 
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12" style="background-color:#FFFFFF;
            ;height:820px;">
                <h2 class="skill-name">Profile</h2>
                <div class="parent">
       
                <p class="profile-paragraph">I am an experienced professional seeking an opportunity to  my background in data analysis and market trend research. 
                    I am a dedicated and detail-oriented marketing spey professional skills.
                    I am an experienced professional seeking an opportunity to  my background in data analysis and market trend research.
                    I am a dedicated and detail-oriented marketing spey professional skills</p>
                </div>
                <div>
                    <h2 class="skill-name">Education</h2>

                <div class="set-store">
                    <div class="b-degree"><p>Bachelor Degree</p><p style="margin-left: 270px;margin-top:-30px;">(years)</p></div>
                    <div class="n-uni"><p>Name of university</p></div>
                    <div class="b-degree"><p>Bachelor Degree</p><p style="margin-left: 270px;margin-top:-30px;">(years)</p></div>
                    <div class="n-uni"><p>Name of university</p></div>

                </div>

                </div>
                <div>
                    <h2 class="skill-name">Employement</h2>

                <div class="set-store">
                    <div class="b-degree"><p>Junior designer</p><p style="margin-left: 270px;margin-top:-30px;">(years)</p></div>
                    <div class="n-uni"><p>Name of university</p></div>
                    <div class="b-degree"><p>senior designer</p><p style="margin-left: 270px;margin-top:-30px;">(years)</p></div>
                    <div class="n-uni"><p>Name of university</p></div>

                </div>

                </div>

            </div>

      

