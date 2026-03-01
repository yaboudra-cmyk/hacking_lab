FROM php:8.2-apache

# Copy your lab into container
COPY . /lab_1

# Ensure uploads folder exists and writable
RUN mkdir -p /lab_1/uploads && chmod -R 777 /lab_1/uploads

# Symlink to Apache default root
RUN rm -rf /var/www/html && ln -s /lab_1 /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
