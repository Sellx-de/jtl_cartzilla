{block name='snippets-categories-offcanvas'}
    {lang key='view' assign='view_'}
    {block name='snippets-categories-offcanvas-heading'}
        <h5 class="offcanvas-title">{$result->current->getName()}</h5>
    {/block}
    <div class="offcanvas-body">
        <nav class="h-100 pt-2">
            {block name='snippets-categories-offcanvas-navitems'}
                <div class="d-flex flex-wrap mb-3">
                    <a href="#" class="btn btn-outline-primary btn-sm me-2 mb-2" data-ref="0">
                        <i class="ci-menu me-1"></i> {lang key='showAll'}
                    </a>
                    <a href="#" class="btn btn-outline-secondary btn-sm mb-2" data-ref=$result->current->kOberKategorie>
                        <i class="ci-arrow-left me-1"></i> {lang key='back'}
                    </a>
                </div>
                <div class="mb-3">
                    <a href="{$result->current->getURL()}" class="fw-medium text-decoration-none">
                        {$result->current->getName()} {$view_|lower}
                    </a>
                </div>
            {/block}
            {block name='snippets-categories-offcanvas-include-categories-recursive'}
                <div class="widget widget-categories">
                    {include file='snippets/categories_recursive.tpl' i=0 categoryId=$result->current->getID() limit=2 caret='right'}
                </div>
            {/block}
        </nav>
    </div>
{/block}
