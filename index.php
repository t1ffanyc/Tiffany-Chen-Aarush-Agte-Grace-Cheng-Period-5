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
        max-height: 650px;
        position: static;
        padding-top: 50px;
        margin: auto;
        }


        .mySlides {
        display: none;
        }

        .prev {
        cursor: pointer;
        position: absolute;
        top: 50%;
        width: auto;
        margin-top: 1100px;
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
        margin-top: 1100px;
        right: 225px;
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
            <li><a href="quiz.html">quiz</a></li>
            <li><a href="welcome.php">my account</a></li>
        </ul>
    </div>

    <div class="animation-div">
        <h3 id="animation-h1" class="animation"><br>When you do USACO,<br> you become
        <span
            class="txt-rotate"
            data-period="2000"
            data-rotate='[ "cool.", "nerdy.", "funny.", "scrumptious.", "absolutely delectable!" ]'></span>
        </h3>
        <h4 id = "animation-h2" class="animation"><br>Do USACO now at: <a href="http://www.usaco.org/" target="_blank">usaco.org</a></h4>
    </div>

    <div class="paragraph">
        <h2>What is USACO?</h2>
        <p>The United States of America Computing Olympiad (USACO) is an online computer programming competition, which serves as qualification for the International Olympiad in Informatics (IOI) in the United States. Primarily for secondary school students in the United States, the USACO offers four competitions (December, January, February, US Open) during the academic year. Participants compete in four increasingly difficult divisions: Bronze, Silver, Gold and Platinum; coding & submitting computer programs in one of four languages: C, C++, Java, and Python. Competitors advance through the levels by performing well in their current division.</p>
    </div>

    <div class = "paragraph">
        <h2>When is USACO?</h2>
        <p>
          The USACO competition takes place 3 times every school year, with a US Open competition after for all those who do well.
          <br>

        </p>
    </div>

    <div class="slideshow-container">
        <div class="mySlides fade">
          <div class="numbertext">1 / 12</div>
          <figure>
            <img src="https://bloximages.newyork1.vip.townnews.com/daily-journal.com/content/tncms/assets/v3/editorial/c/53/c539e176-f4d0-11eb-9dba-579fe94fec4d/610a03e268fce.image.jpg?resize=1200%2C800" style="width:100%">
            <figcaption>Farmer John is the leader of the farm. He takes care of the cows, grows the crops, and hangs out. He's old-fashioned, old, but still a smart cookie and is a fantastic farmhead.</figcaption>
          </figure>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">2 / 12</div>
          <figure>
            <img src="https://pbs.twimg.com/profile_images/2344933022/cow2_400x400.jpg" style="width:100%">
            <figcaption>Bessie is the prize cow of the farm. She is the leader of the cows and the older sister to Elsie. She's well read and has an endless thirst for knowledge. She even has a college degree at such a young age!</figcaption>
          </figure>
        </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 12</div>
          <figure>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQm9rzbRGMbE0QsnLt8W8-8XrJSIjYgTuHGQw&usqp=CAU" style="width:100%">
            <figcaption>Elsie is one of the younger cows, and Bessie's younger sister. She's adventurous, brave, and feisty. She is often seen playing games with the older cows. She loses frequently, but that doesn't deter her.</figcaption>
          </figure>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">4 / 12</div>
            <figure>
              <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT2y0SDs_xguuWBlZEJFw7IRFIbOQ0yfVYqag&usqp=CAU" style="width:100%">
              <figcaption>Mildred is one of the older cows. From being on the farm so long, She has lots of life advice to give to the younger cows on the farm. She can often be seen relaxing in the shade approaching retirement.</figcaption>
            </figure>
            </div>
        
          <div class="mySlides fade">
            <div class="numbertext">5 / 12</div>
            <figure>
              <img src="vpw2.jfif" style="width:100%">
              <figcaption>Buttercup is an energetic young squirt. She enjoys playing running games like tag and hide and seek. She is often seen playing with Elsie.</figcaption>
            </figure>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">6 / 12</div>
            <figure>
              <img src="https://assets.podomatic.net/ts/2a/46/fb/taylorsara/640x640_1150552.jpg?1539518516" style="width:100%">
              <figcaption>Belinda is a motherly figure to many of the cows. She inspires them to do better in life and to pursue their futures. She also helps take care of their emotional needs.</figcaption>
            </figure>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">7 / 12</div>
            <figure>
              <img src="https://images.fineartamerica.com/images/artworkimages/mediumlarge/1/beatrice-jenn-teel.jpg" style="width:100%">
              <figcaption>Beatrice is the mean girl of the group. She spreads rumors around many of her fellow cows due to her insecurities. She has a long way ahead of her for true redemption.</figcaption>
            </figure>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">8 / 12</div>
            <figure>
              <img src="https://i.ytimg.com/vi/kfK-N7YCp7Q/maxresdefault.jpg" style="width:100%">
              <figcaption>Bella is beatrice's sidekick. She doesn't fuly understand why, but she follows Beatrice's every command. She tries to be everyone's friend, though.</figcaption>
            </figure>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">9 / 12</div>
            <figure>
              <img src="blue.jfif" style="width:100%">
              <figcaption>Blue is the clumsiest of the cows. She is young but eager, and often trips over herself. She is relentlessly made fun of, and cries a lot. However, she is extremely funny and makes friends that way.</figcaption>
            </figure>
          </div>

          <div class="mySlides fade">
            <div class="numbertext">10 / 12</div>
            <figure>
              <img src="https://pbs.twimg.com/profile_images/530086650635112450/_NXzicMP_400x400.jpeg" style="width:100%">
              <figcaption>Betsy is a lovable old cow. She is extremely friendsly and makes friends with all the new cows on the farm. She is a model cow that everyone loves.</figcaption>
            </figure>
          </div>
        
          <div class="mySlides fade">
            <div class="numbertext">11 / 12</div>
            <figure>
            <img src="https://assets.atlasobscura.com/media/W1siZiIsInVwbG9hZHMvcGxhY2VfaW1hZ2VzL2JlZWNkNjVhZTJmYzQ0NWRlZl80ODE2NzIyODkzXzIxYjc2ZjNlMzhfYi5qcGciXSxbInAiLCJjb252ZXJ0IiwiIl0sWyJwIiwiY29udmVydCIsIi1xdWFsaXR5IDgxIC1hdXRvLW9yaWVudCJdLFsicCIsInRodW1iIiwiNzgweDUyMCMiXV0" style="width:100%">
            <figcaption>Sue is the kook of the farm. She often forgets details about her life and is the older sister of Blue. She is also not a real cow.</figcaption>
            </figure>
          </div>
          <div class="mySlides fade">
            <div class="numbertext">12 / 12</div>
            <figure>
            <img src="farmernhjo.png" style="width:100%">
            <figcaption>Farmer Nhoj is an experimenter. He loves to tinker around with inventions in his shed. He and his natural enemy (and brother) Farmer John frequently have discussions (and arguments) about farming methods </figcaption>
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