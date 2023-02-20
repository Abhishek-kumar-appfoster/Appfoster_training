'use strict';

const { time } = require('console');

/** @type {import('sequelize-cli').Migration} */
module.exports = {
  async up (queryInterface, Sequelize) {
    return queryInterface.bulkInsert('Tickets', [
      {
        "title": "Implement user authentication",
        "description": "Implement user authentication with PassportJS",
        "status": "open",
        "projectId": 14,
        "createdAt": new Date(),
        "updatedAt": new Date()
      },
      {
        "title": "Create dashboard UI",
        "description": "Design and develop a dashboard UI for the application",
        "status": "in progress",
        "projectId": 15,
        "createdAt": new Date(),
        "updatedAt": new Date()
      },
      {
        "title": "Add search functionality",
        "description": "Add search functionality to the application using Elasticsearch",
        "status": "open",
        "projectId": 16,
        "createdAt": new Date(),
        "updatedAt": new Date()
      },
      {
        "title": "Integrate Stripe payments",
        "description": "Integrate Stripe payments into the application for online payments",
        "status": "in progress",
        "projectId": 17,
        "createdAt": new Date(),
        "updatedAt": new Date()
      },
      {
        "title": "Implement user permissions",
        "description": "Implement user permissions to restrict access to certain features",
        "status": "closed",
        "projectId": 18,
        "createdAt": new Date(),
        "updatedAt": new Date()
      },
      {
        "id": 6,
        "title": "Add unit tests",
        "description": "Add unit tests for critical components of the application",
        "status": "open",
        "projectId": 19,
        "createdAt": new Date(),
        "updatedAt": new Date()
      },
      {
        "title": "Deploy to production",
        "description": "Deploy the application to production server",
        "status": "in progress",
        "projectId": 20,
        "createdAt": new Date(),
        "updatedAt": new Date()
      },
      {
        "title": "Set up load balancing",
        "description": "Set up load balancing for the application to handle high traffic",
        "status": "open",
        "projectId": 21,
        "createdAt": new Date(),
        "updatedAt": new Date()
      },
      {
        "title": "Create documentation",
        "description": "Create user and developer documentation for the application",
        "status": "closed",
        "projectId": 22,
        "createdAt": new Date(),
        "updatedAt": new Date()
      },
      {
        "title": "Optimize database queries",
        "description": "Optimize database queries for improved performance",
        "status": "in progress",
        "projectId": 23,
        "createdAt": new Date(),
        "updatedAt": new Date()
      }
    ]);
  },

  async down (queryInterface, Sequelize) {
    /**
     * Add commands to revert seed here.
     *
     * Example:
     * await queryInterface.bulkDelete('People', null, {});
     */
  }
};
