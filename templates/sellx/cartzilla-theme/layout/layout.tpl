{block name='layout-main'}
    {include file='layout/header.tpl'}
    
    {block name='layout-content'}
        <main class="content-wrapper">
            <div class="container py-4 py-lg-5 my-4">
                {include file=$cPluginContent}
            </div>
        </main>
    {/block}
    
    {include file='layout/footer.tpl'}
{/block}