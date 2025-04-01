{block name='account-orders'}
    {block name='heading'}
        <div class="d-flex align-items-center justify-content-between mb-4 pb-2 border-bottom">
            <h5 class="mb-0">{lang key='yourOrders' section='login'}</h5>
        </div>
    {/block}
    
    {block name='account-orders-content'}
        {if $Bestellungen|count > 0}
            {block name='account-orders-orders'}
                {get_static_route id='jtl.php' assign='ordersURL'}
                {if $Einstellungen.global.global_rma_enabled === 'Y'}
                    {$returnableProducts = $rmaService->getReturnableProducts()}
                {/if}

                <div class="table-responsive fs-md mb-4">
                    <table class="table table-hover mb-0">
                        <thead>
                            <tr>
                                <th>{lang key='orderNo' section='login'}</th>
                                <th>{lang key='date'}</th>
                                <th>{lang key='orderStatus' section='login'}</th>
                                <th>{lang key='orderValue'}</th>
                                <th class="text-end">{lang key='actions'}</th>
                            </tr>
                        </thead>
                        <tbody>
                            {foreach $orderPagination->getPageItems() as $order}
                                <tr>
                                    <td class="py-3">
                                        <a class="fw-medium text-decoration-none" href="{$ordersURL}?bestellung={$order->kBestellung}">
                                            #{$order->cBestellNr}
                                        </a>
                                    </td>
                                    <td class="py-3">
                                        <i class="ci-time text-muted me-2"></i>{$order->dBestelldatum}
                                    </td>
                                    <td class="py-3">
                                        <span class="badge {if $order->cStatus|intval == 5}bg-success{elseif $order->cStatus|intval == 3}bg-info{elseif $order->cStatus|intval == 4}bg-warning{else}bg-secondary{/if}">
                                            {$order->Status}
                                        </span>
                                    </td>
                                    <td class="py-3">{$order->cBestellwertLocalized}</td>
                                    <td class="py-3 text-end">
                                        <a class="btn btn-sm btn-outline-primary me-2" href="{$ordersURL}?bestellung={$order->kBestellung}">
                                            <i class="ci-eye me-1"></i>{lang key='showOrder' section='login'}
                                        </a>
                                        {if $Einstellungen.global.global_rma_enabled === 'Y' && $rmaService->isOrderReturnable($order->kBestellung, $returnableProducts)}
                                            <a class="btn btn-sm btn-outline-danger" href="{$cCanonicalURL}?newRMA={$order->kBestellung}">
                                                <i class="ci-reply me-1"></i>{lang key='return' section='rma'}
                                            </a>
                                        {/if}
                                    </td>
                                </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            {/block}
            
            {block name='account-orders-include-pagination'}
                {include file='snippets/pagination.tpl' oPagination=$orderPagination cThisUrl='jtl.php' cParam_arr=['bestellungen' => 1] parts=['pagi', 'label']}
            {/block}
        {else}
            {block name='account-orders-alert'}
                <div class="alert alert-info d-flex">
                    <i class="ci-announcement fs-lg me-2"></i>
                    <div>{lang key='noEntriesAvailable'}</div>
                </div>
            {/block}
        {/if}
        
        {block name='account-orders-actions'}
            <div class="d-flex pt-3">
                <a class="btn btn-outline-primary" href="{get_static_route id='jtl.php'}">
                    <i class="ci-arrow-left me-1"></i>{lang key='back'}
                </a>
            </div>
        {/block}
    {/block}
{/block}
