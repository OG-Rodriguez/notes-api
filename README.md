# Personal Notes API Application

This is a simple RESTful API application built with Laravel 8 to manage personal notes. The application allows users to perform CRUD (Create, Read, Update, Delete) operations on notes. Each note has the following attributes:

- **Title**
- **Author**
- **Date and Time**
- **Body**
- **Classification** (e.g., personal, work, school)

The API is designed to allow users to store, consult, and edit their notes easily.

## Features

- **CRUD Operations**: Create, read, update, and delete notes.
- **API-Only**: The application resolves all requests through a REST API.
- **Editable Notes**: Notes can be edited by anyone.
- **Classification**: Notes are classified (e.g., personal, work, school).
- **Date and Time**: Each note includes the creation date and time.

## ER Diagram

![ER Diagram](path/to/your/er-diagram.png)

This diagram describes the relationships between the entities in the application.

## Prerequisites

Before you start, ensure that you have the following installed:

- PHP 8.2 or higher
- Composer
- XAMPP or any other local development server
- MySQL or any other relational database management system

## Installation

1. **Clone the repository**:
   ```bash
   git clone https://github.com/yourusername/notes-api.git
   cd notes-api

## API Endpoints

Here are the available API endpoints:

- **Create a Note**
  - `POST /api/notes`
  - **Request body**:
    ```json
    {
    "title": "Note Title",
    "author": "Author Name",
    "note_date": "2024-11-23",
    "body": "Note content",
    "classification": "personal"
    }
    ```

- **Get All Notes**
  - `GET /api/notes`

- **Get a Single Note**
  - `GET /api/notes/{id}`

- **Update a Note**
  - `PUT /api/notes/{id}`
  - **Request body**:
    ```json
    {
    "title": "Updated Title",
    "author": "Updated Author",
    "note_date": "2024-11-23",
    "body": "Updated note content",
    "classification": "work"
    }
    ```

- **Delete a Note**
  - `DELETE /api/notes/{id}`
