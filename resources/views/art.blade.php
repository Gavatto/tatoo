<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="(max-width: 768px)" href="responsive2.css"/>
    <title>Art</title>
    <style>
        body {
            background-color: #0F110C;
            margin: 0;
            padding: 0;
            font-family: 'Yanone Kaffeesatz', sans-serif;
            font-size: 50px;
            color: #FFFFFF;
        }

        header {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }

        nav {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            padding: 10px;
        }

        nav a {
            margin-right: 30px;
            color: #0F110C;
            text-decoration: none;
        }

        nav a:hover {
            color: #FFCDB2;
        }

        #info {
            background-color: #E5C2C0;
            padding: 20px;
            text-align: center;
        }

        /* Two columns on computers */
        .grid-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            grid-gap: 20px;
        }

        /* One column on phones */
        @media screen and (max-width: 767px) {
            .grid-container {
                grid-template-columns: repeat(1, 1fr);
            }
        }

        .grid-item {
            margin: 0 auto;
            text-align: center;
        }

        .grid-item img {
            max-width: 200px;
        }

        .grid-item p {
            color: #FFCDB2;
            text-align: center;
        }

        #contacts {
            background-color: #E5C2C0;
            padding: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 150px;
            width: 100%;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        .contact-info p {
            font-size: 24px;
            line-height: 36px;
            margin: 0;
            color: #FFFFFF;
        }
    </style>
</head>
<body>
<header>
    <h4 style="color: #0F110C;">FrogArmy</h4>
    <nav>
        <a href="/">Main</a>
        <a href="/arts">Art</a>
    </nav>
</header>
<div id="info">
    <h4 style="color: #0F110C;">Most Popular Works</h4>
</div>
<div style="background-color: #FFFFFF;">
    <div class="grid-container">
        <!-- Виводимо усі тату в циклі -->
        @foreach($tattoos as $tattoo)
            <div class="grid-item">
                <img src="{{$tattoo->image}}" alt="{{$tattoo->name}}">
                <p>{{$tattoo->name}}</p>
            </div>
        @endforeach
    </div>
    <div id="contacts">
        <div class="contact-info">
            <p style="color: #0F110C;">Address: 02 Amelia Gateway North Carole ML9 3BS</p>
        </div>
        <div class="contact-info">
            <p style="color: #0F110C;">Telefone: 044-xxx-xxx</p>
        </div>
        <div class="contact-info">
            <p style="color: #0F110C;">Email: FrogArmy@mail.com</p>
        </div>
    </div>
</div>
</body>
</html>
