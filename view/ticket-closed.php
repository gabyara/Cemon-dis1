<?php
$Tickets = $Persistencia->TicketsALLStatus(3,$_SESSION["id"]);
?>

<div class="row">
    <div class="col-xs-12">
		
        <div>
            <table id="dynamic-table" class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="center" style="display:none"></th>
                        <th>Departamento</th>
                        <th>Tema</th>
                        <th class="hidden-480">Status</th>
                        <th class="hidden-480"><i class="ace-icon fa fa-clock-o bigger-110 hidden-480"></i>Ultima Actualización</th>
                    </tr>
                </thead>

                <tbody>
					<?php while($RegistTickets = mysql_fetch_array($Tickets)){?>
                    <tr>
                        <td class="center" style="display:none"></td>
                        <td><?php if($RegistTickets['did'] == 3) {echo 'Soporte';}?></td>
                        <td><a href="viewticket.php?tid=<?php echo $RegistTickets['tid'] ?>"><?php echo '#'.$RegistTickets['tid'].'</br>'.$RegistTickets['title']; ?></a></td>
                        <td class="hidden-480">
                            <span class="label label-sm label-default">Cerrado</span>
                        </td>
                        <td class="hidden-480"><?php setlocale(LC_ALL,"es_ES"); echo date("j M, Y, (g:i a)", strtotime(date($RegistTickets['date'])));?></td>
                        <td style="display:none"></td>
                        <td style="display:none"></td>
                    </tr>
					<?php }?>
                </tbody>
            </table>
        </div>
    </div>
</div>
