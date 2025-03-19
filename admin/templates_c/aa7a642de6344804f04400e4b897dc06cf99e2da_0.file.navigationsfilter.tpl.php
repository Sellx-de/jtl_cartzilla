<?php
/* Smarty version 4.5.4, created on 2025-02-05 11:57:14
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/navigationsfilter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a3440aeb2199_97816764',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa7a642de6344804f04400e4b897dc06cf99e2da' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/navigationsfilter.tpl',
      1 => 1738748272,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:tpl_inc/header.tpl' => 1,
    'file:tpl_inc/seite_header.tpl' => 1,
    'file:tpl_inc/config_section.tpl' => 1,
    'file:tpl_inc/footer.tpl' => 1,
  ),
),false)) {
function content_67a3440aeb2199_97816764 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:tpl_inc/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender('file:tpl_inc/seite_header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cTitel'=>__('navigationsfilter'),'cBeschreibung'=>__('navigationsfilterDesc'),'cDokuURL'=>__('navigationsfilterUrl')), 0, false);
?>

<?php echo '<script'; ?>
>
    var bManuell = false;

    $(function()
    {
        $('#einstellen').submit(validateFormData);
        $('#btn-add-range').on('click', function() { addPriceRange(); });
        $('.btn-remove-range').on('click', removePriceRange);

        selectCheck(document.getElementById('preisspannenfilter_anzeige_berechnung'));

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['oPreisspannenfilter_arr']->value, 'oPreisspanne', false, 'i');
$_smarty_tpl->tpl_vars['oPreisspanne']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['oPreisspanne']->value) {
$_smarty_tpl->tpl_vars['oPreisspanne']->do_else = false;
?>
            addPriceRange(<?php echo $_smarty_tpl->tpl_vars['oPreisspanne']->value->nVon;?>
, <?php echo $_smarty_tpl->tpl_vars['oPreisspanne']->value->nBis;?>
);
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    });

    function addPriceRange(nVon, nBis)
    {
        var n = Math.floor(Math.random() * 1000000);

        nVon = nVon || 0;
        nBis = nBis || 0;

        $('#price-rows').append(
            '<div class="price-row row mx-0 justify-content-end">' +
                '<div class="col-5 col-md-4 px-1"><div class="input-group mb-3">' +
                '  <div class="input-group-prepend">' +
                '    <span class="input-group-text"><?php echo __('from');?>
</span>' +
                '  </div>' +
                '  <input id="nVon_' + n + '" class="form-control" name="nVon[]" type="text" value="' + nVon + '"> ' +
                '</div></div>' +
                '<div class="col-5 col-md-4 px-1"><div class="input-group mb-3">'+
                '  <div class="input-group-prepend">'+
                '    <span class="input-group-text"><?php echo __('to');?>
</span>'+
                '  </div>'+
                '  <input id="nBis_' + n + '" class="form-control" name="nBis[]" type="text" value="' + nBis + '"> '+
                '</div></div>' +
                '<div class="col-1 text-right"><button type="button" class="btn-remove-range btn btn-link btn-sm">' +
                '<span class="far fa-trash-alt"></span></button></div>' +
            '</div>'
        );

        $('.btn-remove-range').off('click').on('click', removePriceRange);
    }

    function removePriceRange()
    {
        $(this).closest('.price-row').remove();
    }

    function selectCheck(selectBox)
    {
        if (selectBox.selectedIndex === 1) {
            $('#Werte').show();
            bManuell = true;
        } else if (selectBox.selectedIndex === 0) {
            $('#Werte').hide();
            bManuell = false;
        }
    }

    function validateFormData(e)
    {
        if (bManuell === true) {
            var cFehler = '',
                $priceRows = $('.price-row'),
                lastUpperBound = 0,
                $errorAlert = $('#ranges-error-alert');

            $errorAlert.hide();

            $priceRows
                .sort(function(a, b) {
                    var aVon = parseFloat($(a).find('[id^=nVon_]').val()),
                        bVon = parseFloat($(b).find('[id^=nVon_]').val());
                    return aVon < bVon ? -1 : +1;
                })
                .each(function(i, row) {
                    $('#price-rows').append(row);
                });

            $priceRows.each(function(i, row) {
                var $row  = $(row),
                    $nVon = $row.find('[id^=nVon_]'),
                    $nBis = $row.find('[id^=nBis_]'),
                    nVon  = $nVon.val(),
                    nBis  = $nBis.val(),
                    fVon  = parseFloat(nVon),
                    fBis  = parseFloat(nBis);

                $row.removeClass('has-error');

                if(nVon === '' || nBis === '') {
                    cFehler += '<?php echo __('errorFillRequired');?>
' + '<br>';
                    $row.addClass('has-error');
                } else if(fVon >= fBis) {
                    cFehler += '<?php echo __('thePriceRangeIsInvalid');?>
 (' + fVon + ' <?php echo __('to');?>
 ' + fBis + ').<br>';
                    $row.addClass('has-error');
                } else if(fVon < lastUpperBound) {
                    cFehler += '<?php echo __('thePriceRangeOverlapps');?>
 (' + fVon + ' <?php echo __('to');?>
 ' + fBis + ').<br>';
                    $row.addClass('has-error');
                }

                lastUpperBound = fBis;
            });

            if(cFehler !== '') {
                $errorAlert.html(cFehler).show();
                e.preventDefault();
            }
        }
    }
<?php echo '</script'; ?>
>

<div id="content">
    <?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/config_section.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('name'=>'einstellen','a'=>'saveSettings','action'=>($_smarty_tpl->tpl_vars['adminURL']->value).($_smarty_tpl->tpl_vars['route']->value),'buttonCaption'=>__('saveWithIcon'),'title'=>__('settings'),'tab'=>'einstellungen'), 0, false);
?>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:tpl_inc/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
