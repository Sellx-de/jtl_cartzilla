{include file='tpl_inc/seite_header.tpl' cTitel=__('newsCommentAnswerEdit')}
<div id="content" class="container-fluid2">
    <form name="umfrage" method="post" action="{$adminURL}{$route}" class="navbar-form">
        {$jtl_token}
        <input type="hidden" name="news" value="1" />
        <input type="hidden" name="nkedit" value="1" />
        {if isset($cTab)}
            <input type="hidden" name="tab" value="{$cTab}" />
        {/if}
        {if isset($nFZ) && $nFZ == 1}
            <input name="nFZ" type="hidden" value="1">
        {/if}
        {if isset($cSeite)}
            <input type="hidden" name="{if $cTab === 'aktiv'}s2{else}s1{/if}" value="{$cSeite}" />
        {/if}
        <input type="hidden" name="kNews" value="{$oNewsKommentar->getNewsID()}" />
        <input type="hidden" name="kNewsKommentar" value="{$oNewsKommentar->getID()}" />
        <input type="hidden" name="parentCommentID" value="{$oNewsKommentar->getParentCommentID()}" />
        <div class="card">
            <div class="card-header">
                <div class="subheading1">{$oNewsKommentar->getName()} - {__('newsCommentAnswerEdit')}</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="cName">{__('displayedName')}:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input id="cName" name="cName" class="form-control" type="text" value="{$oNewsKommentar->getName()}" />
                        {if $oNewsKommentar->getCustomerID() === 0 && empty($oNewsKommentar->getIsAdmin())}
                            &nbsp;({$oNewsKommentar->getMail()})
                        {/if}
                    </div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="cKommentar">{__('text')}:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <textarea id="cKommentar" class="tinymce form-control" name="cKommentar" rows="15"
                                  cols="60">{htmlentities($oNewsKommentar->getText())}</textarea>
                    </div>
                </div>
            </div>
            <div class="card-footer save-wrapper">
                <div class="row">
                    <div class="ml-auto col-sm-6 col-xl-auto">
                        <a class="btn btn-outline-primary btn-block" href="{$adminURL}{$route}{if isset($cBackPage)}?{$cBackPage}{elseif isset($cTab)}?tab={$cTab}{/if}">
                            {__('cancelWithIcon')}
                        </a>
                    </div>
                    <div class="col-sm-6 col-xl-auto">
                        <button name="newskommentarsavesubmit" type="submit" value="{__('save')}" class="btn btn-primary btn-block">
                            {__('saveWithIcon')}
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
