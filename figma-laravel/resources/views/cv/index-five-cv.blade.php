<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href="{{asset('assets/four-cv.css')}}" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <title>five-CV</title>
</head>
<body>
    <div class="card">
    <div class="container">
              <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12" style="background-color:#ffff;height:320px;">
                <div class="avatar">
                    <img src="{{ asset('assets/images/avatar.png') }}" alt="profile picture" width="230" height="230" class="image"></div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12" style="background-color:#ffff;height:320px;">
                <div class="profile-description">
                    <h3>Your Name</h3>
                    <h4>Designation</h4>
                    <p>I am an experienced professional seeking an opportunity to 
                         my background in data analysis and market trend and research. 
                         I am a dedicated and detail-oriented marketing spey professional skills</p>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12" style="background-color:#FFE9E9;height:700px;">
                <div class="alignment-side">
                    <div class="education">Education</div>
                   <div class="one-side">
                    <div class="degree-div">
                       <span> Bachelor Degree</span>
                       <span class="years-1">(years)</span>
                    </div>
                    <div class="uni-div">Name of university</span></div>

                    <div class="degree-div" >Master Degree
                        <span class="years-2">(years)</span>
                    </div>

                    <div>Name of university</div>

                   </div>
                    <div class="education">Work Experience</div>
                    <div class="one-side">

                    <div class="degree-div">
                        Junior Ui Designer
                        <span class="years-3">(years)</span>
                    </div>
                    <div class="uni-div">Name of comapnny</span></div>

                    <div class="degree-div">Senior Ui Designer
                        <span class="years-4" >(years)</span>
                    </div>

                    <div>Name of company</div>

                    </div>
                    
                   
                    <div class="one-side">

                 <div class="skill-control">
                        <div ><p class="education">Language</p></div>
                        <h6 class="paragraph-alignment"> English - Native</h6>
                        <h6 class="paragraph-alignment">  French - Intermediate </h6>
                        <h6 class="paragraph-alignment"> Spanish - Basic</h6>
                       
                       
                     </div>

                    

                    </div>
                    
                   </div>
                    
            </div>
            <div class="col-xl-1 col-lg-1 col-md-1  col-sm-12 col-12" style="background-color:#FFE9E9;height:700px;">
                   <div class="line-image"> <img src="{{ asset('assets/images/Line.png') }}" alt="Line picture"></div>
            </div>

      

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" style="background-color:#FFE9E9;height:700px;">     
                <div class="parent-image">
                    
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
            <div class="computer-skills">
            <div class="skill-control">
                <div><p class="education">Computer Skills</p></div>
                    <div> <span>Text processor</span></div>
                        <div><span> Spreadsheet</span></div>
                            <div><span> Slide Presentation</span> </div>
               
             </div>

             <div class="skill-control">
                <div><p class="education">Volunteer Experience</p></div>
                    <div> <span>Velveral food inc. </span></div>
                        <div><span> Participation</span></div>
               
             </div>
            </div>

        </div>
            
        </div>
    </div>
</div>
    
</body>
</html>