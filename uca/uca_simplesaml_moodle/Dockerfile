FROM unicon/simplesamlphp:latest 

RUN rm -rf /var/simplesamlphp
COPY ./simplesamlphp/ /var/simplesamlphp/

RUN yum update -y
RUN yum install -y php-mysql nano php-zip php-gd php-intl php-xmlrpc php-soap

RUN rm -rf /var/www/
COPY ./www/ /var/www/

RUN chmod a+rwx -R /var/www
