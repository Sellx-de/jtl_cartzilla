{block name='boxes-box-linkgroups'}
    <div class="box box-linkgroup box-normal text-left-util" id="box{$oBox->getID()}">
        {block name='boxes-box-linkgroups-toggle-title'}
            {link
                id="crd-hdr-{$oBox->getID()}"
                href="#crd-cllps-{$oBox->getID()}"
                data=["toggle"=>"collapse","bs-toggle"=>"collapse"]
                role="button"
                aria=["expanded"=>"false","controls"=>"crd-cllps-{$oBox->getID()}"]
                class="box-normal-link dropdown-toggle"}
                <span class="text-truncate">
                    {$oBox->getTitle()}
                </span>
            {/link}
        {/block}
        {block name='boxes-box-linkgroups-title'}
            <h6 class="accordion-header" id="categoriesHeading">
                <span class="text-dark-emphasis d-none d-sm-block">
                    {$oBox->getTitle()}
                </span>
            </h6>
        {/block}
        {block name='boxes-box-linkgroups-content'}
            {collapse
                class="d-md-block"
                visible=false
                id="crd-cllps-{$oBox->getID()}"
                aria=["labelledby"=>"crd-hdr-{$oBox->getID()}"]}
                    <div class="nav-panel box-nav-item">
                        {nav vertical=true class="flex-column gap-2 pt-sm-3 pb-3 pb-sm-0 mt-n1 mb-1 mb-sm-0"}
                            {block name='boxes-box-linkgroups-include-linkgroups-recursive'}
                                {include file='snippets/linkgroup_recursive.tpl'
                                    links=$oBox->getLinkGroup()->getHierarchy()
                                    linkgroupIdentifier=$oBox->getLinkGroupTemplate() dropdownSupport=true  tplscope='box'}
                            {/block}
                        {/nav}
                    </div>
            {/collapse}
        {/block}
    </div>
    {block name='boxes-box-linkgroups-hr-end'}
        <hr class="box-normal-hr">
    {/block}
{/block}
