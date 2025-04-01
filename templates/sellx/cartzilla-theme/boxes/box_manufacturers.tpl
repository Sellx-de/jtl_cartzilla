{block name='boxes-box-manufacturers'}
    <div class="card mb-4" id="sidebox{$oBox->getID()}">
        {block name='boxes-box-manufacturers-content'}
            {block name='boxes-box-manufacturers-title'}
                <div class="card-header">
                    <h3 class="fs-base mb-0">
                        <i class="ci-briefcase text-primary me-2"></i>
                        <a class="d-flex align-items-center justify-content-between fw-normal text-decoration-none" 
                           data-bs-toggle="collapse" 
                           href="#crd-cllps-{$oBox->getID()}" 
                           role="button" 
                           aria-expanded="true" 
                           aria-controls="crd-cllps-{$oBox->getID()}">
                            <span>{lang key='manufacturers'}</span>
                            <i class="ci-arrow-down"></i>
                        </a>
                    </h3>
                </div>
            {/block}
            
            {block name='boxes-box-manufacturers-collapse'}
                <div class="collapse show" id="crd-cllps-{$oBox->getID()}">
                    <div class="card-body pt-3">
                        {if $oBox->getManufacturers()|count > 8}
                            {block name='boxes-box-manufacturers-dropdown'}
                                <select class="form-select" onchange="if (this.value) window.location.href=this.value">
                                    <option value="">{lang key='selectManufacturer'}</option>
                                    {foreach $oBox->getManufacturers() as $manufacturer}
                                        <option value="{$manufacturer->getURL()}">{$manufacturer->getName()|escape:'html'}</option>
                                    {/foreach}
                                </select>
                            {/block}
                        {else}
                            {block name='boxes-box-manufacturers-link'}
                                <div class="widget-links">
                                    <ul class="widget-list">
                                        {foreach $oBox->getManufacturers() as $manufacturer}
                                            <li class="widget-list-item">
                                                <a class="widget-list-link" href="{$manufacturer->getURL()}" title="{$manufacturer->getName()|escape:'html'}">
                                                    {$manufacturer->getName()|escape:'html'}
                                                </a>
                                            </li>
                                        {/foreach}
                                    </ul>
                                </div>
                            {/block}
                        {/if}
                    </div>
                </div>
            {/block}
        {/block}
    </div>
{/block}
