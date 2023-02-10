
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
            <td><button class="btn btn-primary" data-toggle="modal" data-target="#userModal" onclick="displayDetails('${values.id}')">View More</button></td>
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

function displayDetails(id) {
    fetch("https://gorest.co.in/public/v2/users/" + id)
        .then((data) => {
            return data.json();
            console.log(data);
        })
        .then((objectData) => {
            console.log(objectData);
            document.getElementById("name").innerHTML = objectData.name;

            document.getElementById("email").innerHTML = objectData.email;
            document.getElementById("gender").innerHTML = objectData.gender;

        })
        .catch((err) => {
            // console.log(data);
            console.log(err);
            console.log("error occured!");
        })
        .finally(console.log("done fine"));
}










