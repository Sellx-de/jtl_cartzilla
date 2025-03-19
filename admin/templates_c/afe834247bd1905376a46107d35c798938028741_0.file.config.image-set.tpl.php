<?php
/* Smarty version 4.5.4, created on 2025-02-10 16:12:36
  from '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.image-set.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67aa176418ecb0_14833950',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'afe834247bd1905376a46107d35c798938028741' => 
    array (
      0 => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/opc/tpl/config/config.image-set.tpl',
      1 => 1738748451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67aa176418ecb0_14833950 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'slideEntry' => 
  array (
    'compiled_filepath' => '/mnt/web015/c1/17/512342217/htdocs/sellx/dev/beurskens/admin/templates_c/afe834247bd1905376a46107d35c798938028741_0.file.config.image-set.tpl.php',
    'uid' => 'afe834247bd1905376a46107d35c798938028741',
    'call_name' => 'smarty_template_function_slideEntry_113869996667aa1764133836_95393196',
  ),
));
$_smarty_tpl->_assignInScope('useLinks', (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['useLinks'] ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('useLightbox', (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['useLightbox'] ?? null)===null||$tmp==='' ? false : $tmp));
$_smarty_tpl->_assignInScope('useTitles', (($tmp = $_smarty_tpl->tpl_vars['propdesc']->value['useTitles'] ?? null)===null||$tmp==='' ? false : $tmp));?>



<label><?php echo $_smarty_tpl->tpl_vars['propdesc']->value['label'];?>
</label>

<div class="slides-container" id="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slides-container">
    <div id="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slides">
        <?php $_smarty_tpl->_assignInScope('propval', (($tmp = $_smarty_tpl->tpl_vars['propval']->value ?? null)===null||$tmp==='' ? array() : $tmp));?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['propval']->value, 'slideData');
$_smarty_tpl->tpl_vars['slideData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['slideData']->value) {
$_smarty_tpl->tpl_vars['slideData']->do_else = false;
?>
            <?php if (empty($_smarty_tpl->tpl_vars['slideData']->value['action'])) {?>
                <?php $_tmp_array = isset($_smarty_tpl->tpl_vars['slideData']) ? $_smarty_tpl->tpl_vars['slideData']->value : array();
if (!(is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess)) {
settype($_tmp_array, 'array');
}
$_tmp_array['action'] = 'lightbox';
$_smarty_tpl->_assignInScope('slideData', $_tmp_array);?>
            <?php }?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'slideEntry', array('slideData'=>$_smarty_tpl->tpl_vars['slideData']->value), true);?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php if (call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'count' ][ 0 ], array( $_smarty_tpl->tpl_vars['propval']->value )) === 0) {?>
            <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'slideEntry', array(), true);?>

        <?php }?>
    </div>
    <div style="display: none" id="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slide-blueprint">
        <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'slideEntry', array(), true);?>

    </div>
</div>

<button type="button" class="opc-btn-primary add-slide-btn" onclick="addSlide_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()" title="<?php echo __('imageAdd');?>
">
    <i class="fas fa-plus fa-fw"></i>
</button>

<?php echo '<script'; ?>
>
    opc.once('save-config', saveImageSet_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
);

    $(function () {
        $('#<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slides').sortable({
            handle: '.btn-slide-mover'
        });
    });

    function elfinderCallback_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
(file)
    {
        let url = file.url.slice(file.baseUrl.length);
        let image = $(this);
        image.css('background-image', 'url("' + file.url + '")');
        image.siblings('input').val(url);
    }

    function addSlide_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()
    {
        $('#<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slides').append(
            $('#<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slide-blueprint').children().clone()
        );
        let slideContainer = $('#<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slides-container');
        slideContainer[0].scrollTo(0, slideContainer[0].scrollHeight);
    }

    function removeSlide_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()
    {
        $(event.target).closest('.slide-entry').remove();
    }

    function cloneSlide_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()
    {
        let slideEntry = $(event.target).closest('.slide-entry');
        let copy = slideEntry.clone();

        copy.insertAfter(slideEntry);
    }

    function saveImageSet_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()
    {
        $('#<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slides').children().each((i, slide) => {
            slide = $(slide);

            slide.find('select').each((j, select) => {
                $(select).siblings('input').attr('value',
                    select.options[select.selectedIndex].value
                );
            });

            slide.find('input').each((j, input) => {
                input = $(input);
                var name = input.attr('name');
                if (name === '<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[#SORT#][url]') {
                    var val = input.val();
                    if (val === '') {
                        slide.remove();
                        return;
                    }
                }
                name = name.replace(/#SORT#/, i);
                input.attr('name', name);
            });
        });
        $('#<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
-slide-blueprint').remove();
    }

    function onActionChange_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
(elm)
    {
        elm = $(elm);

        if(elm.val() === 'link') {
            elm.closest('.row').find('input[type=text]').prop('disabled', false);
        } else {
            elm.closest('.row').find('input[type=text]').prop('disabled', true);
        }
    }
<?php echo '</script'; ?>
>
<?php }
/* smarty_template_function_slideEntry_113869996667aa1764133836_95393196 */
if (!function_exists('smarty_template_function_slideEntry_113869996667aa1764133836_95393196')) {
function smarty_template_function_slideEntry_113869996667aa1764133836_95393196(Smarty_Internal_Template $_smarty_tpl,$params) {
$params = array_merge(array('slideData'=>array('desc'=>'','url'=>'','link'=>'','title'=>'','action'=>'lightbox')), $params);
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

    <div class="slide-entry">
        <div class="slide-btns">
            <span class="btn-slide-mover"
                 title="<?php echo __('entryMove');?>
" style="cursor: move">
                <i class="fas fa-arrows-alt fa-fw"></i>
            </span>
            <button type="button" onclick="cloneSlide_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()" title="Copy">
                <i class="far fa-clone fa-fw"></i>
            </button>
            <hr>
            <button type="button" onclick="removeSlide_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
()"
                    title="<?php echo __('entryDelete');?>
">
                <i class="far fa-trash-alt fa-fw"></i>
            </button>
        </div>
        <div class="slide-image-col">
            <?php if (empty($_smarty_tpl->tpl_vars['slideData']->value['url'])) {?>
                <?php $_smarty_tpl->_assignInScope('imgUrl', 'opc/gfx/upload-stub.png');?>
            <?php } else { ?>
                <?php $_smarty_tpl->_assignInScope('imgUrl', (((JTL\Shop::getURL()).('/')).((defined('STORAGE_OPC') ? constant('STORAGE_OPC') : null))).($_smarty_tpl->tpl_vars['slideData']->value['url']));?>
            <?php }?>
            <div style="background-image: url('<?php echo $_smarty_tpl->tpl_vars['imgUrl']->value;?>
')" class="slide-image-btn"
                 onclick="opc.gui.openElFinder(elfinderCallback_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
.bind(this), 'Bilder')">

            </div>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[#SORT#][url]" value="<?php echo (($tmp = $_smarty_tpl->tpl_vars['slideData']->value['url'] ?? null)===null||$tmp==='' ? '' : $tmp);?>
">
        </div>
        <div class="slide-props">
            <?php if ($_smarty_tpl->tpl_vars['useTitles']->value) {?>
                <input type="text" class="form-control" placeholder="<?php echo __('title');?>
"
                       name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[#SORT#][title]" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['slideData']->value['title'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
            <?php }?>
            <input type="text" class="form-control" placeholder="<?php echo __('description');?>
"
                   name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[#SORT#][desc]" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['slideData']->value['desc'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
"
                   maxlength="256">
            <input type="text" class="form-control" placeholder="<?php echo __('alternativeText');?>
"
                   name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[#SORT#][alt]" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['slideData']->value['alt'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
">
            <?php if ($_smarty_tpl->tpl_vars['useLinks']->value) {?>
                <div class="row">
                    <div class="col-4">
                        <label class="select-wrapper">
                            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[#SORT#][action]" value="">
                            <select class="form-control" onchange="onActionChange_<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
(this)">
                                <option value="none" <?php if ($_smarty_tpl->tpl_vars['slideData']->value['action'] === 'none') {?>selected<?php }?>>
                                    <?php echo __('noAction');?>

                                </option>
                                <?php if ($_smarty_tpl->tpl_vars['useLightbox']->value) {?>
                                    <option value="lightbox" <?php if ($_smarty_tpl->tpl_vars['slideData']->value['action'] === 'lightbox') {?>selected<?php }?>>
                                        <?php echo __('lightbox');?>

                                    </option>
                                <?php }?>
                                <option value="link" <?php if ($_smarty_tpl->tpl_vars['slideData']->value['action'] === 'link') {?>selected<?php }?>>
                                    <?php echo __('linked');?>

                                </option>
                            </select>
                        </label>
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" placeholder="<?php echo __('link');?>
"
                               name="<?php echo $_smarty_tpl->tpl_vars['propname']->value;?>
[#SORT#][link]" value="<?php echo htmlspecialchars((string)(($tmp = $_smarty_tpl->tpl_vars['slideData']->value['link'] ?? null)===null||$tmp==='' ? '' : $tmp), ENT_QUOTES, 'utf-8', true);?>
"
                               <?php if ($_smarty_tpl->tpl_vars['slideData']->value['action'] !== 'link') {?>disabled<?php }?>>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
<?php
}}
/*/ smarty_template_function_slideEntry_113869996667aa1764133836_95393196 */
}
