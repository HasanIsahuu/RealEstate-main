<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans&display=swap" rel="stylesheet">


<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js%22%3E"></script> 
</head>
<body>
<div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
    <div class="container">
      
        <div class="pjesa1">
          <h1 class="fjala1 ml16">WELCOME</h1> <br>
          <img src="https://i.ibb.co/YBLyRns/njeriulogin.png" alt=""> <br>
          <h3 class="pershkrim">Already on OpenDoor?</h3> <br>
            <span style="background-color:#19A7A7;" class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span> <br>

            <a href="/login" class="myButton">Login here</a>

        </div>



        <div class="pjesa2">
            <img class="foto37" src="https://i.ibb.co/QHzJFmg/logobardh.png" alt=""> <br>
           
            <input class="input1 form-control @error('name') is-invalid @enderror" id="name" type="text"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">
            @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <input class="input1 form-control @error('email') is-invalid @enderror" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <input class="input1 form-control @error('password') is-invalid @enderror" id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password">
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            <input class="input1 form-control" id="password-confirm" type="password"  name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password"> <br>
             <button type="submit" class="myButton1">
                                    {{ __('Register') }}
                                </button>


        </div>
        </form>
    </div> 

    <style>
        

   

        /* PJESA TE ANA E DJATHTE */

        .pjesa2 {
            border-radius:0px 10px 10px 0px;
            background-image: linear-gradient(rgba(0, 0, 0, 0.527),rgba(0, 0, 0, 0.5)) , url('https://voxcitywalks.com/wp-content/uploads/2020/10/london-2.jpg');
            text-align:center;
            background-repeat:no-repeat;
        }
        /* .ml16 {
        color: #402d2d;
        padding: 40px 0;
        font-weight: 800;
        font-size: 2em;
        text-transform: uppercase;
        letter-spacing: 0.5em;
        overflow: hidden;
        } */

        .ml16 .letter {
        display: inline-block;
        line-height: 1em;
        }
        .foto37 {
            width:50%;
            margin-top:50px;
        }


        .forgotpass {
            font-size:17px;
            color:white;
            margin-top:45px;
            margin-right:-115px;
        }

        .myButton1 {
            background-color:transparent;
            border-radius:31px;
            margin-top:40px;
            border:2px solid white;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family: 'DM Sans', sans-serif;
            font-size:17px;
            padding:5px 33px;
            text-decoration:none;
            text-shadow:0px 1px 0px #2f6627;
            margin-left:70px;     
            float:left;       
        }
    
        .myButton1:hover {
            background-color:transparent;
            text-decoration:none;
            color:#797D7F;
        }
      
        .myButton1:active {
            position:relative;
            top:1px;
        }

     


        .input1 {
            margin-left: 65.2px;
            float: center;
            width:430px;
            height:40px;
            border-radius:10px;
            opacity:0.8;
            border:0px;
            margin-top:30px;
            font-weight:800;
            text-indent: 15px;

        }

        .input1:hover {
            border:0;
            outline: none;
        }

        .input1:focus {
            border:0;
            outline: none;
        }




        /* PJESA TE ANA E MAJTE */
        
        .pjesa1 {
            border-radius:10px 0px 0px 10px;
            text-align:center;
            background-color:white;
        }  
        .myButton {
            background-color:transparent;
            border-radius:28px;
            margin-top:20px;
            border:2px solid #797D7F;
            display:inline-block;
            cursor:pointer;
            color:#797D7F;
            font-family: 'DM Sans', sans-serif;
            font-size:17px;
            font-weight:800;
            padding:7px 76px;
            text-decoration:none;
            font
        }
        
        .myButton:hover {
            background-color:transparent;
        }
       
        .myButton:active {
            position:relative;
            top:1px;
        }
        .myButton:hover {
            position:relative;
            text-decoration:none;
            color:#424949;
        }


        .dot {
            height: 22px;
            width: 22px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
        }

        .pershkrim {
            font-weight:bold;
            color:#727272;
            margin-top:10px;
            font-size:23px;

        }

        .fjala1 {
            margin-top:80px;
            letter-spacing:9px;
            font-weight:800;
            color:#727272;
            font-size:30px;
        }


        body {
            margin-top:5%;
            font-family: 'DM Sans', sans-serif;
            background-color:#FFAC12;
        }

       .item {
            width: 60%
        }

        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .container > div {
            flex: 20%; /* or - flex: 0 50% - or - flex-basis: 50% - */
            /*demo*/
            box-shadow: 0 0 0 1px transparent;
            margin-bottom: 10px;
            height:600px;
        }







        
    </style>

<!-- <script>
        // Wrap every letter in a span
var textWrapper = document.querySelector('.ml16');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml16 .letter',
    translateY: [-100,0],
    easing: "easeOutExpo",
    duration: 1400,
    delay: (el, i) => 30 * i
  }).add({
    targets: '.ml16',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 5000000
  });
    </script> -->
</body>
</html>