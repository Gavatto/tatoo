<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="(max-width: 768px)" href="responsive.css"/>
    <title>Frog Army</title>
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

        header img {
            margin-right: 10px;
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

        #Tattoo {
            color: #FFCDB2;
        }

        #transparent-block {
            background-color: #0F110C;
            height: 200px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .blocks-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            padding: 70px;
            background-color: #0F110C;
        }

        .block {
            width: 30%;
            text-align: center;
            padding: 15px;
            margin-bottom: 60px;
            background-color: #FFFFFF;
        }

        .block img {
            max-width: 100%;
            margin-bottom: 20px;
        }

        .block p {
            font-size: 24px;
            line-height: 36px;
        }

        #master {
            color: #FFCDB2;
        }

        #contacts {
            background-color: #E5C2C0;
            padding: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 150px;
        }

        .contact-info {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-bottom: 30px;
        }

        .contact-info img {
            max-width: 100%;
            height: auto;
            margin-bottom: 10px;
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
    <h4><span id="Tattoo">Tattoo Studio</span> - Frog Army</h4>
    <p>Welcome! This is our family tattoo studio in London! We are not an ordinary tattoo parlor, here you will not find
        a passerby, a rush, a crowd of masters in the basement who make template tattoos for everyone like a carbon
        copy. Frog Army is our personal temple of creativity and art! We are proud of our work and its results.
        Impeccable reputation, personal approach and constant technological improvement allow us to advise our relatives
        and choose the best for ourselves.</p>
</div>
<div id="transparent-block">
    <p>Tattoo <span id="master">Master</span></p>
</div>
<div class="blocks-container">
    <!-- Виводимо усі тату в циклі -->
    @foreach($masters as $master)
        <div class="block">
            <img src="{{$master->image}}">
            <p style="color: #FFCDB2;">{{$master->name}}</p>
            <p style="color: #0F110C;">{{$master->description}}</p>
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
</body>
</html>
