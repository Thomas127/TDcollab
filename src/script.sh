if [[ -d "./src" && -d "./site" ]]; then
    echo "Tout est ok."
    exit 0

else
    echo "Le fichier n'existe pas."
    exit 1
fi