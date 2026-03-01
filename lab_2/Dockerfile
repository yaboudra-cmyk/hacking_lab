FROM php:8.2-apache

# Copy your lab into container
COPY . /lab_2

# Symlink to Apache default root
RUN rm -rf /var/www/html && ln -s /lab_2 /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
