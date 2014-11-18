<?php
session_start();
include("../functions.inc.php");

if (validate_user($_SESSION['helpdesk_user_id'], $_SESSION['code'])) {
if ($_SESSION['helpdesk_user_id']) {
   include("head.inc.php");
   include("navbar.inc.php");
   $priv_val = priv_status($_SESSION['helpdesk_user_id']);
 if ( ($priv_val == "2") || ($priv_val == "0") ) {
  

?>

<section class="content-header">
                    <h1>
                        <i class="fa fa-bar-chart-o"></i> <?=lang('EXT_graph_user');?>
                        <small><?=lang('EXT_graph_user_ext');?></small>
                    </h1>
                    <ol class="breadcrumb">
                       <li><a href="<?=$CONF['hostname']?>index.php"><span class="icon-svg"></span> <?=$CONF['name_of_firm']?></a></li>
                        <li class="active"><?=lang('EXT_graph_user');?></li>
                    </ol>
                </section>



<section class="content">


<div class="row">


<div class="col-md-3">
	<div class="row">
		<div class="col-md-12">
		
		<div class="box box-info">

                                <div class="box-body">
                                    
                                    
                                    <form>
	                                      <div class="form-group">

    <div class="input-group ">
      <span class="input-group-addon"><i class="fa fa-user"></i></span>
      
      
      <select data-placeholder="<?=lang('t_LIST_worker');?>" id="user_list" name="unit_id" class="form-control input-sm">
    	<option></option>


<?php
                
                
               /* $qstring = "SELECT fio as label, id as value FROM users where status='1' and login !='system' order by fio ASC;";
                $result = mysql_query($qstring);//query the database for entries containing the term
				while ($row = mysql_fetch_array($result,MYSQL_ASSOC)){
				*/
                
        $stmt = $dbConnection->prepare('SELECT fio as label, id as value, unit FROM users where login !=:system and is_client=0 order by fio ASC');
		$stmt->execute(array(':system'=>'system'));
		$res1 = $stmt->fetchAll();                 
        foreach($res1 as $row) {
                $unit_user=unit_of_user($_SESSION['helpdesk_user_id']);
$ee=explode(",", $unit_user);
$ec=explode(",", $row['unit']);

$result = array_intersect($ee, $ec);
                
                
                if($result) { 
                
                
//echo($row['label']);
                    $row['label']=$row['label'];
                    $row['value']=(int)$row['value'];

if (get_user_status_text($row['value']) == "online") {$s="online";}
else if (get_user_status_text($row['value']) == "offline") {$s="offline";}
                    ?>
                    <option data-foo="<?=$s;?>" value="<?=$row['value']?>"><?=nameshort($row['label'])?> </option>

                <?php
}

                }

                ?>
    </select>
    
    
    
    </div>
  </div>
  
  
  <div class="form-group">

    <div class="input-group ">
      <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="reservation" id="reservation" class="form-control input-sm"  />
    </div>
  </div>
</form>
                                    
                                    
                                    
                                                                    </div><!-- /.box-body -->
                            </div>
		
	</div>
		<div class="col-md-12"><div class="callout callout-info">
                                        
                                        <small> <i class="fa fa-info-circle"></i> 
<?=lang('EXT_graph_user_ext2');?>
	     </small>
                                    </div></div>
	</div>
	
</div>


<div class="col-md-9">
		
		<div class="box box-solid">
                                
                                <div class="box-body">
	                                
	                                
                                    <div id="content_stat">
	                                    <div class="alert alert-info" style="margin-bottom: 0!important;">
                        <i class="fa fa-info"></i>
                        <?=lang('EXT_stats_main_todo');?>
                    </div>
                                    </div>
                                    
                                                                   </div><!-- /.box-body -->
                            </div>
		
	</div>

</div>



</section>













<?php
 include("footer.inc.php");
?>

<?php
}
	}
	}
else {
    include '../auth.php';
}
?>
