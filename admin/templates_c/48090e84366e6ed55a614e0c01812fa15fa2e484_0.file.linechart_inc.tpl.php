<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:22:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/linechart_inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a33be6088506_11480149',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '48090e84366e6ed55a614e0c01812fa15fa2e484' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/linechart_inc.tpl',
      1 => 1738748471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a33be6088506_11480149 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['linechart']->value->getActive()) {?>
    <div id="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" style="background: <?php echo (($tmp = $_smarty_tpl->tpl_vars['chartbg']->value ?? null)===null||$tmp==='' ? '#fff' : $tmp);?>
; width: <?php echo $_smarty_tpl->tpl_vars['width']->value;?>
; height: <?php echo $_smarty_tpl->tpl_vars['height']->value;?>
; padding: <?php echo (($tmp = $_smarty_tpl->tpl_vars['chartpad']->value ?? null)===null||$tmp==='' ? '0' : $tmp);?>
;"></div>

    <?php echo '<script'; ?>
 type="text/javascript">
        var chart;

        $(document).ready(function() {
            chart = new Highcharts.Chart({
                chart: {
                    renderTo: '<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
',
                    defaultSeriesType: 'area',
                    marginRight: 15,
                    marginBottom: 50,
                    spacingBottom: 25,
                    borderColor: '#CCC',
                    borderWidth: 0
                },
                title: {
                    style: {
                        color: '#435a6b'
                    },
                    text: '<?php echo $_smarty_tpl->tpl_vars['headline']->value;?>
',
                    align: 'left'
                },
                plotOptions: {
                    series: {
                        cursor: 'pointer',
                        marker: {
                            fillColor: '#FFFFFF',
                            lineWidth: 2,
                            lineColor: null
                        },
                        <?php if ($_smarty_tpl->tpl_vars['href']->value) {?>
                        point: {
                            events: {
                                click: function() {
                                    location.href = this.options.url;
                                }
                            }
                        }
                        <?php }?>
                    }
                },
                legend: {
                    layout: 'vertical',
                    align: 'right',
                    verticalAlign: 'top',
                    x: -10,
                    y: 100,
                    borderWidth: 0,
                    enabled: <?php if ($_smarty_tpl->tpl_vars['legend']->value) {?>true<?php } else { ?>false<?php }?>,
                },
                xAxis: <?php echo $_smarty_tpl->tpl_vars['linechart']->value->getAxisJSON();?>
,
                yAxis: {
                    title: {
                        style: {
                            color: '#5cbcf6'
                        },
                        text: '<?php echo $_smarty_tpl->tpl_vars['ylabel']->value;
echo (($tmp = $_smarty_tpl->tpl_vars['yunit']->value ?? null)===null||$tmp==='' ? '' : $tmp);?>
'
                    },
                    labels: {
                        style: {
                            color: '#5cbcf6'
                        }
                    },
                    plotLines: [{
                        value: 0,
                        width: 2,
                        color: '#ddd'
                    }],
                    <?php if ((isset($_smarty_tpl->tpl_vars['ymax']->value)) && strlen($_smarty_tpl->tpl_vars['ymax']->value) > 0) {?>
                        max: <?php echo $_smarty_tpl->tpl_vars['ymax']->value;?>
,
                    <?php }?>
                    <?php if ((isset($_smarty_tpl->tpl_vars['ymin']->value)) && strlen($_smarty_tpl->tpl_vars['ymin']->value) > 0) {?>
                        min: <?php echo $_smarty_tpl->tpl_vars['ymin']->value;?>

                    <?php }?>
                },
                series: <?php echo $_smarty_tpl->tpl_vars['linechart']->value->getSeriesJSON();?>

            });
        });
    <?php echo '</script'; ?>
>
<?php } else { ?>
    <div class="alert alert-info" role="alert"><?php echo __('statisticNoData');?>
</div>
<?php }
}
}
