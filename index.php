<!DOCTYPE html>
<html lang="en">
  <?php
include "dbconnection.php";?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>Fun</title>
</head>
<body>
    <!-- modal 1 -->
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header" id="header" style="background: white; color: white; font-family: sans-serif">
              <img style="width: 90px; height: 90px; "  src="minion1.gif">
              <img style="width: 180px; height: 90px; "  src="minion2.gif">
              <img style="width: 300px; height: 100px; "  src="minion3.gif">
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" style="height: 500px; width: 500px; background: linear-gradient(#141e30, #243b55);" id="modalcontent">
              <div class="login-box">
                <h2 class="modal-title" id="modalname1">Modal 1</h2>
                <form id="modalform">
                  <div class="user-box" >
                    <input type="text" name="" required="" id="modal1_inpt">
                    <label>Nickname</label>
                  </div>
                  <div class="user-box">
                    <input type="password" name="" required="">
                    <label>Birthdate</label>
                  </div>
                  <a  id="modalbtn" onclick="submit_modal1()" >
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Confirm
                  </a>
                  <h5 style="color: RED;  display: none;"  id="error_massage">Must Include <b>_</b> in Nickame</h5>
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <!-- <button class="btn btn-primary" id="modalbtn"data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Yes</button> -->
            </div>
          </div>
        </div>
      </div>
      <!-- modal 2 -->
      <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body" style="height: 500px; width: 500px; background: linear-gradient(#141e30, #243b55);">
              <div class="login-box" id="modal_content">
                <form >
                  <h1 id="dumb" style="color:white" >Are Your Dumb</h1>
              <a href="" data-bs-toggle="modal" data-bs-target="exampleModalToggle3"id="modalyesbtn" onclick="iknw()">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Yes
              </a>
              <a onmouseover="random_margin()" id="modalbtn2">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                No
              </a>
              </form>
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
            </div>
          </div>
        </div>
      </div>
      <!-- modal3 -->
      <div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body" style="height: 500px; width: 500px; background: linear-gradient(#141e30, #243b55);">
              <div class="login-box" id="modal_content">
              </div>
            </div>
            <div class="modal-footer">
              <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button>
            </div>
          </div>
        </div>
      </div>
      <!-- content -->
      <div class="container" style="text-align: center; margin-left: auto;margin-right: auto;">
      <form  id="contentform"  action="login.php" method="post">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" style="font-size:50px;font-family:Brush Script MT;  "><img style="height: 70px; width:70px ;" src="giphy.gif"> Get Ready To Have Some Fun</label>
          <input type="text" placeholder="Name" style=" background: transparent; width:300px;margin-left:auto;margin-right: auto;" class="form-control" name="inputname" id="inputname" aria-describedby="emailHelp">
          <div id="emailHelp">Try At Your Own Risk</div>
        </div>
        <div class="form-check" >
          <input type="checkbox"  id="Check1">
          <label class="form-check-label"style="" for="exampleCheck1">Sure</label>
        </div>
        <a input type="button" onclick="name1()" class="btn btn-primary"  data-bs-target="#exampleModalToggle" data-bs-toggle="modal" id="submitbtn" role="button">Submit</a>
      </form>
      <h1 id="iknow" style="font-size:50px;font-family:Brush Script MT;  display:none;"><img style="width: 90px; height: 90px; "  src="minionstease2.gif">I Knew It<img style="width: 90px; height: 60px; "src="miniontease3.gif"></h1>
      <div class="modal-header" id="tease" style="background: white; color: white; font-family: sans-serif">
        
        <!-- <img style="width: 180px; height: 90px; "  src="minionstease2.gif"> -->
        </div>
     <div class="container"> <img style="position: fixed; bottom:0px;margin-left: auto;margin-right: auto;"src="main_minion.gif">
    </div>
    </div>

    
</body>
</html>