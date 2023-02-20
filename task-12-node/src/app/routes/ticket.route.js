module.exports = app => {
    const tickets = require("../controllers/ticket.controller.js");
  
    var router = require("express").Router();
  
    // Create a new Ticket
    router.post("/", tickets.create);
  
    // Retrieve all Tickets
    router.get("/", tickets.findAll);
  
    // Retrieve a single Ticket with id
    router.get("/:id", tickets.findOne);
  
    // Update a Ticket with id
    router.put("/:id", tickets.update);
  
    // Delete a Ticket with id
    router.delete("/:id", tickets.delete);
  
    // Delete all Tickets
    router.delete("/", tickets.deleteAll);
  
    app.use('/api/tickets', router);
  
    // Get all tickets for a project
    app.get("/api/projects/:projectId/tickets", tickets.findAllByProject);
  };
  