#!/bin/bash

source /app/vagrant/provision/common.sh

# Root folder
echo "cd /app" >> /home/vagrant/.bashrc

# Memperbarui berkas sshd_config
echo "PasswordAuthentication yes"
sudo sed -i 's/PasswordAuthentication no/PasswordAuthentication yes/' /etc/ssh/sshd_config

# Restart SSH untuk menerapkan perubahan
echo "Restart SSHD"
sudo systemctl restart sshd
