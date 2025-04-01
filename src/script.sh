if [[ -d "./src" && -d "./test" ]]; then
    echo "Directories exist."
    exit 0
else
    echo "Directories do not exist."
    exit 1
fi