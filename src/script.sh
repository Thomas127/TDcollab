if [[ -d "./src" && -d "./site" && -d "./tests"]]; then
    echo "Racine ok"    #!/bin/bash
    
    # Vérification des fichiers dans "img"
    invalid_site=$(find ./site -mindepth 1 -maxdepth 1 ! -type d ! \( -name "*.html" -o -name "*.php" \))
    if [[ -n "$invalid_site" ]]; then
        echo "Erreur : Le dossier 'site' contient des fichiers non autorisés :"
        echo "$invalid_site"
        exit 1
    else
        echo "Le dossier 'site' contient uniquement des fichiers .html et .php."
        exit 0
    fi

    # Vérification de l'existence des dossiers "src" et "site"
    if [[ -d "./site/js" && -d "./site/css" && -d "./site/img" ]]; then
        echo "Dossiers js, css et img ok"
        # Vérification des fichiers dans "js"
        invalid_js=$(find ./site/js -type f ! -name "*.js")
        if [[ -n "$invalid_js" ]]; then
            echo "Erreur : Le dossier 'js' contient des fichiers non autorisés :"
            echo "$invalid_js"
            exit 1
        else
            echo "Le dossier 'js' contient uniquement des fichiers .js."
            exit 0
        fi

        # Vérification des fichiers dans "css"
        invalid_css=$(find ./site/css -type f ! -name "*.css")
        if [[ -n "$invalid_css" ]]; then
            echo "Erreur : Le dossier 'css' contient des fichiers non autorisés :"
            echo "$invalid_css"
            exit 1
        else
            echo "Le dossier 'css' contient uniquement des fichiers .css."
            exit 0
        fi

        # Vérification des fichiers dans "img"
        invalid_img=$(find ./site/img -type f ! \( -name "*.png" -o -name "*.jpg" \))
        if [[ -n "$invalid_img" ]]; then
            echo "Erreur : Le dossier 'img' contient des fichiers non autorisés :"
            echo "$invalid_img"
            exit 1
        else
            echo "Le dossier 'img' contient uniquement des fichiers .png et .jpg."
            exit 0
        fi

    else
        echo "Les dossiers js, css et img n'existent pas."
        exit 1
    fi
else
    echo "Le fichier n'existe pas."
    exit 1
fi

