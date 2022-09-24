<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Sistema de Gestión de Suscripciones</title>
  <link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">

</head>

<style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
    background-image:url('http://especializate.usat.edu.pe/wp-content/uploads/2021/12/importancia-negocios-digitales.jpg');
    background-position: center center;
    background-attachment: fixed;
    background-size: cover;
    background-repeat: no-repeat;
    margin: 0;
    height: 100vh;
}
form{
    height: 505px;
    width: 350px;
    background-color: rgba(0,0,0,0.7);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

form a:hover{
    text-align: left;
    color: #3ef8f8;
}

label{
    display: block;
    margin-top: 20px;
    font-size: 15px;
    font-weight: 500;
}
input{
    display: block;
    height: 40px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 5px;
    margin-top: 5px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 5px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}

</style>

<body>
    <div class="container">  
        <div class="login-box animated fadeInUp">
            <form method="post" action="/loginAcceso">
                <center>
                <h3>Sistema de Gestión de Suscripciones</h3>
                </center>
                @csrf
                <label for="dni">DNI</label>
                <input type="text" placeholder="DNI" name="dni">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" name="password">
                <button  type="submit">Ingresar</button>
                <label>No tiene una cuenta! <a href="/clientes/registro">Registrese Aqui</a></label>
            </form>
        </div>
    </div>

</body>
</html>