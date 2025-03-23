{block name='productdetails-tabs'}
    {block name='productdetails-tabs-settings'}
        {$tabanzeige = $Einstellungen.artikeldetails.artikeldetails_tabs_nutzen !== 'N'}
        {$showProductWeight = false}
        {$showShippingWeight = false}
        {if isset($Artikel->cArtikelgewicht) && $Artikel->fArtikelgewicht > 0
        && $Einstellungen.artikeldetails.artikeldetails_artikelgewicht_anzeigen === 'Y'}
            {$showProductWeight = true}
        {/if}
        {if isset($Artikel->cGewicht) && $Artikel->fGewicht > 0
        && $Einstellungen.artikeldetails.artikeldetails_gewicht_anzeigen === 'Y'}
            {$showShippingWeight = true}
        {/if}
        {$dimension = $Artikel->getDimension()}
        {$funcAttr = $Artikel->FunktionsAttribute[$smarty.const.FKT_ATTRIBUT_ATTRIBUTEANHAENGEN]|default:0}
        {$showAttributesTable = ($Einstellungen.artikeldetails.merkmale_anzeigen === 'Y'
        && !empty($Artikel->oMerkmale_arr) || $showProductWeight || $showShippingWeight
        || $Einstellungen.artikeldetails.artikeldetails_abmessungen_anzeigen === 'Y'
        && (!empty($dimension['length']) || !empty($dimension['width']) || !empty($dimension['height']))
        || isset($Artikel->cMasseinheitName) && isset($Artikel->fMassMenge) && $Artikel->fMassMenge > 0
        && $Artikel->cTeilbar !== 'Y' && ($Artikel->fAbnahmeintervall == 0 || $Artikel->fAbnahmeintervall == 1)
        || ($Einstellungen.artikeldetails.artikeldetails_attribute_anhaengen === 'Y' || $funcAttr == 1)
        && !empty($Artikel->Attribute))}
        {$useDescriptionWithMediaGroup = ((($Einstellungen.artikeldetails.mediendatei_anzeigen === 'YA'
        && $Artikel->cMedienDateiAnzeige !== 'tab') || $Artikel->cMedienDateiAnzeige === 'beschreibung')
        && !empty($Artikel->getMediaTypes()))}
        {$useDescription = (($Artikel->cBeschreibung|strlen > 0) || $useDescriptionWithMediaGroup || $showAttributesTable)}
        {$useDownloads = (isset($Artikel->oDownload_arr) && $Artikel->oDownload_arr|count > 0)}
        {$useVotes = $Einstellungen.bewertung.bewertung_anzeigen === 'Y'}
        {$useQuestionOnItem = $Einstellungen.artikeldetails.artikeldetails_fragezumprodukt_anzeigen === 'Y'}
        {$usePriceFlow = ($Einstellungen.preisverlauf.preisverlauf_anzeigen === 'Y' && $bPreisverlauf)}
        {$useAvailabilityNotification = ($verfuegbarkeitsBenachrichtigung !== 0)}
        {$useMediaGroup = ((($Einstellungen.artikeldetails.mediendatei_anzeigen === 'YM'
        && $Artikel->cMedienDateiAnzeige !== 'beschreibung') || $Artikel->cMedienDateiAnzeige === 'tab')
        && !empty($Artikel->getMediaTypes()))}
        {$hasVotesHash = isset($smarty.get.ratings_nPage)
        || isset($smarty.get.bewertung_anzeigen)
        || isset($smarty.get.ratings_nItemsPerPage)
        || isset($smarty.get.ratings_nSortByDir)
        || isset($smarty.get.btgsterne)}
        {section name=iterator start=1 loop=11}
            {$tab = tab}
            {$tabname = $tab|cat:$smarty.section.iterator.index|cat:" name"}
            {$tabinhalt = $tab|cat:$smarty.section.iterator.index|cat:" inhalt"}
            {if isset($Artikel->AttributeAssoc[$tabname]) && $Artikel->AttributeAssoc[$tabname]
            && $Artikel->AttributeAssoc[$tabinhalt]}
                {$separatedTabs[{$tabname|replace:' ':'-'}] = [
                'id'      => {$tabname|replace:' ':'-'},
                'name'   => {$Artikel->AttributeAssoc[$tabname]},
                'content' => {$Artikel->AttributeAssoc[$tabinhalt]}
                ]}
            {/if}
        {/section}
        {$setActiveClass = [
        'description'    => (!$hasVotesHash),
        'downloads'      => (!$hasVotesHash && !$useDescription),
        'separatedTabs'  => (!$hasVotesHash && !$useDescription && !$useDownloads),
        'votes'          => ($hasVotesHash || !$useDescription && !$useDownloads && empty($separatedTabs)),
        'questionOnItem' => (!$hasVotesHash && !$useDescription && !$useDownloads && empty($separatedTabs) && !$useVotes),
        'priceFlow'      => (!$useVotes && !$hasVotesHash && !$useDescription && !$useDownloads && empty($separatedTabs)
        && !$useQuestionOnItem),
        'availabilityNotification' => (!$useVotes && !$hasVotesHash && !$useDescription && !$useDownloads
        && empty($separatedTabs) && !$useQuestionOnItem && !$usePriceFlow),
        'mediaGroup' => (!$useVotes && !$hasVotesHash && !$useDescription && !$useDownloads && empty($separatedTabs)
        && !$useQuestionOnItem && !$usePriceFlow && !$useAvailabilityNotification)
        ]}
        {if !empty($smarty.get.quickView)}
            {$quickViewIdPostfix = '-quickview'}
        {else}
            {$quickViewIdPostfix = ''}
        {/if}
    {/block}
    {block name='productdetails-tabs-content'}
        {if $useDescription || $useDownloads || $useDescriptionWithMediaGroup || $useVotes || $useQuestionOnItem || $usePriceFlow
        || $useAvailabilityNotification || $useMediaGroup || !empty($separatedTabs)}
            {opcMountPoint id='opc_before_tabs' inContainer=false}
            {if $tabanzeige && !$isMobile}
                {block name='productdetails-tabs-tabs'}
                    {container class="{if $Einstellungen.template.theme.left_sidebar === 'Y' && $boxesLeftActive}container-plus-sidebar{/if}"}
                        <section class="container pt-4">
                            <!-- Nav tabs -->
                            <ul class="nav nav-underline flex-nowrap border-bottom" role="tablist">
                                {if $useDescription}
                                    <li class="nav-item me-md-1" role="presentation">
                                        <button type="button" class="nav-link{if $setActiveClass.description} active{/if}" id="description-tab{$quickViewIdPostfix}" data-bs-toggle="tab" data-bs-target="#description-tab-pane{$quickViewIdPostfix}" role="tab" aria-controls="description-tab-pane{$quickViewIdPostfix}" aria-selected="{if $setActiveClass.description}true{else}false{/if}">
                                            {lang key='description' section='productDetails'}
                                        </button>
                                    </li>
                                {/if}

                                {if $useDownloads}
                                    <li class="nav-item me-md-1" role="presentation">
                                        <button type="button" class="nav-link{if $setActiveClass.downloads} active{/if}" id="downloads-tab{$quickViewIdPostfix}" data-bs-toggle="tab" data-bs-target="#downloads-tab-pane{$quickViewIdPostfix}" role="tab" aria-controls="downloads-tab-pane{$quickViewIdPostfix}" aria-selected="{if $setActiveClass.downloads}true{else}false{/if}">
                                            {lang section='productDownloads' key='downloadSection'}
                                        </button>
                                    </li>
                                {/if}

                                {if !empty($separatedTabs)}
                                    {foreach $separatedTabs as $separatedTab}
                                        <li class="nav-item me-md-1" role="presentation">
                                            <button type="button" class="nav-link{if $setActiveClass.separatedTabs && $separatedTab@first} active{/if}" id="{$separatedTab.name|seofy}-tab{$quickViewIdPostfix}" data-bs-toggle="tab" data-bs-target="#{$separatedTab.name|seofy}-tab-pane{$quickViewIdPostfix}" role="tab" aria-controls="{$separatedTab.name|seofy}-tab-pane{$quickViewIdPostfix}" aria-selected="{if $setActiveClass.separatedTabs && $separatedTab@first}true{else}false{/if}">
                                                {$separatedTab.name}
                                            </button>
                                        </li>
                                    {/foreach}
                                {/if}

                                {if $useVotes}
                                    <li class="nav-item me-md-1" role="presentation">
                                        <button type="button" class="nav-link{if $setActiveClass.votes} active{/if}" id="votes-tab{$quickViewIdPostfix}" data-bs-toggle="tab" data-bs-target="#votes-tab-pane{$quickViewIdPostfix}" role="tab" aria-controls="votes-tab-pane{$quickViewIdPostfix}" aria-selected="{if $setActiveClass.votes}true{else}false{/if}">
                                            {lang key='Votes'}
                                            {if isset($Artikel->Bewertungen) && $Artikel->Bewertungen->oBewertungGesamt->nAnzahl > 0}
                                                <span class="d-none d-md-inline">&nbsp;({$Artikel->Bewertungen->oBewertungGesamt->nAnzahl})</span>
                                            {/if}
                                        </button>
                                    </li>
                                {/if}

                                {if $useQuestionOnItem && empty($smarty.get.quickView)}
                                    <li class="nav-item me-md-1" role="presentation">
                                        <button type="button" class="nav-link{if $setActiveClass.questionOnItem} active{/if}" id="questionOnItem-tab{$quickViewIdPostfix}" data-bs-toggle="tab" data-bs-target="#questionOnItem-tab-pane{$quickViewIdPostfix}" role="tab" aria-controls="questionOnItem-tab-pane{$quickViewIdPostfix}" aria-selected="{if $setActiveClass.questionOnItem}true{else}false{/if}">
                                            {lang key='productQuestion' section='productDetails'}
                                        </button>
                                    </li>
                                {/if}

                                {if $usePriceFlow}
                                    <li class="nav-item me-md-1" role="presentation">
                                        <button type="button" class="nav-link{if $setActiveClass.priceFlow} active{/if}" id="priceFlow-tab{$quickViewIdPostfix}" data-bs-toggle="tab" data-bs-target="#priceFlow-tab-pane{$quickViewIdPostfix}" role="tab" aria-controls="priceFlow-tab-pane{$quickViewIdPostfix}" aria-selected="{if $setActiveClass.priceFlow}true{else}false{/if}">
                                            {lang key='priceFlow' section='productDetails'}
                                        </button>
                                    </li>
                                {/if}

                                {if $useAvailabilityNotification && empty($smarty.get.quickView)}
                                    <li class="nav-item me-md-1" role="presentation">
                                        <button type="button" class="nav-link{if $setActiveClass.availabilityNotification} active{/if}" id="availabilityNotification-tab{$quickViewIdPostfix}" data-bs-toggle="tab" data-bs-target="#availabilityNotification-tab-pane{$quickViewIdPostfix}" role="tab" aria-controls="availabilityNotification-tab-pane{$quickViewIdPostfix}" aria-selected="{if $setActiveClass.availabilityNotification}true{else}false{/if}">
                                            {lang key='notifyMeWhenProductAvailableAgain'}
                                        </button>
                                    </li>
                                {/if}

                                {if $useMediaGroup}
                                    {foreach $Artikel->getMediaTypes() as $mediaType}
                                        {$cMedienTypId = $mediaType->name|seofy}
                                        <li class="nav-item me-md-1" role="presentation">
                                            <button type="button" class="nav-link{if $setActiveClass.mediaGroup && $mediaType@first} active{/if}" id="{$cMedienTypId}-tab{$quickViewIdPostfix}" data-bs-toggle="tab" data-bs-target="#{$cMedienTypId}-tab-pane{$quickViewIdPostfix}" role="tab" aria-controls="{$cMedienTypId}-tab-pane{$quickViewIdPostfix}" aria-selected="{if $setActiveClass.mediaGroup && $mediaType@first}true{else}false{/if}">
                                                {$mediaType->name} ({$mediaType->count})
                                            </button>
                                        </li>
                                    {/foreach}
                                {/if}
                            </ul>

                            <div class="tab-content pt-4 mt-md-3">
                                {if $useDescription}
                                    <!-- Description tab -->
                                    <div class="tab-pane fade{if $setActiveClass.description} show active{/if}" id="description-tab-pane{$quickViewIdPostfix}" role="tabpanel" aria-labelledby="description-tab{$quickViewIdPostfix}">
                                        <div class="row">
                                            <div class="col-lg-8 fs-sm">
                                                {block name='tab-description-media-types'}
                                                    {opcMountPoint id='opc_before_desc'}
                                                    <div class="desc">
                                                        <p>{$Artikel->cBeschreibung}</p>
                                                        {if $useDescriptionWithMediaGroup}
                                                            {foreach $Artikel->getMediaTypes() as $mediaType}
                                                                <div class="h3">{$mediaType->name}</div>
                                                                <div class="media">
                                                                    {include file='productdetails/mediafile.tpl'}
                                                                </div>
                                                            {/foreach}
                                                        {/if}
                                                    </div>
                                                    {opcMountPoint id='opc_after_desc'}
                                                {/block}
                                            </div>
                                            <div class="col-lg-4">
                                                {block name='productdetails-tabs-tab-description-include-attributes'}
                                                    {include file='productdetails/attributes.tpl' tplscope='details'
                                                    showProductWeight=$showProductWeight showShippingWeight=$showShippingWeight
                                                    dimension=$dimension showAttributesTable=$showAttributesTable}
                                                {/block}
                                            </div>
                                        </div>
                                    </div>
                                {/if}

                                {if $useDownloads}
                                    <!-- Downloads tab -->
                                    <div class="tab-pane fade{if $setActiveClass.downloads} show active{/if}" id="downloads-tab-pane{$quickViewIdPostfix}" role="tabpanel" aria-labelledby="downloads-tab{$quickViewIdPostfix}">
                                        {opcMountPoint id='opc_before_download'}
                                        {include file='productdetails/download.tpl'}
                                        {opcMountPoint id='opc_after_download'}
                                    </div>
                                {/if}

                                {if !empty($separatedTabs)}
                                    {foreach $separatedTabs as $separatedTab}
                                        <!-- {$separatedTab.name} tab -->
                                        <div class="tab-pane fade{if $setActiveClass.separatedTabs && $separatedTab@first} show active{/if}" id="{$separatedTab.name|seofy}-tab-pane{$quickViewIdPostfix}" role="tabpanel" aria-labelledby="{$separatedTab.name|seofy}-tab{$quickViewIdPostfix}">
                                            {opcMountPoint id='opc_before_separated_'|cat:$separatedTab.id}
                                            {$separatedTab.content}
                                            {opcMountPoint id='opc_after_separated_'|cat:$separatedTab.id}
                                        </div>
                                    {/foreach}
                                {/if}

                                {if $useVotes}
                                    <!-- Reviews tab -->
                                    <div class="tab-pane fade{if $setActiveClass.votes} show active{/if}" id="votes-tab-pane{$quickViewIdPostfix}" role="tabpanel" aria-labelledby="votes-tab{$quickViewIdPostfix}">
                                        {opcMountPoint id='opc_before_tab_votes'}
                                        {include file='productdetails/reviews.tpl' stars=$Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt}
                                        {opcMountPoint id='opc_after_tab_votes'}
                                    </div>
                                {/if}

                                {if $useQuestionOnItem && empty($smarty.get.quickView)}
                                    <!-- Question tab -->
                                    <div class="tab-pane fade{if $setActiveClass.questionOnItem} show active{/if}" id="questionOnItem-tab-pane{$quickViewIdPostfix}" role="tabpanel" aria-labelledby="questionOnItem-tab{$quickViewIdPostfix}">
                                        {opcMountPoint id='opc_before_tab_question'}
                                        {include file='productdetails/question_on_item.tpl' position="tab"}
                                        {opcMountPoint id='opc_after_tab_question'}
                                    </div>
                                {/if}

                                {if $usePriceFlow}
                                    <!-- Price flow tab -->
                                    <div class="tab-pane fade{if $setActiveClass.priceFlow} show active{/if}" id="priceFlow-tab-pane{$quickViewIdPostfix}" role="tabpanel" aria-labelledby="priceFlow-tab{$quickViewIdPostfix}">
                                        {opcMountPoint id='opc_before_tab_price_history'}
                                        {include file='productdetails/price_history.tpl'}
                                        {opcMountPoint id='opc_after_tab_price_history'}
                                    </div>
                                {/if}

                                {if $useAvailabilityNotification && empty($smarty.get.quickView)}
                                    <!-- Availability notification tab -->
                                    <div class="tab-pane fade{if $setActiveClass.availabilityNotification} show active{/if}" id="availabilityNotification-tab-pane{$quickViewIdPostfix}" role="tabpanel" aria-labelledby="availabilityNotification-tab{$quickViewIdPostfix}">
                                        {opcMountPoint id='opc_before_tab_availability'}
                                        {include file='productdetails/availability_notification_form.tpl' position='tab' tplscope='artikeldetails'}
                                        {opcMountPoint id='opc_after_tab_availability'}
                                    </div>
                                {/if}

                                {if $useMediaGroup}
                                    {foreach $Artikel->getMediaTypes() as $mediaType}
                                        {$cMedienTypId = $mediaType->name|seofy}
                                        <!-- Media tab ({$mediaType->name}) -->
                                        <div class="tab-pane fade{if $setActiveClass.mediaGroup && $mediaType@first} show active{/if}" id="{$cMedienTypId}-tab-pane{$quickViewIdPostfix}" role="tabpanel" aria-labelledby="{$cMedienTypId}-tab{$quickViewIdPostfix}">
                                            {include file='productdetails/mediafile.tpl'}
                                        </div>
                                    {/foreach}
                                {/if}
                            </div>
                        </section>
                    {/container}
                {/block}
            {else}
                {block name='productdetails-tabs-no-tabs'}
                    {container class="{if $Einstellungen.template.theme.left_sidebar === 'Y' && $boxesLeftActive}container-plus-sidebar{/if}"}
                        <div class="accordion" id="tabAccordion"{$quickViewIdPostfix}>
                            {if $useDescription}
                                {block name='productdetails-tabs-description'}
                                    {card no-body=true}
                                        {cardheader id="tab-description-head"|cat:$quickViewIdPostfix
                                            data=["toggle" => "collapse","bs-toggle" => "collapse",
                                                "target"=>"#tab-description"|cat:$quickViewIdPostfix,"bs-target"=>"#tab-description"|cat:$quickViewIdPostfix
                                            ]
                                            aria=["expanded" => "{if $setActiveClass.description}true{else}false{/if}",
                                                "controls" => "tab-description"|cat:$quickViewIdPostfix
                                            ]
                                        }
                                            {lang key='description' section='productDetails'}
                                        {/cardheader}
                                        {collapse id="tab-description"|cat:$quickViewIdPostfix
                                                visible=$setActiveClass.description
                                            data=["parent"=>"#tabAccordion"|cat:$quickViewIdPostfix]
                                            aria=["labelledby"=>"tab-description-head"|cat:$quickViewIdPostfix]
                                        }
                                            {cardbody}
                                                {block name='productdetails-tabs-card-description'}
                                                    {block name='productdetails-tabs-card-description-content'}
                                                        {opcMountPoint id='opc_before_desc'}
                                                        <div class="desc">
                                                            {$Artikel->cBeschreibung}
                                                            {if $useDescriptionWithMediaGroup}
                                                                {if $Artikel->cBeschreibung|strlen > 0}
                                                                    <hr>
                                                                {/if}
                                                                {foreach $Artikel->getMediaTypes() as $mediaType}
                                                                    <div class="media">
                                                                        {block name='productdetails-tabs-description-include-mediafile'}
                                                                            {include file='productdetails/mediafile.tpl'}
                                                                        {/block}
                                                                    </div>
                                                                {/foreach}
                                                            {/if}
                                                        </div>
                                                        {opcMountPoint id='opc_after_desc'}
                                                    {/block}
                                                    {block name='productdetails-tabs-card-description-attributes'}
                                                        {block name='productdetails-tabs-include-attributes'}
                                                            {include file='productdetails/attributes.tpl' tplscope='details'
                                                            showProductWeight=$showProductWeight showShippingWeight=$showShippingWeight
                                                            dimension=$dimension showAttributesTable=$showAttributesTable}
                                                        {/block}
                                                    {/block}
                                                {/block}
                                            {/cardbody}
                                        {/collapse}
                                    {/card}
                                {/block}
                            {/if}

                            {if $useDownloads}
                                {block name='productdetails-tabs-downloads'}
                                    {card no-body=true}
                                        {cardheader id="tab-downloads-head"|cat:$quickViewIdPostfix
                                            data=["toggle" => "collapse","bs-toggle" => "collapse",
                                                "target"=>"#tab-downloads"|cat:$quickViewIdPostfix,"bs-target"=>"#tab-downloads"|cat:$quickViewIdPostfix
                                            ]
                                            aria=["expanded" => "{if $setActiveClass.downloads}true{else}false{/if}",
                                                "controls" => "tab-downloads"|cat:$quickViewIdPostfix
                                            ]
                                        }
                                            {lang section='productDownloads' key='downloadSection'}
                                        {/cardheader}
                                        {collapse id="tab-downloads"|cat:$quickViewIdPostfix
                                            visible=$setActiveClass.downloads
                                            data=["parent"=>"#tabAccordion"|cat:$quickViewIdPostfix]
                                            aria=["labelledby"=>"tab-downloads-head"|cat:$quickViewIdPostfix]
                                        }
                                            {cardbody}
                                                {block name='productdetails-tabs-include-download'}
                                                    {opcMountPoint id='opc_before_download'}
                                                    {include file='productdetails/download.tpl'}
                                                    {opcMountPoint id='opc_after_download'}
                                                {/block}
                                            {/cardbody}
                                        {/collapse}
                                    {/card}
                                {/block}
                            {/if}

                            {if !empty($separatedTabs)}
                                {block name='productdetails-tabs-separated-tabs'}
                                    {foreach $separatedTabs as $separatedTab}
                                        {$separatedTabId = $separatedTab.name|seofy}
                                        {card no-body=true}
                                            {cardheader id="tab-{$separatedTabId}-head"|cat:$quickViewIdPostfix
                                                data=["toggle" => "collapse","bs-toggle" => "collapse",
                                                    "target"=>"#tab-{$separatedTabId}"|cat:$quickViewIdPostfix,"bs-target"=>"#tab-{$separatedTabId}"|cat:$quickViewIdPostfix
                                                ]
                                                aria=["expanded" => "{if $setActiveClass.separatedTabs && $separatedTab@first}true{else}false{/if}",
                                                    "controls" => "tab-{$separatedTabId}"|cat:$quickViewIdPostfix
                                                ]
                                            }
                                                {$separatedTab.name}
                                            {/cardheader}
                                            {collapse id="tab-{$separatedTabId}"|cat:$quickViewIdPostfix
                                                visible=($setActiveClass.separatedTabs && $separatedTab@first)
                                                data=["parent"=>"#tabAccordion"|cat:$quickViewIdPostfix]
                                                aria=["labelledby"=>"tab-{$separatedTabId}-head"|cat:$quickViewIdPostfix]
                                            }
                                                {cardbody}
                                                    {opcMountPoint id='opc_before_separated_'|cat:$separatedTab.id}
                                                    {$separatedTab.content}
                                                    {opcMountPoint id='opc_after_separated_'|cat:$separatedTab.id}
                                                {/cardbody}
                                            {/collapse}
                                        {/card}
                                    {/foreach}
                                {/block}
                            {/if}

                            {if $useVotes}
                                {block name='productdetails-tabs-votes'}
                                    {card no-body=true }
                                        {cardheader id="tab-votes-head"|cat:$quickViewIdPostfix
                                            data=["toggle" => "collapse","bs-toggle" => "collapse",
                                                "target"=>"#tab-votes"|cat:$quickViewIdPostfix,"bs-target"=>"#tab-votes"|cat:$quickViewIdPostfix
                                            ]
                                            aria=["expanded" => "{if $setActiveClass.votes}true{else}false{/if}",
                                                "controls" => "tab-votes"|cat:$quickViewIdPostfix
                                            ]
                                        }
                                            {lang key='Votes'}
                                        {/cardheader}
                                        {collapse id="tab-votes"|cat:$quickViewIdPostfix visible=$setActiveClass.votes
                                            data=["parent"=>"#tabAccordion"|cat:$quickViewIdPostfix]
                                            aria=["labelledby"=>"tab-votes-head"|cat:$quickViewIdPostfix]
                                        }
                                            {cardbody}
                                                {block name='productdetails-tabs-include-reviews'}
                                                    {opcMountPoint id='opc_before_tab_votes'}
                                                    {include file='productdetails/reviews.tpl' stars=$Artikel->Bewertungen->oBewertungGesamt->fDurchschnitt}
                                                    {opcMountPoint id='opc_after_tab_votes'}
                                                {/block}
                                            {/cardbody}
                                        {/collapse}
                                    {/card}
                                {/block}
                            {/if}

                            {if $useQuestionOnItem}
                                {block name='productdetails-tabs-question-on-item'}
                                    {card no-body=true}
                                        {cardheader id="tab-question-head"|cat:$quickViewIdPostfix
                                            data=["toggle" => "collapse","bs-toggle" => "collapse",
                                                "target"=>"#tab-questionOnItem"|cat:$quickViewIdPostfix,"bs-target"=>"#tab-questionOnItem"|cat:$quickViewIdPostfix
                                            ]
                                            aria=["expanded" => "{if $setActiveClass.questionOnItem}true{else}false{/if}",
                                                "controls" => "tab-questionOnItem"|cat:$quickViewIdPostfix
                                            ]
                                        }
                                            {lang key='productQuestion' section='productDetails'}
                                        {/cardheader}
                                        {collapse id="tab-questionOnItem"|cat:$quickViewIdPostfix
                                            visible=$setActiveClass.questionOnItem
                                            data=["parent"=>"#tabAccordion"|cat:$quickViewIdPostfix]
                                            aria=["labelledby"=>"tab-question-head"|cat:$quickViewIdPostfix]
                                        }
                                            {cardbody}
                                                {block name='productdetails-tabs-include-question-on-item'}
                                                    {opcMountPoint id='opc_before_tab_question'}
                                                    {include file='productdetails/question_on_item.tpl' position="tab"}
                                                    {opcMountPoint id='opc_after_tab_question'}
                                                {/block}
                                            {/cardbody}
                                        {/collapse}
                                    {/card}
                                {/block}
                            {/if}

                            {if $usePriceFlow}
                                {block name='productdetails-tabs-price-flow'}
                                    {card no-body=true}
                                        {cardheader id="tab-priceFlow-head"|cat:$quickViewIdPostfix
                                            data=["toggle" => "collapse","bs-toggle" => "collapse",
                                                "target"=>"#tab-priceFlow"|cat:$quickViewIdPostfix,"bs-target"=>"#tab-priceFlow"|cat:$quickViewIdPostfix
                                            ]
                                            aria=["expanded" => "{if $setActiveClass.priceFlow}true{else}false{/if}",
                                                "controls" => "tab-priceFlow"|cat:$quickViewIdPostfix
                                            ]
                                        }
                                            {lang key='priceFlow' section='productDetails'}
                                        {/cardheader}
                                        {collapse id="tab-priceFlow"|cat:$quickViewIdPostfix
                                            visible=$setActiveClass.priceFlow
                                            data=["parent"=>"#tabAccordion"|cat:$quickViewIdPostfix]
                                            aria=["labelledby"=>"tab-priceFlow-head"|cat:$quickViewIdPostfix]
                                        }
                                            {cardbody}
                                                {block name='productdetails-tabs-include-price-history'}
                                                    {opcMountPoint id='opc_before_tab_price_history'}
                                                    {include file='productdetails/price_history.tpl'}
                                                    {opcMountPoint id='opc_after_tab_price_history'}
                                                {/block}
                                            {/cardbody}
                                        {/collapse}
                                    {/card}
                                {/block}
                            {/if}

                            {if $useAvailabilityNotification}
                                {block name='productdetails-tabs-availability-notification'}
                                    {card no-body=true}
                                        {cardheader id="tab-availabilityNotification-head"|cat:$quickViewIdPostfix
                                            data=["toggle" => "collapse","bs-toggle" => "collapse",
                                                "target"=>"#tab-availabilityNotification"|cat:$quickViewIdPostfix,"bs-target"=>"#tab-availabilityNotification"|cat:$quickViewIdPostfix
                                            ]
                                            aria=["expanded" => "{if $setActiveClass.availabilityNotification}true{else}false{/if}",
                                                "controls" => "tab-availabilityNotification"|cat:$quickViewIdPostfix
                                            ]
                                        }
                                        {lang key='notifyMeWhenProductAvailableAgain'}
                                        {/cardheader}
                                        {collapse id="tab-availabilityNotification"|cat:$quickViewIdPostfix
                                            visible=$setActiveClass.availabilityNotification
                                            data=["parent"=>"#tabAccordion"|cat:$quickViewIdPostfix]
                                            aria=["labelledby"=>"tab-availabilityNotification-head"|cat:$quickViewIdPostfix]
                                        }
                                            {cardbody}
                                                {block name='productdetails-tabs-include-availability-notification-form'}
                                                    {opcMountPoint id='opc_before_tab_availability'}
                                                    {include file='productdetails/availability_notification_form.tpl' position='tab' tplscope='artikeldetails'}
                                                    {opcMountPoint id='opc_after_tab_availability'}
                                                {/block}
                                            {/cardbody}
                                        {/collapse}
                                    {/card}
                                {/block}
                            {/if}

                            {if $useMediaGroup}
                                {block name='productdetails-tabs-media-gorup'}
                                    {foreach $Artikel->getMediaTypes() as $mediaType}
                                        {$cMedienTypId = $mediaType->name|seofy}
                                        {card no-body=true}
                                            {cardheader id="tab-{$cMedienTypId}-head"|cat:$quickViewIdPostfix
                                                data=["toggle" => "collapse","bs-toggle" => "collapse",
                                                    "target"=>"#tab-{$cMedienTypId}"|cat:$quickViewIdPostfix,"bs-target"=>"#tab-{$cMedienTypId}"|cat:$quickViewIdPostfix
                                                ]
                                                aria=["expanded" => "{if $setActiveClass.mediaGroup && $mediaType@first}true{else}false{/if}",
                                                    "controls" => "tab-{$cMedienTypId}"|cat:$quickViewIdPostfix
                                                ]
                                            }
                                                {$mediaType->name}
                                            {/cardheader}
                                            {collapse id="tab-{$cMedienTypId}"|cat:$quickViewIdPostfix
                                                visible=($setActiveClass.mediaGroup && $mediaType@first)
                                                data=["parent"=>"#tabAccordion"|cat:$quickViewIdPostfix]
                                                aria=["labelledby"=>"tab-{$cMedienTypId}-head"|cat:$quickViewIdPostfix]
                                            }
                                                {cardbody}
                                                    {block name='productdetails-tabs-include-mediafile'}
                                                        {include file='productdetails/mediafile.tpl'}
                                                    {/block}
                                                {/cardbody}
                                            {/collapse}
                                        {/card}
                                    {/foreach}
                                {/block}
                            {/if}
                        </div>
                    {/container}
                {/block}
            {/if}
        {/if}
    {/block}
{/block}
