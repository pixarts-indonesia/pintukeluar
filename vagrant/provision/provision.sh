#!/bin/bash

# Root folder
echo "cd /app" >> /home/vagrant/.bashrc

# Memperbarui berkas sshd_config
echo "PasswordAuthentication yes"
sudo sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/' /etc/ssh/sshd_config

# Restart SSH untuk menerapkan perubahan
echo "Restart SSHD"
sudo systemctl restart sshd

# Variabel
ENV_FILE="/app/.env"
ENV_EXAMPLE="/app/.env.example"
ROOT_IP=$(echo "$1")

echo "Install project dependencies"
cd /app
composer --no-progress --prefer-dist install
echo "Done Install project dependencies"

if [ ! -f "$ENV_FILE" ]; then
    echo "Create .env"
    cp "$ENV_EXAMPLE" "$ENV_FILE"
    # Generate Key
    echo "Generate Key"
    php /app/artisan key:generate
fi

# Mengubah nilai APP_URL .env
echo "Update .env"
sudo sed -i "s|APP_URL=.*|APP_URL=${ROOT_IP}|" /app/.env
sudo sed -i "s|DB_HOST=.*|DB_HOST=$(echo "$2")|" /app/.env
sudo sed -i "s|MAIL_HOST=.*|MAIL_HOST=$(echo "$2")|" /app/.env


# Get .env variabel
export $(grep -v '^#' "$ENV_FILE" | xargs)

echo "Configure timezone"
timedatectl set-timezone $(echo "$3") --no-ask-password

echo "Change to php8.1"
sudo update-alternatives --set php /usr/bin/php8.1
echo "Done Change to php8.1"

echo "Initializing databases for MySQL!"
mysql -u homestead -psecret -e "CREATE DATABASE IF NOT EXISTS ${DB_DATABASE} DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_unicode_ci;"
mysql -u homestead -psecret -e "CREATE DATABASE IF NOT EXISTS ${DB_DATABASE}_test DEFAULT CHARACTER SET utf8mb4 DEFAULT COLLATE utf8mb4_unicode_ci;"
mysql -u homestead -psecret -e "CREATE USER IF NOT EXISTS '${DB_USERNAME}'@'%' IDENTIFIED BY '${DB_PASSWORD}';"
mysql -u homestead -psecret -e "GRANT ALL PRIVILEGES ON ${DB_DATABASE}.* TO '${DB_USERNAME}'@'%';"
mysql -u homestead -psecret -e "GRANT ALL PRIVILEGES ON ${DB_DATABASE}_test.* TO '${DB_USERNAME}'@'%';"
echo "Done initializing databases for MySQL!"

echo "Installing MailHog"
# Download MailHog binary
wget -qO- https://github.com/mailhog/MailHog/releases/download/v1.0.0/MailHog_linux_amd64 > /usr/local/bin/mailhog

# Set permissions for MailHog binary
chmod +x /usr/local/bin/mailhog

# Run MailHog
nohup mailhog > /dev/null 2>&1 &
echo "MailHog Installed and Running"

if [ ! -f "$ENV_FILE" ]; then
    # Migrate DB
    echo "Migrate DB"
    php /app/artisan migrate:fresh --seed
fi

info "Running Server Port 8000"
sudo -u vagrant nohup php /app/artisan serve --host=0.0.0.0 > /dev/null 2>&1 &
