<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"C:\wwwroot\www.qwinfo.com.cn\public/../application/admin\view\f57k01\add.html";i:1589431499;s:71:"C:\wwwroot\www.qwinfo.com.cn\application\admin\view\layout\default.html";i:1588057008;s:68:"C:\wwwroot\www.qwinfo.com.cn\application\admin\view\common\meta.html";i:1588057008;s:70:"C:\wwwroot\www.qwinfo.com.cn\application\admin\view\common\script.html";i:1588057008;}*/ ?>
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
                                <form id="add-form" class="form-horizontal" role="form" data-toggle="validator" method="POST" action="">

    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Ctype'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-CTYPE" class="form-control selectpicker" name="row[CTYPE]">
                <?php if(is_array($ctypeList) || $ctypeList instanceof \think\Collection || $ctypeList instanceof \think\Paginator): if( count($ctypeList)==0 ) : echo "" ;else: foreach($ctypeList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), explode(',',"待定"))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Subctype'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-SubCType" class="form-control selectpicker" name="row[SubCType]">
                <?php if(is_array($subctypeList) || $subctypeList instanceof \think\Collection || $subctypeList instanceof \think\Paginator): if( count($subctypeList)==0 ) : echo "" ;else: foreach($subctypeList as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), explode(',',"待定"))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Type1'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-TYPE1" class="form-control selectpicker" name="row[TYPE1]">
                <?php if(is_array($type1List) || $type1List instanceof \think\Collection || $type1List instanceof \think\Paginator): if( count($type1List)==0 ) : echo "" ;else: foreach($type1List as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), explode(',',""))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Type2'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
                        
            <select  id="c-TYPE2" class="form-control selectpicker" name="row[TYPE2]">
                <?php if(is_array($type2List) || $type2List instanceof \think\Collection || $type2List instanceof \think\Paginator): if( count($type2List)==0 ) : echo "" ;else: foreach($type2List as $key=>$vo): ?>
                    <option value="<?php echo $key; ?>" <?php if(in_array(($key), explode(',',""))): ?>selected<?php endif; ?>><?php echo $vo; ?></option>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Step'); ?>:</label>
        <div class="col-xs-12 col-sm-4">
            <input id="c-STEP" class="form-control" name="row[STEP]" type="text">
        </div>
    <!-- </div>
    <div class="form-group"> -->
        <label class="control-label col-xs-6 col-sm-2"><?php echo __('Dl01'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-DL01" class="form-control" name="row[DL01]" type="text">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Pos'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-POS" class="form-control" name="row[POS]" type="text">
        </div>
    </div>
    <!-- <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Passcondition'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-PassCondition" class="form-control" name="row[PassCondition]" type="number">
        </div>
    </div> -->
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Memo'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-Memo" class="form-control" name="row[Memo]" type="text">
        </div>
    </div>
    <!-- <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Efff'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-EFFF" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[EFFF]" type="text" value="<?php echo date('Y-m-d H:i:s'); ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Efft'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-EFFT" class="form-control datetimepicker" data-date-format="YYYY-MM-DD HH:mm:ss" data-use-current="true" name="row[EFFT]" type="text" value="<?php echo date('Y-m-d H:i:s'); ?>">
        </div>
    </div> -->
    <div class="form-group">
        <label class="control-label col-xs-12 col-sm-2"><?php echo __('Autopassmin'); ?>:</label>
        <div class="col-xs-12 col-sm-8">
            <input id="c-AutoPassMin" class="form-control" name="row[AutoPassMin]" type="number">
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