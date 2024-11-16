<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        
        /* root */

        :root{
            --black:#220901;
            --brown:#621708;
            --red:#941b0c;
            --orange:#bc3908;
            --light-orange:#f6aa1c;
            --border-radius:20px;
        }

        /* general style */

        *{
            padding: 0%;
            margin: 0%;
            box-sizing: border-box;
            font-family: "Lucida Console", "Courier New", monospace;
            letter-spacing: 1.5px;
            color: var(--light-orange);
        }

        body{
            background-color: var(--brown) !important;
        }

        /* nav bar style */

        nav{
            width: 98%;
            margin: auto;
            height:15vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: var(--light-orange);
            background-color: var(--black);
            text-transform: uppercase;
            font-size: 1.2em;
            font-weight: bold;
            border-radius: 0 0 20px 20px;
            animation: navBar 0.5s ease-in;
        }
        .logo{
            width: 60px;
            height: 60px;
            animation: logoSpin 3s infinite linear;
        }
        
        /* nav bar animation */

        @keyframes navBar{
            0%{
                transform: translateY(-100px);
                opacity: 0;
            }
            100%{
                transform: translateY(0px);
                opacity: 1;
            }
        }

        /* logo animation */

        @keyframes logoSpin{
            0%{
                transform: rotate(0deg);
            }
            100%{
                transform: rotate(360deg);
            }
        }

        /* main style */
        main{
            width: 100%;
            height: 85vh;
            display: flex;
            align-items: center;
        }

        /* content style */

        .content{
            width: 76%;
            margin: auto;
            height: 80vh;
            display: flex;
            align-items: center;
            flex-direction: column;
            background-color: var(--black);
            border-radius: var(--border-radius) ;
            animation: contentAnimation 0.5s ease-in;
            overflow-y: scroll;
        }

        /* content animation */

        @keyframes contentAnimation{
            0%{
                transform: translateY(100px);
                opacity: 0;
            }
            100%{
                transform: translateY(0px);
                opacity: 1;
            }
        }


        /* sidebar style */
        
        /* aside style */

        aside{
            width: 20%;
            height: 80vh;
            margin: auto;
            background-color: var(--black);
            color: var(--light-orange);
            display: flex;
            align-items: center;
            justify-content: start;
            flex-direction: column;
            border-radius:20px;
            animation: aside 0.5s ease-in;
        }

        /* aside animation */

        @keyframes aside{
            0%{
                transform: translatex(-100px);
                opacity: 0;
            }100%{
                transform: translatex(0px);
                opacity: 1;
            }
        }

        /* sidebar title style */

        .sidebar-title{
            width: 100%;
            height: 10%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2em;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            border-bottom: 2px solid var(--light-orange);
        }

        /* sidebar style */

        .sidebar{
            width: 100%;
            height: 90%;
            display: flex;
            align-items: center;
            justify-content: start;
            flex-direction: column; 
        }

        /* sidebar item style */

        .sidebar-item{
            width: 98%;
            height: 10%;
            margin-top:5px; 
            text-decoration: none;
            color: var(--light-orange);
            font-weight: bold;
            display: flex;
            align-items:center;
            justify-content: center;
            border-radius:20px;
            transition: 0.3s ease-in;
        }

        /*  sidebar item style hover */
        
        .sidebar-item:hover{
            background-color: var(--brown);
        }

        /* card style */

        .container-cards{
            display: flex;
            align-items: center;
            justify-content: space-around;
            flex-wrap: wrap;
            width: 100%;
            height: 90%;
        }

        .card-img{
            width: 100%;
            height: 80%;
        }

        .ccard{
            width: 30%;
            display: flex;
            text-align: center;
            justify-content: center;
            align-items: center;
            background-color: var(--black);
            color: var(--light-orange);
            border: 1px solid var(--light-orange); 
            border-radius: var(--border-radius);
            padding: 4px;
            margin: 10px;
            transition: 0.3s ease-in;
        }

        .ccard:hover{
            transform: scale(1.1);
        }


        .btn-add{
            background-color: var(--light-orange); 
            color: var(--black);
            border: none;
            margin: 20px auto;  
            cursor: pointer;
            font-size: 18px; 
            padding: 10px 20px; 
            border-radius: 4px;
        }

        .btn-add a{
            text-decoration: none;
            color: var(--black);
        }
        
        form {
            background-color: var(--black);
            width: 100%;
            height: 100%;
            padding: 20px;
            border-radius: 8px; 
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        form input[type="text"], form input[type="file"], form button { 
            display: block;
            width: 100%;
            padding: 10px; 
            margin-bottom: 10px; 
            border: 1px solid var(--light-orange); 
            border-radius: 4px; 
            font-size: 16px;
            background-color: var(--black);
            color: var(--light-orange);
        }
        
        form input[type="file"] { 
            padding: 6px 10px;
            background-color: var(--black);
        }
        
        form button { 
            background-color: var(--light-orange); 
            color: var(--black);
            border: none; 
            cursor: pointer;
            font-size: 18px; 
        } 
        form button:hover , .btn-add:hover{ 
            background-color: var(--orange);
        }

        input[type="text"]::placeholder{
            color: var(--light-orange);
        } 
        input[type="file"]::file-selector-button{ 
            background-color: var(--black);
            color: var(--light-orange);
            border: 1px solid var(--light-orange); 
            cursor: pointer;
        }

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Gestion de restaurants</title>
</head>
<body>
    @include('partials.navbar')
    <main>
        @include('partials.sidebar')
        <div class="content">
            @empty($slot)
            {{$slot='No content'}}
            @else
            {{$slot}}
            @endempty
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>