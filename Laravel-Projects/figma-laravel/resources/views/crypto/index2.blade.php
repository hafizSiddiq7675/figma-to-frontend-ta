<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .card{
            height:350px;
            width:250px;
            border-radius:20px;
           background-color:pink;
        }
        .BxImg{
            text-align: center;
            border:10px solid pink;
            border-radius: 7px;
            object-fit:cover;
            border-top:none;
            border-bottom: none;
        }
        .details{
            text-align: center;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="BxImg">
                    <img src="{{ asset('assets/images/checke.jpg') }}" height="230" width="230" style="border-radius:11px;"> 
                </div>
                    <div class="content">
                        <div class="details">
                            <h2>Create your account</h2>
                            <p>data should be precised</P>
                        </div>
                    </div>
             
            </div>
        </div>
    </div>
    
</body>
</html>