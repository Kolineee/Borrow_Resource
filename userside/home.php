<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Resource Management System</title>
  <link rel="stylesheet" type="text/css" href="styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <header>
  <div class="navbar-container">
      <div class="menu-toggle" onclick="toggleMenu()">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>
  <ul class="navbar">
    <li><a href="./home.php">Home</a></li>
    <li><a href="./main_reservation.php">Reservation</a></li>
    <li><a href="./main_available.php">Available</a></li>
    <li><a href="./contact.php">Contact</a></li>
    <li><a href="./main_about.php">About</a></li>
    <li><a href="./main_faq.php">FAQ</a></li>
  </ul>
 </div>
  <div class="main">
    <input class="srch" type="search" name="" placeholder="Search...">
    <a href="#"></a><button class="btn">Search</button></a>
  </div>
  <div class="icons">
    <i class="far fa-bell bell-icon" id="bellIcon" onclick="toggleNotification()"></i>
    <div class="notification-box" id="notificationBox">
      <h2>Notifications</h2>
    <p>No new notifications!</p>
  </div>
    <img src="./pfp.png" class="user-pic" onclick="toggleMenu2()">
    <div class="sub-menu-wrap" id="subMenu">
      <div class="sub-menu">
        <div class="user-info">
          <img src="./pfp.png" alt="pfp">
          <h3>Calista Perez</h3>
        </div>
        <hr>
        <a href="profile.php" class="sub-menu-link">
          <img src="./user.png" alt="user">
          <p>Profile</p>
          <span>></span>
        </a>
        
        <a href="Settings.php" class="sub-menu-link">
          <img src="./settings.png" alt="settings">
          <p>Settings</p>
          <span>></span>
        </a>
        <a href="help&support.php" class="sub-menu-link">
          <img src="./help-&-Support.png" alt="h&s">
          <p>Help & Support</p>
          <span>></span>
        </a>
        <a href="logout.php" class="sub-menu-link">
          <img src="./logout.png" alt="Logout">
          <p>Logout</p>
          <span>></span>
        </a>
      </div>
    </div>
  </div>
</header>

<section class="home">
  <h2 class="homeh1">BORROW RESOURCES</h2>
  <div class="HomeIcons">
    <div class="dropdown">
      <div class="icon-container">
        <img src="./equipment.png" alt="Equipment" class="icon1">
      </div>
      <button class="dropbtn">EQUIPMENT</button>
      <div class="dropdown-content">
        <a href="projector 1.php">Projector 1</a>
        <a href="projector 2.php">Projector 2</a>
        <a href="HDMI.php">HDMI</a>
        <a href="TV.php">TV</a>
        <a href="whiteboard.php">Whiteboard</a>
      </div>
    </div>
    <div class="dropdown">
      <div class="icon-container">
        <img src="./comlab.png" alt="Laboratory" class="icon1">
      </div>
      <button class="dropbtn">Laboratory</button>
      <div class="dropdown-content">
        <a href="lab1.php">Lab 1</a>
        <a href="lab1.php">Lab 2</a>
        
      </div>
    </div>
    <div class="dropdown">
      <div class="icon-container">
        <img src="./room.png" alt="Room" class="icon1">
      </div>
      <button class="dropbtn">ROOM</button>
      <div class="dropdown-content">
        <a href="lec1.php">Lec 1</a>
        <a href="lec2.php">Lec 2</a>
        <a href="lec3.php">Lec 3</a>
        <a href="lec4.php">Lec 4</a>
      </div>
    </div>
    <div class="dropdown">
      <div class="icon-container">
        <img src="./auditorium.png" alt="Auditorium" class="icon1">
      </div>
      <button class="dropbtn">AUDITORIUM</button>
      <div class="dropdown-content">
        <a href="auditorium.php">CCS Auditorium</a>
       
      </div>
    </div>
  </div>
</section>
<section class="pb">
  <div class="container">
    <h2 class="pbh1">POPULARLY BORROWED: </h2>
    <br>
  <div class="boxs">
      <table>
        <thead>
          <tr>
            <th>Projector</th>
            <th>Day</th>
            <th>Time Slot</th>
            <th>Availability</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Projector 1</td>
            <td>Monday</td>
            <td>7:00 AM - 9:00 AM</td>
            <td>Available</td>
            <td><button class="reserve-button" onclick="location.href='projector 1.php'">Reserve</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="boxs">
      <table>
        <thead>
          <tr>
            <th>HDMI</th>
            <th>Day</th>
            <th>Time Slot</th>
            <th>Availability</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Projector 1</td>
            <td>Monday</td>
            <td>7:00 AM - 9:00 AM</td>
            <td>Available</td>
            <td><button class="reserve-button" onclick="location.href='HDMI.php'">Reserve</button></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="boxs">
      <table>
        <thead>
          <tr>
            <th>Laboratory</th>
            <th>Day</th>
            <th>Time Slot</th>
            <th>Availability</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Lab 1</td>
            <td>Monday</td>
            <td>7:00 AM - 9:00 AM</td>
            <td>Available</td>
            <td><button class="reserve-button" onclick="location.href='lab1.php'">Reserve</button></td>
          </tr>
        </tbody>
      </table>
    </div>
</section>

<section class="pbbb">
  <div class="container">
    <h2 class="pbh1">RECENT BORROWED: </h2>
    <br>
  <div class="boxsss">
    <table>
      <thead>
        <tr>
          <th>Time start</th>
          <th>Time end</th>
          <th>Resources</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>7:00 AM</td>
          <td>9:00 AM</td>
          <td>Projector 1</td>
          <td><button id="btn1" class="reserve-button" onclick="location.href='profile.php'">Return</button></td>
        </tr>
        <tr>
          <td>9:00 AM </td>
          <td>11:00 AM</td>
          <td>Laboratory 1</td>
          <td cla="Return-txt">Returned</button></td>
        </tr>
        <tr>
          <td>11:00 AM</td>
          <td>1:00 PM</td>
          <td>TV</td>
          <td class="return-txt">Returned</td>
        </tr>
      </tbody>
      </table>
</section>

<section class="pb1">
  <div class="con">
    <div class="  Feedbck">
      <p>‘Our user-friendly interface and real-time availability updates make it effortless for you to 
        browse resources, check availability, and make reservations that suit your schedule.</p>
        <p>Reserve department resources effortlessly with BorrowResource. From study rooms to specialized 
          equipment, it's all just a click away.'</p>
    </div>
  </div>
</section>


<footer class="footer">
  
  <div class="footer-section">
      <h3>Contact Information</h3>
      <p>Email: BorrowResource@gmail.com</p>
      <p>Phone: +123456789</p>
  </div>
  

  <div class="footer-section">
      <h3>Social Media</h3>
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-twitter"></i></a>
      <a href="#"><i class="fab fa-linkedin"></i></a>
    
  </div>
  

  <div class="footer-section">
      <h3>Navigation</h3>
      <a href="home.php">Home</a> | 
      <a href="main_about.php">About</a> | 
      <a href="main_contact.php">Contact</a> | 
      <a href="main_faq.php">FAQ</a>
  </div>
  <div class="copyright">
      <p>&copy; 2024 All Rights Reserved, BorrowResource</p>
  </div>
  <br>
 
  
</footer>


</body>
</html>


  <script src="script.js"></script>

</body>
</html>
