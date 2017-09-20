#!/bin/sh

#Reiniciar configuración del bash
rm ~/.bashrc
cp bashrc.cfg ~/
cd
mv bashrc.cfg .bashrc

#Auto cambio de directorio
echo >> .bashrc
echo shopt -s autocd >> .bashrc

#Agregar los alias personalizados
echo >> .bashrc

echo alias lss=\'ls -1X\' >> .bashrc
echo alias lsa=\'ls -1Sa\' >> .bashrc
echo alias lh=\'ls -lhX\' >> .bashrc
echo alias hc=\'history -c\' >> .bashrc

echo alias gitss=\'git status -s\' >> .bashrc
echo alias gits=\'git status\' >> .bashrc
echo alias gitb=\'git branch\' >> .bashrc
echo alias gitc=\'git commit -m\' >> .bashrc
echo alias gitl=\'git log --oneline\' >> .bashrc
echo alias gitco=\'git checkout\' >> .bashrc

echo alias dockeri=\'docker images\' >> .bashrc
echo alias dockerps=\'docker ps\' >> .bashrc
echo alias dockerpsa=\'docker ps -a\' >> .bashrc

echo alias unit=\'bin/phpunit\' >> .bashrc
echo alias unitcover=\'bin/phpunit --coverage-html coverage\' >> .bashrc
