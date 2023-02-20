const db = require("../models");
const Ticket = db.tickets;

// Create and Save a new Ticket
exports.create = (req, res) => {
    // Validate request
    if (!req.body.title || !req.body.description) {
        res.status(400).send({
            message: "Title and description cannot be empty!"
        });
        return;
    }

    // Create a Ticket
    const ticket = {
        title: req.body.title,
        description: req.body.description,
        status: req.body.status ? req.body.status : "open",
        projectId: req.body.projectId
    };

    // Save Ticket in the database
    Ticket.create(ticket)
        .then(data => {
            res.send(data);
        })
        .catch(err => {
            res.status(500).send({
                message:
                    err.message || "Some error occurred while creating the Ticket."
            });
        });
};

// Retrieve all Tickets from the database.
exports.findAll = (req, res) => {
    Ticket.findAll()
        .then(data => {
            res.send(data);
        })
        .catch(err => {
            res.status(500).send({
                message:
                    err.message || "Some error occurred while retrieving tickets."
            });
        });
};

// Find a single Ticket with an id
exports.findOne = (req, res) => {
    const id = req.params.id;

    Ticket.findByPk(id)
        .then(data => {
            if (!data) {
                res.status(404).send({
                    message: `Ticket with id=${id} was not found.`
                });
            } else {
                res.send(data);
            }
        })
        .catch(err => {
            res.status(500).send({
                message: `Error retrieving Ticket with id=${id}.`
            });
        });
};

// Update a Ticket by the id in the request
exports.update = (req, res) => {
    const id = req.params.id;

    Ticket.update(req.body, {
        where: { id: id }
    })
        .then(num => {
            if (num == 1) {
                res.send({
                    message: "Ticket was updated successfully."
                });
            } else {
                res.send({
                    message: `Cannot update Ticket with id=${id}. Maybe Ticket was not found or req.body is empty!`
                });
            }
        })
        .catch(err => {
            res.status(500).send({
                message: `Error updating Ticket with id=${id}`
            });
        });
};

// Delete a Ticket with the specified id in the request
exports.delete = (req, res) => {
    const id = req.params.id;

    Ticket.destroy({
        where: { id: id }
    })
        .then(num => {
            if (num == 1) {
                res.send({
                    message: "Ticket was deleted successfully!"
                });
            } else {
                res.send({
                    message: `Cannot delete Ticket with id=${id}. Maybe Ticket was not found!`
                });
            }
        })
        .catch(err => {
            res.status(500).send({
                message: `Could not delete Ticket with id=${id}.`
            });
        });
};

// Delete all Tickets from the database.
exports.deleteAll = (req, res) => {
    Ticket.destroy({
        where: {},
        truncate: false
    })
        .then(nums => {
            res.send({ message: `${nums} Tickets were deleted successfully!` });
        })
        .catch(err => {
            res.status(500).send({
                message:
                    err.message || "Some error occurred while removing all tickets."
            });
        });
};

exports.findAllByProject = (req, res) => {
    const projectId = req.params.projectId;

    Ticket.findAll({ where: { projectId: projectId } })
        .then(data => {
            res.send(data);
        })
        .catch(err => {
            res.status(500).send({
                message:
                    err.message || "Error occurred while retrieving tickets for project."
            });
        });
};
