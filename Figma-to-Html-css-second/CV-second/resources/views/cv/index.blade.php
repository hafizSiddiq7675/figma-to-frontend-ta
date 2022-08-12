<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="{{asset('public/assets/style.css')}}">

    <title>CV-second</title>
</head>
<style>
    .shadow-effect{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;    
    
    }
    .card{
        display:flex;
        background-color: #ffff;

    
    }
    .preview-column-right{
        display: flex;
        flex-direction: column;
                align-items:center;

        background: #96D5C6;
        height:1340px;
        width:100%;
        margin-left:11px;
    }

    .preview-column{
        display: flex;
        flex-direction: column;
        align-items:center;
        height:1340px;
        width:100%;
    
    
        margin-left:11px;
    }
    .name-div{
        padding-top:110px;
    }
    .name-value{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 700;
        font-size: 45px;
        line-height: 42px;
        color: #000000;


    }
    .line-border{
        margin-top:30px;
        width: 245px;
        border: 3px solid #5B5959;
            }
            .designation{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 400;
                font-size: 26px;
                line-height: 24px;
                color: #5B5959;

            }
            .designation-div{
                padding-top:24px;
            }
            .profile{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 18px;
                line-height: 22px;
                /* identical to box height */


                color: #000000;

            }
            .profile-{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 22px;
                line-height: 22px;
                /* identical to box height */
                                
                padding-left:10px;
                color: #000000;

            }
            .profile-description{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 400;
                font-size: 12px;
                line-height: 15px;

                color: #5B5959;

            }
            .education-details{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 18px;
                line-height: 22px;
                /* identical to box height */


                color: #000000;

            }
            .education-detail{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 22px;
                line-height: 22px;
                /* identical to box height */
                padding-left: 72px;

                color: #000000;

            }
            .degree-name{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 12px;
                line-height: 15px;
                /* identical to box height */
                margin-left:104px;
                color: #565252;

            }
            .degree-name-second{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 12px;
                line-height: 15px;
                /* identical to box height */

                padding:12px;
                color: #565252;

            }
            .degree-year{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 600;
                font-size: 12px;
                line-height: 15px;
                /* identical to box height */
                color: #565252;
                margin-left:115px;

            }
            .university-data{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 400;
                font-size: 12px;
                line-height: 15px;
                /* identical to box height */


                color: #565252;

            }
            .university-description{
                font-family: 'Inter';
                font-style: normal;
                font-weight: 400;
                font-size: 12px;
                line-height: 15px;

                color: #5B5959;
            }

            .profile-div{
                padding-top:33px;
                padding-right:195px;
                padding-bottom:10px;
            }


            .paragraph-div{
                width: 245px;
            }
            .education-div{
                padding-top:13px;
                padding-right:165px;
            }
            .degree-div{
                padding-top:16px;
                padding-right:100px;
            }
            .uni-div{
                padding-top:10px;
                padding-bottom:20px;
                padding-right:138px;

            }

            .language-div{
                padding-top:10px;
                padding-bottom:20px;
                padding-right:155px;
            }
            .languages-div{
                padding-top:1px;
                padding-right:115px;
            }



</style>
<body>
    <div class="card">      
        <div class="container">
            <div class="row shadow-effect">
      
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="preview-column">
                                <div class="name-div" ><span class="name-value">Your Name</span></div>
                                <div class="line-border"></div>
                                <div class="designation-div"><span class="designation">Designation<span></div>
                                <div class="line-border"></div>
                                <div class="profile-div"><span class="profile">Profile</span></div>
                                <div class="paragraph-div"><p class="profile-description">I am an experienced professional seeking an opportunity to get my background in data 
                                    analysis and market trend research. I am a dedicated and detail-oriented 
                                    marketing spey professional skills</p></div>
                                    <div class="education-div"><span class="education-details">Education</span></div>
                                    <div class="degree-div">
                                        <span class="degree-name">Bachelor Degree<span>
                                        <span class="degree-year">(years)</span>
                                    </div>
                                    <div class="uni-div"><span class="university-data">Name of university</div>
                                    <div class="paragraph-div"><p class="profile-description">It is a long established fact that a reader will be
                                         distracted by the readable content of a page when looking at its layout.
                                          The point of using Lorem Ipsum</p></div>

                                          <div><span class="degree-name-second">Master Degree</span>
                                           <span class="degree-year">(years)</span>
                                          </div>

                                          <div class="uni-div"><span class="university-data">Name of university</span></div>

                                        <div class="paragraph-div"><p class="university-description">.It is a long established fact that a reader 
                                            will be distracted by the readable content of a page when looking at its layout
                                             The point of using Lorem Ipsum</p></div>
                                             <div class="language-div"><span class="profile">Language</span></div>
                                             <div class="languages-div"><p class="university-description">English - Native<br/>
                                                French - Intermediate <br/>
                                                Spanish - Basic</p></div>


        
                            </div>
                        </div>    
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="preview-column-right">
                    <div>
                        <img src="{{asset('assets/images/avatar.png')}}" alt="profile Pic">
                    </div>

                    <div >
                        <div class="">
                           <div class=""> <img src="{{public_path('assets/images/email.png')}}" alt="profile Pic" ></div>
                           <div class=""> <img src="{{public_path('assets/images/location.png')}}" alt="profile Pic" ></div>
                           <div class="">  <img src="{{asset('assets/images/phone.png')}}" alt="profile Pic" ></div>

                        </div>

                     <div class="">
                           <div class=""> Email</div>
                           <div class=""> Address</div>
                           <div class=""> Phone </div>

                        </div>
                     </div>


                    




                     <div class="education-div"><span class="education-detail">Work Experience </span></div>
                     <div class="degree-div">
                         <span class="degree-name">Junior UI   Designer
                            <span>
                         <span class="degree-year">(years)</span>
                     </div>
                     <div class="uni-div"><span class="university-data">Name of company</div>
                     <div class="paragraph-div"><p class="profile-description"> It is a long established fact that a reader will be distracted by the.</p></div>

                           <div><span class="degree-name-second">Senior UI designer</span>
                            <span class="degree-year">(years)</span>
                           </div>

                           <div class="uni-div"><span class="university-data">Name of company</span></div>

                         <div class="paragraph-div"><p class="university-description">It is a long established fact that a reader will be distracted by the.</p></div>
                              <div class="language-div"><span class="profile-">Refernece</span></div>
                              <div class="paragraph-div"><p class="profile-description">
                                It is a long established fact that a reader<br/> will be distracted by the.
                                 </p></div>










                </div>
            </div>    
            </div>

        </div>
    </div>
    </div>
</body>
</html>