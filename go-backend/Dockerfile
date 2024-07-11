# Use an official Golang runtime as a base image
FROM golang:1.17 AS builder

# Set the working directory inside the container
WORKDIR /app

# Copy the entire source code into the container
COPY . .

# Build the Go application
RUN CGO_ENABLED=0 GOOS=linux go build -o my-go-app

# Use a minimal base image for the final stage
FROM alpine:latest

# Set the working directory to /app
WORKDIR /app

# Copy the binary from the builder stage
COPY --from=builder /app/my-go-app .

# Expose port 8080 to the outside world
EXPOSE 8080

# Command to run the executable.
CMD ["./my-go-app"]
