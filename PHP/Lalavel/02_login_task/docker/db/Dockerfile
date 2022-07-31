FROM mysql:8.0

COPY ./my.cnf /etc/mysql/conf.d/my.cnf
ENV TZ Asia/Tokyo
RUN echo -e "\n alias ll='ls -la --color\n'" >> /root/.bashrc