# Todo API with Laravel

<!-- step -->
### Create a Laravel app and connect it to a **MySQL** database using the .env file. 

<!-- step -->
#### Create the Todo Model and Migration containing the id, name, status and timestamps.

<!-- step -->
#### You should have the following routes:
* [GET] /api/todos
* [POST] /api/todos
* [GET] /api/todos/{id}
* [PUT] /api/todos/{id}
* [DELETE] /api/todos/{id}

<!-- step -->
#### When a **[GET]** request is sent, handle the request and return all the Todos.
* Route [GET] /api/todos

<!-- step -->
#### When a Todo is **created**, it will make a request to the server.  Handle the request by creating a Todo and setting the proper status code.
* Route [POST] /api/todos

<!-- step -->
#### When a **[GET]** request is sent with an id, handle the request and return the correct Todo.
* Route [GET] /api/todos/{id}

<!-- step -->
#### When a previously saved Todo is **updated**, it will make a request to the server. Handle the request by updating the existing Todo.
* Route [PUT] /api/todos/{id}


<!-- step -->
#### When a previously saved Todo is **deleted**, it will make a request to the server.  Handle the deletion and return the proper status code.
* Route [DELETE] /api/todos/{id}


Happy coding! 🙌