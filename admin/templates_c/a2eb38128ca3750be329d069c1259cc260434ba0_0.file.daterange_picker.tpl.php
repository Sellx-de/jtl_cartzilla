<?php
/* Smarty version 4.5.4, created on 2025-02-05 13:20:15
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/daterange_picker.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3577f0656f9_48935744',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2eb38128ca3750be329d069c1259cc260434ba0' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/snippets/daterange_picker.tpl',
      1 => 1738748453,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a3577f0656f9_48935744 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    $(function () {
        <?php $_smarty_tpl->_assignInScope('single', (($tmp = $_smarty_tpl->tpl_vars['single']->value ?? null)===null||$tmp==='' ? false : $tmp));?>
        var single = false,
            ranges = {
            '<?php echo __('datepickerToday');?>
': [moment(), moment()],
            '<?php echo __('datepickerYesterday');?>
': [
                moment().subtract(1, 'days'),
                moment().subtract(1, 'days')
            ],
            '<?php echo __('datepickerThisWeek');?>
': [
                moment().startOf('week').add(1, 'day'),
                moment().endOf('week').add(1, 'day')
            ],
            '<?php echo __('datepickerLastWeek');?>
': [
                moment().subtract(1, 'week').startOf('week').add(1, 'day'),
                moment().subtract(1, 'week').endOf('week').add(1, 'day')
            ],
            '<?php echo __('datepickerThisMonth');?>
': [
                moment().startOf('month'),
                moment().endOf('month')
            ],
            '<?php echo __('datepickerLastMonth');?>
': [
                moment().subtract(1, 'month').startOf('month'),
                moment().subtract(1, 'month').endOf('month')
            ],
            '<?php echo __('datepickerThisYear');?>
': [moment().startOf('year'), moment().endOf('year')],
            '<?php echo __('datepickerLastYear');?>
': [
                moment().subtract(1, 'year').startOf('year'),
                moment().subtract(1, 'year').endOf('year')
            ]
        };
        if ('<?php echo $_smarty_tpl->tpl_vars['single']->value;?>
') {
            ranges = false;
            single = true;
        }

        var $datepicker = $('<?php echo $_smarty_tpl->tpl_vars['datepickerID']->value;?>
');
        $datepicker.daterangepicker({
            locale: {
                format: '<?php echo $_smarty_tpl->tpl_vars['format']->value;?>
',
                separator: '<?php echo $_smarty_tpl->tpl_vars['separator']->value;?>
',
                applyLabel: '<?php echo __('apply');?>
',
                cancelLabel: '<?php echo __('cancel');?>
',
                customRangeLabel: '<?php echo __('datepickerCustom');?>
',
                daysOfWeek: ['<?php echo __('sundayShort');?>
', '<?php echo __('mondayShort');?>
',
                    '<?php echo __('tuesdayShort');?>
', '<?php echo __('wednesdayShort');?>
',
                    '<?php echo __('thursdayShort');?>
', '<?php echo __('fridayShort');?>
',
                    '<?php echo __('saturdayShort');?>
'
                ],
                monthNames: ['<?php echo __('january');?>
', '<?php echo __('february');?>
', '<?php echo __('march');?>
',
                    '<?php echo __('april');?>
', '<?php echo __('may');?>
', '<?php echo __('june');?>
', '<?php echo __('july');?>
',
                    '<?php echo __('august');?>
', '<?php echo __('september');?>
', '<?php echo __('october');?>
',
                    '<?php echo __('november');?>
', '<?php echo __('december');?>
'
                ],
                firstDay: 1
            },
            alwaysShowCalendars: true,
            autoUpdateInput: false,
            autoApply: false,
            parentEl: 'body',
            applyClass: 'btn btn-primary',
            cancelClass: 'btn btn-danger',
            singleDatePicker: single,
            ranges: ranges
        });
        $datepicker.on('apply.daterangepicker', function(ev, picker) {
            if ('<?php echo $_smarty_tpl->tpl_vars['single']->value;?>
') {
                $(this).val(picker.startDate.format('<?php echo $_smarty_tpl->tpl_vars['format']->value;?>
'));
            } else {
                $(this).val(picker.startDate.format('<?php echo $_smarty_tpl->tpl_vars['format']->value;?>
') + '<?php echo $_smarty_tpl->tpl_vars['separator']->value;?>
'
                    + picker.endDate.format('<?php echo $_smarty_tpl->tpl_vars['format']->value;?>
'));
            }
        });
        var curDateRange = '<?php echo $_smarty_tpl->tpl_vars['currentDate']->value;?>
'.split('<?php echo $_smarty_tpl->tpl_vars['separator']->value;?>
');
        if (curDateRange.length === 2) {
            $datepicker.val(curDateRange[0] + '<?php echo $_smarty_tpl->tpl_vars['separator']->value;?>
' + curDateRange[1]);
            $datepicker.data('daterangepicker').setStartDate(curDateRange[0]);
            $datepicker.data('daterangepicker').setEndDate(curDateRange[1]);
        } else if (curDateRange.length === 1 && curDateRange[0] !== '') {
            $datepicker.val(curDateRange[0]);
            $datepicker.data('daterangepicker').setStartDate(curDateRange[0]);
            $datepicker.data('daterangepicker').setEndDate(curDateRange[0]);
        }
    });
<?php echo '</script'; ?>
>
<?php }
}
