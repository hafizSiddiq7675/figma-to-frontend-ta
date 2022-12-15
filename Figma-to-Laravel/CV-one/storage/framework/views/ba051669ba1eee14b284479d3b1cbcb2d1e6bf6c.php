<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href='https://fonts.googleapis.com/css?family=Inter' rel='stylesheet'>
    <title>CV one</title>
</head>
<style>
    .shadow-effect{
        box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;    

    }
    card{
        display:flex;
        justify-content: center;
        background-color: #ffff;

    }
    .preview-column{
        display: flex;
        flex-direction: column;
        background: #78A060;
        height:1340px;
        width:72%;
    
        margin-left:80px;
    }
    .preview-column-right{
        display: flex;
        flex-direction: column;
        background:#ffff;
        height:1340px;
        width:72%;
   
    
        margin-left:10px;
    }
    .avatar{
        display: flex;
        justify-content: center;
        padding-top:130px;
    }
    .content{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 600;
        font-size: 22px;
        line-height: 22px;
        color: #000000;
        margin-left:64px;
        padding-top:80px;

    }
    .profile-description{
        display: flex;
        justify-content: center;
           
        font-family: 'Inter';
        font-style: normal;
        font-weight: 300;
        font-size: 18px;
        line-height: 21px;
        width:95%;
        color: #000000;
        padding-left:64px;
        padding-top:20px;
        text-align: left;

    }
    .location-allocation{
        display: flex;
        flex-direction: row;
        justify-content: space-between;             
        padding-left:64px;
        padding-top:20px;


    }
    .logo-allocation{
        display:flex;
        flex-direction: column;        
    }
    .alignment{
        padding:12px;    
    }
    .address-data{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 590;
        font-size: 16px;
        line-height: 47px;
        padding-top:2px;
        color: #000000;
        
    }
    .personal-data{
        margin-right: 250px;
    }
    .skill-control{
        display: flex;
        flex-direction: column;
        padding-left: 64px;
        padding-top:32px;
    }
    h4{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 650;
        font-size: 24px;
        line-height: 22px;
        /* identical to box height */
        padding-bottom:10px;

        color: #000000;

    }
    span{
        font-family: 'Inter';
        font-style: normal;
        font-weight: 550;
        font-size: 18px;
        line-height: 32px;
        /* identical to box height */
        word-spacing: 1px;
        letter-spacing: 0.5px;
        
        color: #000000;

    }
  .second-start{
    padding-top:475px;
  }
  .paragraph-alignment{
    margin-bottom:-7px;
  }
.name-data{
    margin-top:70px;
    margin-left:466px;
    color:#FFFFFF;
    font-family: 'Inter';
font-style: normal;
font-weight: 700;
font-size: 35px;
line-height: 42px;

color: #FFFFFF;

}
.name-data-two{
    margin-left:476px;
    font-family: 'Inter';
    font-style: normal;
font-weight: 400;
font-size: 20px;
line-height: 24px;

color: #FFFFFF;


}
        
 
</style>
<body>
   <card>

    <div class="container">
        <div class="row shadow-effect">
  
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="preview-column">

                            <div class="avatar">
                            <img src="<?php echo e(asset('assets/images/avatar.png')); ?>" alt="profile Pic" height="350" width="350" style="z-index:1;margin-top:-30px;">
                            </div>    
              
                            <div class="content">
                                <label>
                                    Profile
                                </label>
                             </div>
                             
                             <div class="profile-description">
                                <p>
                                    I am an experienced professional seeking an opportunity to get
                                     my background in data analysis and market trend research. 
                                     I am a dedicated and detail-oriented marketing spey professional skill
                                </p>
                             </div>

                             <div class="location-allocation">
                                <div class="logo-allocation">
                                   <div class="alignment"> <img src="<?php echo e(asset('assets/images/emaillogo.png')); ?>" alt="profile Pic" ></div>
                                   <div class="alignment"> <img src="<?php echo e(asset('assets/images/addresslogo.png')); ?>" alt="profile Pic" ></div>
                                   <div class="alignment">  <img src="<?php echo e(asset('assets/images/phonelogo.png')); ?>" alt="profile Pic" ></div>

                                </div>

                             <div class="personal-data ">
                                   <div class="address-data"> Email</div>
                                   <div class="address-data"> Address</div>
                                   <div class="address-data"> Phone </div>

                                </div>
                             </div>


                             <div class="skill-control">
                                <div><h4>Computer Skills</h4></div>
                                    <div> <span>Text processor</span></div>
                                        <div><span> Spreadsheet</span></div>
                                            <div><span> Slide Presentation</span> </div>
                               
                             </div>

                             <div class="skill-control">
                                <div><h4>Volunteer Experience</h4></div>
                                    <div> <span>Velveral food inc. </span></div>
                                        <div><span> Participation</span></div>
                               
                             </div>


                        </div>
                    </div>

                   

                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12" > 
                        <div class="preview-column-right">
                           
                            <div class="second-start"> </div>

                       
                      <div class="detail-review">
                        <div class="skill-control">
                            <div><h4>Education</h4></div>
                                <div> <span>Bachelor Degree</span><span>(years)</span></div>
                                <div><p>Name of university</p></div>
                                    <div><span> Bachelor Degree</span><span>(years)</span></div>
                                    <div><p>Name of university</p></div>

                         </div>
                         <div class="skill-control">
                            <div><h4>Work Experience </h4></div>
                                <div> <span>Junior UI   Designer</span><span>(years)</span></div>
                                <div><p>Name of company</p></div>
                                    <div><span> Senior UI designer</span><span>(years)</span></div>
                                    <div><p>Name of company</p></div>

                           
                         </div>
                         <div class="skill-control">
                            <div><h4>Language</h4></div>
                            <label><p class="paragraph-alignment"> English - Native</p></label>
                            <label><p class="paragraph-alignment">  French - Intermediate </p></label>
                            <label><p class="paragraph-alignment"> Spanish - Basic</p></label>
                           
                          
                           
                           
                         </div>
                         <div class="skill-control">
                            <div><h4>Refernece</h4></div>
                              
                                    <div><p>It is a long established fact that a reader will be distracted by the.</p></div>

                         </div>
                      </div>
                    </div>
          
                    



        </div>
        

<div class="container-fluid">
    <div class="row" style="height:270px;width:102.4%;background: #78A060;margin-top:-1200px;z-index:1;">
    <div>
        <h1  class="name-data">Your  Name</h1>
        <h2  class="name-data-two">Designation</h2>
    </div>
    </div>
</div>
    </div>
   </card>

   
</body>
</html><?php /**PATH /Users/hafiz/www/figma-to-frontend-ta/Figma-to-Laravel/CV-one/resources/views/cv/index.blade.php ENDPATH**/ ?>