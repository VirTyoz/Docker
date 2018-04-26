#!/usr/bin/dumb-init /bin/sh

uid=${FLUENT_UID:-991}
gid=${FLUENT_UID:-988}
# check if a old fluent user exists and delete it
cat /etc/passwd | grep fluent
if [ $? -eq 0 ]; then
	deluser fluent
	delgroup fluent
fi

# (re)add the fluent user with $FLUENT_UID
groupadd -g ${gid} fluent
useradd -u ${uid} -o -c "" -m -g fluent fluent
export HOME=/home/fluent

# chown home and data folder
chown -R fluent:fluent /home/fluent
chown -R fluent:fluent /fluentd

exec gosu fluent "$@"
