read -t 30 -p "email:" email

echo $email

ssh-keygen -t rsa -C $email


# ssh-keygen -t rsa -b 4096 -C $email



ssh -T git@github.com

#ssh-keygen -t rsa -C "2090727@qq.com"

