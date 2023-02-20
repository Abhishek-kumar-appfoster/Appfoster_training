'use strict';

/** @type {import('sequelize-cli').Migration} */
module.exports = {
  async up (queryInterface, Sequelize) {
   return queryInterface.bulkInsert('Projects',[
    {
      "name": "Express",
      "description": "This is an Express project assigned to user with id #9",
      "userid": 9,
      "createdAt": new Date(),
      "updatedAt": new Date()
    },
    {
      "name": "React",
      "description": "This is a React project assigned to user with id #10",
      "userid": 10,
      "createdAt": new Date(),
      "updatedAt": new Date()
    },
    {
      "name": "Vue.js",
      "description": "This is a Vue.js project assigned to user with id #12",
      "userid": 12,
      "createdAt": new Date(),
      "updatedAt": new Date()
    },
    {
      "name": "Angular",
      "description": "This is an Angular project assigned to user with id #12",
      "userid": 12,
      "createdAt": new Date(),
      "updatedAt": new Date()
    },
    {
      "name": "MongoDB",
      "description": "This is a MongoDB project assigned to user with id #13",
      "userid": 13,
      "createdAt": new Date(),
      "updatedAt": new Date()
    },
    {
      "name": "Docker",
      "description": "This is a Docker project assigned to user with id #16",
      "userid": 16,
      "createdAt": new Date(),
      "updatedAt": new Date()
    },
    {
      "name": "AWS",
      "description": "This is an AWS project assigned to user with id #16",
      "userid": 16,
      "createdAt": new Date(),
      "updatedAt": new Date()
    },
    {
      "name": "Gatsby",
      "description": "This is a Gatsby project assigned to user with id #16",
      "userid": 16,
      "createdAt": new Date(),
      "updatedAt": new Date()
    },
    {
      "name": "GraphQL",
      "description": "This is a GraphQL project assigned to user with id #18",
      "userid": 18,
      "createdAt": new Date(),
      "updatedAt": new Date()
    },
    {
      "name": "PostgreSQL",
      "description": "This is a PostgreSQL project assigned to user with id #18",
      "userid": 18,
      "createdAt": new Date(),
      "updatedAt": new Date()
    }
  ]
  )
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
