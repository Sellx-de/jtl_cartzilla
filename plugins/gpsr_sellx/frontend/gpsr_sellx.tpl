{if isset($gpsrManufacturerData)}
    <div class="manufacturer-info">
        <h3>Hersteller-Informationen</h3>
        <p><strong>Name:</strong> {$gpsrManufacturerData.gpsr_manufacturer_name}</p>
        <p><strong>Straße:</strong> {$gpsrManufacturerData.gpsr_manufacturer_street} {$gpsrManufacturerData.gpsr_manufacturer_housenumber}</p>
        <p><strong>Stadt:</strong> {$gpsrManufacturerData.gpsr_manufacturer_postalcode} {$gpsrManufacturerData.gpsr_manufacturer_city}</p>
        <p><strong>Land:</strong> {$gpsrManufacturerData.gpsr_manufacturer_country}</p>
        <p><strong>Bundesland:</strong> {$gpsrManufacturerData.gpsr_manufacturer_state}</p>
        <p><strong>Email:</strong> <a href="mailto:{$gpsrManufacturerData.gpsr_manufacturer_email}">{$gpsrManufacturerData.gpsr_manufacturer_email}</a></p>
        <p><strong>Homepage:</strong> <a href="{$gpsrManufacturerData.gpsr_manufacturer_homepage}" target="_blank">Zur Webseite</a></p>
    </div>
{/if}
