#git config --global user.name "shaoliang1980" 

#git config --global user.email "2090727@qq.com" 

#git config --global user.name "shaoyiping" 

#git config --global user.email "15953652221@163.com" 

git init

read -t 30  -p "Press Github username:" name

git config --global user.name $name


read -t 30  -p "Press Github email:" email

git config --global user.email $email


read -t 30 -p "Please press remote git addr:" remotename

echo -e $remotename

git remote add origin $remotename


git config --global credential.helper store





# git config --list


