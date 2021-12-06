<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Validaçao de Formulario php </title>
</head>
<body>
	<main>
		<div>
			<h2> Validando tipos de campos de formulario </h2>
			<form action="valida.php" method="post">
				<p> Nome: <input type="text" name="nome"> </p>
				<p> Senha: <input type="password" name="pass"> </p>
				<p> Idade: <input type="number" name="idade"> </p>
				<p> Telefone: <input type="tel" name="fone"> </p>
				<p> E-mail: <input type="email" name="endEmail"> </p>
				<hr>
				<h4> Organizar melhor com o php </h4>
				<fieldset> 
		            <legend> 
			Tipo 'radio' escolha uma opçao entre varias - campo "name" é igual em todas as opçoes
		            </legend>
                    <p> 
                    	<input type="radio" name="comidaPref" value="Arroz com feijao e carne"> 
                    	<label for="comidaPref"> Arroz com feijao e carne</label>
                    </p>
                    <p>
                    	<input type="radio" name="comidaPref" value="Arroz com macarrao e carne">
                    	<label for="comidaPref"> Arroz com macarrao e carne</label>
                    </p>
                    <p>
                    	<input type="radio" name="comidaPref" value="Baiao e carne">
                    	<label for="comidaPref"> Baiao e carne</label>
                    </p>
                    <p> 
                    	<input type="radio" name="comidaPref" value="Baiao com salada e ovo">
                    	<label for="comidaPref"> Baiao com salada e ovo</label>
                   </p>
				</fieldset>
				<fieldset>
					<legend> Tipo 'checkbox' - Escolha mais de uma opçao - Diciplinas</legend>
					<p>
						<input type="checkbox" name="redes">
						<label for="redes"> Redes de computadores </label>
					</p>
					<p>
						<input type="checkbox" name="JavaScript">
						<label for="JavaScript"> java script</label>
					</p>
					<p>
						<input type="checkbox" name="Java">
						<label for="Java"> Programaçao em java</label>
					</p>
					<p>
						<input type="checkbox" name="Arquitetura">
						<label for="Arquitetura"> Arquitetura e manutençao de computadores</label>
					</p>
				</fieldset>
				    <legend> Em qual carro gostaria de viajar?</legend>
				    <label for="cars"> Choose a car</label>
				    <select name="cars">
				    	<option value="volvo"> Onix plus</option>
				    	<option value="saab"> Toro</option>
				    	<option value="opel"> Corola</option>
				    	<option value="audi"> Polo</option>
				    </select>
				</fieldset>
				<fieldset>
					<legend> Qual a sua nota de satisfaçao com o curso de informatica?</legend>
					<label for="nota"> Valores de 0 a 100</label>
					<input type="range" min="0" max="100" name="nota">
				</fieldset>
				<fieldset>
					<legend> Qual a data do seu aniversario?</legend>
					<label for="nota"> Quando voce deve ganahr presentes?</label>
					<input type="date">
				</fieldset>
				<fieldset>
					<legend> Qual o horario que voce vai dormir?</legend>
					<label for="nota"> Que horas voce capota?</label>
					<input type="time" name="mimiu">
				</fieldset>
				<hr>
				<button type="submit"> Enviar e mostrar </button>
			</form>
		</div>
	</main>
</body>
</html>