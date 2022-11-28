<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
  <script src="calendar.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="nav_bar">
        <header>
            <img class="logo_pic" src="pic/301220021_519483296798508_1235047204078362737_n.jpg" alt="">
            <ul>
                <li>
                    <a href="#">Kontaktai</a>
                </li>
                <li>
                    <a href="#">Nuoma</a>
                </li>
                <li class="li_right">
                    <a href="#">Apie</a>
                </li>
            </ul>
        </header>
    </div>
        <div class="main">
            <div class="carousel_pic">
                <img class="carousel_vezim" src="pic/61214232_685469581887804_3222479632515203072_n.jpg" alt="">
            </div>
            <div id="calendar">
              <div id="calHeader"><h1 id="tabName">Lapkritis 2022</h1>
                <div id="left" onclick="previousMonth()"> </div>
                <div id="right" onclick="nextMonth()"> </div>
              </div>
              <table>
                <thead>
                  <tr id="colHeader">
                    <td>MON</td>
                    <td>TUE</td>
                    <td>WEN</td>
                    <td>THU</td>
                    <td>FRI</td>
                    <td>SAT</td>
                    <td>SUN</td>
                  </tr>
                </thead>
                <tbody id="calContent">
                  <tr>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                  </tr>
                  <tr>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                  </tr>
                  <tr>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td>20</td>
                    <td>21</td>
                  </tr>
                  <tr>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                  </tr>
                  <tr>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                  </tr>
                  <tr>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                  </tr>
                </tbody>
              </table>
            </div>
        
            <div id="form_uzsakymo" class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1"></span>
                <input type="text" class="form-control" placeholder="Vardas Pavardė" aria-label="Username" aria-describedby="basic-addon1">
              </div>
              
              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="pvz@pvz.lt" aria-label="Recipient's username" aria-describedby="basic-addon2">
                
              </div>
              
              
              <div class="input-group mb-3">
                <!-- <span class="input-group-text" id="basic-addon3">https://example.com/users/</span> -->
              
                <input type="date" class="form-control" id="basic-url" 
                aria-describedby="basic-addon3">
                
              </div>
              <div class="input-group mb-3">
                <!-- <span class="input-group-text" id="basic-addon3">https://example.com/users/</span> -->
              
                <input type="time" class="form-control" id="basic-url" 
                aria-describedby="basic-addon3">
                
              </div>
              
              <div class="input-group mb-3">
                <span class="input-group-text">$</span>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <span class="input-group-text">.00</span>
              </div>
              
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Username" aria-label="Username">
                <!-- <span class="input-group-text">@</span> -->
                <!-- <input type="text" class="form-control" placeholder="" aria-label="Server"> -->
              </div>
              
              <div class="input-group">
                <span class="input-group-text">Komentaras:</span>
                <textarea class="form-control" aria-label="With textarea"></textarea>
              </div>
              <div class="input-group mb-3">
                <!-- <span class="input-group-text" id="basic-addon3">https://example.com/users/</span> -->
              
                <input type="submit" class="form-control" id="basic-url" 
                aria-describedby="basic-addon3">
                
              </div>
        </div>
        <footer>
          
          <div class="fa_social">
            
          <a href="https://www.facebook.com/vezimeliunuomakelionems" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-skype"></a>
          <a href="#" class="fa fa-instagram"></a>
          
        </div>
        <div class="copyright">
        <p class="copyright-text">Copyright &copy; 2022 All Rights Reserved by Viktoras :)
        </div>
        </footer>


    
</body>
</html>