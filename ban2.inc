<form name="Demo" action="" method="post">
	<div>
        <p>Selecciona el componente que deseas monitorear</p>

        <table>
		<tr>
			<td> Hardware Servidor </td>
			<td><a href="#" id="enlacehardware" onclick="Banco2('hardware');"> Monitorear</a></td>
			<td id="hardware"></td>
		</tr>
		<tr>
			<td>Base de Datos</td>
			<td><a href="#" id="enlacebasededatos" onclick="Banco2('database');">Monitorear</a></td>
			<td id="database"></td>
		</tr>
		<tr>
			<td>Aplicacion</td>
			<td><a href="#" id="enlaceaplicacion" onclick="Banco2('application');">Monitorear</a></td>
			<td id="application"></td>
		</tr>
		<tr>
			<td>Enlace Internet</td>
			<td><a href="#" id="enlaceconexion" onclick="Banco2('network');"> Monitorear</a></td>
			<td id="network"></td>
		</tr>
		<tr>
			<td>Router Internet</td>
			<td><a href="#" id="enlacerouter" onclick="Banco2('router');"> Monitorear</a></td>
			<td id="router"></td>
		</tr>
	</table>
	<br>	
        <input id="current_value" type="hidden" value="1"><div> <strong>Disponibilidad del Sistema:</strong><div id="Final"></div></div>
        <br>
    </div>
</form>
