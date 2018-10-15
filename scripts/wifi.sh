#!/bin/bash

sudo apt-get install build-essential git
git clone https://github.com/lwfinger/rtlwifi_new/
cd rtlwifi_new
make
sudo make install

sudo modprobe -r rtl8723be
sudo modprobe rtl8723be

echo "options rtl8723be fwlps=0" | sudo tee /etc/modprobe.d/rtl8723be.conf

