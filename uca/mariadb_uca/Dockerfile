FROM bitnami/mariadb

## Modify the ports used by MariaDB by default
# It is also possible to change these environment variables at runtime
# Copy the SQL script from /sql to Docker's entrypoint
ADD sql/ /docker-entrypoint-initdb.d

ENV MARIADB_PORT_NUMBER=3307
EXPOSE 3307
