{block name='checkout-inc-steps'}
    {assign var=step1_active value=($bestellschritt[1] == 1 || $bestellschritt[2] == 1)}
    {assign var=step2_active value=($bestellschritt[3] == 1 || $bestellschritt[4] == 1)}
    {assign var=step3_active value=($bestellschritt[5] == 1)}
    {if $bestellschritt[1] != 3}
        <div class="steps steps-light pb-5">
            <div class="step-item {if $step1_active}active current{elseif $step2_active || $step3_active}active{/if}">
                {block name='checkout-inc-steps-first'}
                    <a class="step-item-link" href="{get_static_route id='bestellvorgang.php'}?editRechnungsadresse=1">
                        <div class="step-item-icon">
                            <i class="ci-user-circle"></i>
                        </div>
                        <div class="step-item-text">
                            {lang section='account data' key='billingAndDeliveryAddress'}
                        </div>
                    </a>
                {/block}
            </div>
            
            <div class="step-item {if $step2_active}active current{elseif $step3_active}active{/if}">
                {block name='checkout-inc-steps-second'}
                    <a class="step-item-link {if !($step2_active || $step3_active)}disabled{/if}" href="{get_static_route id='bestellvorgang.php'}?editVersandart=1">
                        <div class="step-item-icon">
                            <i class="ci-package"></i>
                        </div>
                        <div class="step-item-text">
                            {lang section='account data' key='shippingAndPaymentOptions'}
                        </div>
                    </a>
                {/block}
            </div>
            
            <div class="step-item {if $step3_active}active current{/if}">
                {block name='checkout-inc-steps-third'}
                    <div class="step-item-link {if !$step3_active}disabled{/if}">
                        <div class="step-item-icon">
                            <i class="ci-card"></i>
                        </div>
                        <div class="step-item-text">
                            {lang section='checkout' key='summary'}
                        </div>
                    </div>
                {/block}
            </div>
        </div>
    {/if}
{/block}
