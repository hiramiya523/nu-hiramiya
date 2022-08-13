FROM ubuntu:16.04

RUN apt-get update \
  && apt-get install -y --no-install-recommends \
            # rust インストールに必要
            curl \
            # curlコマンドで認証エラーが出るので
            ca-certificates \
            # buildに利用
            gcc \
            build-essential \
            vim \
            # コンパイラ基板
            llvm \
            # ソフトウェアデバッガ
            lldb \
            make \
            wget \
            git

# どっちだ
# curl --proto '=https' --tlsv1.2 -sSf https://sh.rustup.rs | sh
# RUN curl https://sh.rustup.rs -sSf | sh

# RUN source $HOME/.cargo/env

# 参考
# https://koma.blog/wsl2-ubuntu-rust/

# 〇Hello world
# cargo new my_project
# cd /my_project/src
# cargo run
