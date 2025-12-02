pipeline {
    agent any

    options {
        buildDiscarder(logRotator(numToKeepStr: '10'))
        ansiColor('xterm')
    }

    stages {

        stage('Clone Repository') {
            steps {
                echo 'Cloning repo...'
                git branch: 'main', url: 'https://github.com/YonaAmalia/KSI2025.git'
            }
        }

        stage('List Files') {
            steps {
                echo 'Listing files in repo:'
                powershell 'dir'
            }
        }

        stage('Run PHP Built-in Server') {
            steps {
                script {
                    echo 'Starting PHP server at http://localhost:8000'
                    // Jalankan PHP server di background
                    powershell 'Start-Process php -ArgumentList "-S localhost:8000 -t ." -NoNewWindow'
                    echo 'PHP server is running...'
                }
            }
        }
    }

    post {
        success {
            echo '✅ Build sukses!'
        }
        failure {
            echo '❌ Build gagal!'
        }
    }
}

