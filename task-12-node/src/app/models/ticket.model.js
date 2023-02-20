module.exports = (sequelize, Sequelize) => {
    const Ticket = sequelize.define("ticket", {
      title: {
        type: Sequelize.STRING,
        allowNull: false
      },
      description: {
        type: Sequelize.TEXT,
        allowNull: false
      },
      status: {
        type: Sequelize.ENUM("open", "in_progress", "closed"),
        defaultValue: "open"
      },
      projectId: {
        type: Sequelize.INTEGER,
        allowNull: false,
        references: {
          model: 'projects',
          key: 'id'
        }
      }
    });
  
    return Ticket;
  };
  