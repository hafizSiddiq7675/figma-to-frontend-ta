<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="{{asset('assets/style.css')}}" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>four-CV</title>
</head>
<body>
    {{--  <div class="card">  --}}
       
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12" style="background-color: #F4EFD7;">
                    <div class="avatar">
                        <img src="{{ asset('assets/images/avatar.png') }}" alt="profile picture" width="230" height="230">
                </div>



                <div><p class="education-contact"> Contact</p></div>

                    <div><div class="icon-image">

                        <div class="image-block">
                            <div> 
                             

                                <img src="{{asset('assets/images/email.png')}}" alt="profile Pic">
                            </div>
                            <div> <img src="{{asset('assets/images/location.png')}}" alt="profile Pic">
                            </div>
                            <div><img src="{{asset('assets/images/phone.png')}}" alt="profile Pic">
                            </div>
        
                        </div>
        
                        <div class="data-block">
                            <div class=""> Email</div>
                            <div class=""> Address</div>
                            <div class=""> Phone </div>
        
                        </div>
                    </div>
                </div>
                        <div class="skill-language">
                        <div ><p class="education">Language</p></div>
                        <h6 class="paragraph-alignment"> English - Native</h6>
                        <h6 class="paragraph-alignment">  French - Intermediate </h6>
                        <h6 class="paragraph-alignment"> Spanish - Basic</h6>
                       
                       
                     </div>
                     <div class="skill-language">
                        <div><p class="education"> Skills</p></div>
                            <div> <span> English</span></div>
                                <div><span> Urdu</span></div>
                                    <div><span> German</span> </div>
                       
                     </div>               
               
               
               
                </div>



                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12" style="background-color:#ffff;">
                    
                    <div class="main-john"> <h3 class="john">john Doe</h3>
                    <h4 class="designation">Designation</h4></div>
                    <div class="profile-related">
                    <div class="profile-div"><span class="profile">Profile</span>
                        <div class="prof-para-div"><p class="prof-para">I am an experienced professional seeking an opportunity to  my background in data analysis 
                            and market trend research. I am adedicated and detail-oriented 
                            marketing specialist looking an opportunity.</p></div>
                    </div>

                    <div class="education-div"><span class="education-details">Education</span></div>
                    <div class="degree-div">
                        <span class="degree-name">Your degree</span>
                    </div>
                    <span class="university-data">university. city</span>
                  
                    
                    <div><span class="degree-name-second">Your degree</span>
                    </div>

                   <span class="university-data">university. city</span>


                   <div class="education-div2"><span class="education-details">Employement</span></div>
                   <div class="degree-div3">
                       <span class="degree-name">Junior designer</span>
                   </div>
                   <span class="university-data2">Name of university</span>
                 

                   <div  class="degree-div4"><span class="degree-name-second">senior designer</span>
                   </div>

                  <span class="university-data2">Name of university</span>






                </div>



            </div>
        </div>
    {{--  </div>  --}}
    
</body>
</html>