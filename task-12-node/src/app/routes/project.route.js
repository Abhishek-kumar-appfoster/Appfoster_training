module.exports = app => {
    const projects = require("../controllers/project.controller.js");
  
    var router = require("express").Router();
  
    // Create a new User
    router.post("/", projects.create);
  
    // Retrieve all Users
    router.get("/", projects.findAll);
  
    // Retrieve a single User with id
    router.get("/:id", projects.findOne);
  
    // Update a User with id
    router.put("/:id", projects.update);
  
    // Delete a User with id
    router.delete("/:id", projects.delete);
  
    // Delete all Users
    router.delete("/", projects.deleteAll);
  
    app.use('/api/projects', router);

      // Get all projects for a user
    app.get("/api/users/:userId/projects", projects.findAllByUser);
  };