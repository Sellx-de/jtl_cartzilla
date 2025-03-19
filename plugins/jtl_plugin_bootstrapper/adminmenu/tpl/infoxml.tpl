<?xml version="1.0" encoding="utf-8"?>
<jtlshopplugin>
    <Name>{$info->name}</Name>
    <Description>{$info->description}</Description>
    <Author>{$info->author}</Author>
    <URL>{$info->url}</URL>
    <PluginID>{$info->pluginID}</PluginID>
    <XMLVersion>{$info->xmlVersion}</XMLVersion>
{if ($info->minShopVersion !== null)}
    <MinShopVersion>{$info->minShopVersion}</MinShopVersion>
{/if}
{if ($info->maxShopVersion !== null)}
    <MaxShopVersion>{$info->maxShopVersion}</MaxShopVersion>
{/if}
{if $info->icon !== null}
    <Icon>{$info->postData['Icon']}</Icon>
{/if}
    <Version>{$info->version}</Version>
    <CreateDate>{$info->date}</CreateDate>
    <Install>
{if $info->flushTags !== null}
        <FlushTags>{$info->flushTags}</FlushTags>
{/if}
{$addEmptyNode = true}
{if ($info->hasSettings || $info->hasCustomLinks)}
        <Adminmenu>
{if $info->hasSettings}
{$addEmptyNode = false}
            <Settingslink sort="1">
                <Name>Einstellungen</Name>
{foreach $info->settings as $setting}
                <Setting type="{$setting['type']}" initialValue="{$setting['initialValue']}" sort="{$setting['sort']}" conf="{$setting['conf']}">
                    <Name>{$setting['Name']}</Name>
                    <Description>{$setting['Description']}</Description>
                    <ValueName>{$setting['ValueName']}</ValueName>
{if $setting['source'] !== null}
                    <OptionsSource>
                        <File>{$setting['source']}</File>
                    </OptionsSource>
{/if}
{if (isset($setting['options']) && ($setting['type'] === 'radio' || $setting['type'] === 'selectbox'))}
{if $setting['type'] === 'selectbox'}
                    <SelectboxOptions>
{else}
                    <RadioOptions>
{/if}
{foreach $setting['options'] as $opt}
                        <Option value="{$opt['value']}" sort="{$opt['sort']}">{$opt['option']}</Option>
{/foreach}
{if ($setting['type'] === 'selectbox')}
                    </SelectboxOptions>
{else}
                </RadioOptions>
{/if}
{/if}
              </Setting>
{/foreach}
            </Settingslink>
{/if}
{if ($info->hasCustomLinks)}
{$addEmptyNode = false}
{foreach $info->adminTabs as $idx => $customLink}
            <Customlink sort="{($idx + 1)}">
                <Name>{$customLink['Name']}</Name>
                <Filename>{$customLink['Filename']}</Filename>
            </Customlink>
{/foreach}
{/if}
        </Adminmenu>
{/if}
{if ($info->hasLangVars)}
{$addEmptyNode = false}
        <Locales>
{foreach $info->langVars as $langVar}
            <Variable>
                <Name>{$langVar['Name']}</Name>
                <Description>{$langVar['Description']}</Description>
                <VariableLocalized iso="GER">{$langVar['VariableLocalized_GER']}</VariableLocalized>
                <VariableLocalized iso="ENG">{$langVar['VariableLocalized_ENG']}</VariableLocalized>
                </Variable>
{/foreach}
        </Locales>
{/if}
{if $info->hasFrontendLinks}
{$addEmptyNode = false}
        <FrontendLink>
{foreach $info->frontendLinks as $link}
            <Link>
{if !empty($link['Filename'])}
                <Filename>{$link['Filename']}</Filename>
{/if}
                <Name>{$link['Name']}</Name>
{if (!empty($link['FullscreenTemplate']))}
                <FullscreenTemplate>{$link['FullscreenTemplate']}</FullscreenTemplate>
{elseif (!empty($link['Template']))}
                <Template>{$link['Template']}</Template>
{/if}
{if (!empty($link['LinkGroup']))}
                <LinkGroup>{$link['LinkGroup']}</LinkGroup>
{/if}
                <VisibleAfterLogin>{$link['VisibleAfterLogin']}</VisibleAfterLogin>
                <PrintButton>{$link['PrintButton']}</PrintButton>
{if (!empty($link['SSL']))}
                <SSL>{$link['SSL']}</SSL>
{/if}
                <LinkLanguage iso="GER">
                    <Seo>{$link['LinkLanguage_Seo']}</Seo>
                    <Name>{$link['LinkLanguage_Name']}</Name>
                    <Title>{$link['LinkLanguage_Title']}</Title>
                    <MetaTitle>{$link['LinkLanguage_MetaTitle']}</MetaTitle>
                    <MetaKeywords>{$link['LinkLanguage_MetaKeywords']}</MetaKeywords>
                    <MetaDescription>{$link['LinkLanguage_MetaDescription']}</MetaDescription>
                </LinkLanguage>
            </Link>
{/foreach}
        </FrontendLink>
{/if}
{if $info->hasMailTemplates}
{$addEmptyNode = false}
        <Emailtemplate>
{foreach $info->mailTemplates as $mailTpl}
            <Template>
                <Name>{$mailTpl['Name']}</Name>
                <Description>{$mailTpl['Description']}</Description>
                <Type>{$mailTpl['Type']}</Type>
                <ModulId>{$mailTpl['ModulId']}</ModulId>
                <Active>{$mailTpl['Active']}</Active>
                <AKZ>{$mailTpl['AKZ']}</AKZ>
                <AGB>{$mailTpl['AGB']}</AGB>
                <WRB>{$mailTpl['WRB']}</WRB>
                <nWRBForm>{$mailTpl['nWRBForm']}</nWRBForm>
                <TemplateLanguage iso="GER">
                    <Subject>{$mailTpl['TemplateLanguage_Subject']}</Subject>
                    <ContentHtml>{$mailTpl['TemplateLanguage_ContentHtml']}</ContentHtml>
                    <ContentText>{$mailTpl['TemplateLanguage_ContentText']}</ContentText>
                </TemplateLanguage>
            </Template>
{/foreach}
        </Emailtemplate>
{/if}
{if $info->hasBoxes}
{$addEmptyNode = false}
        <Boxes>
{foreach $info->boxes as $box}
            <Box>
                <Name>{$box['Name']}</Name>
                <Available>{$box['Available']}</Available>
                <TemplateFile>{$box['TemplateFile']}</TemplateFile>
                </Box>
{/foreach}
        </Boxes>
{/if}
{if $info->hasWidgets}
{$addEmptyNode = false}
        <AdminWidget>
{foreach $info->widgets as $widget}
            <Widget>
                <Title>{$widget['Title']}</Title>
                <Active>{$widget['Active']}</Active>
                <Expanded>{$widget['Expanded']}</Expanded>
                <Class>{$widget['Class']}</Class>
                <Description>{$widget['Description']}</Description>
                <Container>{$widget['Container']}</Container>
                <Pos>1</Pos>
            </Widget>
{/foreach}
        </AdminWidget>
{/if}
{if $info->hasCss}
{$addEmptyNode = false}
        <CSS>
{foreach $info->cssFiles as $css}
            <file>
                <name>{$css['name']}</name>
                <priority>{$css['priority']}</priority>
            </file>
{/foreach}
        </CSS>
{/if}
{if $info->hasJs}
{$addEmptyNode = false}
        <JS>
{foreach $info->jsFiles as $js}
            <file>
                <name>{$js['name']}</name>
                <priority>{$js['priority']}</priority>
                <position>{$js['position']}</position>
            </file>
{/foreach}
        </JS>
{/if}
{if $addEmptyNode === true}
        <empty></empty>
{/if}
    </Install>
</jtlshopplugin>
