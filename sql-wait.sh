#!/usr/bin/env bash
until docker exec travistest_db_1 mysql -uwordpress -pwordpress wordpress -e "SELECT 1" > /dev/null; do
>&2 echo "MySQL localhost:3306 for user wordpress is unavailable - sleeping"
sleep 1
done
>&2 echo "MySQL localhost:3306 is up"