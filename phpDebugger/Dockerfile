FROM php:8.4-apache
#INSTALACIÓN DE XDEBUG
RUN apt-get update \
	&& pecl install xdebug \
	&& docker-php-ext-enable xdebug 

#CONFIGURACIÓN DE ARCHIVO DE CONFIGURACIÓN DE XDEBUG
RUN echo "zend_extension=$(find /usr/local/lib/php/extensions/ -name xdebug.so | head -n 1)" > /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.start_with_request=yes" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_host=172.17.0.1" >> /usr/local/etc/php/conf.d/xdebug.ini \
    && echo "xdebug.client_port=9003" >> /usr/local/etc/php/conf.d/xdebug.ini \
	
