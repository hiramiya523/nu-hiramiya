FROM ubuntu:22.10
RUN apt-get update \
    && apt-get install -y --no-install-recommends \
        apache2 \
        vim \
        less \
        sudo \
        # lynx:Linux上で動作するブラウザ。apacheのステータス確認に必要。
        lynx \
    && apt-get clean \
    && rm -rf /var/lib/apt/lists/*

# RUN sudo echo ServerName $HOSTNAME > /etc/apache2/conf-available/fqdn.conf \
#     && sudo a2enconf fqdn


# CMD ["apachectl", "start"]
# ENTRYPOINT [ "apachectl", "start" ]

ENTRYPOINT ["/usr/sbin/apache2ctl", "start"]
WORKDIR /home