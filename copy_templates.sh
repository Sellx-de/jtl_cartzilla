#!/bin/bash

# Dieses Skript kopiert alle .tpl-Dateien aus templates/sellx in das neue Cartzilla-Theme-Verzeichnis
# und behält dabei die Verzeichnisstruktur bei

SOURCE_DIR="templates/sellx"
TARGET_DIR="templates/sellx/cartzilla-theme"

# Erstelle eine Liste aller .tpl-Dateien im Quellverzeichnis
find "$SOURCE_DIR" -name "*.tpl" | grep -v "cartzilla-theme" | while read -r file; do
    # Bestimme den relativen Pfad zur Quelldatei
    rel_path="${file#$SOURCE_DIR/}"
    
    # Erstelle das Zielverzeichnis, falls es nicht existiert
    target_dir="$TARGET_DIR/$(dirname "$rel_path")"
    mkdir -p "$target_dir"
    
    # Kopiere die Datei, wenn sie noch nicht im Zielverzeichnis existiert
    if [ ! -f "$TARGET_DIR/$rel_path" ]; then
        cp "$file" "$TARGET_DIR/$rel_path"
        echo "Kopiert: $rel_path"
    fi
done

echo "Kopiervorgang abgeschlossen."