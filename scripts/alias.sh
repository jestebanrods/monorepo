#!/bin/sh

#Reset Bash Config
rm ~/.bashrc
cp bashrc.cfg ~/
cp bashprofile.cfg ~/
cd
mv bashrc.cfg .bashrc
mv bashprofile.cfg .bashprofile

#Change Directory
echo >> .bashrc
echo shopt -s autocd >> .bashrc

#Add Alias
echo >> .bashrc

echo alias lss=\'ls -1X\' >> .bashrc
echo alias lsa=\'ls -1SXa\' >> .bashrc
echo alias lh=\'ls -lhX\' >> .bashrc
echo alias hc=\'history -c\' >> .bashrc

echo alias gits=\'git status\' >> .bashrc
echo alias gitb=\'git branch\' >> .bashrc
echo alias gitl=\'git log --oneline\' >> .bashrc
echo alias gitco=\'git checkout\' >> .bashrc

echo alias unit=\'bin/phpunit\' >> .bashrc
echo alias unitcover=\'bin/phpunit --coverage-html coverage\' >> .bashrc

