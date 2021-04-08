#!/bin/sh

stage=$1

if [ ! -n "$stage" ]
then
  stage="production"
fi

if [ "$stage" = "production" ]; then
    FOLDER="kerkow"
    BRANCH="master"
else
    FOLDER="staging"
    BRANCH="staging"
fi

# Define a timestamp function
timestamp() {
  date +"%Y%m%d%H%M%S" # current time
}
RELEASE_STAMP=$(timestamp)
PROJECT_DIR="/home/deploy/${FOLDER}"
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
ssh sw6_kerkow << EOF
    cd ${RELEASES_DIR} 
    echo "Create directory for new release ${RELEASE_STAMP}"
    mkdir ${RELEASE_STAMP} 
    echo "cd ${CURRENT_RELEASE_DIR}" 
    cd ${CURRENT_RELEASE_DIR} 
    echo "Pull Master Branch from ${REPOSITORY}"
    git clone -branch ${BRANCH} git@github.com:fairix/kerkow2.git .
    echo "Symlinking .env (ln -nsf ${SHARED_DIR}/${ENV_FILE} ${ENV_FILE})"
    ln -nsf ${SHARED_DIR}/${ENV_FILE} ${ENV_FILE}
    echo "Symlinking Media Folder (ln -nsf ${SHARED_DIR}/${MEDIA_FOLDER} ${MEDIA_FOLDER})"
    ln -nsf ${SHARED_DIR}/${MEDIA_FOLDER} ${MEDIA_FOLDER}
    echo "Symlinking Thumbnail Folder (ln -nsf ${SHARED_DIR}/${THUMBNAIL_FOLDER} ${THUMBNAIL_FOLDER})"
    ln -nsf ${SHARED_DIR}/${THUMBNAIL_FOLDER} ${THUMBNAIL_FOLDER}
    echo "Symlinking LOG Folder (ln -nsf ${SHARED_DIR}/${LOG_FOLDER} ${LOG_FOLDER})"
    ln -nsf ${SHARED_DIR}/${LOG_FOLDER} ${LOG_FOLDER}
    echo "Build"
    bin/build-js.sh
    echo "Set Permissions sudo chmod 0777 -R ${CURRENT_RELEASE_DIR}"
    chmod 0777 -R ${CURRENT_RELEASE_DIR}
    bin/console theme:compile
    bin/console cache:clear
    echo "Create JWT Keys Folder"
    mkdir ${JWT_FOLDER}
    echo "Create JWT Keys"
    bin/console system:generate-jwt-secret
    cd ${PROJECT_DIR}
    echo "Symlinking current Release: (ln -nsf ${CURRENT_RELEASE_DIR} ${CURRENT_DIR})"
    ln -nsf ${CURRENT_RELEASE_DIR} ${CURRENT_DIR}
    echo "Set Permissions sudo chmod 0777 -R ${CURRENT_DIR}"
    chmod 0777 -R ${CURRENT_DIR}
    echo "Set Permissions for JWT Keys"
    setfacl -m u:www-data:r ${CURRENT_RELEASE_DIR}/${JWT_FOLDER}/public.pem
    #chmod 600 ${CURRENT_RELEASE_DIR}/${JWT_FOLDER}/public.pem
    setfacl -m u:www-data:r ${CURRENT_RELEASE_DIR}/${JWT_FOLDER}/private.pem
    #chmod 600 ${CURRENT_RELEASE_DIR}/${JWT_FOLDER}/private.pem
    
EOF