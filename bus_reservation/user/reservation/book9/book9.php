<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="book9.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <div class="container">
        <h2>Booking Deatils of A55 ( Trichy to Bangalore)</h2>
        <div class="content">
            <div class="book2" id="card1">
                <div class="image">
                    <img src="../../../assets/pngtree-d-render-of-a-white bus.jpg" alt="" width="350px">
                </div>
                <div class="book2-content">
                    <div class="book-details">
                            <form class="details" id="form" action="insert.php" method="POST">
                            
                            <input type="text" name="busnum" id=""  placeholder="Enter bus number" required>
                                <input type="text" name="source" placeholder="Enter From station" required>
                                <input type="text" name="destination" placeholder="Enter destination" required>
                                <input type= "text" name="name" placeholder="Enter your name" required>
                                <input type="email" name="email" placeholder="Enter your email-id" required>
                                <input type="tel" name="phone" placeholder="Enter your Phone number" required>
                                <input type="text" name="seating" required placeholder="Enter seat number based on seating arrangement" >
                                <input type="date" name="date" id="datesel" required>
                                <input type="time" name="time" reqiured>
                                <input type="submit" value="Confirm" class="button" name="submit" id="submit">
                            </form>
                    </div>
                </div>
            </div>
            <table>
                <h2>Seating Arrangement</h2>
                <tr>
                    <td onclick="disp1('46')" class="seat">46</td>
                    <td onclick="disp1('45')" class="seat">45</td>
                    <td onclick="disp1('36')" class="seat">36</td>
                    <td onclick="disp1('35')" class="seat">35</td>
                    <td onclick="disp1('26')" class="seat">26</td>
                    <td onclick="disp1('25')" class="seat">25</td>
                    <td onclick="disp1('16')" class="seat">16</td>
                    <td onclick="disp1('15')" class="seat">15</td>
                    <td onclick="disp1('6')" class="seat">6</td>
                    <td onclick="disp1('5')" class="seat">5</td>   
                </tr>
                <tr>
                    <td onclick="disp1('47')" class="seat">47</td>
                    <td onclick="disp1('44')" class="seat">44</td>
                    <td onclick="disp1('37')" class="seat">37</td>
                    <td onclick="disp1('34')" class="seat">34</td>
                    <td onclick="disp1('27')" class="seat">27</td>
                    <td onclick="disp1('24')" class="seat">24</td>
                    <td onclick="disp1('17')" class="seat">17</td>
                    <td onclick="disp1('14')" class="seat">14</td>
                    <td onclick="disp1('7')" class="seat">7</td>
                    <td onclick="disp1('4')" class="seat">4</td>    
                </tr>
                <tr>
                    <td onclick="disp1('48')" class="seat">48</td>
                    <td onclick="">&nbsp;</td>
                    <td onclick="">&nbsp;</td>
                    <td onclick="">&nbsp;</td>
                    <td onclick="">&nbsp;</td>
                    <td onclick="">&nbsp;</td>
                    <td onclick="">&nbsp;</td>
                    <td onclick="">&nbsp;</td>
                    <td onclick="">&nbsp;</td>
                    <td onclick="">&nbsp;</td>
                </tr>
                <tr>
                    <td onclick="disp1('49')" class="seat">49</td>
                    <td onclick="disp1('43')" class="seat">43</td>
                    <td onclick="disp1('38')" class="seat">38</td>
                    <td onclick="disp1('33')" class="seat">33</td>
                    <td onclick="disp1('28')" class="seat">28</td>
                    <td onclick="disp1('23')" class="seat">23</td>
                    <td onclick="disp1('18')" class="seat">18</td>
                    <td onclick="disp1('13')" class="seat">13</td>
                    <td onclick="disp1('8')" class="seat">8</td>
                    <td onclick="disp1('3')" class="seat">3</td>
                </tr>
                <tr>
                    <td onclick="disp1('50')" class="seat">50</td>
                    <td onclick="disp1('42')" class="seat">42</td>
                    <td onclick="disp1('39')" class="seat">39</td>
                    <td onclick="disp1('32')" class="seat">32</td>
                    <td onclick="disp1('29')" class="seat">29</td>
                    <td onclick="disp1('22')" class="seat">22</td>
                    <td onclick="disp1('19')" class="seat">19</td>
                    <td onclick="disp1('12')" class="seat">12</td>
                    <td onclick="disp1('9')" class="seat">9</td>
                    <td onclick="disp1('2')" class="seat">2</td>
                </tr>
                <tr>
                    <td onclick="disp1('51')"  class="seat">51</td>
                    <td onclick="disp1('41')" class="seat">41</td>
                    <td onclick="disp1('40')" class="seat">40</td>
                    <td onclick="disp1('31')" class="seat">31</td>
                    <td onclick="disp1('30')" class="seat">30</td>
                    <td onclick="disp1('21')" class="seat">21</td>
                    <td onclick="disp1('20')" class="seat">20</td>
                    <td onclick="disp1('11')" class="seat">11</td>
                    <td onclick="disp1('10')" class="seat">10</td>
                    <td onclick="disp1('1')" class="seat">1</td>
                </tr>
            </table>
        </div>
        
    </div>
    <script>
        document.getElementById('datesel').min = new Date().toISOString().split('T')[0];
    </script>
</body>
</html>