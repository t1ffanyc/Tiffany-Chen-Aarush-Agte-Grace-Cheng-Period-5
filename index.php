<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="myCss.css">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>usaco lore</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Readex+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
    <style>
        * {box-sizing:border-box}

        .slideshow-container {
        max-width: 900px;
        max-height: 600px;
        position: static;
        padding-top: 50px;
        }


        .mySlides {
        display: none;
        }

        .prev {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: 800px;
        margin-left: 35px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        }

        .next{
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: 800px;
        margin-right: 225px;
        padding: 16px;
        color: white;
        font-weight: bold;
        font-size: 18px;
        transition: 0.6s ease;
        border-radius: 0 3px 3px 0;
        user-select: none;
        }

        .prev:hover, .next:hover {
        background-color: rgba(0,0,0,0.8);
        }

        .text {
        color: #000000;
        font-size: 15px;
        padding: 8px 12px;
        position: absolute;
        bottom: 8px;
        width: 100%;
        text-align: center;
        }

        .dot {
        cursor: pointer;
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbb;
        border-radius: 50%;
        display: inline-block;
        transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
        background-color: #717171;
        }

        .fade {
        -webkit-animation-name: fade;
        -webkit-animation-duration: 1.5s;
        animation-name: fade;
        animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
        }

        @keyframes fade {
        from {opacity: .4}
        to {opacity: 1}
        }

        figure {
        border: thin #c0c0c0 solid;
        display: flex;
        flex-flow: column;
        padding: 5px;
        max-width: 830px;
        max-height: 700px;
        margin: auto;
        }

        img {
        width: 806px;
        height: 500px;
        object-fit: cover;
        }

        figcaption {
        background-color: #222;
        color: #fff;
        font-family: 'Readex Pro', sans-serif;
        padding: 3px;
        text-align: center;
        }
    </style>
</head>
<body>
    <div class="titlebar">
        <ul>
            <li><a href="index.php">home</a></li>
            <li><a href="problems.html">problems</a></li>
            <li><a href="characters.html">characters</a></li>
            <li><a href="quiz.html">quiz</a></li>
            <li><a href="welcome.php">my account</a></li>
        </ul>
    </div>

    <div class="animation-div">
        <h3 id="animation-h1" class="animation">When you do USACO,<br> you become
        <span
            class="txt-rotate"
            data-period="2000"
            data-rotate='[ "cool.", "nerd.", "funny.", "scrumptious.", "absolutely delectable!" ]'></span>
        </h3>
        <h4 id = "animation-h2" class="animation">Do USACO now at: <a href="http://www.usaco.org/" target="_blank">usaco.org</a></h4>
    </div>

    <div class="paragraph">
        <h2>What is USACO?</h2>
        <p>The United States of America Computing Olympiad (USACO) is an online computer programming competition, which serves as qualification for the International Olympiad in Informatics (IOI) in the United States. Primarily for secondary school students in the United States, the USACO offers four competitions (December, January, February, US Open) during the academic year. Participants compete in four increasingly difficult divisions: Bronze, Silver, Gold and Platinum; coding & submitting computer programs in one of four languages: C, C++, Java, and Python. Competitors advance through the levels by performing well in their current division.</p>
    </div>

    <div class = "paragraph">
        <h2>When is USACO?</h2>
        <p>The USACO competition takes place 3 times every school year, with a US Open competition after for all those who do well.</p>
    </div>
    
    <div class="header">
      <h1 class = "typed-out">characters</h1>
  </div>

    <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 12</div>
          <figure>
            <img src="https://bloximages.newyork1.vip.townnews.com/daily-journal.com/content/tncms/assets/v3/editorial/c/53/c539e176-f4d0-11eb-9dba-579fe94fec4d/610a03e268fce.image.jpg?resize=1200%2C800" style="width:100%">
            <figcaption>FARMER JOHN</figcaption>
          </figure>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 12</div>
          <figure>
            <img src="https://pbs.twimg.com/profile_images/2344933022/cow2_400x400.jpg" style="width:100%">
            <figcaption>BESSIE</figcaption>
          </figure>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 12</div>
          <figure>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm9rzbRGMbE0QsnLt8W8-8XrJSIjYgTuHGQw&usqp=CAU" style="width:100%">
            <figcaption>ELSIE</figcaption>
          </figure>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 12</div>
            <figure>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2y0SDs_xguuWBlZEJFw7IRFIbOQ0yfVYqag&usqp=CAU" style="width:100%">
              <figcaption>MILDRED: Mildred is a vegan. She’s picky about food, so she understands being picky about the milk you drink.</figcaption>
            </figure>
            </div>
        
          <div class="mySlides fade">
            <div class="numbertext">5 / 12</div>
            <figure>
              <img src="vpw2.jfif" style="width:100%">
              <figcaption>BUTTERCUP</figcaption>
            </figure>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">6 / 12</div>
            <figure>
              <img src="https://assets.podomatic.net/ts/2a/46/fb/taylorsara/640x640_1150552.jpg?1539518516" style="width:100%">
              <figcaption>BELINDA</figcaption>
            </figure>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">7 / 12</div>
            <figure>
              <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/beatrice-jenn-teel.jpg" style="width:100%">
              <figcaption>BEATRICE</figcaption>
            </figure>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">8 / 12</div>
            <figure>
              <img src="https://i.ytimg.com/vi/kfK-N7YCp7Q/maxresdefault.jpg" style="width:100%">
              <figcaption>BELLA: Inspirational Story of Bella the COW who Escaped a Tiny Stable<bR>On July 21, 2010 a truck loaded with dairy cows whose milk production was no longer cost effective was headed for a slaughterhouse.</figcaption>
            </figure>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">9 / 12</div>
            <figure>
              <img src="blue.jfif" style="width:100%">
              <figcaption>BLUE</figcaption>
            </figure>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">10 / 12</div>
            <figure>
              <img src="https://pbs.twimg.com/profile_images/530086650635112450/_NXzicMP_400x400.jpeg" style="width:100%">
              <figcaption>BETSY</figcaption>
            </figure>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">11 / 12</div>
            <figure>
            <img src="https://assets.atlasobscura.com/media/W1siZiIsInVwbG9hZHMvcGxhY2VfaW1hZ2VzL2JlZWNkNjVhZTJmYzQ0NWRlZl80ODE2NzIyODkzXzIxYjc2ZjNlMzhfYi5qcGciXSxbInAiLCJjb252ZXJ0IiwiIl0sWyJwIiwiY29udmVydCIsIi1xdWFsaXR5IDgxIC1hdXRvLW9yaWVudCJdLFsicCIsInRodW1iIiwiNzgweDUyMCMiXV0" style="width:100%">
            <figcaption>SUE</figcaption>
            </figure>
          </div>
          <div class="mySlides fade">
            <div class="numbertext">12 / 12</div>
            <figure>
            <img src="farmernhjo.png" style="width:100%">
            <figcaption>FARMER NHOJ</figcaption>
            </figure>
          </div>
    
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>
        <span class="dot" onclick="currentSlide(9)"></span>
        <span class="dot" onclick="currentSlide(10)"></span>
        <span class="dot" onclick="currentSlide(11)"></span>
        <span class="dot" onclick="currentSlide(12)"></span>
      </div>

    <script type="text/javascript" src="Website.js"></script>
    <script type="text/javascript" src="characters.js"></script>
</body>
</html>