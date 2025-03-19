import os
import requests
from instagrapi import Client

# 🔹 Instagram Login Credentials (aus Plugin-Einstellungen laden!)
USERNAME = "dzzle_de"
PASSWORD = "12Danijel08!"
SESSION_FILE = "session.json"

# 🔹 Instagram-Client initialisieren
cl = Client()
cl.login(USERNAME, PASSWORD)

def get_latest_images(username, amount=5):
    """Holt die letzten `amount` Bilder eines Instagram-Profils."""
    try:
        user_id = cl.user_id_from_username(username)

        # 🔹 Erste Methode: Normaler Abruf
        try:
            medias, end_cursor = cl.user_medias_paginated(user_id, amount)
        except KeyError:
            print("⚠️ Instagram-Fehler! Fallback auf `user_medias_v1()`")
            medias = cl.user_medias_v1(user_id, amount)

        # 🔹 Filtere nur Bilder (media_type=1)
        image_urls = []
        for media in medias:
            if media.media_type == 1:  # Nur Bilder
                image_urls.append(media.thumbnail_url)

        # 🔹 Falls weniger als `amount` Bilder geladen wurden, versuche weitere zu holen
        while len(image_urls) < amount and end_cursor:
            medias, end_cursor = cl.user_medias_paginated(user_id, amount - len(image_urls), end_cursor=end_cursor)
            for media in medias:
                if media.media_type == 1:
                    image_urls.append(media.thumbnail_url)
                if len(image_urls) >= amount:
                    break

        return image_urls

    except Exception as e:
        print(f"⚠️ Fehler: {e}")
        return []

# Beispiel: Bilder von @waschguru.de abrufen
image_urls = get_latest_images("waschguru.de", 5)

# URLs ausgeben
for idx, url in enumerate(image_urls, start=1):
    print(f"🖼️ Bild {idx}: {url}")
