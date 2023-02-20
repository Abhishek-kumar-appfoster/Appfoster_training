

module.exports = (sequelize, Sequelize) => {
    const Project = sequelize.define("project", {
      name: {
        type: Sequelize.STRING
      },
      userid:{
        type:Sequelize.INTEGER
      },
      description:{
        type:Sequelize.STRING
      }
      
    });
    
    return Project;
  };