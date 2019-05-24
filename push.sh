git add .

read -t 30 -p "Please press commit:" commit
echo -e "\n"
#echo "用户名为:$name"


git commit -m "update by shao$commit"


git push -u origin master


