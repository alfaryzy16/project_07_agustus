FROM jenkins/jenkins:lts-jdk17

USER root

# Install Ansible dan SSH client
RUN apt-get update \
    && apt-get install -y \
        ansible \
        openssh-client \
        git \
        curl \
    && rm -rf /var/lib/apt/lists/*

# Pastikan Jenkins bisa menjalankan Ansible
RUN ansible --version \
    && ssh -V \
    && git --version

USER jenkins
