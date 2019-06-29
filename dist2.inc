<form name="Demo" action="" method="post">
	<div>
        <p>Selecciona el componente que deseas monitorear</p>

        <table>
		<tr>
			<td> Hardware Servidor </td>
			<td><a href="#" id="enlacehardware" onclick="Distribuidor2('Hardware');"> Monitorear</a></td>
			<td id="Hardware"></td>
		</tr>
		<tr>
			<td>Base de Datos</td>
			<td><a href="#" id="enlacebasededatos" onclick="Distribuidor2('BD');">Monitorear</a></td>
			<td id="BD"></td>
		</tr>
		<tr>
			<td>Aplicacion</td>
			<td><a href="#" id="enlaceaplicacion" onclick="Distribuidor2('Aplicación');">Monitorear</a></td>
			<td id="Aplicación"></td>
		</tr>
		<tr>
			<td>Enlace Internet</td>
			<td><a href="#" id="enlaceconexion" onclick="Distribuidor2('Enlace');"> Monitorear</a></td>
			<td id="Enlace"></td>
		</tr>
		<tr>
			<td>Router Internet</td>
			<td><a href="#" id="enlacerouter" onclick="Distribuidor2('Router');"> Monitorear</a></td>
			<td id="Router"></td>
		</tr>
	</table>
	<br>	
        <input id="current_value" type="hidden" value="1"><div> <strong>Disponibilidad del Sistema:</strong><div id="Final"></div></div>
        <br>
    </div>
</form>
