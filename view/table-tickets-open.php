<div class="clearfix">
    <div class="pull-right tableTools-container"></div>
</div>

<!-- div.table-responsive -->
<?php
$Tickets = $Persistencia->TicketsALLStatus1(1);
?>
<!-- div.dataTables_borderWrap -->
<div>
    <table id="dynamic-table" class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </th>
                <th>Departamento</th>
                <th>Tema</th>
                <th class="hidden-480">Enviado</th>

                <th>
                    <i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>
                    Estado
                </th>
                <th class="hidden-480">Última Respuesta</th>

               
            </tr>
        </thead>

        <tbody>
			<?php while($RegistTickets = mysql_fetch_array($Tickets)){?>
            <tr>
                <td class="center">
                    <label class="pos-rel">
                        <input type="checkbox" class="ace" />
                        <span class="lbl"></span>
                    </label>
                </td>

                <td>
                    Soporte
                </td>
                <td><a href="?view=view&tid=<?php echo $RegistTickets['tid'] ?>">#<?php echo $RegistTickets['tid'] ?> - <?php echo $RegistTickets['title'] ?></a></td>
                <td class="hidden-480"><a href="#"><span class="label label-sm label-success"><?php echo $RegistTickets['name'] ?></span></a></td>
                <td><span class="text-success">Abierto</span></td>

                <td class="hidden-480">
                    <?php setlocale(LC_ALL,"es_ES"); echo date("j M, Y, (g:i a)", strtotime(date($RegistTickets['date'])));?>		
                </td>

                <td style="display:none"></td>
            </tr>
			<?php }?>
        </tbody>
    </table>
</div>
