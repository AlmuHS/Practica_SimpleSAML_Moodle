FROM unicon/simplesamlphp:latest 

RUN rm -rf /var/simplesamlphp
COPY ./simplesamlphp/ /var/simplesamlphp/

RUN yum update -y
RUN yum install -y php-mysql
