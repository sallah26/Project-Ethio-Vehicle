<head>
    <title>first PHP page</title>
    <style>
    .fir-header{
            background-color: rgb(139, 97, 34);
            height: 11vh;
            width: 1605px;
            margin: -27px 0 0 -13px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            position: fixed; 
            z-index: 2;
               
        }
        .navs{
            margin-top: -60px;
            text-align: right;
            margin-right: 50px;
        }
        li{
            display: inline-block;
            list-style-type: none;
            padding: 20px 20px;
            margin-top: 13%;
        }
        .navs a{
            color:  rgb(255, 255, 255);
            font-size: 21px; 
            text-decoration: none;
        }
        .navs a:hover{
            color: rgb(214, 207, 181);
        }
        @font-face {
            font-family: main-logo;
            src: url(fonts/Speed_Normal.ttf);
          }
        .logo h1{
            color: aliceblue;
            font-size: 60px;
            margin-top: 45px;
            margin-left: 50px;
        }


        <!-- copied -->

        @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');

        *{
            list-style: none;
            text-decoration: none;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Open Sans', sans-serif;
        }
        .wrapper .sidebar{
            background: rgb(151, 136, 113);
            position: fixed;
            top: 0;
            left: 0;
            width: 225px;
            height: 100%;
            padding: 20px 0;
            transition: all 0.5s ease;
        }
        .wrapper .sidebar .profile{
           
            margin-left: -30px;
            margin-top: 100px;
            text-align: center;
        }

        

        .wrapper .sidebar .profile h1{
            color: rgb(255, 255, 255);
            margin: 20px 0 5px;
        }
        .wrapper .sidebar ul li{
            width: 115%;
            padding: 0px;
            margin-left: -35px;
        }
        .wrapper .sidebar ul li a{
            display: flex;
            gap: 10px;
            padding: 10px 35px;
            text-decoration: none;
            border-bottom: 3px solid #616d77;
            color: rgb(255, 255, 255);
            font-size: 18px;
            position: relative;
        }
        .wrapper .sidebar ul li a .icon{
            color: #ffffff;
            width: 30px;
            display: inline-block;
        }
        .wrapper .sidebar ul li a:hover,
        .wrapper .sidebar ul li a.active{
            color: #0c7db1;
            background:white;
            border-right: 2px solid rgb(5, 68, 104);
        }
        .wrapper .sidebar ul li a:hover .icon,
        .wrapper .sidebar ul li a.active .icon{
            color: #0c7db1;
        }
        locked and also those point of views are not infrastructured and also thsoe points ok sallah and also those 
        .wrapper .sidebar ul li a:hover:before,
        .wrapper .sidebar ul li a.active:before{
            display: block;
        }
        .wrapper .section{
            width: calc(100% - 225px);
            margin-left: 225px;
            transition: all 0.5s ease;
        }
        .wrapper .section .top_navbar{
            background: rgb(7, 105, 185);
            height: 50px;
            display: flex;
            align-items: center;
            padding: 0 30px;
        }

    </style>
</head>
<body>
     <div class="fir-header">
        <div class="logo">
            <h1>Ethio-<span>Vehicles</h1></span>
        </div>
        <div class="navs">
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a href="buying-page.html">Buying-cars</a></li>
                <li><a href="Renting-page.html">Renting-cars</a></li>
                
            </ul>
        </div>
    </div>
    <center><h1>wel come to Admin page</h1></center>



    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
            <!--profile image & text-->
             <div class="profile">

                <h1>Admin</h1>
                
            </div>
            <!--menu item-->
            <ul>
                <!-- <li>
                    <a href="#" class="active">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Home</span>
                    </a>
                </li> -->
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-phone"></i></span>
                        <span class="item">Selling cars</span>
                    </a>
                </li>
                <li>
                    <a href="Home.html">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Renting cars</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">something else</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Development</span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="icon"><i class="fas fa-chart-line"></i></span>
                        <span class="item">Reports</span>
                    </a>
                </li>
            </ul>
        </div>
        </div>
        <div class="section">
            <div class="top_navbar">
                <div class="hamburger">
                    <a href="#">
                        <i class="fas fa-bars"></i>
                    </a>
                </div>
            </div>

        </div>
    </div>

   
    