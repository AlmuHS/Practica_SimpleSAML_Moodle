FROM mariadb:latest

ENV MARIADB_USER=moodleusr
ENV MARIADB_PASSWORD=pass
ENV MARIADB_DATABASE=moodle
ENV MARIADB_ROOT_PASSWORD=rootpass

# Copy the SQL script from /sql to Docker's entrypoint
ADD sql/ /docker-entrypoint-initdb.d
