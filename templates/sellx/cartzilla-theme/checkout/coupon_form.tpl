{block name='checkout-coupon-form'}
    {if $KuponMoeglich == 1}
        <form method="post" action="{get_static_route id='bestellvorgang.php'}" class="needs-validation" novalidate>
            {block name='checkout-coupon-form-form-content'}
                <input type="hidden" name="pruefekupon" value="1">
                <div class="mb-3">
                    {block name='checkout-coupon-form-desc'}
                        <p class="fs-sm">{lang key='couponFormDesc' section='checkout'}</p>
                    {/block}
                    
                    {block name='checkout-coupon-form-btn'}
                        <div class="input-group">
                            <input type="text"
                                class="form-control"
                                name="Kuponcode"
                                maxlength="32"
                                value="{if !empty($Kuponcode)}{$Kuponcode}{/if}"
                                id="kupon"
                                placeholder="{lang key='couponCodePlaceholder' section='checkout'}"
                                aria-label="{lang key='couponCode' section='account data'}"
                                required>
                            <button type="submit" class="btn btn-outline-primary">{lang key='couponSubmit' section='checkout'}</button>
                            <div class="invalid-feedback">{lang key='fillOut'}</div>
                        </div>
                    {/block}
                </div>
            {/block}
        </form>
    {/if}
{/block}
