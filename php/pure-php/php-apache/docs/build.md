# WSL Ubuntu に Javaインストール
apt update
apt search openjdk | grep 11

sudo -y apt install openjdk-11-jdk

java --version


```
export JAVA_HOME=$(readlink -f /usr/bin/javac | sed "s:/bin/javac::")
export PATT=$PATH:$JAVA_HOME/bin
```


apt info graphviz 
apt install -y graphviz
which dot
dot -V


文字化け
sudo apt install plantuml
 plantuml -printfonts | grep JP
 sudo apt install fonts-noto-cjk
