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

# CI/CD Pipeline Structure for Multi-Project Repository

This repository contains multiple projects: a Go backend, a WordPress site, and a Next.js application. Each project has its own CI/CD pipeline using GitHub Actions to build and push Docker images to Docker Hub.

## Repository Structure
```
.
├── go-backend
│   ├── Dockerfile
│   ├── go.mod
│   ├── main.go
│   └── ...
├── wordpress
│   ├── Dockerfile
│   ├── composer.json
│   ├── phpcs.xml
│   └── ...
├── nextjs
│   ├── Dockerfile
│   ├── package.json
│   ├── ...
└── .github
    └── workflows
        ├── build-go.yml
        ├── build-wordpress.yml
        └── build-nextjs.yml
```

## GitHub Actions Workflows

### Go Backend

- **Workflow File:** `.github/workflows/build-go.yml`
- **Tasks:**
  - Set up Go environment
  - Install dependencies
  - Run linting
  - Build and push Docker image

### WordPress

- **Workflow File:** `.github/workflows/build-wordpress.yml`
- **Tasks:**
  - Set up PHP environment
  - Install Composer dependencies
  - Run PHPCS
  - Build and push Docker image

### Next.js

- **Workflow File:** `.github/workflows/build-next.yml`
- **Tasks:**
  - Set up Node.js environment
  - Install npm dependencies
  - Run ESLint
  - Build and push Docker image

## Setting Up Docker Hub Secrets

1. Go to `Settings` > `Secrets` > `Actions` in your GitHub repository.
2. Add secrets:
   - `DOCKER_HUB_USERNAME`
   - `DOCKER_HUB_PASSWORD`

## Linting and Code Standards

- **Go:** Uses GolangCI-Lint.
- **WordPress:** Uses PHPCS with WordPress Coding Standards.
- **Next.js:** Uses ESLint and Prettier.

