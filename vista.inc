<form name="Demo" action="" method="post">
	<div>
        <p>Selecciona el componente que deseas monitorear</p>

        <table>
		<tr>
			<td> Hardware Servidor </td>
			<td><a href="#" id="enlacehardware" onclick="Monitorear('hardware');"> Monitorear</a></td>
			<td id="hardware"></td>
		</tr>
		<tr>
			<td>Base de Datos</td>
			<td><a href="#" id="enlacebasededatos" onclick="Monitorear('database');">Monitorear</a></td>
			<td id="database"></td>
		</tr>
		<tr>
			<td>Aplicacion</td>
			<td><a href="#" id="enlaceaplicacion" onclick="Monitorear('aplicacion');">Monitorear</a></td>
			<td id="aplicacion"></td>
		</tr>
		<tr>
			<td>Enlace Internet</td>
			<td><a href="#" id="enlaceconexion" onclick="Monitorear('conexion');"> Monitorear</a></td>
			<td id="conexion"></td>
		</tr>
		<tr>
			<td>Router Internet</td>
			<td><a href="#" id="enlacerouter" onclick="Monitorear('router');"> Monitorear</a></td>
			<td id="router"></td>
		</tr>
	</table>
	<br>	
        <input id="current_value" type="hidden" value="1"><div> <strong>Disponibilidad del Sistema:</strong><div id="Final"></div></div>
        <br>
    </div>
</form>
