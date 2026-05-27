pipeline {
    agent any

    stages {
        stage('Checkout') {
            steps {
                echo '== Descargando codigo desde GitHub =='
                checkout scm
            }
        }

        stage('Build - Instalar dependencias') {
            steps {
                echo '== Instalando dependencias con Composer =='
                sh 'composer install --no-interaction --prefer-dist --optimize-autoloader'
            }
        }

        stage('Preparar entorno') {
            steps {
                echo '== Configurando entorno de Laravel =='
                sh 'cp .env.example .env'
                sh 'php artisan key:generate'
            }
        }

        stage('Test - Ejecutar pruebas') {
            steps {
                echo '== Corriendo pruebas con PHPUnit =='
                sh 'php artisan test'
            }
        }
    }

    post {
        success {
            echo '== PIPELINE EXITOSO: todas las pruebas pasaron =='
        }
        failure {
            echo '== PIPELINE FALLIDO: revisa los errores =='
        }
    }
}
