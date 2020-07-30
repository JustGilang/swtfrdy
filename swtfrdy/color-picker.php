<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Lato:400,300);
        * {
        box-sizing: border-box;
        }
        input[type="radio"] {
        display: none;
        }
        input[type="radio"]:checked + label span {
        transform: scale(1.25);
        }
        input[type="radio"]:checked + label .red {
        border: 2px solid #711313;
        }
        input[type="radio"]:checked + label .orange {
        border: 2px solid #873a08;
        }
        input[type="radio"]:checked + label .yellow {
        border: 2px solid #816102;
        }
        input[type="radio"]:checked + label .olive {
        border: 2px solid #505a0b;
        }
        input[type="radio"]:checked + label .green {
        border: 2px solid #0e4e1d;
        }
        input[type="radio"]:checked + label .teal {
        border: 2px solid #003633;
        }
        input[type="radio"]:checked + label .blue {
        border: 2px solid #103f62;
        }
        input[type="radio"]:checked + label .violet {
        border: 2px solid #321a64;
        }
        input[type="radio"]:checked + label .purple {
        border: 2px solid #501962;
        }
        input[type="radio"]:checked + label .pink {
        border: 2px solid #851554;
        }

        label {
        display: inline-block;
        width: 25px;
        height: 25px;
        margin-right: 10px;
        cursor: pointer;
        }
        label:hover span {
        transform: scale(1.25);
        }
        label span {
        display: block;
        width: 100%;
        height: 100%;
        transition: transform .2s ease-in-out;
        }
        label span.red {
        background: #DB2828;
        }
        label span.orange {
        background: #F2711C;
        }
        label span.yellow {
        background: #FBBD08;
        }
        label span.olive {
        background: #B5CC18;
        }
        label span.green {
        background: #21BA45;
        }
        label span.teal {
        background: #00B5AD;
        }
        label span.blue {
        background: #2185D0;
        }
        label span.violet {
        background: #6435C9;
        }
        label span.purple {
        background: #A333C8;
        }
        label span.pink {
        background: #E03997;
        }
    </style>
</head>
<body>
    <input type="radio" name="color" id="red" value="red" />
    <label for="red"><span class="red"></span></label>

    <input type="radio" name="color" id="green" />
    <label for="green"><span class="green"></span></label>

    <input type="radio" name="color" id="yellow" />
    <label for="yellow"><span class="yellow"></span></label>

    <input type="radio" name="color" id="olive" />
    <label for="olive"><span class="olive"></span></label>

    <input type="radio" name="color" id="orange" />
    <label for="orange"><span class="orange"></span></label>

    <input type="radio" name="color" id="teal" />
    <label for="teal"><span class="teal"></span></label>

    <input type="radio" name="color" id="blue" />
    <label for="blue"><span class="blue"></span></label>

    <input type="radio" name="color" id="violet" />
    <label for="violet"><span class="violet"></span></label>

    <input type="radio" name="color" id="purple" />
    <label for="purple"><span class="purple"></span></label>

    <input type="radio" name="color" id="pink" />
    <label for="pink"><span class="pink"></span></label>
</body>
</html>