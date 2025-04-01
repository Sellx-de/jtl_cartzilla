{block name='productdetails-attributes'}
{$inQuickView = !empty($smarty.get.quickView)}
{if $showAttributesTable}
    <div class="product-attributes">
    {block name='productdetails-attributes-table'}
        <div class="table-responsive">
            <table class="table fs-sm">
                <tbody>
                    {if $Einstellungen.artikeldetails.merkmale_anzeigen === 'Y'}
                        {block name='productdetails-attributes-characteristics'}
                            {foreach $Artikel->oMerkmale_arr as $characteristic}
                                <tr>
                                    <th class="border-0">{$characteristic->getName()|escape:'html'}:</th>
                                    <td class="border-0">
                                        {strip}
                                            {foreach $characteristic->getCharacteristicValues() as $characteristicValue}
                                                {if $characteristic->getType() === 'TEXT' || $characteristic->getType() === 'SELECTBOX' || $characteristic->getType() === ''}
                                                    {block name='productdetails-attributes-badge'}
                                                        <a {if !$inQuickView}href="{$characteristicValue->getURL()}"{/if}
                                                           class="badge bg-accent me-1">
                                                            {$characteristicValue->getValue()|escape:'html'}
                                                        </a>
                                                    {/block}
                                                {else}
                                                    {block name='productdetails-attributes-image'}
                                                        <a {if !$inQuickView}href="{$characteristicValue->getURL()}"{/if}
                                                            class="me-1"
                                                            data-bs-toggle="tooltip" data-bs-placement="top" data-bs-boundary="window"
                                                            title="{$characteristicValue->getValue()|escape:'html'}"
                                                            aria-label="{$characteristicValue->getValue()|escape:'html'}"
                                                        >
                                                            {$img = $characteristicValue->getImage(\JTL\Media\Image::SIZE_XS)}
                                                            {if $img !== null && strpos($img, $smarty.const.BILD_KEIN_MERKMALBILD_VORHANDEN) === false
                                                            && strpos($img, $smarty.const.BILD_KEIN_ARTIKELBILD_VORHANDEN) === false}
                                                                {include file='snippets/image.tpl'
                                                                    item=$characteristicValue
                                                                    square=false
                                                                    srcSize='xs'
                                                                    sizes='40px'
                                                                    width='40'
                                                                    height='40'
                                                                    class='rounded'
                                                                    alt=$characteristicValue->getValue()}
                                                            {else}
                                                                <span class="badge bg-accent">{$characteristicValue->getValue()|escape:'html'}</span>
                                                            {/if}
                                                        </a>
                                                    {/block}
                                                {/if}
                                            {/foreach}
                                        {/strip}
                                    </td>
                                </tr>
                            {/foreach}
                        {/block}
                    {/if}

                    {if $showShippingWeight}
                        {block name='productdetails-attributes-shipping-weight'}
                            <tr>
                                <th class="border-0">{lang key='shippingWeight'}:</th>
                                <td class="border-0">
                                    {$Artikel->cGewicht} {lang key='weightUnit'}
                                </td>
                            </tr>
                        {/block}
                    {/if}

                    {if $showProductWeight}
                        {block name='productdetails-attributes-product-weight'}
                            <tr>
                                <th class="border-0">{lang key='productWeight'}:</th>
                                <td class="border-0" itemprop="weight" itemscope itemtype="https://schema.org/QuantitativeValue">
                                    <span itemprop="value">{$Artikel->cArtikelgewicht}</span> <span itemprop="unitText">{lang key='weightUnit'}</span>
                                </td>
                            </tr>
                        {/block}
                    {/if}

                    {if $Einstellungen.artikeldetails.artikeldetails_inhalt_anzeigen === 'Y'
                        && isset($Artikel->cMasseinheitName)
                        && isset($Artikel->fMassMenge)
                        && $Artikel->fMassMenge > 0
                        && $Artikel->cTeilbar !== 'Y'
                        && ($Artikel->fAbnahmeintervall == 0 || $Artikel->fAbnahmeintervall == 1)
                        && isset($Artikel->cMassMenge)}
                        {block name='productdetails-attributes-unit'}
                            <tr>
                                <th class="border-0">{lang key='contents' section='productDetails'}: </th>
                                <td class="border-0">
                                    {$Artikel->cMassMenge} {$Artikel->cMasseinheitName}
                                </td>
                            </tr>
                        {/block}
                    {/if}

                    {if $dimension && $Einstellungen.artikeldetails.artikeldetails_abmessungen_anzeigen === 'Y'}
                        {block name='productdetails-attributes-dimensions'}
                            {assign var=dimensionArr value=$Artikel->getDimensionLocalized()}
                            {if $dimensionArr|count > 0}
                                <tr>
                                    <th class="border-0">{lang key='dimensions' section='productDetails'}
                                        ({foreach $dimensionArr as $dimkey => $dim}
                                            {$dimkey}{if !$dim@last} &times; {/if}
                                        {/foreach}):
                                    </th>
                                    <td class="border-0">
                                        {foreach $dimensionArr as $dim}
                                            {$dim}{if $dim@last} cm {else} &times; {/if}
                                        {/foreach}
                                    </td>
                                </tr>
                            {/if}
                        {/block}
                    {/if}

                    {if $Einstellungen.artikeldetails.artikeldetails_attribute_anhaengen === 'Y'
                    || $Artikel->FunktionsAttribute[$smarty.const.FKT_ATTRIBUT_ATTRIBUTEANHAENGEN]|default:0 == 1}
                        {block name='productdetails-attributes-shop-attributes'}
                            {foreach $Artikel->Attribute as $Attribut}
                                <tr>
                                    <th class="border-0">{$Attribut->cName}: </th>
                                    <td class="border-0">{$Attribut->cWert}</td>
                                </tr>
                            {/foreach}
                        {/block}
                    {/if}
                </tbody>
            </table>
        </div>
    {/block}
    </div>
{/if}
{/block}