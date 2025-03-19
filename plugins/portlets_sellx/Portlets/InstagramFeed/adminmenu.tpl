{block name="content"}
    <div class="card">
        <div class="card-header">
            <h3>📸 Instagram Einstellungen</h3>
        </div>
        <div class="card-body">
            <form method="post" action="{$adminURL}?plugin=portlets_sellx">
                <input type="hidden" name="action" value="save_settings">
                {csrf_token}
                
                <div class="form-group">
                    <label for="instagram_username">Instagram Benutzername:</label>
                    <input type="text" id="instagram_username" name="settings[instagram_username]" 
                           class="form-control" value="{$settings.instagram_username|escape}">
                </div>

                <div class="form-group">
                    <label for="instagram_password">Instagram Passwort:</label>
                    <input type="password" id="instagram_password" name="settings[instagram_password]" 
                           class="form-control" value="{$settings.instagram_password|escape}">
                </div>

                <div class="form-group">
                    <label for="instagram_image_count">Anzahl der Bilder:</label>
                    <input type="number" id="instagram_image_count" name="settings[instagram_image_count]" 
                           class="form-control" value="{$settings.instagram_image_count|escape}" min="1" max="10">
                </div>

                <button type="submit" class="btn btn-primary">💾 Speichern</button>
            </form>
        </div>
    </div>
{/block}
