<nav id="subnav">
    <ul class="nav toc nav-stacked affix-top" data-spy="affix" data-offset-top="125">
        {counter assign=i start=1 print=false}
        {foreach $Conf as $cnf}
            {if !$cnf->isConfigurable()}
                {if $cnf@index == 0}
                    <li class="active"><a href="#section-{$i}">{$cnf->getName()}</a></li>
                {else}
                    <li><a href="#section-{$i}">{$cnf->getName()}</a></li>
                {/if}
                {counter}
            {/if}
        {/foreach}
    </ul>
</nav>
