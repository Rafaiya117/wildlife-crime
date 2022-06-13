#!/bin/bash
GIT=git@bitbucket.org:talgol/wildlife-crime.git
SERVER=wcs.softlh.com

scp remote.sh $SERVER:/home/nafis/tmp_code/
ssh $SERVER '/home/nafis/tmp_code/remote.sh'
