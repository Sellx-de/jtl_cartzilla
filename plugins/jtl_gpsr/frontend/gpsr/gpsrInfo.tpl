{if !empty($gpsrManufacturer) || !empty($gpsrResponsiblePerson)}
    <div class="row gpsr-compliance">
        {if !empty($gpsrManufacturer)}
        <div class="col col-12 col-md-6">
            {include file="string:$gpsrManufacturer"}
        </div>
        {/if}
        {if !empty($gpsrResponsiblePerson)}
        <div class="col col-12 col-md-6">
            {include file="string:$gpsrResponsiblePerson"}
        </div>
        {/if}
    </div>
{/if}
