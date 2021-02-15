# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Dockerfile                                         :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: adelille <adelille@student.42.fr>          +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2021/02/08 19:58:14 by adelille          #+#    #+#              #
#    Updated: 2021/02/15 14:39:49 by user42           ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

FROM debian:buster

# MAINTAINER is deprecated, now use LABEL instead.
LABEL maintainer="adelille@student.42.fr"

# Info about apt-get: https://linux.die.net/man/8/apt-get
# install packages
RUN apt-get -qq update \
&& apt-get install -y nginx wget openssl php-mysql php-fpm php-mbstring php-xml php-cli php php-cgi mariadb-server mariadb-client gettext-base > /dev/null 2>&1 \
&& apt-get -qq clean
# "-qq" and "> /dev/null 2>&1" to discarding message in stdout

ENV auto_index=on

COPY srcs/ .

ENTRYPOINT [ "bash", "container.sh" ]
# CMD bash container.sh

# To get more help with Dockerfile: https://github.com/wsargent/docker-cheat-sheet#dockerfile
