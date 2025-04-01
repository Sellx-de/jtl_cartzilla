{block name='boxes-box-news-month'}
    <div class="card mb-4" id="sidebox{$oBox->getID()}">
        {block name='boxes-box-news-month-content'}
            {block name='boxes-box-news-month-title'}
                <div class="card-header">
                    <h3 class="fs-base mb-0">
                        <i class="ci-time text-primary me-2"></i>
                        <a class="d-flex align-items-center justify-content-between fw-normal text-decoration-none" 
                           data-bs-toggle="collapse" 
                           href="#crd-cllps-{$oBox->getID()}" 
                           role="button" 
                           aria-expanded="true" 
                           aria-controls="crd-cllps-{$oBox->getID()}">
                            <span>{lang key='newsBoxMonthOverview'}</span>
                            <i class="ci-arrow-down"></i>
                        </a>
                    </h3>
                </div>
            {/block}
            
            {block name='boxes-box-news-month-collapse'}
                <div class="collapse show" id="crd-cllps-{$oBox->getID()}">
                    <div class="card-body pt-3">
                        <div class="widget-links">
                            <ul class="widget-list">
                                {foreach $oBox->getItems() as $newsMonth}
                                    {block name='boxes-box-news-month-news-link'}
                                        <li class="widget-list-item d-flex justify-content-between align-items-center">
                                            <a class="widget-list-link" href="{$newsMonth->cURLFull}" title="{$newsMonth->cName}">
                                                <i class="ci-calendar text-muted me-2"></i>
                                                {$newsMonth->cName}
                                            </a>
                                            <span class="badge rounded-pill bg-secondary">{$newsMonth->nAnzahl}</span>
                                        </li>
                                    {/block}
                                {/foreach}
                            </ul>
                        </div>
                    </div>
                </div>
            {/block}
        {/block}
    </div>
{/block}
