


async function showUsers() {
    fetch("https://gorest.co.in/public/v2/users")
      .then((data) => {
        return data.json();
      })
      .then((objectData) => {
        let tableData = "";
        objectData.map((values) => {
          tableData += `<tr>
            <td>${values.name}</td>
            <td><button class="btn btn-primary" data-toggle="modal" data-target="#userModal" onclick="displayDetails('${values.name}', '${values.email}')">View More</button></td>
          </tr>`;
        });
        document.getElementById("tableBody").innerHTML = tableData;
      })
      .catch((err) => {
        console.log("error occured!");
      })
      .finally(console.log("done fine"));
  }
  showUsers();
  
  function displayDetails(name, email) {
    document.getElementById("modalName").innerHTML = name;
    document.getElementById("modalEmail").innerHTML = email;
  }
  
  
  
  
  
  
