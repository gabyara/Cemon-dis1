<form name="Demo" action="" method="post">
					            <div>

					                <p>Selecciona el componente que deseas monitorear</p>
					                Hardware Servidor<a href="#" id="enlacehardware" onclick="Monitorear('Hardware');"> Monitorear</a><div id="Hardware"></div><br>
					                Base de Datos<a href="#" id="enlacebasededatos" onclick="Monitorear('DataBase');">Monitorear</a><div id="DataBase"></div><br>
					                Aplicacion<a href="#" id="enlaceaplicacion" onclick="Monitorear('Aplicacion');">Monitorear</a><div id="Aplicacion"></div><br>
					                Enlace Internet<a href="#" id="enlaceconexion" onclick="Monitorear('Conexion');"> Monitorear</a><div id="Conexion"></div><br>
					                Router Internet<a href="#" id="enlacerouter" onclick="Monitorear('Router');"> Monitorear</a><div id="Router"></div><br>
					                <input id="current_value" type="hidden" value="1"><div> Disponibilidad del Sistema</div>
					                <div id="Final"></div><br>
					            </div>
					        </form>