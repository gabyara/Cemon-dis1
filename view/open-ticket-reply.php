<div class="col-xs-12 col-sm-10 widget-container-col" id="widget-container-col-3">
    <div class="widget-box widget-color-orange collapsed" id="widget-box-3" style="border: 0px solid #CCC;">
        <div class="widget-header widget-header-small">
            <h6 class="widget-title">
                <i class="ace-icon fa fa-pencil"></i>
                Responder
            </h6>

            <a href="#" data-action="collapse">
            <div class="widget-toolbar">
                    <i class="ace-icon fa fa-plus" data-icon-show="fa-plus" data-icon-hide="fa-minus"></i>
            </div>
            </a>
        </div>

        <div class="widget-body">
            <div class="widget-main">
                    <form action="" method="post">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nombre </label>
                        
                            <div class="col-sm-12">
                                <input type="text" disabled="disabled" class="col-xs-10 col-sm-10" value="<?php echo $_SESSION["ClientStaff"] ?>" />
                                <input type="hidden" id="title" name="title" value="<?php echo $TicketsTID->title ?>" />
                                <input type="hidden" id="did" name="did" value="<?php echo $TicketsTID->did ?>" />
								<input type="hidden" id="status" name="status" value="<?php echo $TicketsTID->status ?>" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
                        
                            <div class="col-sm-12">
                                <input type="text" disabled="disabled" id="email" name="email" class="col-xs-10 col-sm-10" value="<?php echo $_SESSION["email"] ?>" />
                            </div>
                        </div>
                    </div>
                    
                    <hr />
                    <div class="col-sm-11">
                        <h4 class="header green">Mensaje</h4>
                    
                        <div class="widget-box widget-color-blue">
                            <div class="widget-header widget-header-small">  </div>
                    
                            <div class="widget-body">
                                <div class="widget-main no-padding">
                                    <textarea name="message" id="message" data-provide="markdown" data-iconlibrary="fa" rows="10"></textarea>
                                </div>
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
                                    Enviar
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
            </div>
        </div>
    </div>
</div>
