<?php
session_start();
if (!isset($_SESSION['loggedin']) || !$_SESSION['loggedin'])
  $logger = false;
else
  $logger = true;

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>QuizeAura</title>
    <link
      rel="shortcut icon"
      href="https://www.quiztriviagames.com/wp-content/uploads/2021/06/cropped-favicon-Quiz-trivia-games-1.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="styleHome.css" />
  </head>
  <body>
    <nav id="navBar">
      <div class="head">
        <a href="home.php"><img id="logo" src="logo.png" alt="logo" /></a>
      </div>
      <ul>
        <li class="notHome"><a href="#">Home</a></li>
        <li class="notHome"><a href="subject.html">Quizes</a></li>
        <li class="notHome"><a href="contactUs.html">Contact Us</a></li>
        <li class="notHome"><a href="signup.php">Login</a></li>
        <li class="notHome"><a href="help.html">Help</a></li>
        <li class="hamBurger">
          <a href="javascript:void(0)" onclick="toggleNav()">&#9776;</a>
        </li>
      </ul>
    </nav>
    <main>
      <section id="introSection">
        <div id="introBox2">
          <p>Learning with Fun</p>
          <button class="joinBtn"><a href="signup.php">Join Now</a></button>
          <a href="logout.php" class="anchorButton">Log Out</a>

          <!-- <button><a href="logout.php">Log Out</a></button> -->
        </div>
        <div class="avatarBox">
          <img
            id="avatar"
            src="https://img.freepik.com/premium-vector/smiling-young-man-student-freelancer-with-laptop-books-3d-character-thinking-about-education_313242-1595.jpg?w=900"
            alt="avatar1"
          />
          <img
            id="avatar"
            src="https://img.freepik.com/free-vector/modern-people-reading-various-books_23-2148618783.jpg?t=st=1697264361~exp=1697264961~hmac=40be7d802744024ad0f6225a4346e6532a7d2943f46113495b4a5373926fafae"
            alt="avatar2"
          />
        </div>
      </section>
      
      <?php
      if(!$logger){
        echo '<section class="loginCheck">
        <div>
          <img
            src="https://img.freepik.com/free-vector/mobile-login-concept-illustration_114360-83.jpg?w=740&t=st=1699851522~exp=1699852122~hmac=43553f3e83e8467d22eb8d84fda4b10e5ee5f57e75c21696bb4659cc3bc8bdb2"
            alt="loginImg"
            class="loginImg"
          />
        </div>
        <div class="loginCheckText">
          <p>Create an account or login to do quizes.</p>

          <button class="joinBtn"><a href="signup.php">Login</a></button>
        </div>
      </section>';
      }
      else{
        echo '<section class="loginCheck">
        <div>
          <img
            src="https://img.freepik.com/premium-vector/got-ideas-expression-character-design_188398-1713.jpg?w=740"
            alt="loginImg"
            class="loginImg"
          />
        </div>
        <div class="loginCheckText">
          <p>Welcome '.$_COOKIE['userid'].'. Lets try out more quizes</p>

          <button class="joinBtn">
            <a style="font-size: 0.9rem" href="showScore.php">My scores</a>
          </button>
        </div>
      </section>';
      }
      ?>
      <section id="subjectSection">
        <h2 id="subjecth2">Choose a Quiz</h2>
        <div class="parentSubjectBox">
          <div class="subjectBox" id="gkBox">
            <h3>General Knowledge</h3>
            <p>
              This is a basic general Knowledge quiz which would check your
              basics about the facts across the gloab.
            </p>
            <span class="level">Level: Easy</span>
            <div class="subEnd">
              <a href="quiz.php">Lets Start</a>
              <span>All the best.</span>
            </div>
          </div>
          <div class="subjectBox" id="dsaBox">
            <h3>Data Structures</h3>
            <p>
              This is a basic dsa  quiz which would check your
              basics about the facts across the dsa.
            </p>
            <span class="level">Level: Easy</span>
            <div class="subEnd">
              <a href="dsa.php">Lets Start</a>
              <span>All the best.</span>
            </div>
          </div>
          <div class="subjectBox" id="dbBox">
            <h3>DBMS</h3>
            <p>
              This is a basic DBMS quiz which would check your
              basics about the facts across the DBMS.
            </p>
            <span class="level">Level: Easy</span>
            <div class="subEnd">
              <a href="dbms.php">Lets Start</a>
              <span>All the best.</span>
            </div>
          </div>
        </div>
        <div class="moreQuizesDiv">
          <a href="subject.html" class="anchorButton" id="moreQuizes">More Quizes</a>
        </div>
      </section>
    </main>
    <footer>
      <div class="footer-content">
        <div class="footer-logo">
          <img src="logo2.png" alt="PGS Quiz Logo" />
        </div>
        <div class="footer-links">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="subject.html">Quizes</a></li>
            <li><a href="contactUs.html">About Us</a></li>
            <li><a href="signup.php">Login or sign up</a></li>
            <li><a href="help.html">Help</a></li>
          </ul>
        </div>
        <div class="footer-social">
          <h3>Follow Us:</h3>
          <div id="logos">
            <a href="https://www.facebook.com" target="_blank"
              ><img
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KICAgIDxnIGNsaXAtcGF0aD0idXJsKCNjbGlwMF8xMTU0NV83ODc5MCkiPgogICAgICAgIDxwYXRoIGQ9Ik00OCAyNEM0OCAxMC43NDUyIDM3LjI1NDggMCAyNCAwQzEwLjc0NTIgMCAwIDEwLjc0NTIgMCAyNEMwIDM1Ljk3OTEgOC43NzY0NCA0NS45MDggMjAuMjUgNDcuNzA4NVYzMC45Mzc1SDE0LjE1NjNWMjRIMjAuMjVWMTguNzEyNUMyMC4yNSAxMi42OTc1IDIzLjgzMyA5LjM3NTAxIDI5LjMxNTIgOS4zNzUwMUMzMS45NDEgOS4zNzUwMSAzNC42ODc1IDkuODQzNzUgMzQuNjg3NSA5Ljg0Mzc1VjE1Ljc1SDMxLjY2MTJDMjguNjc5OCAxNS43NSAyNy43NSAxNy42IDI3Ljc1IDE5LjQ5OFYyNEgzNC40MDYzTDMzLjM0MjIgMzAuOTM3NUgyNy43NVY0Ny43MDg1QzM5LjIyMzYgNDUuOTA4IDQ4IDM1Ljk3OTEgNDggMjRaIiBmaWxsPSIjNDk4QkUwIi8+CiAgICAgICAgPHBhdGggZD0iTTMzLjM0MjIgMzAuOTM3NUwzNC40MDYzIDI0SDI3Ljc1VjE5LjQ5OEMyNy43NSAxNy42IDI4LjY3OTggMTUuNzUgMzEuNjYxMSAxNS43NUgzNC42ODc1VjkuODQzNzRDMzQuNjg3NSA5Ljg0Mzc0IDMxLjk0MSA5LjM3NSAyOS4zMTUxIDkuMzc1QzIzLjgzMyA5LjM3NSAyMC4yNSAxMi42OTc1IDIwLjI1IDE4LjcxMjVWMjRIMTQuMTU2MlYzMC45Mzc1SDIwLjI1VjQ3LjcwODRDMjEuNDkwNSA0Ny45MDI4IDIyLjc0NDMgNDguMDAwMyAyNCA0OEMyNS4yNzU4IDQ4IDI2LjUyODEgNDcuOTAwMSAyNy43NSA0Ny43MDg0VjMwLjkzNzVIMzMuMzQyMloiIGZpbGw9IndoaXRlIi8+CiAgICA8L2c+CiAgICA8ZGVmcz4KICAgICAgICA8Y2xpcFBhdGggaWQ9ImNsaXAwXzExNTQ1Xzc4NzkwIj4KICAgICAgICAgICAgPHJlY3Qgd2lkdGg9IjQ4IiBoZWlnaHQ9IjQ4IiBmaWxsPSJ3aGl0ZSIvPgogICAgICAgIDwvY2xpcFBhdGg+CiAgICA8L2RlZnM+Cjwvc3ZnPgo="
                width="48"
                height="48"
                alt=""
            /></a>
            <a href="https://www.linkedin.com" target="_blank"
              ><img
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMjQiIGN5PSIyNCIgcj0iMjMiIGZpbGw9IiMzQTI4QTciLz4KPGNpcmNsZSBjeD0iMjQiIGN5PSIyNCIgcj0iMjQiIGZpbGw9IiMyRDg2RTEiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0xOS4zNDA1IDE1LjA3NjJDMTkuMzQwNSAxNi4yMDggMTguNDc4NyAxNy4xMjQgMTcuMTMwOSAxNy4xMjRDMTUuODM1NyAxNy4xMjQgMTQuOTczOSAxNi4yMDggMTUuMDAwNiAxNS4wNzYyQzE0Ljk3MzkgMTMuODg5MyAxNS44MzU3IDEzIDE3LjE1NjggMTNDMTguNDc4NiAxMyAxOS4zMTQ2IDEzLjg4OTMgMTkuMzQwNSAxNS4wNzYyWk0xNS4xMDkgMzEuOTI1NVYxOC43NDE3SDE5LjIwNjNWMzEuOTI0NkgxNS4xMDlWMzEuOTI1NVoiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGZpbGwtcnVsZT0iZXZlbm9kZCIgY2xpcC1ydWxlPSJldmVub2RkIiBkPSJNMjIuNDkxMiAyMi45NDg4QzIyLjQ5MTIgMjEuMzA0NCAyMi40MzcgMTkuOTAyNSAyMi4zODI4IDE4Ljc0MzFIMjUuOTQxN0wyNi4xMzA5IDIwLjU0OTNIMjYuMjExOEMyNi43NTEgMTkuNzEzMyAyOC4wOTg3IDE4LjQ0NzMgMzAuMjgyNCAxOC40NDczQzMyLjk3NzggMTguNDQ3MyAzNC45OTk4IDIwLjIyNjcgMzQuOTk5OCAyNC4xMDczVjMxLjkyNjlIMzAuOTAyNVYyNC42MjA3QzMwLjkwMjUgMjIuOTIxMyAzMC4zMDk5IDIxLjc2MjggMjguODI3MiAyMS43NjI4QzI3LjY5NDUgMjEuNzYyOCAyNy4wMjExIDIyLjU0NDYgMjYuNzUxOSAyMy4yOTg5QzI2LjY0MzUgMjMuNTY4OSAyNi41OTAyIDIzLjk0NTYgMjYuNTkwMiAyNC4zMjRWMzEuOTI2OUgyMi40OTI4VjIyLjk0ODhIMjIuNDkxMloiIGZpbGw9IndoaXRlIi8+Cjwvc3ZnPgo="
                width="48"
                height="48"
                alt=""
            /></a>
            <a href="https://www.instagram.com/quiz_aura/" target="_blank"
              ><img
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMjQiIGN5PSIyNCIgcj0iMjQiIGZpbGw9InVybCgjaW5zdF9ncikiLz4KPHBhdGggZmlsbC1ydWxlPSJldmVub2RkIiBjbGlwLXJ1bGU9ImV2ZW5vZGQiIGQ9Ik0yNC4wMDAzIDEzLjczNDdDMjcuMzQzNyAxMy43MzQ3IDI3LjczOTcgMTMuNzQ3NCAyOS4wNjAxIDEzLjgwNzdDMzAuMjgxIDEzLjg2MzQgMzAuOTQ0IDE0LjA2NzMgMzEuMzg1MiAxNC4yMzg4QzMxLjk2OTcgMTQuNDY2IDMyLjM4NjggMTQuNzM3MyAzMi44MjUgMTUuMTc1NUMzMy4yNjMyIDE1LjYxMzcgMzMuNTM0NSAxNi4wMzA4IDMzLjc2MTcgMTYuNjE1M0MzMy45MzMyIDE3LjA1NjUgMzQuMTM3MSAxNy43MTk1IDM0LjE5MjggMTguOTQwNEMzNC4yNTMxIDIwLjI2MDcgMzQuMjY1OCAyMC42NTY4IDM0LjI2NTggMjQuMDAwMkMzNC4yNjU4IDI3LjM0MzYgMzQuMjUzMSAyNy43Mzk3IDM0LjE5MjggMjkuMDYwMUMzNC4xMzcxIDMwLjI4MDkgMzMuOTMzMiAzMC45NDM5IDMzLjc2MTcgMzEuMzg1MUMzMy41MzQ1IDMxLjk2OTYgMzMuMjYzMiAzMi4zODY4IDMyLjgyNSAzMi44MjQ5QzMyLjM4NjggMzMuMjYzMSAzMS45Njk3IDMzLjUzNDQgMzEuMzg1MiAzMy43NjE2QzMwLjk0NCAzMy45MzMxIDMwLjI4MSAzNC4xMzcxIDI5LjA2MDEgMzQuMTkyN0MyNy43Mzk5IDM0LjI1MyAyNy4zNDM5IDM0LjI2NTggMjQuMDAwMyAzNC4yNjU4QzIwLjY1NjYgMzQuMjY1OCAyMC4yNjA2IDM0LjI1MyAxOC45NDA0IDM0LjE5MjdDMTcuNzE5NSAzNC4xMzcxIDE3LjA1NjUgMzMuOTMzMSAxNi42MTUzIDMzLjc2MTZDMTYuMDMwOCAzMy41MzQ0IDE1LjYxMzcgMzMuMjYzMSAxNS4xNzU1IDMyLjgyNDlDMTQuNzM3NCAzMi4zODY4IDE0LjQ2NiAzMS45Njk2IDE0LjIzODggMzEuMzg1MUMxNC4wNjc0IDMwLjk0MzkgMTMuODYzNCAzMC4yODA5IDEzLjgwNzcgMjkuMDYwMUMxMy43NDc1IDI3LjczOTcgMTMuNzM0NyAyNy4zNDM2IDEzLjczNDcgMjQuMDAwMkMxMy43MzQ3IDIwLjY1NjggMTMuNzQ3NSAyMC4yNjA3IDEzLjgwNzcgMTguOTQwNEMxMy44NjM0IDE3LjcxOTUgMTQuMDY3NCAxNy4wNTY1IDE0LjIzODggMTYuNjE1M0MxNC40NjYgMTYuMDMwOCAxNC43MzczIDE1LjYxMzcgMTUuMTc1NSAxNS4xNzU1QzE1LjYxMzcgMTQuNzM3MyAxNi4wMzA4IDE0LjQ2NiAxNi42MTUzIDE0LjIzODhDMTcuMDU2NSAxNC4wNjczIDE3LjcxOTUgMTMuODYzNCAxOC45NDA0IDEzLjgwNzdDMjAuMjYwOCAxMy43NDc0IDIwLjY1NjggMTMuNzM0NyAyNC4wMDAzIDEzLjczNDdaTTI0LjAwMDMgMTEuNDc4NUMyMC41OTk2IDExLjQ3ODUgMjAuMTczMSAxMS40OTI5IDE4LjgzNzYgMTEuNTUzOUMxNy41MDQ4IDExLjYxNDcgMTYuNTk0NSAxMS44MjY0IDE1Ljc5OCAxMi4xMzU5QzE0Ljk3NDYgMTIuNDU1OSAxNC4yNzYzIDEyLjg4NCAxMy41ODAxIDEzLjU4MDFDMTIuODg0IDE0LjI3NjMgMTIuNDU1OSAxNC45NzQ2IDEyLjEzNTkgMTUuNzk4QzExLjgyNjQgMTYuNTk0NSAxMS42MTQ3IDE3LjUwNDcgMTEuNTUzOSAxOC44Mzc1QzExLjQ5MjkgMjAuMTczMSAxMS40Nzg1IDIwLjU5OTUgMTEuNDc4NSAyNC4wMDAyQzExLjQ3ODUgMjcuNDAwOSAxMS40OTI5IDI3LjgyNzMgMTEuNTUzOSAyOS4xNjI5QzExLjYxNDcgMzAuNDk1NyAxMS44MjY0IDMxLjQwNTkgMTIuMTM1OSAzMi4yMDI0QzEyLjQ1NTkgMzMuMDI1OCAxMi44ODQgMzMuNzI0MSAxMy41ODAxIDM0LjQyMDNDMTQuMjc2MyAzNS4xMTY0IDE0Ljk3NDYgMzUuNTQ0NiAxNS43OTggMzUuODY0NUMxNi41OTQ1IDM2LjE3NDEgMTcuNTA0OCAzNi4zODU4IDE4LjgzNzYgMzYuNDQ2NkMyMC4xNzMxIDM2LjUwNzUgMjAuNTk5NiAzNi41MjE5IDI0LjAwMDMgMzYuNTIxOUMyNy40MDEgMzYuNTIxOSAyNy44Mjc0IDM2LjUwNzUgMjkuMTYzIDM2LjQ0NjZDMzAuNDk1NyAzNi4zODU4IDMxLjQwNiAzNi4xNzQxIDMyLjIwMjUgMzUuODY0NUMzMy4wMjU5IDM1LjU0NDYgMzMuNzI0MiAzNS4xMTY0IDM0LjQyMDQgMzQuNDIwM0MzNS4xMTY1IDMzLjcyNDEgMzUuNTQ0NiAzMy4wMjU4IDM1Ljg2NDYgMzIuMjAyNEMzNi4xNzQyIDMxLjQwNTkgMzYuMzg1OSAzMC40OTU3IDM2LjQ0NjYgMjkuMTYyOUMzNi41MDc2IDI3LjgyNzMgMzYuNTIyIDI3LjQwMDkgMzYuNTIyIDI0LjAwMDJDMzYuNTIyIDIwLjU5OTUgMzYuNTA3NiAyMC4xNzMxIDM2LjQ0NjYgMTguODM3NUMzNi4zODU5IDE3LjUwNDcgMzYuMTc0MiAxNi41OTQ1IDM1Ljg2NDYgMTUuNzk4QzM1LjU0NDYgMTQuOTc0NiAzNS4xMTY1IDE0LjI3NjMgMzQuNDIwNCAxMy41ODAxQzMzLjcyNDIgMTIuODg0IDMzLjAyNTkgMTIuNDU1OSAzMi4yMDI1IDEyLjEzNTlDMzEuNDA2IDExLjgyNjQgMzAuNDk1NyAxMS42MTQ3IDI5LjE2MyAxMS41NTM5QzI3LjgyNzQgMTEuNDkyOSAyNy40MDEgMTEuNDc4NSAyNC4wMDAzIDExLjQ3ODVaTTI0LjAwNTggMTcuNTc1MkMyMC40NTQ1IDE3LjU3NTIgMTcuNTc1NyAyMC40NTQgMTcuNTc1NyAyNC4wMDUyQzE3LjU3NTcgMjcuNTU2NSAyMC40NTQ1IDMwLjQzNTMgMjQuMDA1OCAzMC40MzUzQzI3LjU1NyAzMC40MzUzIDMwLjQzNTggMjcuNTU2NSAzMC40MzU4IDI0LjAwNTJDMzAuNDM1OCAyMC40NTQgMjcuNTU3IDE3LjU3NTIgMjQuMDA1OCAxNy41NzUyWk0yNC4wMDU4IDI4LjE3OTJDMjEuNzAwNiAyOC4xNzkyIDE5LjgzMTggMjYuMzEwNCAxOS44MzE4IDI0LjAwNTJDMTkuODMxOCAyMS43MDAxIDIxLjcwMDYgMTkuODMxNCAyNC4wMDU4IDE5LjgzMTRDMjYuMzExIDE5LjgzMTQgMjguMTc5NyAyMS43MDAxIDI4LjE3OTcgMjQuMDA1MkMyOC4xNzk3IDI2LjMxMDQgMjYuMzExIDI4LjE3OTIgMjQuMDA1OCAyOC4xNzkyWk0zMC42OTE2IDE4LjgyMDZDMzEuNTIxNCAxOC44MjA2IDMyLjE5NDIgMTguMTQ3OSAzMi4xOTQyIDE3LjMxODFDMzIuMTk0MiAxNi40ODgyIDMxLjUyMTQgMTUuODE1NCAzMC42OTE2IDE1LjgxNTRDMjkuODYxNyAxNS44MTU0IDI5LjE4OSAxNi40ODgyIDI5LjE4OSAxNy4zMTgxQzI5LjE4OSAxOC4xNDc5IDI5Ljg2MTcgMTguODIwNiAzMC42OTE2IDE4LjgyMDZaIiBmaWxsPSJ3aGl0ZSIvPgo8ZGVmcz4KPGxpbmVhckdyYWRpZW50IGlkPSJpbnN0X2dyIiB4MT0iMzEuMjU3MSIgeTE9IjgzLjc5MDUiIHgyPSI5OS40MDQ1IiB5Mj0iMTYuNjI5NiIgZ3JhZGllbnRVbml0cz0idXNlclNwYWNlT25Vc2UiPgo8c3RvcCBzdG9wLWNvbG9yPSJ3aGl0ZSIvPgo8c3RvcCBvZmZzZXQ9IjAuMTQ3ODY0IiBzdG9wLWNvbG9yPSIjRjY2NDBFIi8+CjxzdG9wIG9mZnNldD0iMC40NDM5NzQiIHN0b3AtY29sb3I9IiNCQTAzQTciLz4KPHN0b3Agb2Zmc2V0PSIwLjczMzMzNyIgc3RvcC1jb2xvcj0iIzZBMDFCOSIvPgo8c3RvcCBvZmZzZXQ9IjEiIHN0b3AtY29sb3I9IiM2QjAxQjkiLz4KPC9saW5lYXJHcmFkaWVudD4KPC9kZWZzPgo8L3N2Zz4K"
                width="48"
                height="48"
                alt=""
            /></a>
            <a href="https://www.youtube.com" target="_blank"
              ><img
                src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDgiIGhlaWdodD0iNDgiIHZpZXdCb3g9IjAgMCA0OCA0OCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPGNpcmNsZSBjeD0iMjQiIGN5PSIyNCIgcj0iMjMiIGZpbGw9IiMzQTI4QTciLz4KPHBhdGggZD0iTTAgMjRDMCAxMC43NDUyIDEwLjc0NTIgMCAyNCAwQzM3LjI1NDggMCA0OCAxMC43NDUyIDQ4IDI0QzQ4IDM3LjI1NDggMzcuMjU0OCA0OCAyNCA0OEMxMC43NDUyIDQ4IDAgMzcuMjU0OCAwIDI0WiIgZmlsbD0iI0ZGMDAwMCIvPgo8cGF0aCBkPSJNMzYuMjY1IDE4LjA3MzRDMzUuOTcwNiAxNi45NDI0IDM1LjEwMzEgMTYuMDUxOCAzNC4wMDE2IDE1Ljc0OTVDMzIuMDA1MyAxNS4yMDAyIDI0IDE1LjIwMDIgMjQgMTUuMjAwMkMyNCAxNS4yMDAyIDE1Ljk5NDYgMTUuMjAwMiAxMy45OTgyIDE1Ljc0OTVDMTIuODk2NyAxNi4wNTE4IDEyLjAyOTIgMTYuOTQyNCAxMS43MzQ4IDE4LjA3MzRDMTEuMiAyMC4xMjMyIDExLjIgMjQuNDAwMiAxMS4yIDI0LjQwMDJDMTEuMiAyNC40MDAyIDExLjIgMjguNjc3IDExLjczNDggMzAuNzI3QzEyLjAyOTIgMzEuODU4IDEyLjg5NjcgMzIuNzQ4NiAxMy45OTgyIDMzLjA1MUMxNS45OTQ2IDMzLjYwMDIgMjQgMzMuNjAwMiAyNCAzMy42MDAyQzI0IDMzLjYwMDIgMzIuMDA1MyAzMy42MDAyIDM0LjAwMTYgMzMuMDUxQzM1LjEwMzEgMzIuNzQ4NiAzNS45NzA2IDMxLjg1OCAzNi4yNjUgMzAuNzI3QzM2LjggMjguNjc3IDM2LjggMjQuNDAwMiAzNi44IDI0LjQwMDJDMzYuOCAyNC40MDAyIDM2LjggMjAuMTIzMiAzNi4yNjUgMTguMDczNFoiIGZpbGw9IndoaXRlIi8+CjxwYXRoIGQ9Ik0yMS42MDE2IDI4Ljc5OThWMjAuNzk5OEwyOC4wMDE2IDI0LjhMMjEuNjAxNiAyOC43OTk4WiIgZmlsbD0iI0ZGMDAwMCIvPgo8L3N2Zz4K"
                width="48"
                height="48"
                alt=""
            /></a>
          </div>
        </div>
      </div>
      <div class="footer-disclaimer">
        <p>&copy; 2023 Your Quiz. All rights reserved.</p>
        <p>Privacy Policy | Terms of Service</p>
      </div>
    </footer>

    <!-- <script src="homeScript.js"></script> -->
    <script>
      function toggleNav() {
        let navBar = document.getElementById("navBar");

        if (navBar.className === "") navBar.className = "responsive";
        else navBar.className = "";
      }
      document
        .getElementById("logoutBtn")
        .addEventListener("click", function () {
          let conf = confirm("Do you rally want to logout");
          if (conf) {
            window.location.href = "logout.php";
          }
        });
    </script>
  </body>
</html>
