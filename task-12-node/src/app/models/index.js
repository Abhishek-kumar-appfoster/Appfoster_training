const dbConfig = require("../config/db.config.js");
const Sequelize = require("sequelize");

const sequelize = new Sequelize(
  dbConfig.DB,
  dbConfig.USER,
  dbConfig.PASSWORD,
  {
    host: dbConfig.HOST,
    dialect: dbConfig.dialect,
    operatorsAliases: false,
    pool: {
      max: dbConfig.pool.max,
      min: dbConfig.pool.min,
      acquire: dbConfig.pool.acquire,
      idle: dbConfig.pool.idle,
    },
  }
);

const db = {};

db.Sequelize = Sequelize;
db.sequelize = sequelize;

db.tutorials = require("./tutorial.model.js")(sequelize, Sequelize);
db.users = require("./user.model.js")(sequelize, Sequelize); 
db.projects=require("./project.model.js")(sequelize,Sequelize);
db.tickets=require("./ticket.model.js")(sequelize,Sequelize);

//creating realtion

db.users.hasMany(db.projects, { foreignKey: 'userid', as: 'projects' });
db.projects.belongsTo(db.users, { foreignKey: 'userid', as: 'user' });

// create a one-to-many relationship between projects and tickets
db.projects.hasMany(db.tickets, { foreignKey: 'projectId', as: 'tickets' });
db.tickets.belongsTo(db.projects, { foreignKey: 'projectId', as: 'project' });




module.exports = db;