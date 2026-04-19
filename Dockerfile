# Use an official PHP image with Apache built-in
FROM php:8.2-apache

# Copy your PHP code into the container's web directory
COPY . /var/www/html/

# Expose port 80 so Render can route traffic to it
EXPOSE 80
