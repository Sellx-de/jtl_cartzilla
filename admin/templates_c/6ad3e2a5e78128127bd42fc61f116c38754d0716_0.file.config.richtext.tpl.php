<?php
/* Smarty version 4.5.4, created on 2025-02-06 08:40:30
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.richtext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67a4676e2d1141_45347688',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ad3e2a5e78128127bd42fc61f116c38754d0716' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.richtext.tpl',
      1 => 1738748451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67a4676e2d1141_45347688 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='form-group'>
    <label for="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>
    <textarea name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
" id="config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
"
              class="form-control" <?php if ($_smarty_tpl->tpl_vars['required']->value) {?>required<?php }?>><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['propval']->value);?>
</textarea>
    <?php echo '<script'; ?>
>
        (function() {
            let language = '<?php echo JTL\Shop::Container()->getGetText()->getLanguage();?>
'.split('-')[0];
            tinymce.remove('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
');
            tinymce.init({
                selector: '#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
',
                promotion: false,
                branding: false,
                menubar: false,
                relative_urls: false,
                remove_script_host: false,
                document_base_url: window.opc.shopUrl + '/',
                valid_elements: '*[*]',
                skin: 'tinymce-5',
                plugins: 'lists image code emoticons table anchor link',
                language: language,
                language_url: window.opc.shopUrl + '/includes/libs/tinymce/js/tinymce/langs/' + language + '.js',
                file_picker_callback: (callback, value, meta) => {
                    window.opc.gui.openElFinder((file, mediafilesBaseUrlPath) => {
                        callback(file.url);
                    }, 'image');
                },
                toolbar: [
                    `
                        bold italic underline strikethrough subscript superscript |
                        bullist numlist |
                        outdent indent |
                        blockquote |
                        alignleft aligncenter alignright alignjustify
                    `,
                    `
                        anchor image emoticons link table hr | code
                    `,
                    `
                        blocks fontfamily fontsize forecolor backcolor
                    `
                ],
            });

            window.opc.once('save-config', () => {
                $('#config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').val(tinymce.get('config-<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
').getContent());
            });
        })();
    <?php echo '</script'; ?>
>
</div>
<?php }
}
