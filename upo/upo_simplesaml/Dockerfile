FROM unicon/simplesamlphp:latest 

RUN rm -rf /var/simplesamlphp
COPY ./simplesamlphp/ /var/simplesamlphp/

RUN yum install -y php-mysql nano
