pipeline {

    agent any

    stages {

        stage('Checkout') {
            steps {
                checkout scm
            }
        }

        stage('Verify Ansible') {
            steps {
                sh 'ansible --version'
                sh 'ssh -V'
            }
        }

        stage('Ansible Syntax Check') {
            steps {
                sh '''
                    ansible-playbook \
                    -i ansible/inventory/production.ini \
                    ansible/playbooks/deploy.yml \
                    --syntax-check
                '''
            }
        }

        stage('Deploy to VPS') {
            steps {
                sh '''
                    ansible-playbook \
                    -i ansible/inventory/production.ini \
                    ansible/playbooks/deploy.yml
                '''
            }
        }

    }

    post {
        success {
            echo 'DEPLOYMENT BERHASIL 🚀'
        }

        failure {
            echo 'DEPLOYMENT GAGAL ❌'
        }
    }
}