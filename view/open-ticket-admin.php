<form action="" method="post">
<h5>#<?php echo $TicketsID->tid ?> - <?php echo $TicketsID->title ?></h5>

<div class="col-sm-4">
	<div class="form-group">
        <div class="col-sm-6">
            <select class="col-xs-10 col-sm-5 form-control " id="status" name="status">
                <?php if($TicketsID->status == 1) {?>
					<option class="text-success" value="1">Recibido</option>
					<option class="text-danger" value="2">Por Despachar</option>
					<option class="text-muted" value="3">Despachado</option>
				<?php }elseif($TicketsID->status == 2) {?>
					<option class="text-danger" value="2">Por Despachar</option>
					<option class="text-success" value="1">Recibido</option>
					<option class="text-muted" value="3">Despachado</option>
				<?php }elseif($TicketsID->status == 3) {?>
					<option class="text-muted" value="3">Despachado</option>
					<option class="text-danger" value="2">Por Despachar</option>
					<option class="text-success" value="1">Recibido</option>
				<?php } ?>
				
            </select>
        </div>
	</div>
</div>
<div class="col-sm-11">
    <div class="widget-toolbox padding-4 clearfix">
        <div class="btn-group pull-left">
            <button class="btn btn-sm btn-info">
                <i class="ace-icon fa fa-times bigger-125"></i>
                Cancelar
            </button>
        </div>
    
        <div class="btn-group pull-right">
            <button class="btn btn-sm btn-purple" type="submit" name="submitticket">
                <i class="ace-icon fa fa-floppy-o bigger-125"></i>
                Actualizar
            </button>
        </div>
    </div>
</div>
</form>