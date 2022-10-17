<?php
include('conexao.php');

/*session_start();

if(isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === true){
    header("location: index.php");
    /* No welcome troque pelo nome da pagina principal do projeto // EX: index.html(php) 
    exit;*/

include('menu.php');
$sql = "SELECT * FROM eventos";
$query = mysqli_query($conn, $sql);
?>
<div id="lista">
  <div class='container'>

    <a href="cadastraEventos.php" class="btn button-primay btn-primary button">Cadastrar novo</a>

    <div id="servicos" class="block">
      <div class="container">
        <h2 class="title text-center">Eventos</h2>
        <h5 class="subtitle text-center m-4">
          "Ninguém te ensinará mais sobre fotografia do que uma criança. Fotografar crianças é momento, é movimento, é agora. <b>A vida também é assim</b>."
        </h5>

        <div class="button-group">
          <button type="button" class="active" data-filter="*" id="btn-all">
            Todos
          </button>
          <button type="button" data-filter=".junina">Festas Juninas</button>
          <button type="button" data-filter=".jogos">Jogos Escolares</button>
          <button type="button" data-filter=".alunos">Nossos Alunos</button>

        </div>

        <?php while ($dados = mysqli_fetch_array($query)) { ?>
          <tr>
            <td><?php echo $dados['nome_evento'] ?></td>
            <td> <img height="200" width="200" src="image-evento/<?php echo $dados['foto_evento'] ?>"> </td>
            <!--<a class='btn btn-danger btn-sm' href='#' onclick='confirmar("<?php echo $dados['cod_evento'] ?>")'><i class="fa-solid fa-trash-can"></i></a></td>-->
          </tr>
        <?php } ?>
        </table>
      </div>
    </div>
  </div>
</div>
    <script>
      function confirmar(cod) {
        if (confirm('Você realmente deseja excluir esta linha?'))
          location.href = 'excluiAluno.php?cod_aluno=' + cod;
      }
    </script>


    <div>
      <footer class="footer mt-auto py-3">
        <div class="container fluid">
          <span class="text-muted">Coloque o conteúdo do sticky footer aqui.</span>
        </div>
      </footer>
    </div>