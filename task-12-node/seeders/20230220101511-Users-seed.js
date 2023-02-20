'use strict';

/** @type {import('sequelize-cli').Migration} */
module.exports = {
  async up (queryInterface, Sequelize) {
   return queryInterface.bulkInsert('Users',[
     {
      "name": "Shubham Mishra",
      "age": 24,
      "address": "Banaras",
      "mobile_Number": "99287474884",
      createdAt: new Date(),
      updatedAt: new Date()
     },
     {
      "name": "Shahruk Khan",
      "age": 58,
      "address": "Mumbai",
      "mobile_Number": "99287474884",
      createdAt: new Date(),
      updatedAt: new Date()
     },
     {
      "name": "Anurag Kashyap",
      "age": 45,
      "address": "Mumbai",
      "mobile_Number": "99287474884",
      createdAt: new Date(),
      updatedAt: new Date()
     },
     {
      "name": "Shivani Sharma",
      "age": 23,
      "address": "Delhi",
      "mobile_Number": "99287474884",
      createdAt: new Date(),
      updatedAt: new Date()
     },
     {
      "name": "Shubham Sharma",
      "age": 24,
      "address": "Moradbad",
      "mobile_Number": "99287474884",
      createdAt: new Date(),
      updatedAt: new Date()
     },
     {
      "name": "Sumit Sharma",
      "age": 30,
      "address": "Noida",
      "mobile_Number": "9928478484",
      createdAt: new Date(),
      updatedAt: new Date()
     }
   ])
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
