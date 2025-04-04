{include file='tpl_inc/seite_header.tpl' cBeschreibung=__('configurePaymentmethod') cTitel=__($zahlungsart->cName)}
<div id="content">
    <form name="einstellen" method="post" action="{$adminURL}{$route}" class="settings">
        {$jtl_token}
        <input type="hidden" name="einstellungen_bearbeiten" value="1" />
        <input type="hidden" name="kZahlungsart" value="{if isset($zahlungsart->kZahlungsart)}{$zahlungsart->kZahlungsart}{/if}" />

        <div class="card">
            <div class="card-header">
                <div class="subheading1">{__('settings')}: {__('general')}</div>
                <hr class="mb-n3">
            </div>
            <div class="card-body">
                {foreach $availableLanguages as $language}
                    {assign var=cISO value=$language->getIso()}
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cName_{$cISO}">{__('showedName')} ({$language->getLocalizedName()}):</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input class="form-control" type="text" name="cName_{$cISO}" id="cName_{$cISO}" value="{if isset($Zahlungsartname[$cISO])}{$Zahlungsartname[$cISO]}{/if}" tabindex="1" />
                        </div>
                    </div>
                {/foreach}
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="cBild">{__('pictureURL')}:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input class="form-control" type="text" name="cBild" id="cBild" value="{if isset($zahlungsart->cBild)}{$zahlungsart->cBild}{/if}" tabindex="1" />
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3">{getHelpDesc cDesc=__('pictureDesc')}</div>
                </div>
                {foreach $availableLanguages as $language}
                    {assign var=cISO value=$language->getIso()}
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cGebuehrname_{$cISO}">{__('feeName')} ({$language->getLocalizedName()}):</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <input class="form-control" type="text" name="cGebuehrname_{$cISO}" id="cGebuehrname_{$cISO}" value="{if isset($Gebuehrname[$cISO])}{$Gebuehrname[$cISO]}{/if}" tabindex="2" />
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">{getHelpDesc cDesc=__('feeNameHint')}</div>
                    </div>
                {/foreach}
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="kKundengruppe">{__('restrictedToCustomerGroups')}:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <select name="kKundengruppe[]"
                                multiple="multiple"
                                size="6"
                                id="kKundengruppe"
                                class="selectpicker custom-select"
                                data-selected-text-format="count > 2"
                                data-size="7"
                                data-actions-box="true">
                            <option value="0" {if isset($gesetzteKundengruppen[0]) && $gesetzteKundengruppen[0]}selected{/if}>
                                {__('all')}
                            </option>
                            <option data-divider="true"></option>
                            {foreach $kundengruppen as $kundengruppe}
                                {assign var=kKundengruppe value=$kundengruppe->kKundengruppe}
                                <option value="{$kundengruppe->kKundengruppe}" {if isset($gesetzteKundengruppen[$kKundengruppe]) && $gesetzteKundengruppen[$kKundengruppe]}selected{/if}>{$kundengruppe->cName}</option>
                            {/foreach}
                        </select>
                    </div>
                    <div class="col-auto ml-sm-n4 order-2 order-sm-3">{getHelpDesc cDesc=__('multipleChoice')}</div>
                </div>
                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="nSort">{__('sortNo')}:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <input class="form-control" type="text" name="nSort" id="nSort" value="{if isset($zahlungsart->nSort)}{$zahlungsart->nSort}{/if}" tabindex="3" />
                    </div>
                </div>

                {foreach $availableLanguages as $language}
                    {assign var=cISO value=$language->getIso()}
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cHinweisTextShop_{$cISO}">{__('noticeTextShop')} ({$language->getLocalizedName()}):</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <textarea class="form-control" id="cHinweisTextShop_{$cISO}" name="cHinweisTextShop_{$cISO}">{if isset($cHinweisTexteShop_arr[$cISO])}{$cHinweisTexteShop_arr[$cISO]}{/if}</textarea>
                        </div>
                    </div>
                {/foreach}

                {foreach $availableLanguages as $language}
                    {assign var=cISO value=$language->getIso()}
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="cHinweisText_{$cISO}">{__('noticeTextEmail')} ({$language->getLocalizedName()}):</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <textarea class="form-control" id="cHinweisText_{$cISO}" name="cHinweisText_{$cISO}">{if isset($cHinweisTexte_arr[$cISO])}{$cHinweisTexte_arr[$cISO]}{/if}</textarea>
                        </div>
                        <div class="col-auto ml-sm-n4 order-2 order-sm-3">{getHelpDesc cDesc=__('noticeTextEmailDesc')}</div>
                    </div>
                {/foreach}

                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="nMailSenden">{__('paymentAckMail')}:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <select id="nMailSenden" name="nMailSenden" class="custom-select combo">
                            <option value="1"{if $zahlungsart->nMailSenden & $smarty.const.ZAHLUNGSART_MAIL_EINGANG} selected="selected"{/if}>
                                {__('yes')}
                            </option>
                            <option value="0"{if !($zahlungsart->nMailSenden & $smarty.const.ZAHLUNGSART_MAIL_EINGANG)} selected="selected"{/if}>
                                {__('no')}
                            </option>
                        </select>
                    </div>
                </div>

                <div class="form-group form-row align-items-center">
                    <label class="col col-sm-4 col-form-label text-sm-right" for="nMailSendenStorno">{__('paymentCancelMail')}:</label>
                    <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                        <select id="nMailSendenStorno" name="nMailSendenStorno" class="custom-select combo">
                            <option value="1"{if $zahlungsart->nMailSenden & $smarty.const.ZAHLUNGSART_MAIL_STORNO} selected="selected"{/if}>
                                {__('yes')}
                            </option>
                            <option value="0"{if !($zahlungsart->nMailSenden & $smarty.const.ZAHLUNGSART_MAIL_STORNO)} selected="selected"{/if}>
                                {__('no')}
                            </option>
                        </select>
                    </div>
                </div>

                {$filters = [
                    'za_nachnahme_jtl',
                    'za_ueberweisung_jtl',
                    'za_rechnung_jtl',
                    'za_barzahlung_jtl',
                    'za_lastschrift_jtl'
                ]}

                {if !in_array($zahlungsart->cModulId, $filters)}
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="nWaehrendBestellung">{__('duringOrder')}:</label>
                        <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select id="nWaehrendBestellung" name="nWaehrendBestellung" class="custom-select combo">
                                <option value="1"{if isset($zahlungsart->nWaehrendBestellung) && $zahlungsart->nWaehrendBestellung == 1} selected{/if}>
                                    {__('yes')}
                                </option>
                                <option value="0"{if isset($zahlungsart->nWaehrendBestellung) && $zahlungsart->nWaehrendBestellung == 0} selected{/if}>
                                    {__('no')}
                                </option>
                            </select>
                        </div>
                    </div>
                {/if}
            </div>
        </div>
        <div class="card">
            {assign var=hasBody value=false}
            {foreach $configItems as $cnf}
                {if $cnf->isConfigurable()}
                    {if $hasBody === false}<div class="card-body">{assign var=hasBody value=true}{/if}
                    {$localizedName=$cnf->getName()}
                    {$localizedDesc=$cnf->getDescription()}
                    {if preg_match('/_min_bestellungen$/', $cnf->getValueName())}
                        {$localizedName=__('zahlungsart_min_bestellungen_name')}
                        {$localizedDesc=__('zahlungsart_min_bestellungen_desc')}
                    {elseif preg_match('/_min$/', $cnf->getValueName())}
                        {$localizedName=__('zahlungsart_min_name')}
                        {$localizedDesc=__('zahlungsart_min_desc')}
                    {elseif preg_match('/_max$/', $cnf->getValueName())}
                        {$localizedName=__('zahlungsart_max_name')}
                        {$localizedDesc=__('zahlungsart_max_desc')}
                    {/if}
                        <div class="form-group form-row align-items-center">
                            <label class="col col-sm-4 col-form-label text-sm-right" for="{$cnf->getValueName()}">
                                {$localizedName}:
                            </label>
                            <div class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2 {if $cnf->getInputType() === 'number'}config-type-number{/if}">
                            {if $cnf->getInputType() === 'selectbox'}
                                <select name="{$cnf->getValueName()}" id="{$cnf->getValueName()}" class="custom-select combo">
                                    {foreach $cnf->getValues() as $wert}
                                        <option value="{$wert->cWert}" {if $cnf->getSetValue() !== null && $cnf->getSetValue() == $wert->cWert}selected{/if}>{$wert->cName}</option>
                                    {/foreach}
                                </select>
                            {elseif $cnf->getInputType() === 'password'}
                                <input class="form-control" autocomplete="off" type="password" name="{$cnf->getValueName()}" id="{$cnf->getValueName()}" value="{if $cnf->getSetValue() !== null}{$cnf->getSetValue()}{/if}" />
                            {elseif $cnf->getInputType() === 'number'}
                                <div class="input-group form-counter">
                                    <div class="input-group-prepend">
                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-down>
                                            <span class="fas fa-minus"></span>
                                        </button>
                                    </div>
                                    <input class="form-control" type="number" name="{$cnf->getValueName()}"
                                           id="{$cnf->getValueName()}"
                                           value="{if $cnf->getSetValue() !== null}{$cnf->getSetValue()}{/if}"/>
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-outline-secondary border-0" data-count-up>
                                            <span class="fas fa-plus"></span>
                                        </button>
                                    </div>
                                </div>
                            {elseif $cnf->getInputType() === 'textarea'}
                                <textarea class="form-control" name="{$cnf->getValueName()}" id="{$cnf->getValueName()}">{if $cnf->getSetValue() !== null}{$cnf->getSetValue()}{/if}</textarea>
                            {else}
                                <input class="form-control" type="text" name="{$cnf->getValueName()}" id="{$cnf->getValueName()}" value="{if $cnf->getSetValue() !== null}{$cnf->getSetValue()}{/if}" />
                                {if isset($cnf->getID())}
                                    <span id="EinstellungAjax_{$cnf->getID()}"></span>
                                {/if}
                            {/if}
                            </div>
                            <div class="col-auto ml-sm-n4 order-2 order-sm-3">{getHelpDesc cDesc=$localizedDesc}</div>
                        </div>
                    {else}
                        <div class="card-header">
                            <div class="subheading1">{__('settings')}: {$cnf->getName()}</div>
                            <hr class="mb-n3">
                        </div>
                        <div class="card-body">
                            {assign var=hasBody value=true}
                    {/if}
            {/foreach}
                </div>
            </div>
        <div class="save-wrapper">
            <div class="row">
                <div class="ml-auto col-sm-6 col-xl-auto">
                    <a href="{$adminURL}{$route}" title="{__('cancel')}" class="btn btn-outline-primary btn-block">
                        {__('cancelWithIcon')}
                    </a>
                </div>
                <div class="col-sm-6 col-xl-auto">
                    {include file='snippets/buttons/saveAndContinueButton.tpl'}
                </div>
                <div class="col-sm-6 col-xl-auto">
                    <button type="submit" value="{__('save')}" class="btn btn-primary btn-block">
                        {__('saveWithIcon')}
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
