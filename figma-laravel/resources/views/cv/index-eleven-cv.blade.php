<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/eleven.css')}}">



    <title>Eleven CV</title>
</head>
<body>
   
    <div class="col d-flex justify-content-center">
        <div class="card main-card">
      <div class="container-fluid" >
        <div class="row">
     
         <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
            <div class="card m-5">
                <div class="card-body image-block">
                    <img src="{{ asset('assets/images/div3.png') }}" alt="profile picture" >

                </div>
              </div>
         </div>

         <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">

            <div class="card second-card">
                <div class="card-body">
                    <div class="portfolio">
                        <p class="name">FULL NAME</p> 
                        
                        <p class="name" >JOB POSITION</p> 
                        <p class="about text-decoration-underline">About Us</p> 
                        <p class="">I am an experienced professional seeking an opportunity to my background in data analysis and market trend research. 
                      </p>
                        </div>
                </div>
              </div>

           

         </div>
        </div>
            <div class="row">
                <div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-12">
                    <div class="card m-3 card-one">
                        <div class="card-body">
                           
                                <div>
                                <button class="head-button">
                                    Work Experience
                                </button>
                                </div>
                                <div class="move-left">
                                <div class="year-fit">
                                    <p>Junior designer</p>
                                    <p class="year-gap-one">(years)</p>
                                </div>
                                    <p class="name-company">Name of company</p>
                                    
                                    <div class="year-fit">
                                    <p>Senior designer</p>
                                    <p class="year-gap-one">(years)</p>
                                    </div>
                                    <p class="name-company">Name of company</p>
                
                                </div>
                                    
                                    <div>
                                        <button class="head-button">
                                            Skills
                                        </button>
                                    </div>
                                    <div class="move-left">
                                    <div class="content">
                                        <p>Deveoping</p>
                                        <P>Programming</P>
                                        <P>Coding</P>
                                    </div>  
                                    </div>   
                                     
                                    <div>
                                        <button class="head-button">
                                            Languages
                                        </button>
                                    </div>
                                    <div class="move-left">
                                    <div class="content">
                                        <p>English </p>
                                        <P>Urdu</P>
                                        <P>Persian</P>
                                    </div>  
                                    </div>         
                        </div>
                      </div>
                </div>
                 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-12 ">
                    <div class="card card-one">
                        <div class="card-body ">
                            <div>
                                <button class="head-button">
                                 Contact 
                                </button>
                             </div>
                             <div class="content-photo move-left">
                             <div class="content pictures">
                                 <img src="{{ asset('assets/images/email.png') }}" alt="profile picture" >                       
                                 <img src="{{ asset('assets/images/phone.png') }}" alt="profile picture" >                      
                                 <img src="{{ asset('assets/images/location.png') }}" alt="profile picture" >                 
                                </div>
                                <div class="move-left">
                             <div class="content">
                                 <p>Email</p>
                                 <P>Phone Number</P>
                                 <P>Address</P>
                             </div>
                            </div>
                             </div>
                                <div>
                                <button class="head-button">
                                    Education
                                </button>
                                </div>  
                                <div class="move-left">
                                <div class="year-fit">
                                    <p>Bachelor Degree</p>
                                    <P class="year-gap">(years)</P>
                                </div>
                                    <p class="name-company">Name of institute</p>
                                    
                                    <div class="year-fit">
                                    <p>Master Degree</p>
                                    <p class="year-gap-one">(years)</p>
                                    </div>
                                    <p class="name-company">Name of institute</p>
                                </div>
            
                        </div>
                      </div>
        
                </div>
            </div>































      </div>
        </div>
    </div>

</body>  
</html>
