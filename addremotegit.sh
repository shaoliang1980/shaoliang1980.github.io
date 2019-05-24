read -t 30 -p "Please press remote git addr:" remotename

echo -e $remotename

git remote add origin $remotename


git config --global credential.helper store


