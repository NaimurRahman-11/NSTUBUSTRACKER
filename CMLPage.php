<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://kit.fontawesome.com/9778dd3679.js" crossorigin="anonymous"></script>
    <Style>
        .progress-bar {
            display: flex;
            margin: 40px 0;
        }

        .progress-bar .step {
            position: relative;
            text-align: center;
            width: 100%;
        }

        .progress-bar .step p {
            font-size: 18px;
            font-weight: 500;
            color: #000;
            margin-bottom: 8px;
            transition: 0.2s;
        }

        .progress-bar .step p.active {
            color: #d43f8d;
        }

        .progress-bar .step .bullet {
            position: relative;
            height: 25px;
            width: 25px;
            border: 2px solid #000;
            display: inline-block;
            border-radius: 50%;
            transition: 0.2s;

        }

        .progress-bar .step .bullet.active {
            border-color: #d43f8d;
            background: #d43f8d;
        }


        .progress-bar .step:last-child .bullet::before,
        .progress-bar .step:last-child .bullet::after {
            display: none;
        }


        .progress-bar .step .bullet::before,
        .progress-bar .step .bullet::after {
            position: absolute;
            content: '';
            bottom: 11px;
            right: -51px;
            height: 3px;
            width: 44px;
            background: #262626;
        }


        .progress-bar .step .bullet.active::after {
            background: #d43f8d;
            transform: scaleX(0);
            transform-origin: left;
            animation: animate 0.3s linear forwards;
        }

        @keyframes animate {
            100% {
                transform: scaleX(1);
            }
        }

        .progress-bar .step .bullet span {
            font-weight: 500;
            font-size: 17px;
            line-height: 25px;
            position: absolute;
            left: 50%;
            transform: translate(-50%);
        }

        .progress-bar .step .bullet.active span {
            display: none;
        }



        .progress-bar .step .check {
            position: absolute;
            left: 50%;
            top: 70%;
            font-size: 15px;
            transform: translate(-50%, -50%);
            display: none;
        }

        .progress-bar .step .check.active {
            display: block;
            color: #fff;
        }
    </Style>

</head>

<body>

<button class="campus">Campus</button>
<button class="zmor">Z-Mor</button>
<button class="sonapur">Sonapur</button>
<button class="dotterhaat">Dotter Haat</button>
<button class="bissonath">Bisshonath</button>
<button class="maijdee">Maijdee</button>



<div class="progress-bar">
        <div class="step">
            <p>Campus</p>
            <div class="bullet">
                <span>1</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>

        <div class="step">
            <p>Zmor</p>
            <div class="bullet">
                <span>2</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>

        <div class="step">
            <p>Sonapur</p>
            <div class="bullet">
                <span>3</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>

        <div class="step">
            <p>Dotterhaat</p>
            <div class="bullet">
                <span>4</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>

        <div class="step">
            <p>Bissonath</p>
            <div class="bullet">
                <span>5</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>

        <div class="step">
            <p>Maijdee</p>
            <div class="bullet">
                <span>6</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>

    </div>



<script>

        const Campus = document.querySelector(".campus");
        const Zmor = document.querySelector(".zmor");
        const Sonapur = document.querySelector(".sonapur");
        const Dotterhaat = document.querySelector(".dotterhaat");
        const Bissonath = document.querySelector(".bissonath");
        const Maijdee = document.querySelector(".maijdee");
        

        const progressText = document.querySelectorAll(".step p");
        const progressCheck = document.querySelectorAll(".step .check");
        const bullet = document.querySelectorAll(".step .bullet");
        let max = 15;
        let current = 1;
        

        Campus.addEventListener("click", function () {
            bullet[current - 1].classList.add("active");
            progressCheck[current - 1].classList.add("active");
            progressText[current - 1].classList.add("active");
            // current += 1;
        });

        Zmor.addEventListener("click", function () {
            bullet[current - 0].classList.add("active");
            progressCheck[current - 0].classList.add("active");
            progressText[current - 0].classList.add("active");
            
        });

        Sonapur.addEventListener("click", function () {
            bullet[current + 1].classList.add("active");
            progressCheck[current + 1].classList.add("active");
            progressText[current + 1].classList.add("active");
            
        });

        Dotterhaat.addEventListener("click", function () {
            bullet[current + 2].classList.add("active");
            progressCheck[current + 2].classList.add("active");
            progressText[current + 2].classList.add("active");
            
        });

        Bissonath.addEventListener("click", function () {
            bullet[current + 3].classList.add("active");
            progressCheck[current + 3].classList.add("active");
            progressText[current + 3].classList.add("active");
            
        });

        Maijdee.addEventListener("click", function () {
            bullet[current + 4].classList.add("active");
            progressCheck[current + 4].classList.add("active");
            progressText[current + 4].classList.add("active");
            
        });


    </script>
    
</body>
</html>