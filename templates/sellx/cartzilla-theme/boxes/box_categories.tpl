{block name='boxes-box-categories'}
    <div class="card mb-4">
        {block name='boxes-box-categories-title'}
            <div class="card-header">
                <h3 class="fs-base mb-0">
                    <i class="ci-list text-primary me-2"></i>
                    {if !empty($oBox->getTitle())}{$oBox->getTitle()}{else}{lang key='categories'}{/if}
                </h3>
            </div>
        {/block}
        
        {block name='boxes-box-categories-collapse'}
            <div class="card-body">
                <div class="widget widget-categories">
                    <div class="accordion" id="shop-categories">
                        <div style="max-height: 350px" data-simplebar data-simplebar-auto-hide="false">
                            <ul class="widget-list widget-list-categories ps-0">
                                {block name='boxes-box-categories-include-categories-recursive'}
                                    {include file='snippets/categories_recursive.tpl'
                                        i=0
                                        categoryId=0
                                        categoryBoxNumber=$oBox->getCustomID()
                                        limit=3
                                        categories=$oBox->getItems()
                                        id=$oBox->getID()}
                                {/block}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        {/block}
    </div>
{/block}
