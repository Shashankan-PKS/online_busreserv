<?php   

    include '../../config.php';


    session_start();

    if(!isset($_SESSION['name'])){
        header('location: ../../login/login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="reserv.css">
</head>
<body>
    <a href=""></a>
    <nav>
        <img src="../../assets/logo.png" width="120px" style="margin: 5px 100px;">
        <ul>
            <li><a href="../home/home.php">Home</a></li>
            <li><a href="" class="active"> Ticket Reservation</a></li>
            <li><a href="../history/history.php">Booking History</a></li>
            <li><a href="../logout/logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i></a></li>
        </ul>
    </nav>
    <div class="highlight">
        <p class="words"> We are currently providing our bus services to Chennai, Coimbatore , Trichy , Cochin, Bangalore only </p>
        <p class="words"> We are currently providing our bus services to Chennai, Coimbatore , Trichy , Cochin, Bangalore only </p>
    </div>
    <section>
        <div class="container">
            <div class="head">
                <span>Ticket Booking</span>
                <div class="filter">
                    <input type="text"  id="filter" placeholder="Enter the Destination ">
                    <button onclick="filter()">filter</button>
                </div>
            </div>

            <div class="body">
                <div class="cards">
                    <li class="buscard" id="bangalore">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A47 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Chennai</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Bangalore</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 09:30 PM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 1250</p>
                            <button onclick="location = this.value" value= "book1/book1.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
        
                    <li class="buscard" id="cochin">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A48 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Chennai</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Cochin</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 10:30 PM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 1250</p>
                            <button type="submit" onclick="location =this.value" value="book2/book2.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
        
                    <li class="buscard" id="coimbatore">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A49 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Chennai</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Coimbatore</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 01:30 PM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 750</p>
                            <button onclick="location =this.value" value="book3/book3.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
        
                    <li class="buscard" id="trichy">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A50 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Chennai</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Trichy</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 10:30 AM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 850</p>
                            <button onclick="location =this.value" value="book4/book4.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
        
                    <li class="buscard" id="bangalore">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A51 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Coimbatore</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Bangalore</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 09:00 PM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 1250</p>
                            <button onclick="location =this.value" value="book5/book5.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
        
                    <li class="buscard" id="cochin">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A52 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Coimbatore</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Cochin</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 10:30 PM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 1250</p>
                            <button onclick="location =this.value" value="book6/book6.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
        
                    <li class="buscard" id="trichy">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A53 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Coimbatore</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Trichy</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 11:30 AM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 1250</p>
                            <button onclick="location =this.value" value="book7/book7.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
        
                    <li class="buscard" id="chennai">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A54 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Coimbatore</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Chennai</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 02:30 PM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 1250</p>
                            <button onclick="location =this.value" value="book8/book8.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
    
                    <li class="buscard" id="bangalore">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A55 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Trichy</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Bangalore</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 09:30 PM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 1250</p>
                            <button onclick="location =this.value" value="book9/book9.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
        
                    <li class="buscard" id="cochin">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A57 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Trichy</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Cochin</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 10:30 PM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 1250</p>
                            <button onclick="location =this.value" value="book10/book10.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
        
                    <li class="buscard" id="coimbatore">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A58 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Trichy </p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Coimbatore</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 10:30 AM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 1250</p>
                            <button onclick="location =this.value" value="book11/book11.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
        
                    <li class="buscard" id="chennai">
                        <div>
                            <img src="../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="100%">
                        </div>
                        <div class="content">
                            <p><i class="fas fa-bus-alt"></i>Bus Number : A59 </p>
                            <p><i class="fa-solid fa-location-dot"></i>From Station : Trichy</p>
                            <p><i class="fa-solid fa-location-dot"></i>Destination Station : Chennai</p>
                            <p><i class="fa-regular fa-clock"></i>Time : 09:00 AM</p>
                            <p><i class="fa-solid fa-calendar-days"></i>Day : All Days</p>
                            <p><i class="fa-solid fa-indian-rupee-sign"></i> Cost : 1250</p>
                            <button onclick="location =this.value" value="book12/book12.php"><i class="fa-solid fa-ticket"></i> Book Ticket</button>
                        </div>
                    </li>
                </div>
            </div>
        </div>
            

        
            
            
        <!--<label for="datesel">date</label>
        <input type="date" id="datesel">-->
    </section>

    <script src="https://kit.fontawesome.com/aa5f332820.js" crossorigin="anonymous"></script>
    <script src="reserv.js"></script>
</body>
</html>

