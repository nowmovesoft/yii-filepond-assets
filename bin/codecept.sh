#!/bin/bash

docker-compose --file ../docker-compose.yml run --rm codecept $*
docker-compose --file ../docker-compose.yml down
