<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"C:\wwwroot\www.qwinfo.com.cn\public/../application/admin\view\f57k12c\edit.html";i:1589428732;s:71:"C:\wwwroot\www.qwinfo.com.cn\application\admin\view\layout\default.html";i:1588057008;s:68:"C:\wwwroot\www.qwinfo.com.cn\application\admin\view\common\meta.html";i:1588057008;s:70:"C:\wwwroot\www.qwinfo.com.cn\application\admin\view\common\script.html";i:1588057008;}*/ ?>
<!DOCTYPE html>
<html lang="<?php echo $config['language']; ?>">
    <head>
        <meta charset="utf-8">
<title><?php echo (isset($title) && ($title !== '')?$title:''); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<meta name="renderer" content="webkit">

<link rel="shortcut icon" href="/assets/img/favicon.ico" />
<!-- Loading Bootstrap -->
<link href="/assets/css/backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.css?v=<?php echo \think\Config::get('site.version'); ?>" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
  <script src="/assets/js/html5shiv.js"></script>
  <script src="/assets/js/respond.min.js"></script>
<![endif]-->
<script type="text/javascript">
    var require = {
        config:  <?php echo json_encode($config); ?>
    };
</script>
    </head>

    <body class="inside-header inside-aside <?php echo defined('IS_DIALOG') && IS_DIALOG ? 'is-dialog' : ''; ?>">
        <div id="main" role="main">
            <div class="tab-content tab-addtabs">
                <div id="content">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                            <section class="content-header hide">
                                <h1>
                                    <?php echo __('Dashboard'); ?>
                                    <small><?php echo __('Control panel'); ?></small>
                                </h1>
                            </section>
                            <?php if(!IS_DIALOG && !\think\Config::get('fastadmin.multiplenav')): ?>
                            <!-- RIBBON -->
                            <div id="ribbon">
                                <ol class="breadcrumb pull-left">
                                    <li><a href="dashboard" class="addtabsit"><i class="fa fa-dashboard"></i> <?php echo __('Dashboard'); ?></a></li>
                                </ol>
                                <ol class="breadcrumb pull-right">
                                    <?php foreach($breadcrumb as $vo): ?>
                                    <li><a href="javascript:;" data-url="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></li>
                                    <?php endforeach; ?>
                                </ol>
                            </div>
                            <!-- END RIBBON -->
                            <?php endif; ?>
                            <div class="content">
                                <form id="edit-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Ukid'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-UKID" class="form-control" name="row[UKID]" type="number" value="<?php echo htmlentities($row['UKID']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Uk02'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-UK02" class="form-control" name="row[UK02]" type="number" value="<?php echo htmlentities($row['UK02']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Uk03'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-UK03" class="form-control" name="row[UK03]" type="number" value="<?php echo htmlentities($row['UK03']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Ctype'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-CTYPE" class="form-control selectpicker" name="row[CTYPE]">
                <?php if(is_array($ctypeList) || $ctypeList instanceof \think\Collection || $ctypeList instanceof \think\Paginator): if( count($ctypeList)==0 ) : echo "" ;else: foreach($ctypeList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['CTYPE'])?$row['CTYPE']:explode(',',$row['CTYPE']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Subctype'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-SubCTYPE" class="form-control selectpicker" name="row[SubCTYPE]">
                <?php if(is_array($subctypeList) || $subctypeList instanceof \think\Collection || $subctypeList instanceof \think\Paginator): if( count($subctypeList)==0 ) : echo "" ;else: foreach($subctypeList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['SubCTYPE'])?$row['SubCTYPE']:explode(',',$row['SubCTYPE']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Type1'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-TYPE1" class="form-control selectpicker" name="row[TYPE1]">
                <?php if(is_array($type1List) || $type1List instanceof \think\Collection || $type1List instanceof \think\Paginator): if( count($type1List)==0 ) : echo "" ;else: foreach($type1List as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['TYPE1'])?$row['TYPE1']:explode(',',$row['TYPE1']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Type2'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-TYPE2" class="form-control selectpicker" name="row[TYPE2]">
                <?php if(is_array($type2List) || $type2List instanceof \think\Collection || $type2List instanceof \think\Paginator): if( count($type2List)==0 ) : echo "" ;else: foreach($type2List as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['TYPE2'])?$row['TYPE2']:explode(',',$row['TYPE2']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Club'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-CLUB" class="form-control" name="row[CLUB]" type="text" value="<?php echo htmlentities($row['CLUB']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Step'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-STEP" class="form-control" name="row[STEP]" type="text" value="<?php echo htmlentities($row['STEP']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Solution'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-Solution" class="form-control selectpicker" multiple="" name="row[Solution][]">
                <?php if(is_array($solutionList) || $solutionList instanceof \think\Collection || $solutionList instanceof \think\Paginator): if( count($solutionList)==0 ) : echo "" ;else: foreach($solutionList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['Solution'])?$row['Solution']:explode(',',$row['Solution']))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Comments'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-Comments" class="form-control" name="row[Comments]" type="text" value="<?php echo htmlentities($row['Comments']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Passcondition'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-PassCondition" class="form-control" name="row[PassCondition]" type="number" value="<?php echo htmlentities($row['PassCondition']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Processstatus'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            
            <div class="radio">
            <?php if(is_array($processstatusList) || $processstatusList instanceof \think\Collection || $processstatusList instanceof \think\Paginator): if( count($processstatusList)==0 ) : echo "" ;else: foreach($processstatusList as $key=>$vo): ?>
            <label for="row[ProcessStatus]-<?php echo $key; ?>"><input id="row[ProcessStatus]-<?php echo $key; ?>" name="row[ProcessStatus]" type="radio" value="<?php echo $key; ?>" <?php if(in_array(($key), is_array($row['ProcessStatus'])?$row['ProcessStatus']:explode(',',$row['ProcessStatus']))): ?>checked<?php endif; ?> /> <?php echo $vo; ?></label> 
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Receiveon'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-ReceiveOn" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[ReceiveOn]" type="text" value="<?php echo $row['ReceiveOn']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Autopassmin'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-AutoPassMin" class="form-control" name="row[AutoPassMin]" type="number" value="<?php echo htmlentities($row['AutoPassMin']); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Starton'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-StartOn" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[StartOn]" type="text" value="<?php echo $row['StartOn']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Completionon'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-CompletionOn" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[CompletionOn]" type="text" value="<?php echo $row['CompletionOn']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Createon'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-CreateOn" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[CreateOn]" type="text" value="<?php echo $row['CreateOn']; ?>">
        </div>
    </div>
    <div class="form-group layer-footer">
        <label class="control-label col-xs-12 col-sm-2"></label>
        <div class="col-xs-12 col-sm-8">
            <button type="submit" class="btn btn-success btn-embossed disabled"><?php echo __('OK'); ?></button>
            <button type="reset" class="btn btn-default btn-embossed"><?php echo __('Reset'); ?></button>
        </div>
    </div>
</form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="/assets/js/require<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js" data-main="/assets/js/require-backend<?php echo \think\Config::get('app_debug')?'':'.min'; ?>.js?v=<?php echo htmlentities($site['version']); ?>"></script>
    </body>
</html>