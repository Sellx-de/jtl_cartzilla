{block name='boxes-box-categories'}
        <!-- Categories -->
        <div class="box box-normal accordion-item border-0 pb-1 pb-xl-2">
            {block name='boxes-box-categories-title'}
                <h4 class="accordion-header" id="headingCategories">
                    <button type="button" class="accordion-button p-0 pb-3" data-bs-toggle="collapse" data-bs-target="#categories" aria-expanded="true" aria-controls="categories">
                        {if !empty($oBox->getTitle())}{$oBox->getTitle()}{else}{lang key='categories'}{/if}
                    </button>
                </h4>
            {/block}
            {block name='boxes-box-categories-collapse'}
                {collapse
                    class="accordion-collapse collapse show"
                    style="overflow-y:scroll"
                    visible=false
                    id="crd-cllps-{$oBox->getID()}"
                    aria=["labelledby"=>"crd-hdr-{$oBox->getID()}"]}
                    <div class="accordion-body p-0 pb-4 mb-1 mb-xl-2">
                        <div style="height: 220px" data-simplebar data-simplebar-auto-hide="false">
                            <ul class="nav flex-column gap-2 pe-3">
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
                {/collapse}
            {/block}
    </div>
{/block}
