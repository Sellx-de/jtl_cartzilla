{include file='tpl_inc/header.tpl'}
{include file='tpl_inc/seite_header.tpl' cTitel=__('systemlog') cBeschreibung=__('systemlogDesc') cDokuURL=__('systemlogURL')}
{assign var=cTab value=$cTab|default:'log'}
<div class="tabs">
    <nav class="tabs-nav">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="nav-item">
                <a class="nav-link {if $cTab === 'log'} active{/if}" data-toggle="tab" role="tab" href="#log">
                    {__('systemlogLog')}
                </a>
            </li>
            <li role="presentation" class="nav-item">
                <a class="nav-link {if $cTab === 'configlog'} active{/if}" data-toggle="tab" role="tab" href="#configlog">
                    {__('configLog')}
                </a>
            </li>
            <li role="presentation" class="nav-item">
                <a class="nav-link {if $cTab === 'templatelog'} active{/if}" data-toggle="tab" role="tab" href="#templatelog">
                    {__('templateLog')}
                </a>
            </li>
            <li role="presentation" class="nav-item">
                <a class="nav-link {if $cTab === 'pluginlog'} active{/if}" data-toggle="tab" role="tab" href="#pluginlog">
                    {__('Plugin Status-Änderungen')}
                </a>
            </li>
            <li role="presentation" class="nav-item">
                <a class="nav-link {if $cTab === 'config'} active{/if}" data-toggle="tab" role="tab" href="#config">
                    {__('systemlogConfig')}
                </a>
            </li>
        </ul>
    </nav>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade{if $cTab === 'log'} active show{/if}" id="log">
            {if $nTotalLogCount !== 0}
                {include file='tpl_inc/filtertools.tpl' oFilter=$oFilter}
                {include file='tpl_inc/pagination.tpl' pagination=$pagination}
            {/if}

            <div>
                <form method="post" action="{$adminURL}{$route}">
                    {$jtl_token}
                    {if $nTotalLogCount === 0}
                        <div class="alert alert-info" role="alert">{__('noDataAvailable')}</div>
                    {elseif count($logs) === 0}
                        <div class="alert alert-info" role="alert">{__('noFilterResults')}</div>
                    {else}
                        <div class="listgroup">
                            {foreach $logs as $log}
                                <div class="list-group-item border-left-0 border-right-0">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-12">
                                            <label class="custom-control custom-checkbox">
                                                <input class="custom-control-input" type="checkbox" name="selected[]" id="log-id-{$log->kLog}" value="{$log->kLog}">
                                                <label class="custom-control-label" for="log-id-{$log->kLog}"></label>
                                                {if $log->nLevel >= $smarty.const.JTLLOG_LEVEL_ERROR}
                                                    <span class="badge badge-danger">{__('systemlogError')}</span>
                                                {elseif $log->nLevel >= $smarty.const.JTLLOG_LEVEL_WARNING}
                                                    <span class="badge badge-warning">{__('systemlogWarning')}</span>
                                                {elseif $log->nLevel > $smarty.const.JTLLOG_LEVEL_DEBUG}
                                                    <span class="badge badge-success">{__('systemlogNotice')}</span>
                                                {else}
                                                    <span class="badge badge-info info">{__('systemlogDebug')}</span>
                                                {/if}
                                                <span class="channel small">
                                                    {if $log->cKey === 'jtllog'}Core{else}{$log->cKey}{/if}
                                                </span>
                                                <p class="datetime small">
                                                    {$log->dErstellt|date_format:'d.m.Y - H:i:s'}
                                                </p>
                                            </label>
                                        </div>
                                        <div class="col-md-9 col-xs-12">
                                            <pre class="logtext p-1">{$log->cLog}</pre>
                                        </div>
                                    </div>
                                </div>
                            {/foreach}
                        </div>
                    {/if}
                    <div class="save-wrapper">
                        <div class="row">
                            <div class="col-sm-6 col-xl-auto text-left">
                                <div class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox" id="select-all-2" name="select-all" value=""
                                           onchange="selectAllItems(this, $(this).prop('checked'))">
                                    <label class="custom-control-label" for="select-all-2">{__('selectAllShown')}</label>
                                </div>
                            </div>
                            <div class="ml-auto col-sm-6 col-xl-auto">
                                <button name="action" value="delselected" class="btn btn-warning btn-block">
                                    <i class="fas fa-trash-alt"></i> {__('deleteSelected')}
                                </button>
                            </div>
                            <div class="col-sm-6 col-xl-auto">
                                <button name="action" value="clearsyslog" class="btn btn-danger btn-block">
                                    <i class="fas fa-trash-alt"></i> {__('systemlogReset')}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                {if $nTotalLogCount !== 0}
                    {include file='tpl_inc/pagination.tpl' pagination=$pagination isBottom=true}
                {/if}
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade{if $cTab === 'configlog'} active show{/if}" id="configlog">
            {include file='tpl_inc/filtertools.tpl' oFilter=$settingLogsFilter cParam_arr=['tab' => 'configlog']}
            {include file='tpl_inc/pagination.tpl' pagination=$settingLogsPagination cParam_arr=['tab' => 'configlog']}
            <div class="table-responsive">
                <table class="table table-striped table-condensed table-bordered table-hover table-sticky-header">
                    <thead>
                    <tr>
                        <th>{__('nameValueNameId')}</th>
                        <th>{__('settingChangedBy')}</th>
                        <th>{__('settingChangerIp')}</th>
                        <th>{__('settingValueOld')}</th>
                        <th>{__('settingValueNew')}</th>
                        <th>{__('date')}</th>
                    </tr>
                    </thead>
                    {foreach $settingLogs as $settingLog}
                        <tr class="text-vcenter">
                            <td><a href="{$adminURL}/searchresults?cSuche={__($settingLog->getSettingName()|cat:'_name')}">{__($settingLog->getSettingName()|cat:'_name')} | {$settingLog->getSettingName()} | {$settingLog->getId()}</a></td>
                            <td>{$settingLog->getAdminName()}</td>
                            <td>{$settingLog->getChangerIp()}</td>
                            <td>
                                {if $settingLog->getSettingType() === 'selectbox'}
                                    {__("{$settingLog->getSettingName()}_value({$settingLog->getValueOld()})")} ({$settingLog->getValueOld()})
                                {else}
                                    {$settingLog->getValueOld()}
                                {/if}
                            </td>
                            <td>
                                {if $settingLog->getSettingType() === 'selectbox'}
                                    {__("{$settingLog->getSettingName()}_value({$settingLog->getValueNew()})")} ({$settingLog->getValueNew()})
                                {else}
                                    {$settingLog->getValueNew()}
                                {/if}
                            </td>
                            <td>{$settingLog->getDate()}</td>
                        </tr>
                    {/foreach}
                </table>
            </div>
            {include file='tpl_inc/pagination.tpl' pagination=$settingLogsPagination cParam_arr=['tab' => 'configlog'] isBottom=true}
        </div>
        <div role="tabpanel" class="tab-pane fade{if $cTab === 'templatelog'} active show{/if}" id="templatelog">
            {include file='tpl_inc/filtertools.tpl' oFilter=$templateLogFilter cParam_arr=['tab' => 'templatelog']}
            {include file='tpl_inc/pagination.tpl' pagination=$templateLogPagination cParam_arr=['tab' => 'templatelog']}
            <table class="table table-striped table-bordered table-condensed">
                <thead>
                <tr>
                    <th>{__('date')}</th>
                    <th>{__('settingChangedBy')}</th>
                    <th>{__('Einstellung')}</th>
                    <th>{__('logChange')}</th>
                </tr>
                </thead>
                <tbody>
                {foreach $templateLog as $templateLogEntry}
                    <tr>
                        <td>{$templateLogEntry->timestamp}</td>
                        <td>{$templateLogEntry->adminName}</td>
                        <td>
                            <strong>{$templateLogEntry->settingID}</strong><br>
                            {$templateLogEntry->settingName}
                        </td>
                        <td>
                            {if empty($templateLogEntry->valueOld) && empty($templateLogEntry->valueNew)}
                                <pre>{$templateLogEntry->valueDiff}</pre>
                            {else}
                                {if !empty($templateLogEntry->valueNameOld)}
                                    {$templateLogEntry->valueNameOld}
                                {else}
                                    {$templateLogEntry->valueOld}
                                {/if}
                                ⟶
                                {if !empty($templateLogEntry->valueNameNew)}
                                    {$templateLogEntry->valueNameNew}
                                {else}
                                    {$templateLogEntry->valueNew}
                                {/if}
                            {/if}
                        </td>
                    </tr>
                {/foreach}
                </tbody>
            </table>
        </div>
        <div role="tabpanel" class="tab-pane fade{if $cTab === 'pluginlog'} active show{/if}" id="pluginlog">
            {include file='tpl_inc/filtertools.tpl' oFilter=$pluginLogFilter cParam_arr=['tab' => 'pluginlog']}
            {include file='tpl_inc/pagination.tpl' pagination=$pluginLogPagination cParam_arr=['tab' => 'pluginlog']}
            <div class="table-responsive">
                <table class="table table-striped table-condensed table-bordered table-hover table-sticky-header">
                    <thead>
                        <tr>
                            <th>{__('date')}</th>
                            <th>{__('pluginName')}</th>
                            <th>{__('settingChangedBy')}</th>
                            <th>{__('logChange')}</th>
                        </tr>
                    </thead>
                    {foreach $pluginLog as $pluginLogEntry}
                        <tr>
                            <td>{$pluginLogEntry->timestamp}</td>
                            <td>{$pluginLogEntry->pluginName}</td>
                            <td>{$pluginLogEntry->adminName|default:(__('automatic'))}</td>
                            <td>
                                {$stateOld = $pluginLogEntry->stateOld}
                                {$stateNew = $pluginLogEntry->stateNew}
                                {if $stateOld === (string)\JTL\Plugin\State::NONE
                                    && $stateNew === (string)\JTL\Plugin\State::ACTIVATED}
                                    {__('Installiert')}
                                {elseif $stateOld === (string)\JTL\Plugin\State::ACTIVATED
                                    && $stateNew === (string)\JTL\Plugin\State::NONE}
                                    {__('Deinstalliert')}
                                {else}
                                    {__($pluginStateMapper->mapTranslated($stateOld))}
                                    ⟶
                                    {__($pluginStateMapper->mapTranslated($stateNew))}
                                {/if}
                            </td>
                        </tr>
                    {/foreach}
                </table>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade{if $cTab === 'config'} active show{/if}" id="config">
            <form class="sttings" action="{$adminURL}{$route}" method="post">
                {$jtl_token}
                <div class="subheading1">{__('systemlogLevel')}</div>
                <hr class="mb-3">
                <div>
                    <div class="form-group form-row align-items-center">
                        <label class="col col-sm-4 col-form-label text-sm-right" for="minLogLevel">{__('minLogLevel')}:</label>
                        <span class="col-sm pl-sm-3 pr-sm-5 order-last order-sm-2">
                            <select name="minLogLevel" id="minLogLevel" class="custom-select combo">
                                <option{if $minLogLevel === $smarty.const.JTLLOG_LEVEL_ERROR} selected{/if} value="{$smarty.const.JTLLOG_LEVEL_ERROR}">{__('logLevelError')}</option>
                                <option{if $minLogLevel === $smarty.const.JTLLOG_LEVEL_WARNING} selected{/if} value="{$smarty.const.JTLLOG_LEVEL_WARNING}">{__('logLevelWarning')}</option>
                                <option{if $minLogLevel === $smarty.const.JTLLOG_LEVEL_NOTICE} selected{/if} value="{$smarty.const.JTLLOG_LEVEL_NOTICE}">{__('logLevelNotice')}</option>
                                <option{if $minLogLevel === $smarty.const.JTLLOG_LEVEL_DEBUG} selected{/if} value="{$smarty.const.JTLLOG_LEVEL_DEBUG}">{__('logLevelDebug')}</option>
                            </select>
                        </span>
                    </div>
                </div>
                <div class="save-wrapper">
                    <div class="row">
                        <div class="ml-auto col-sm-6 col-xl-auto">
                            <button name="action" value="save" class="btn btn-primary btn-block">
                                {__('saveWithIcon')}
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
{include file='tpl_inc/footer.tpl'}
