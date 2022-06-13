#!/bin/bash
GIT='git@bitbucket.org:talgol/wildlife-crime.git'
location=/www/wcs.softlh.com/wildlife-crime

mkdir /tmp/repo_copy/
cd /tmp/repo_copy/
git clone $GIT


rm $location -rf 
mkdir $location

cp wildlife-crime/* $location -r

cd ~
rm /tmp/repo_copy/ -rf

#echo $GIT
