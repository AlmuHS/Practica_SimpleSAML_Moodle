FROM mariadb:latest

## Modify the ports used by MariaDB by default
# It is also possible to change these environment variables at runtime
# Copy the SQL script from /sql to Docker's entrypoint

ENV MARIADB_USER=moodleusr
ENV MARIADB_PASSWORD=pass
ENV MARIADB_DATABASE=moodle
ENV MARIADB_ROOT_PASSWORD=rootpass

ADD sql/ /docker-entrypoint-initdb.d

ENV MARIADB_PORT_NUMBER=3306
EXPOSE 3306
