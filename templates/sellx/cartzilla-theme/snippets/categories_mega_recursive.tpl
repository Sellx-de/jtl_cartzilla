{block name='snippets-categories-mega-recursive'}
    {block name='snippets-categories-mega-recursive-max-subsub-items'}
        {$max_subsub_items="{if $isMobile}5{else}2{/if}"}
    {/block}
    {block name='snippets-categories-mega-recursive-main-link'}
        <a href="{$mainCategory->getURL()}"
           class="{if $firstChild}nav-link dropdown-item{else}dropdown-item{/if} {if $mainCategory->hasChildren() && $subCategory < $max_subsub_items && $Einstellungen.template.megamenu.show_subcategories !== 'N'}dropdown-toggle{/if}"
           {if $mainCategory->hasChildren() && $subCategory < $max_subsub_items && $Einstellungen.template.megamenu.show_subcategories !== 'N'}
           data-bs-toggle="dropdown"
           {/if}
           aria-expanded="false"
           data-category-id="{$mainCategory->getID()}">
            {if $firstChild
                && $Einstellungen.template.megamenu.show_category_images !== 'N'
                && (!$isMobile || $isTablet)}
                {$imgAlt = $mainCategory->getAttribute('img_alt')}
                <div class="dropdown-item-icon">
                    {include file='snippets/image.tpl'
                        class='rounded-circle'
                        item=$mainCategory
                        square=true
                        srcSize='xs'
                        width=20
                        height=20
                        alt="{if empty($imgAlt->cWert)}{$mainCategory->getName()|escape:'html'}{else}{$imgAlt->cWert}{/if}"}
                </div>
            {/if}
            <span>
                {$mainCategory->getShortName()}{if $mainCategory->hasChildren() && $subCategory >= $max_subsub_items}<span class="fs-xs text-muted ms-1">({$mainCategory->getChildren()|count})</span>{/if}
            </span>
        </a>
    {/block}
    {if $mainCategory->hasChildren() && $Einstellungen.template.megamenu.show_subcategories !== 'N' && $subCategory < $max_subsub_items}
        {block name='snippets-categories-mega-recursive-child-content'}
            <div class="dropdown-menu" data-bs-popper="static">
                <div class="dropdown-inner">
                    {block name='snippets-categories-mega-recursive-child-header'}
                        <div class="d-lg-none">
                            <a class="dropdown-item border-bottom text-uppercase fw-medium" href="{$mainCategory->getURL()}">
                                {lang key='menuShow' printf=$mainCategory->getShortName()}
                            </a>
                        </div>
                    {/block}
                    {block name='snippets-categories-mega-recursive-child-categories'}
                        {foreach $mainCategory->getChildren() as $category}
                            {if $category->hasChildren() && $subCategory + 1 < $max_subsub_items}
                                {block name='snippets-categories-mega-recursive-child-category-child'}
                                    <div class="dropdown">
                                        {include file='snippets/categories_mega_recursive.tpl' mainCategory=$category firstChild=false subCategory=$subCategory + 1}
                                    </div>
                                {/block}
                            {else}
                                {block name='snippets-categories-mega-recursivechild-category-no-child'}
                                    <a class="dropdown-item" href="{$category->getURL()}" data-category-id="{$category->getID()}">
                                        {$category->getShortName()}{if $category->hasChildren()}<span class="fs-xs text-muted ms-1">({$category->getChildren()|count})</span>{/if}
                                    </a>
                                {/block}
                            {/if}
                        {/foreach}
                    {/block}
                </div>
            </div>
        {/block}
    {/if}
{/block}
