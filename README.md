# MyApp Inc42
# Multi-Service Application with Docker Compose

This repository contains a multi-service application consisting of a Go backend, a Next.js frontend, and a WordPress application. The services are orchestrated using Docker Compose.

## Prerequisites

- [Docker](https://www.docker.com/get-started)
- [Docker Compose](https://docs.docker.com/compose/install/)

## Project Structure

```plaintext
.
├── go-backend
│   ├── Dockerfile
│   └── ...
├── nextjs-frontend
│   ├── Dockerfile
│   └── ...
├── wordpress
│   ├── Dockerfile
│   └── ...
└── docker-compose.yml
```

# Instructions to Run
Clone the repository
```
git clone <repository-url>
cd <repository-directory>
```

Navigate to the project root
Ensure you are in the directory containing the docker-compose.yml file.

## Build and start the services
```
docker-compose up --build
```
This command will build the Docker images for the Go backend, Next.js frontend, and WordPress application, and start all the services.

## Access the applications
Go Backend: Open your browser and navigate to http://localhost:8080
Next.js 

Frontend: Open your browser and navigate to http://localhost:3000

WordPress: Open your browser and navigate to http://localhost

# Stopping the Services
To stop the services, press Ctrl+C in the terminal where the services are running, or run the following command in another terminal:

```
docker-compose down
```