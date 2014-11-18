                <section class="content-header">
                    <h1>
                    
                        <i class="fa fa-tachometer"></i> <?= lang('DASHBOARD_TITLE'); ?>
                        <small><?=lang('DASHBOARD_title_ext');?></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="<?=$CONF['hostname']?>index.php"><span class="icon-svg"></span> <?=$CONF['name_of_firm']?></a></li>
                        <li class="active"><?= lang('DASHBOARD_TITLE'); ?></li>
                    </ol>
                </section>



<section class="content">
    
    
    <div class="row">
  
  <div class="col-md-6">
	  <div class="row">
		  <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        <?= get_total_client_tickets_out(); ?>
                                    </h3>
                                    <p>
                                        <?= lang('STATS_create'); ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-upload"></i>
                                </div>
                                <a href="list?out" class="small-box-footer">
                                    <?=lang('EXT_more_info');?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
		  <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        <?= get_total_client_tickets_lock(); ?>
                                    </h3>
                                    <p>
                                        <?= lang('STATS_lock_o'); ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-lock"></i>
                                </div>
                                <a href="list?in" class="small-box-footer">
                                    <?=lang('EXT_more_info');?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
                        
                        
                        <div class="col-lg-4 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        <?= get_total_client_tickets_ok(); ?>
                                    </h3>
                                    <p>
                                        <?= lang('STATS_ok_o'); ?>
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="fa fa-check"></i>
                                </div>
                                <a href="list?in" class="small-box-footer">
                                    <?=lang('EXT_more_info');?> <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div>
	  </div>
	  
  </div>
  <div class="col-md-6">
    <div class="box">
    <div class="box-header"><h3 class="box-title"><i class="fa fa-exclamation-circle"></i> <?=lang('DASHBOARD_messages');?></h3></div>
    <div class="box-body">
    
     <div class="callout callout-info">
                                        <h4><?=get_user_val('messages_title');?></h4>
                                        <p><?=get_user_val('messages');?></p>
                                    </div>
    
    </div>
    
    </div>
    </div>
  
  
                        
                        
                        

    </div>
    
    
    
    <div class="row">
    
    
    <div class="col-md-6">
    <div class="box">
    <div class="box-header"><h3 class="box-title"><i class="fa fa-bullhorn"></i> <?= lang('DASHBOARD_last_news'); ?></h3></div>
    <div class="box-body">
    
<div id="last_news" style="max-height: 135px;
scroll-behavior: initial;
overflow-y: scroll;"></div>
    
    </div>
    
    </div>
    </div>
    
   <div class="col-md-6">
    <div class="box">
    <div class="box-header"><h3 class="box-title"><a href="helper"><i class="fa fa-globe"></i> <?= lang('DASHBOARD_last_help'); ?></a></h3></div>
    <div class="box-body">
    
    <?php get_client_helper(); ?>
    
    </div>
    
    </div>
    </div>
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
    </div>
    

    
  
    
    

       
</div>
</section>


