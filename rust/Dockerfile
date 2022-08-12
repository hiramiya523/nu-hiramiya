FROM ubuntu:16.04

RUN apt-get update \
  && apt-get install -y --no-install-recommends \
            # rust インストールに必要
            curl \
            # buildに利用
            gcc \
            build-essential \
            vim \
            llvm \
            lldb \
            make \
            wget \
            git
RUN curl https://sh.rustup.rs -sSf | sh

RUN source $HOME/.cargo/env

# 参考
# https://koma.blog/wsl2-ubuntu-rust/
