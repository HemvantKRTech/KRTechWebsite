<x-layout>
    @slot('title', 'AR Technology')
    <style>
        /* Fonts Form Google Font ::- https://fonts.google.com/  -:: */
        @import url('https://fonts.googleapis.com/css?family=Abel|Abril+Fatface|Alegreya|Arima+Madurai|Dancing+Script|Dosis|Merriweather|Oleo+Script|Overlock|PT+Serif|Pacifico|Playball|Playfair+Display|Share|Unica+One|Vibur');

        /* End Fonts */
        /* Start Global rules */
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        /* End Global rules */

        /* Start body rules */
        body {
            background-image: linear-gradient(-225deg, #E3FDF5 0%, #FFE6FA 100%);
            background-image: linear-gradient(to top, #a8edea 0%, #fed6e3 100%);
            background-attachment: fixed;
            background-repeat: no-repeat;

            font-family: 'Vibur', cursive;
            /*   the main font */
            font-family: 'Abel', sans-serif;
            opacity: .95;
            /* background-image: linear-gradient(to top, #d9afd9 0%, #97d9e1 100%); */
        }

        .alert {
        color: red;
        font-size: 0.875rem; /* Smaller font size for error messages */
        margin-top: 0.5rem;
    }

    /* You can also style the alert based on additional classes if needed */
    .alert-danger {
        color: red;
    }

        /* |||||||||||||||||||||||||||||||||||||||||||||*/
        /* //////////////////////////////////////////// */




        /* End body rules */

        /* Start form  attributes */
        form {
            width: 450px;
            min-height: 500px;
            height: auto;
            border-radius: 5px;
            margin: 2% auto;
            box-shadow: 0 9px 50px hsla(20, 67%, 75%, 0.31);
            padding: 2%;
            background-image: linear-gradient(-225deg, #E3FDF5 50%, #FFE6FA 50%);
        }

        /* form Container */
        form .con {
            display: -webkit-flex;
            display: flex;

            -webkit-justify-content: space-around;
            justify-content: space-around;

            -webkit-flex-wrap: wrap;
            flex-wrap: wrap;

            margin: 0 auto;
        }

        /* the header form form */
        header {
            margin: 2% auto 10% auto;
            text-align: center;
        }

        /* Login title form form */
        header h2 {
            font-size: 250%;
            font-family: 'Playfair Display', serif;
            color: #3e403f;
        }

        /*  A welcome message or an explanation of the login form */
        header p {
            letter-spacing: 0.05em;
        }



        /* //////////////////////////////////////////// */
        /* //////////////////////////////////////////// */


        .input-item {
            background: #fff;
            color: #333;
            padding: 14.5px 0px 15px 9px;
            border-radius: 5px 0px 0px 5px;
        }



        /* Show/hide password Font Icon */
        #eye {
            background: #fff;
            color: #333;

            margin: 5.9px 0 0 0;
            margin-left: -20px;
            padding: 15px 9px 19px 0px;
            border-radius: 0px 5px 5px 0px;

            float: right;
            position: relative;
            right: 1%;
            top: -.2%;
            z-index: 5;

            cursor: pointer;
        }

        /* inputs form  */
        input[class="form-input"] {
            width: 240px;
            height: 50px;

            margin-top: 2%;
            padding: 15px;

            font-size: 16px;
            font-family: 'Abel', sans-serif;
            color: #5E6472;

            outline: none;
            border: none;

            border-radius: 0px 5px 5px 0px;
            transition: 0.2s linear;

        }

        input[id="txt-input"] {
            width: 250px;
        }

        /* focus  */
        input:focus {
            transform: translateX(-2px);
            border-radius: 5px;
        }

        /* //////////////////////////////////////////// */
        /* //////////////////////////////////////////// */

        /* input[type="text"] {min-width: 250px;} */
        /* buttons  */
        button {
            display: inline-block;
            color: #252537;

            width: 280px;
            height: 50px;

            padding: 0 20px;
            background: #fff;
            border-radius: 5px;

            outline: none;
            border: none;

            cursor: pointer;
            text-align: center;
            transition: all 0.2s linear;

            margin: 7% auto;
            letter-spacing: 0.05em;
        }

        /* Submits */
        .submits {
            width: 48%;
            display: inline-block;
            float: left;
            margin-left: 2%;
        }

        /*       Forgot Password button FAF3DD  */
        .frgt-pass {
            background: transparent;
        }

        /*     Sign Up button  */
        .sign-up {
            background: #B8F2E6;
        }


        /* buttons hover */
        button:hover {
            transform: translatey(3px);
            box-shadow: none;
        }

        /* buttons hover Animation */
        button:hover {
            animation: ani9 0.4s ease-in-out infinite alternate;
        }

        @keyframes ani9 {
            0% {
                transform: translateY(3px);
            }

            100% {
                transform: translateY(5px);
            }
        }
    </style>
   
        <div class="overlay">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="con">
                    <header class="head-form">
                        <h2 class="text-xl font-medium text-center">Log In</h2>
                        <p class="text-center text-gray-600">Login here using your username and password</p>
                    </header>
                    <br>
                    <div class="field-set">
                        <input class="form-input w-full p-3 rounded-md border border-gray-300" id="txt-input" name="email" type="text" placeholder="Username" required>
                        @error('email')
                            <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                        <br>
                        <input class="form-input w-full p-3 mt-4 rounded-md border border-gray-300" type="password" name="password" placeholder="Password" id="pwd" required>
                        @error('password')
                            <div class="alert alert-danger text-red-500 mt-2">{{ $message }}</div>
                        @enderror
                        <br>
                        <button class="log-in w-full bg-blue-500 text-white py-2 rounded-md mt-4">Log In</button>
                    </div>
                    <div class="other mt-6 flex justify-between">
                        <button type="button" class="btn submits frgt-pass text-blue-500">Forgot Password</button>
                        <button type="button" class="btn submits sign-up text-blue-500 flex items-center">
                            Sign Up <i class="fa fa-user-plus ml-2" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

    

    @push('scripts')
    
    @endpush
</x-layout>
