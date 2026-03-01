FROM php:8.2-apache

# Copy your lab into container
COPY . /lab_3

# Symlink to Apache default root
RUN rm -rf /var/www/html && ln -s /lab_3 /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
