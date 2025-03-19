<?php
/* Smarty version 4.5.4, created on 2025-02-11 11:31:26
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/settingsection_warenkorb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ab26fe8b61d0_69974422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ebca94180341b8e77244e46c1a18b769eb7e6260' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates/bootstrap/tpl_inc/settingsection_warenkorb.tpl',
      1 => 1738748473,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ab26fe8b61d0_69974422 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
    
    $(document).ready(function() {
        let $praefix       = $('#bestellabschluss_bestellnummer_praefix'),
            $anfangsnummer = $('#bestellabschluss_bestellnummer_anfangsnummer'),
            $suffix        = $('#bestellabschluss_bestellnummer_suffix'),
            $all           = $('#bestellabschluss_bestellnummer_praefix, #bestellabschluss_bestellnummer_anfangsnummer, #bestellabschluss_bestellnummer_suffix'),
            force          = false;
        if (!$praefix.hasClass('jsLoaded')) {
        $praefix.on('focus', function(e) {
            this.maxLength = 20 - $anfangsnummer.val().length - $suffix.val().length;
        });
        $anfangsnummer.on('focus', function(e) {
            this.maxLength = 20 - $praefix.val().length - $suffix.val().length;
        });
        $suffix.on('focus', function(e) {
            this.maxLength = 20 - $anfangsnummer.val().length - $praefix.val().length;
        });
        $all.on('blur', function(e) {
            $(this).parent().tooltip('hide');
            let value = $(this).val();
            if (value.length > this.maxLength) {
                $(this).val(value.substr(0, this.maxLength));
            }
        })
        .on('focus keyup', function(e) {
            updateBestellnummer(this);
        });

        $all.closest('form').on('submit', function(e) {
            let praefix       = $praefix.val(),
                anfangsnummer = isNaN(parseInt($anfangsnummer.val())) ? 0 : parseInt($anfangsnummer.val()),
                suffix        = $suffix.val(),
                maxValLength  = 20 - praefix.length - suffix.length,
                maxValStr     = '9'.repeat(maxValLength),
                maxVal        = parseInt(maxValStr);

            if (anfangsnummer > maxVal) {
                $all.parent().addClass('form-error');
                showNotify('warning', '<?php echo __('modalTitleOrderNumberInvalid');?>
: ', '<?php echo __('modalTextOrderNumberInvalid');?>
: ');

                return false;
            }
            if (!force && (maxVal - anfangsnummer) < 10000) {
                $anfangsnummer.parent().addClass('form-error');
                let $notify = createNotify({
                    title: '<?php echo __('modalTitleOrderNumberTooLong');?>
: ',
                    message: '<?php echo __('modalTextOrderNumberTooLongOne');?>
: ' + (maxVal - anfangsnummer)
                    + '<?php echo __('modalTextOrderNumberTooLongTwo');?>
: '  + praefix + maxValStr + suffix
                    + '<?php echo __('modalTextOrderNumberTooLongThree');?>
: ' + ' <button id="forceSave" class="btn btn-block btn-warning mt-3"><i class="fa fa-save"></i>'
                    + '<?php echo __('buttonSaveAnyway');?>
: ' + '</button>'
                }, {
                    type: 'info',
                    delay: 12000,
                    allow_dismiss: true
                });
                $('#forceSave').on('click', function(e) {
                    $notify.close();
                    force = true;
                    $all.closest('form')[0].submit();
                });

                return false;
            }

            return true;
        });

        function updateBestellnummer(elem) {
            let praefix       = $praefix.val(),
                anfangsnummer = isNaN(parseInt($anfangsnummer.val())) ? 0 : parseInt($anfangsnummer.val()),
                suffix        = $suffix.val(),
                maxValLength  = 20 - praefix.length - suffix.length,
                maxValStr     = '9'.repeat(maxValLength),
                maxVal        = parseInt(maxValStr),
                result        = '<?php echo __('preview');?>
: ' + praefix + maxValStr + suffix;

            $(elem).parent().attr('title', result)
                .tooltip('dispose')
                .tooltip({trigger:'manual'})
                .tooltip('show');
            if ((maxVal - anfangsnummer) < 10000) {
                $(elem).parent().addClass('form-error');
            } else {
                $all.parent().removeClass('form-error');
            }
        }
        $praefix.addClass('jsLoaded');
        }
    });
    
<?php echo '</script'; ?>
><?php }
}
