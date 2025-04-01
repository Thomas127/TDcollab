if [[ -d "./src" && -d "./site" ]]; then
    echo "Tout est ok."
else
    echo "Le fichier n'existe pas."
    exit 1
fi

# Vérification des fichiers dans le dossier "site"
invalid_files=$(find ./site -type f ! -name "*.img" ! -name "*.css" ! -name "*.js")

if [[ -z "$invalid_files" ]]; then
    echo "Le dossier 'site' contient uniquement des fichiers img, css et js."
    exit 0
else
    echo "Erreur : Le dossier 'site' contient des fichiers non autorisés :"
    echo "$invalid_files"
    exit 1
fi