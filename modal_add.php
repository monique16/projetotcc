	    <!-- Button to trigger modal -->
	    <a class="text-center" href="#myModal" data-bs-toggle="modal" class='btn-sm'><i class="fa-solid fa-pencil"></i></a>

	    <br>
	    <br>
	    <br>
	    <!-- Modal -->
	    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	    	<div class="modal-header">

	    		<h3 id="myModalLabel">Editar Cardápio</h3>
	    	</div>
	    	<div class="modal-body">

	    		<form method="post" action="editaCardapio.php" enctype="multipart/form-data">
	    			<table class="table1">
	    				<tr>
	    					<td><label style="color:#3a87ad; font-size:18px;">Lanche</label></td>
	    					<td width="30"></td>
	    					<td><input type="text" name="alimento" placeholder="Lanche" required /></td>
	    				</tr>
	    				<tr>
	    					<td><label style="color:#3a87ad; font-size:18px;">Imagem</label></td>
	    					<td width="30"></td>
	    					<td><input type="file" name="foto_alimento" required /></td>
	    				</tr>
	    			</table>
	    	</div>
	    	<div class="modal-footer">
	    		<button class="btn" data-dismiss="modal" aria-hidden="true">Fechar</button>
	    		<button type="submit" name="Submit" class="btn btn-primary">Adicionar</button>
	    	</div>


	    	</form>
	    </div>