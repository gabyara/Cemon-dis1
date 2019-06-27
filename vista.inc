<form name="Demo" action="" method="post">
	<div>
        <p>Selecciona el componente que deseas monitorear</p>

        <table>
		<tr>
			<td> Hardware Servidor </td>
			<td><a href="#" id="enlacehardware" onclick="Monitorear('Hardware');"> Monitorear</a><div id="hardware"></div></td>
		</tr>
		<tr>
			<td>Base de Datos</td>
			<td><a href="#" id="enlacebasededatos" onclick="Monitorear('DataBase');">Monitorear</a><div id="dataBase"></div></td>
		</tr>
		<tr>
			<td>Aplicacion</td>
			<td><a href="#" id="enlaceaplicacion" onclick="Monitorear('Aplicacion');">Monitorear</a><div id="aplicacion"></div></td>
		</tr>
		<tr>
			<td>Enlace Internet</td>
			<td><a href="#" id="enlaceconexion" onclick="Monitorear('Conexion');"> Monitorear</a><div id="conexion"></div></td>
		</tr>
		<tr>
			<td>Router Internet</td>
			<td><a href="#" id="enlacerouter" onclick="Monitorear('Router');"> Monitorear</a><div id="router"></div></td>
		</tr>
	</table>
	<br>	
        <input id="current_value" type="hidden" value="1"><div> <strong>Disponibilidad del Sistema:</strong><div id="Final"></div></div>
        <br>
    </div>
</form>
