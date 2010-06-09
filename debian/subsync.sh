#!/bin/bash

cd $1;
ver=$(svn st -v --depth empty ../../$1 | perl -p -e '/\d+\s+(\d+)/;$_="$1"')
for j in *; do
	k="../../$1/config/$j";
	if [ -f "$k.dist" ]; then
		svn diff -c$ver "$k.dist" | patch --forward --no-backup-if-mismatch --global-reject-file=rejectfile $j
	elif [ -f "$k" ]; then
		svn diff -c$ver "$k" | patch --forward --no-backup-if-mismatch --global-reject-file=rejectfile $j
	fi
done

