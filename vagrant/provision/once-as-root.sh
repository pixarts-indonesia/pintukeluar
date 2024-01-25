#!/bin/bash

# Variabel
ENV_FILE="/app/.env"
ENV_EXAMPLE="/app/.env.example"

# Engine configuration
echo "Configure timezone"
timedatectl set-timezone $(echo "$1") --no-ask-password
echo "Done!"

echo "Enabling site configuration"
ln -s /app/vagrant/nginx/default.conf /etc/nginx/default.conf
ln -s /app/vagrant/nginx/app.conf /etc/nginx/sites-enabled/app.conf
echo "Done!"
# End engine configuration

# App configuration
echo "Install project dependencies"
cd /app
composer --no-progress --prefer-dist install
echo "Done!"

if [ ! -f "$ENV_FILE" ]; then
    echo "Create .env"
    cp "$ENV_EXAMPLE" "$ENV_FILE"
    echo "Done!"
fi

export $(grep -v '^#' "$ENV_FILE" | xargs)

echo "Generate Key"
php /app/artisan key:generate
echo "Done!"

echo "Update .env"
sudo sed -i "s|APP_URL=.*|APP_URL=http://$(echo "$3")|" "$ENV_FILE"
if grep -q "APP_URL_API" "$ENV_FILE"; then
    echo "APP_URL_API entry already exists, updating..."
    sudo sed -i "s|APP_URL_API=.*|APP_URL_API=http://$(echo "$5")|" "$ENV_FILE"
else
    echo "APP_URL_API entry does not exist, adding..."
    sed -i "/^APP_URL=/a APP_URL_API=http://$(echo "$5")" "$ENV_FILE"
fi
if grep -q "APP_URL_BACKEND" "$ENV_FILE"; then
    echo "APP_URL_BACKEND entry already exists, updating..."
    sudo sed -i "s|APP_URL_BACKEND=.*|APP_URL_BACKEND=http://$(echo "$4")|" "$ENV_FILE"
else
    echo "APP_URL_BACKEND entry does not exist, adding..."
    sed -i "/^APP_URL=/a APP_URL_BACKEND=http://$(echo "$4")" "$ENV_FILE"
fi
sudo sed -i "s|DB_DATABASE=.*|DB_DATABASE=$(echo "$2")|" "$ENV_FILE"
sudo sed -i "s|DB_USERNAME=.*|DB_USERNAME=$(echo "$2")|" "$ENV_FILE"
sudo sed -i "s|DB_PASSWORD=.*|DB_PASSWORD=$(echo "$2")|" "$ENV_FILE"
sudo sed -i "s|MAIL_HOST=.*|MAIL_HOST=$(echo "$3")|" "$ENV_FILE"
service mysql restart
echo "Done!"

echo "Change to php8.1"
sudo update-alternatives --set php /usr/bin/php8.1
echo "Done Change to php8.1!"

echo "Initializing databases for MySQL!"
mysql -u homestead -psecret -e "CREATE DATABASE IF NOT EXISTS ${DB_DATABASE} DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_unicode_ci;"
mysql -u homestead -psecret -e "CREATE DATABASE IF NOT EXISTS ${DB_DATABASE}_test DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_unicode_ci;"
mysql -u homestead -psecret -e "CREATE USER IF NOT EXISTS '${DB_USERNAME}'@'%' IDENTIFIED BY '${DB_PASSWORD}';"
mysql -u homestead -psecret -e "GRANT ALL PRIVILEGES ON ${DB_DATABASE}.* TO '${DB_USERNAME}'@'%';"
mysql -u homestead -psecret -e "GRANT ALL PRIVILEGES ON ${DB_DATABASE}_test.* TO '${DB_USERNAME}'@'%';"
service mysql restart
echo "Done!"

echo "Migrate DB"
php /app/artisan migrate --seed
echo "Done!"
#End app configuration
