<?php

?>
<h1>Adicionar Comentario</h1>
<form method="POST" action="add_action.php">
	<label>
		Nome:<br/>
		<input type="text" name="name" />
	</label><br/><br/>

        <label>
                E-mail:<br/>
                <input type="text" name="email" />
        </label><br/><br/>

        <label>
                Comentario:<br/>
                <input type="text" name="comentario" />
        </label><br/><br/>


	<input type="submit" value="adicionar" />	
</form>
