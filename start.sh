#!/bin/bash

# Lưu GOOGLE_CREDENTIALS_JSON ra file tạm
echo "$GOOGLE_CREDENTIALS_JSON" > /tmp/service-account.json

# Chạy Cloud SQL Proxy
cloud-sql-proxy --credentials-file=/tmp/service-account.json "$INSTANCE_CONNECTION_NAME" &

# Đợi proxy khởi động
sleep 5

# Chạy migrate nếu cần
php artisan migrate --force

# Khởi động Laravel server
php artisan serve --host=0.0.0.0 --port=8080
