import os
from instagrapi import Client

# 🔹 Instagram Login Credentials
USERNAME = "dzzle_de"
PASSWORD = "12Danijel08!"
SESSION_FILE = "session.json"
IMAGE_FOLDER = "instagram_images"

# 🔹 Instagram-Client initialisieren
cl = Client()

def login():
    """Login mit Session-Handling"""
    if os.path.exists(SESSION_FILE):
        try:
            cl.load_settings(SESSION_FILE)
            cl.login(USERNAME, PASSWORD)
            print("✅ Session geladen!")
            return
        except Exception as e:
            print(f"⚠️ Fehler beim Laden der Session: {e}, neuer Login erforderlich")

    cl.login(USERNAME, PASSWORD)
    cl.dump_settings(SESSION_FILE)
    print("✅ Login erfolgreich, Session gespeichert!")

# 🔹 Login einmalig ausführen
login()

def get_latest_images(username, amount=20):
    """Holt genau `amount` neue Bilder und speichert sie."""
    try:
        user_id = cl.user_id_from_username(username)

        # 🔹 Ordner für Bilder erstellen, falls nicht vorhanden
        if not os.path.exists(IMAGE_FOLDER):
            os.makedirs(IMAGE_FOLDER)

        # 🔹 Bereits gespeicherte Bilder finden & höchste Nummer bestimmen
        existing_files = sorted(
            [f for f in os.listdir(IMAGE_FOLDER) if f.startswith("image_") and f.endswith(".jpg")],
            key=lambda x: int(x.split("_")[1].split(".")[0])  # Sortiere nach Nummer
        )
        highest_number = int(existing_files[-1].split("_")[1].split(".")[0]) if existing_files else 0

        # 🔹 20 Bilder auf einmal abrufen
        medias = cl.user_medias(user_id, amount)
        saved_images = []

        for media in medias:
            if media.media_type == 1:  # Nur Fotos
                highest_number += 1
                filename = f"image_{highest_number}.jpg"
                image_path = os.path.join(IMAGE_FOLDER, filename)

                # 📸 Download mit `photo_download_by_url`
                cl.photo_download_by_url(media.thumbnail_url, filename, IMAGE_FOLDER)
                print(f"✅ Gespeichert: {image_path}")
                saved_images.append(image_path)

        return saved_images

    except Exception as e:
        print(f"⚠️ Fehler: {e}")
        return []

# 📥 20 neue Bilder abrufen und speichern
get_latest_images("waschguru.de", 20)
