OPC.registerPortletClass(
    "Plugin\\portlets_sellx\\Portlets\\InstagramFeed\\InstagramFeed",
    {
        init: function () {
            console.log("📸 Instagram Feed Portlet wurde initialisiert!");
        },
        onSave: function () {
            console.log("💾 Instagram Feed Einstellungen gespeichert.");
        }
    }
);
