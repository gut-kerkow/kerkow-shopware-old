#!/bin/sh

# Define a timestamp function
timestamp() {
  date +"%Y%m%d%H%M%S" # current time
}
RELEASE_STAMP=$(timestamp)
PROJECT_DIR="/home/deploy/shop_kerkow"
SHARED_DIR="${PROJECT_DIR}/shared"
CURRENT_DIR="${PROJECT_DIR}/current"
RELEASES_DIR="${PROJECT_DIR}/releases"
CURRENT_RELEASE_DIR="${PROJECT_DIR}/releases/${RELEASE_STAMP}"
REPOSITORY="git@github.com:fairix/kerkow2.git"
ENV_FILE=".env"
MEDIA_FOLDER="public/media"
THUMBNAIL_FOLDER="public/thumbnail"
LOG_FOLDER="var/log"
JWT_FOLDER="config/jwt"
# Login via SSH
ssh kerkow << EOF
    cd ${RELEASES_DIR} 
    echo "Create directory for new release ${RELEASE_STAMP}"
    mkdir ${RELEASE_STAMP} 
    echo "Deleting old releases"
    #ls -t | sed -e '1,5d' | xargs -d '\n' rm -rf 
    echo "cd ${CURRENT_RELEASE_DIR}" 
    cd ${CURRENT_RELEASE_DIR} 
    echo "Pull Master Branch from ${REPOSITORY}"
    git clone git@github.com:fairix/kerkow2.git .
    echo "Symlinking .env (ln -nsf ${SHARED_DIR}/${ENV_FILE} ${ENV_FILE})"
    ln -nsf ${SHARED_DIR}/${ENV_FILE} ${ENV_FILE}
    echo "Symlinking Media Folder (ln -nsf ${SHARED_DIR}/${MEDIA_FOLDER} ${MEDIA_FOLDER})"
    ln -nsf ${SHARED_DIR}/${MEDIA_FOLDER} ${MEDIA_FOLDER}
    echo "Symlinking Thumbnail Folder (ln -nsf ${SHARED_DIR}/${THUMBNAIL_FOLDER} ${THUMBNAIL_FOLDER})"
    ln -nsf ${SHARED_DIR}/${THUMBNAIL_FOLDER} ${THUMBNAIL_FOLDER}
    echo "Symlinking LOG Folder (ln -nsf ${SHARED_DIR}/${LOG_FOLDER} ${LOG_FOLDER})"
    ln -nsf ${SHARED_DIR}/${LOG_FOLDER} ${LOG_FOLDER}
    echo "Symlinking JWT Folder (ln -nsf ${SHARED_DIR}/${JWT_FOLDER} ${JWT_FOLDER})"
    ln -nsf ${SHARED_DIR}/${JWT_FOLDER} ${JWT_FOLDER}
    echo "Compile Theme"
    bin/console theme:compile
    cd ${PROJECT_DIR}
    echo "Symlinking current Release: (ln -nsf ${CURRENT_RELEASE_DIR} ${CURRENT_DIR})"
    ln -nsf ${CURRENT_RELEASE_DIR} ${CURRENT_DIR}
EOF