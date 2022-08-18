FROM debian:buster
RUN apt-get update && apt-get install apache2 php7.3 php7.3-mysql -y
EXPOSE 80
ENTRYPOINT ["/usr/sbin/apache2ctl"]
CMD ["-D", "FOREGROUND"]
