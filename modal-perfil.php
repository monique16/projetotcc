<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modal-perfil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!-- Button trigger modal -->
<div class="btn-modal">
<button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal">
    <img src="./img/sla.png" alt="icon-olho" height="25" width="45">
</button>
    
    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="height: 477px; margin-left: 330px;">
        <div class="modal-content" style="width: 700px;">
        <div class="modal-body" style="padding: 20px;">
            <div class="main-box">
                <div class="card-profile">
                    <div class="contour">
        
                        <h2>Perfil</h2>
        
                        <div class="container-main">
                            <div class="container-left">
                                <img src="./img/perfil.jpeg" alt="foto-perfil">
                                <span class="name"> Monique Machado</span>
                            </div>
        
                            <div class="container-right">
                                <span class="data-user"><p class="title"> Email:</p> class="complement"> moniquemachado@gmail.com</p></span>
                                <span class="data-user"><p class="title"> Data de Nascimento:</p><p class="complement"> 04/06/2003</p></span>
                                <span class="data-user"><p class="title"> Data de Ingresso:</p><p class="complement"> 05/02/2012</p></span>
                                <span class="data-user"><p class="title"> CPF:</p><p class="complement"> 076.856.241-34</p></span>
                                <span class="data-user"><p class="title"> Turno:</p><p class="complement"> Vespertino</p></span>
                                <span class="data-user"><p class="title"> Série:</p><p class="complement"> infantil V</p></span>
                            </div>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
          <button type="button" class="btn btn-info"><a href="#editarperfil.php" style="text-decoration: none; color:white"> Editar</a></button>
        </div>
      </div>
    </div>
  </div>




    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>